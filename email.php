<?php


error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);


set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
require_once "Mail.php";


$host = "smtp.gmail.com";
$username = "admin@hvplocks.com.au";
$password = "toptiger12";

$port = "587";
$to = "admin@hvplocks.com.au";
$email_from = $_POST['from_email'];
$email_subject = $_POST['subject'];
$email_body = $_POST['body'];
$email_address = $_POST['from_email'];


$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, $email_body);


if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
header("Location:sent.php");
}
?>

