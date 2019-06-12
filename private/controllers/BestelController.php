<?php

/**
 * Class BestelController
 *
 */
class BestelController {

	function overview(){

		// Haal alle Opleidingen op uit de "model" laag.
		$bestel = getBestel();


		$template_engine = get_template_engine();

		echo $template_engine->render('bestel', [
			'bestel' => $bestel
		]);

	}

}