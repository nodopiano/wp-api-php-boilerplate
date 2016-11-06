<?php

namespace App\Core;

use PHPMailer; 

/**
 * Class Mail
 * @author yourname
 */
class Mail
{
    protected static $mail;

    public static function boot()
    {
        static::$mail = new PHPMailer;
        static::$mail->isSMTP();                                      // Set mailer to use SMTP
        static::$mail->Host = 'mailtrap.io';  // Specify main and backup SMTP servers
        static::$mail->SMTPAuth = true;                               // Enable SMTP authentication
        static::$mail->Username = '92618117ccf828';                 // SMTP username
        static::$mail->Password = '601e0e477d9e6b';                           // SMTP password
        static::$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        static::$mail->Port = 2525;
    }

    public static function send($rcpt, $message)
    {
        self::boot();
        static::$mail->setFrom('info@example.com', 'Mailer');
        static::$mail->addAddress($rcpt);  
        static::$mail->Subject = 'Here is the subject';
        static::$mail->Body    = $message;
        if(!static::$mail->send()) {
            return 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return 'Message has been sent';
        }
    }
}
