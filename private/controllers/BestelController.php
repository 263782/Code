<?php

/**
 * Class BestelController
 *
 */
class BestelController {

	function overview(){ 

	
		// Haal alle Opleidingen op uit de "model" laag.
		$bestel = getBestel();

		if (isset($_POST['subject'])) {
		
			$first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
			$last_name = $_POST['last_name'];
			$email = $_POST['mail'];
			$telefoon = $_POST['telefoon'];
			$adres = $_POST['adres'];
			$leeftijd = $_POST['leeftijd'];
			$message = $_POST['message'];
			$dropdown = $_POST['dropdown'];

			$mailTo = "berghuismatthijs@gmail.com";
			$headers = "Door: ".$mailFrom;
			$txt = "Je hebt een mailtje ontvangen van ".$name.".\n\n".$message;
			
		
			if (!mail($mailTo, $subject, $text, $headers)) {
				exit;
			}

			header("Location: /Github/code/public/bestel?send");
		}

		$template_engine = get_template_engine();

		echo $template_engine->render('bestel', [
			'bestel' => $bestel
		]);

	}

}