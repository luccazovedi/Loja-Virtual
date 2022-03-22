<?php
    class Database {

        public static $host = "localhost";
        public static $dbname = "stormstore";
        public static $user = "root";
        public static $password = "";

        public static function connect(){  
            $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$password);
            return $conn;
        }

        public static function query($sql, $params = array()) {
            $request = self::connect()->prepare($sql);
            $success = false;
            if ($request->execute($params)) $success = true;

            $requestMethod = strtolower(explode(" ", $sql)[0]);
            if ($requestMethod == "select") {
                $result = $request->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
            return [$success];
        }

    }

    class PHPFunctions {
        public static $emailCookieName = "User";

        public static function GetCartSize() {
            if (!isset($_COOKIE[self::$emailCookieName])) return 0;
            $email = $_COOKIE[self::$emailCookieName];
            $userID = Database::query("SELECT id FROM user WHERE email = ?", [$email]);
            $userID = $userID[0]["id"];
            $result = Database::query("SELECT * FROM cart WHERE user_id = ?", [$userID]);
            return sizeof($result);
        }

    }
    $cartSize = 0;
	if (isset($_COOKIE["User"])) {
		$email = $_COOKIE["User"];
        $name = Database::query("SELECT name FROM user WHERE email = ?", [$email]);
        if (empty($name)) return;
		$username = $name[0]['name'];
		$userID = Database::query("SELECT id FROM user WHERE email = ?", [$email]);
		$cartResult = Database::query("SELECT * FROM cart WHERE user_id = ?", [$userID[0]["id"]]);
        $cartSize = PHPFunctions::GetCartSize();
    }else{
        header('index.php');
    }

?>
