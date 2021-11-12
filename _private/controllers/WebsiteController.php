<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	public function home() {

		$template_engine = get_template_engine();
		echo $template_engine->render('homepage');

	}
	public function overons() {

		$template_engine = get_template_engine();
		echo $template_engine->render('overons');

	}
	public function login() {

		$template_engine = get_template_engine();
		echo $template_engine->render('login');

	}
	public function registreren() {

		$template_engine = get_template_engine();
		echo $template_engine->render('registreren');

	}
	public function registerprocess() {
		
		$errors = [];

		$email 			= filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL );
		$wachtwoord 	= trim( $_POST['wachtwoord'] );
		$voornaam		= $_POST['voornaam'];
		$achternaam		= $_POST['achternaam'];
		$gebruikersnaam = $_POST['username'];

		if ( $email === false ) {
			$errors['email'] = 'Geen geldig E-Mail ingevuld.';
		}

		if ( strlen( $wachtwoord ) < 6 ) {
			$errors['wachtwoord'] = 'Geen geldig Wachtwoord. (Minimaal 6 tekens.)';
		}
		if ( count( $errors ) === 0 ) {
			$connection = dbConnect();
			$sql		= "SELECT * FROM `users` WHERE `email` = :email";
			$statement	= $connection->prepare( $sql );
			$statement->execute( [ 'email' => $email ] );

			if ( $statement->rowCount() === 0 ) {
				$sql 		   = "INSERT INTO `users` (`email`, `voornaam`, `achternaam`, `username`, `wachtwoord`) VALUES (:email, :voornaam, :achternaam, :username, :wachtwoord)";
				$statement 	   = $connection->prepare ( $sql );
				$safe_password = password_hash( $wachtwoord, PASSWORD_DEFAULT );
				$params		   = [
					'email'			 => $email,
					'wachtwoord'	 => $safe_password,
					'voornaam'		 => $voornaam,
					'achternaam'	 => $achternaam,
					'username'       => $gebruikersnaam
				];
				$statement->execute( $params );
				echo "Klaar!";
				exit;
			} else {
				$errors['email'] = 'Dit E-Mail Adress is reeds in gebruik.';
			}
		}

		$template_engine = get_template_engine();
		echo $template_engine->render( 'registreren', ['errors' => $errors]);

	}

}

