<?php

/**
 * Class ContactController
 *
 */
class ContactController {

	function overview(){

		// Haal alle Opleidingen op uit de "model" laag.
		$contact = getContact();

		if (isset($_POST['subject'])) {
			$name = $_POST['name'];
			$subject = $_POST['subject'];
			$email = $_POST['mail'];
			$message = $_POST['message'];
		
			$mailTo = "berghuismatthijs@gmail.com";
			$headers = "Door: ".$mailFrom;
			$txt = "Je hebt een mailtje ontvangen van ".$name.".\n\n".$message;
		
			if (!mail($mailTo, $subject, $text, $headers)) {
				exit;
			}

			header("Location: /code/public/contact?send");
		}


		$template_engine = get_template_engine();

		echo $template_engine->render('contact', [
			'contact' => $contact
		]);

	}

}