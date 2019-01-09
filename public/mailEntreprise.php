<?php

	$prenom  = isset($_POST['prenom'])   ?  $_POST['prenom']   : null ;
	$nom     = isset($_POST['nom'])      ?  $_POST['nom']      : null ;
	$tel     = isset($_POST['tel'])      ?  $_POST['tel']      : null ;
	$mail    = isset($_POST['mail'])     ?  $_POST['mail']     : null ;
	$poste   = isset($_POST['poste'])    ?  $_POST['poste']    : null ;
	$societe = isset($_POST['societe'])  ?  $_POST['societe']  : null ;


	//echo $prenom. " : " .$nom. " : " .$tel. " : " .$mail. " : " .$texte;

	if($prenom != null && $nom != null && $tel != null && $mail != null && $poste != null && $societe != null ) {

		$header = "From: ".$mail." \n";

		$content =  "Prenom : "   . "\n" . $prenom   . "\n" . "\n".
					"Nom : "      . "\n" . $nom      . "\n" . "\n".
					"tel : "      . "\n" . $tel      . "\n" . "\n".
			   		"Mail : "     . "\n" . $mail     . "\n" . "\n".
			   		"Poste : "    . "\n" . $poste    . "\n" . "\n".
			   		"Societe : "  . "\n" . $societe  . "\n" . "\n";

		mail("alexis@agence-me.com", 'ENTREPRISE', $content, $header);

	}

	header('Location: /entreprise#section-form');

?>