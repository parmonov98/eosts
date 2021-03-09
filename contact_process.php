<?php
if(isset($_REQUEST['contactForm']))
{
    $to = "mannatstudio.themes@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $Transport_Package = $_REQUEST['Transport_Package'];
	$Freight_Package = $_REQUEST['Freight_Package'];
    $cment = $_REQUEST['cment'];

    $headers = "From:  $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mailsubject = "You have a message by Logzee.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a new email from Logzee. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Transport Package:</strong> {$Transport_Package}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Freight Package:</strong> {$Freight_Package}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Comments:</strong> {$cment}</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $mailsubject, $body, $headers);
	header('Location:contact-us.html');
	die();
}

else if(isset($_REQUEST['contactoption']))
{
    $to = "mannatstudio.themes@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $Transport_Package = $_REQUEST['Transport_Package'];
	$Freight_Package = $_REQUEST['Freight_Package'];
    $cment = $_REQUEST['cment'];
	
    $headers = "From:  $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $mailsubject = "You have a message from Logzee.";

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody>";
	
	$body .= "<tr><td style='border:none;'><strong>Dear Admin,</strong></td></tr>";
	$body .= "<tr><td style='border:none;'>You have got a new email from Logzee. Please find the details below:</td></tr>";
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Transport Package:</strong> {$Transport_Package}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Freight Package:</strong> {$Freight_Package}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Comments:</strong> {$cment}</td></tr>";
	
	$body .= "<tr><td style='border:none;'>&nbsp;</td></tr>";
	$body .= "<tr><td style='border:none;'>Thank you</td></tr>";
	
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $mailsubject, $body, $headers);
	header('Location:contact-us-option.html');
	die();
}
?>