<?php
if (!session_id()) {
    session_start();
}

define("CLIENT_ID", "78e3eoi7fom0w0");
define("CLIENT_SECRET", "xLNbhJy1s0RYfFjP");
define("REDIRECT_URI", "https://skeelz.com/mail/linkedin.php");
define("SCOPE", 'r_basicprofile r_emailaddress' );

require ('../oauth/http.php');
require ('../oauth/oauth_client.php');

if ($_GET["oauth_problem"] != "") {
    $error1 = $_GET["oauth_problem"];
}

$client = new oauth_client_class();

$client->debug = false;
$client->debug_http = true;
$client->redirect_uri = REDIRECT_URI;
$client->server = "LinkedIn";
$client->client_id = CLIENT_ID;
$client->client_secret = CLIENT_SECRET;
$client->scope = SCOPE;

if (($success = $client->Initialize())) {
    if (($success = $client->Process())) {
        if (strlen($client->authorization_error)) {
            $client->error = $client->authorization_error;
            $success = false;
        } elseif (strlen($client->access_token)) {
            $success = $client->CallAPI('http://api.linkedin.com/v1/people/~:(id,email-address,first-name,last-name)', 'GET', array(
                'format' => 'json'
            ), array(
                'FailOnAccessError' => true
            ), $user);
        }
    }
    $success = $client->Finalize($success);
    $_SESSION["member_id"] = $user->id;
}
if ($client->exit) {
    exit();
}
if ($success) {} else {
    $error = $client->error;
}

if (!empty($_GET["oauth_token"]) || empty(!$_GET["oauth_verifier"]) ) {

	$_SESSION['POST'] = array();

	$_SESSION['POST']['prenom'] = $user->firstName;
	$_SESSION['POST']['nom']    = $user->lastName;
	//$_SESSION['POST']['tel']    = $user->number;
	$_SESSION['POST']['mail']   = $user->emailAddress;

	header('Location: /talent#section-form');
}
?>