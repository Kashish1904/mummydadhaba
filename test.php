<?PHP
use PHPMailer\PHPMailer\Exception;
include_once('includes/class.phpmailer.php');
require_once('includes/class.smtp.php');
require 'includes/src/Exception.php';
require 'includes/src/PHPMailer.php';
require 'includes/src/SMTP.php';
//require 'includes/mailin.php';
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '97a5cf8128c885'; //paste one generated by Mailtrap
$mail->Password = '7023bc857b4d8a'; //paste one generated by Mailtrap
$mail->SMTPSecure = 'tsl';
$mail->Port = 587;
$mail->setFrom('abhishekjain7204@gmail.com', 'Mailtrap');
$mail->addReplyTo('info@mailtrap.com', 'Mailtrap');
$mail->addAddress('jainabhishek7204@gmail.com', 'Kashish Jain'); 
$mail->Subject = 'Test Email via Mailtrap SMTP using PHPMailer';
$mail->isHTML(true);
$mailContent = "<html><body><h1>Send HTML Email using SMTP in PHP</h1>
    <p>This is a test email I’m sending using SMTP mail server with PHPMailer.</p></body></html>";
$mail->Body = $mailContent;
if($mail->send()){
    echo 'Message has been sent';
}
else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

/*$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers, $sender))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}*/
/*$mailin = new Mailin('jainabhishek7204@gmail.com', 's9UWjx7BmwtXfZga');
                                    $mailin->
                                        addTo('jainabhishek7204@yahoo.com', 'Kashish Jain')->
                                        setFrom('abhishekjain7204@gmail.com', 'Kashish Jain')->
                                        setReplyTo('jainabhishek7204@gmail.com','Kashish Jain')->
                                        setSubject('Enter the subject here')->
                                        setText('Hello')->
                                        setHtml('<strong>Hello</strong>');
                                        if($res = $mailin->send()){
                                            echo "<h1>Sent</h1>";
                                        }*/

?>
