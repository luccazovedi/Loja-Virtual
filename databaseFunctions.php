<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    require("database.php");
    require("mail/mail.php");
    
    class Functions extends Database {
        
        public static $emailCookieName = "User";

        public static function CheckRegister($params) {
            $sql = "SELECT * FROM user WHERE email = ?";
            $result = self::query($sql, [$params[0]]);
            if (sizeof($result) == 0) self::CreateAccount($params);
            else die(json_encode(array(false)));
        }
        
        public static function CreateAccount($params) {
            $sql = "INSERT INTO user (email, name, password) VALUES (?, ?, ?)";
            $result = self::query($sql, $params);
            new mail($params[0], "StormStore", "Olá, " . $params[1] . ". Sua conta foi criada com sucesso, obrigado por se cadastrar na StormStore!");
            if ($result) setcookie(self::$emailCookieName, $params[0], time() + 3600);
            die(json_encode($result));
        }
        
        public static function CheckLogin($params) {
            $email = $params[0];
            $password = $params[1];
            $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
            $result = self::query($sql, [$email, $password]);

            $timeToExpire = null;//null pq se não marcou ele vai continuar null e o cookie será excluido somente no final da sessão do navegador
            if ($params[2]) {//marcou lembrar senha ;)
                $timeToExpire += time() + 3600 * 24 * 30 * 5;//5 meses para expirar em segundos
            }//else => se não marcou vai expirar no mesmo momento
            if (sizeof($result) == 1) {
                setcookie(self::$emailCookieName, $params[0], $timeToExpire);
                die(json_encode(array(true)));
            }
            else die(json_encode(array(false)));
        }
        
        public static function Cart($params) {
            if (!isset($_COOKIE[self::$emailCookieName])) {
                return die(json_encode(false));
            }
            $email = $_COOKIE[self::$emailCookieName];
            $userID = self::query("SELECT id FROM user WHERE email = ?", [$email]);
            $userID =  $userID[0]["id"];
            $queryParams = [$userID, $params[0]];
            
            $hasInCart = self::query("SELECT cart_id FROM cart WHERE user_id = ? AND product_id = ?", $queryParams);
            if (sizeof($hasInCart) == 1) {
                $result = self::CartDelete([$hasInCart[0]["cart_id"]]);
            } else $result = self::CartInsert($queryParams);
            die(json_encode($result));
        }

        public static function CartInsert($params) {
            $result = self::query("INSERT INTO cart (user_id, product_id) VALUES (?, ?)", $params);
            return $result;
        }

        public static function CartDelete($params) {
            $result = self::query("DELETE FROM cart WHERE cart_id = ?", $params);
            return $result;
        }

        public static function SendPassword($params) {
            $result = self::query("SELECT password FROM user WHERE email = ?", [$params[0]]);
            if (sizeof($result) == 1) {
                $password = $result[0]["password"];
                new mail($params[0], "StormStore", "Olá, sua senha é a seguinte: " . $password);
            }
            die(json_encode(array("000000000JKklls42" => sizeof($result))));
        }

    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $JSON = file_get_contents("php://input");
        $data = json_decode($JSON, true);
        $function = $data["functionName"];
        $params = $data["params"];
        Functions::$function($params);
    } else die("Não foi encontrado nada aqui");
    ?>