<?php

	$mail  = isset($_POST['mail'])  ?  $_POST['mail'] : null ;


	//echo $prenom. " : " .$nom. " : " .$tel. " : " .$mail. " : " .$texte;

	if($mail != null) {

		$header = "From: ".$mail." \n";

		$content =  "Mail : "     . "\n" . $mail     . "\n" . "\n";

		mail("hello@skeelz.com", 'NEWZLETTER', $content, $header);

	}

	header('Location: /newz#section-newsletters');

?>