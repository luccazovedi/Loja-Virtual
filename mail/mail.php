<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    $senderEmail = "email";
    $senderPassword = "senha";

    class mail {

        private $mail;
        private $to;
        private $subject;
        private $body;

        function __construct($to, $subject, $body) {
            $this->to = $to;
            $this->subject = $subject;
            $this->body = $body;
            self::SetUpMailer();
        }
        
        private function SetUpMailer() {
            global $senderEmail, $senderPassword;

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->Username = $senderEmail;
            $mail->Password = $senderPassword;
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";
            $mail->Mailer = "smtp";
            $mail->SMTPAuth = true;
            self::SendEmail($mail);
        }
        
        public function SendEmail($mail) {
            global $senderEmail;
            $mail->isHTML(true);
            $mail->setFrom($senderEmail);
            $mail->addAddress($this->to);
            $mail->Subject = $this->subject;
            $mail->Body = $this->body;
            $mail->send();
        }

    }
?>