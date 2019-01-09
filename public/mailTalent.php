<?php

	$prenom = isset($_POST['prenom'])  ?  $_POST['prenom']  : null ;
	$nom    = isset($_POST['nom'])     ?  $_POST['nom']     : null ;
	$tel    = isset($_POST['tel'])     ?  $_POST['tel']     : null ;
	$mail   = isset($_POST['mail'])    ?  $_POST['mail']    : null ;
	$texte  = isset($_POST['texte'])   ?  $_POST['texte']   : null ;


	//echo $prenom. " : " .$nom. " : " .$tel. " : " .$mail. " : " .$texte;

	if($prenom != null && $nom != null && $tel != null && $mail != null && $texte != null ) {

		$header = "From: ".$mail." \n";

		$content =  "Prenom : " . "\n" . $prenom . "\n" . "\n".
					"Nom : "    . "\n" . $nom    . "\n" . "\n".
					"tel : "    . "\n" . $tel    . "\n" . "\n".
			   		"Mail : "   . "\n" . $mail   . "\n" . "\n".
			   		"Texte : "  . "\n" . $texte  . "\n" . "\n";

		if (mail("alexis@agence-me.com", 'TALENT', $content, $header)) {
			header('Location: /talent#section-form');
		}

	}

?>