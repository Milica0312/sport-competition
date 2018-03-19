<?php

require_once 'include/db.php';
require_once 'include/functions.php';

/*$captcha = $_POST['g-recaptcha-response'];*/
// Provera ispravnosti CAPTCHA koda
 /*if(isset($_POST['captcha']) && !empty($_POST['captcha'])){
	$secret = "6LdAJ00UAAAAAERgVF8zZIcNmAv1eRnk2l0Yr4I4";
	//$response = $_POST['g-recaptcha-response'];
	$captcha=$_POST['captcha'];
	/*$captcha=$_POST['g-recaptcha'];*/
/*	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $captcha);
	$responseData = json_decode($verifyResponse);
*/
	/*if ($responseData->success) {*/


		$allowed_params = allowed_post_params(['ime','prezime','zan','email','telefon', 'sek', 'eng', 'cv','submit']);
		// niz sadrzi dozvoljene maksimalne duzine za sva polja
		$fields_lengths = ['ime' => 64, 'prezime' => 64,'zan' => 64, 'email' => 64,'telefon' => 64,'sek' => 64,'eng' => 64, 'cv'=>256];
		$ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $zan = $_POST['zan'];
		$email = $_POST['email'];
		$telefon = $_POST['telefon'];

    $sek = $_POST['sek'];
    $eng = $_POST['eng'];
    $cv = $_POST['cv'];

		// provera da li su polja odgovoarajuce duzine
		foreach ($fields_lengths as $field => $length) {
		if (!has_length($_POST[$field], ['min' => 0, 'max' => $length])) {
		    echo 'to je';
			die();
		}
		}

		try {

		// Priprema upita za unos podataka u bazu
		$prep = $db->prepare("INSERT INTO volunteers (ime,prezime,zanimanje,email,telefon,eng,sektor,cv) VALUES(:ime,:prezime,:zan,:email,:telefon,:eng,:sek,:cv)");
		$prep->bindParam(':ime', $ime);
    $prep->bindParam(':prezime', $prezime);
    $prep->bindParam(':zan', $zan);
		$prep->bindParam(':email', $email);
    $prep->bindParam(':telefon', $telefon);
		$prep->bindParam(':sek', $sek);
    $prep->bindParam(':eng', $eng);
    $prep->bindParam(':cv', $cv);


		$ime = isset($allowed_params['ime']) ? $allowed_params['ime'] : "";
    $prezime = isset($allowed_params['prezime']) ? $allowed_params['prezime'] : "";
    $zan = isset($allowed_params['zan']) ? $allowed_params['zan'] : "";
		$email = isset($allowed_params['email']) ? $allowed_params['email'] : "";
		$telefon = isset($allowed_params['telefon']) ? $allowed_params['telefon'] : "";
    $sek = isset($allowed_params['sek']) ? $allowed_params['sek'] : "";
		$eng = isset($allowed_params['eng']) ? $allowed_params['eng'] : "";
		$cv = isset($allowed_params['cv']) ? $allowed_params['cv'] : "";
		// izvrsavanja upita
		$rez = $prep->execute();
		//header('Location: index.php');
		/*$htmltable = "Hvala na ucescu TEST.";
		echo 'test';*/


		} catch (PDOException $e) {
		echo 'greska kod upita';
  echo $rez; die();
		}
		// Ukoliko je upis u bazu uspesan, salje se mejl korisnuku i klijentu o uspesnoj prijavi
		if ($rez) {

			$emailod = "$email";
			$email_to = 'milicapavlovic0312@gmail.com'; // treba da bude  'milicapavlovic0312@gmail.com';
			$subject = "Forma za volontere";
			$headers = "From: $emailod\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$email_message = "Pitanje " . "<br><br>";
/*			$email_message .= "Ime: $ime " . "<br>";
			$email_message .= "Pitanje: $pitanje " . "<br>";
*/


			if (mail($email_to, $subject, $email_message, $headers)) {
				//header('Location: index.php');
        $htmltable = "Hvala na prijavi. Bićete kontaktirani u roku od 24h.";
                echo $htmltable;
			} else {
				echo 'greska kod slanja mail f';
			die();
			}
		} else {
			echo 'greska kod emaila-dva';
			die();
		}


/*
}else{
	echo 'Molimo Vas popunite captcha kod.';
    die();
}*/


?>
