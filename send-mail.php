<?php

if (isset($_POST['email'])) {

	// EDIT THE 2 LINES BELOW AS REQUIRED

	$email_to = "marko.ilic@milmil.co.rs";
	$email_subject = "Milmil sajt kontakt forma";
	function died($error) {

		// your error code can go here

		echo "Izvinjavamo se, došlo je do grešaka prilikom slanja emaila. ";
		echo "Greške možete videti ispod.<br /><br />";
		echo $error . "<br /><br />";
        echo "Molimo Vas da se vratite na formu i ispravite greške.<br /><br />";
        echo "<button onclick='history.go(-1);'>Nazad na formu</button>";
		die();
    }

	// validation expected data exists

	if (!isset($_POST['first_last_name']) || !isset($_POST['email']) || !isset($_POST['company']) || !isset($_POST['phone']) || !isset($_POST['message'])) {
		died('Izvinjavamo se, došlo je do problema prilikom slanja emaila.');
    }

	$name = $_POST['first_last_name']; // required
	$email_from = $_POST['email']; // required
	$company = $_POST['company']; // required
	$phone = $_POST['phone']; // required
	$message = $_POST['message']; // required
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if (!preg_match($email_exp, $email_from)) {
		$error_message.= 'Email adresa koju ste uneli nije validna email adresa.<br />';
    }

	$string_exp = "/^[A-Za-z .'-]+$/";
	if (!preg_match($string_exp, $name)){
		$error_message.= 'Ime koje ste uneli nije validno ime.<br />';
    }

	if (strlen($message) < 2) {
		$error_message.= 'Molimo vas unestite poruku.<br />';
    }

	if (strlen($error_message) > 0) {
		died($error_message);
    }

	$email_message = "Detalji iz forme slede.\n\n";
	function clean_string($string) {
		$bad = array(
			"content-type",
			"bcc:",
			"to:",
			"cc:",
			"href"
		);
		return str_replace($bad, "", $string);
    }

	$email_message.= "Ime i prezime: " . clean_string($name) . "\n";
	$email_message.= "Email: " . clean_string($email_from) . "\n";
	$email_message.= "Kompanija: " . clean_string($company) . "\n";
	$email_message.= "Telefon: " . clean_string($phone) . "\n";
	$email_message.= "Poruka: " . clean_string($message) . "\n";

	// create email headers

    $headers = 'From: ' . $email_from . "\r\n" . 'Reply-To: ' . $email_from . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        header("location: index.php");
    }
}
?>
