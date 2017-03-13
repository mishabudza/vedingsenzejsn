<?php
	$YourEmailAddress = "vedingsenzejsn@gmail.com";
	// Mail settings
	$to = $YourEmailAddress; //trim($_POST['to']);	
	$subject = "Poruka sa sajta";
	$email = trim($_POST['email']);
	$from=$email;
	
	// You can put here your email
	$header = "From: www.vedingsenzejsn.com\r\n";
	$header.= "MIME-Version: 1.0\r\n";
	$header.= "Content-Type: text/plain; charset=utf-8\r\n";
	$header.= "X-Priority: 1\r\n";
	
	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

		$content  = "Ime: "     . $_POST["name"]    . "\r\n";
		$content .= "Email: "    . $_POST["email"]   . "\r\n";
		$content .= "Poruka: "  . "\r\n" . "\r\n" . $_POST["message"];

		if (mail($to, $subject, $content, $header)) {

			$result = array(
				"message"    => "Zahvaljujemo se na poruci",
				"sendstatus" => 1
			);

			echo json_encode($result);

		} else {

			$result = array(
				"message"    => "Žao nam je, nešto nije u redu",
				"sendstatus" => 0
			);

			echo json_encode($result);

		}

	}

?>