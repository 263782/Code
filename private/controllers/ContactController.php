<?php

/**
 * Class ContactController
 *
 */
class ContactController {

	function overview() {

		// Haal alle Opleidingen op uit de "model" laag.
		$contact = getContact();

		if (isset($_POST['subject'])) {
			$name = filter_var($_POST['name'] , FILTER_SANITIZE_STRING);
			$subject = filter_var($_POST['subject'] , FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

			$to = "berghuismatthijs@gmail.com";
			//$headers = "From: $email" . "\r\n" .
			"CC: berghuismatthijs@gmail.com";
			$txt = $email."\n\nJe hebt een mailtje ontvangen van ".$name.".\n\n".$message;
		
			if (mail($to, $subject, $txt)) {
				echo "email send";
				die();
			} else {
				echo "failed to send email";
				die();
			}

			header("Location: /Github/code/public/contact?send");
		}


		$template_engine = get_template_engine();

		echo $template_engine->render('contact', [
			'contact' => $contact
		]);

	}

}