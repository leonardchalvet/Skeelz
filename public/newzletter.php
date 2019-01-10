<?php

	/*
	$mail  = isset($_POST['mail'])  ?  $_POST['mail'] : null ;


	//echo $prenom. " : " .$nom. " : " .$tel. " : " .$mail. " : " .$texte;

	if($mail != null) {

		$header = "From: ".$mail." \n";

		$content =  "Mail : "     . "\n" . $mail     . "\n" . "\n";

		mail("hello@skeelz.com", 'NEWZLETTER', $content, $header);

	}

	header('Location: /newz#section-newsletters');
	*/

	$mail  = isset($_POST['mail'])  ?  $_POST['mail'] : null ;

	if($mail != null) {
		$list_id = 'eb4fae6174';
		$authToken = '2a3e1c83787d4e17a2b0456bdc153990-us19';
		// The data to send to the API
		$postData = array(
		    "email_address" => "$mail", 
		    "status" => "subscribed"
		);

		// Setup cURL
		$ch = curl_init('https://us19.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
		curl_setopt_array($ch, array(
		    CURLOPT_POST => TRUE,
		    CURLOPT_RETURNTRANSFER => TRUE,
		    CURLOPT_HTTPHEADER => array(
		        'Authorization: apikey '.$authToken,
		        'Content-Type: application/json'
		    ),
		    CURLOPT_POSTFIELDS => json_encode($postData)
		));
		// Send the request
		$response = curl_exec($ch);
	}
?>