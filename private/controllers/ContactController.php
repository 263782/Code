<?php

/**
 * Class ContactController
 *
 */
class ContactController {

	function overview(){

		// Haal alle Opleidingen op uit de "model" laag.
		$contact = getContact();


		$template_engine = get_template_engine();

		echo $template_engine->render('contact', [
			'contact' => $contact
		]);

	}

}