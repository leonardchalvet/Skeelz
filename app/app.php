<?php

/*
 * This is the main file of the application, including routing and controllers.
 *
 * $app is a Slim application instance, see the framework documentation for more details:
 * http://docs.slimframework.com/
 *
 * The order of the routes matter, as it will define the priority of routes. For that reason we
 * need to keep the more "generic" routes, such as the pages route, at the end of the file.
 *
 * If you decide to change the URLs, make sure to change PrismicLinkResolver in LinkResolver.php
 * as well to make sures links in your site are correctly generated.
 */

use Prismic\Api;
use Prismic\Predicates;

require_once 'includes/http.php';

$apiEndpoint = $WPGLOBAL['app']->getContainer()->get('settings')['prismic.url'];
$repoEndpoint = str_replace("/api", "", $apiEndpoint);
$url = $repoEndpoint . '/app/settings/onboarding/run';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array("language=php&framework=slim"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);

// Index page
$app->get('/', function ($request, $response) use ($app, $prismic) {
  return $response->withStatus(302)->withHeader('Location', '/waiting');
});

$app->get('/home', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'home'));
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));
  // Render the page
  render($app, 'home', array('document' => $document, 'header' => $header, 'footer' => $footer));
});

$app->get('/talent', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'talent'));
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  // Render the page
  render($app, 'talent', array('document' => $document, 'header' => $header, 'footer' => $footer));
});

$app->get('/entreprise', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'entreprise'));
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  // Render the page
  render($app, 'entreprise', array('document' => $document, 'header' => $header, 'footer' => $footer));
});

$app->get('/about', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'about'));
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  // Render the page
  render($app, 'about', array('document' => $document, 'header' => $header, 'footer' => $footer));
});

$app->get('/contact', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'contact'));
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  // Render the page
  render($app, 'contact', array('document' => $document, 'header' => $header, 'footer' => $footer));
});

$app->get('/newz', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'newz'));
  $posts     = $api->query(Predicates::at('document.type', 'post'), [ 'pageSize' => 11 ]);
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  // Render the page
  render($app, 'newz', array('document' => $document, 'posts' => $posts, 'header' => $header, 'footer' => $footer));
});

$app->get('/newz/{uid}', function ($request, $response, $args) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->getByUID('post', $args['uid']);
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  //echo "<script>console.log( 'Debug Objects: " . var_dump($document) . "' );</script>";

  // Render the page
  render($app, 'post', array('document' => $document, 'uid' => $args['uid'],'header' => $header, 'footer' => $footer));
});

$app->get('/seemore', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'post'), [ 'pageSize' => 1000 ]);
  $newz = $api->query(Predicates::at('document.type', 'newz'));

  // Render the page
  render($app, 'seemore', array('document' => $document, 'newz' => $newz));
});

$app->get('/livesearch', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'post'), [ 'pageSize' => 9999 ]);
  $newz = $api->query(Predicates::at('document.type', 'newz'));

  // Render the page
  render($app, 'livesearch', array('document' => $document, 'newz' => $newz));
});

$app->get('/politique-de-confidentialite', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->getByUID('pcml', 'skeelz_politiquedeconfidentialite');
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  // Render the page
  render($app, 'politique', array('document' => $document, 'header' => $header, 'footer' => $footer));
});

$app->get('/mentions-legales', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->getByUID('pcml', 'skeelz_mentionslegales');
  $header   = $api->query(Predicates::at('document.type', 'header'));
  $footer   = $api->query(Predicates::at('document.type', 'footer'));

  // Render the page
  render($app, 'mentions', array('document' => $document, 'header' => $header, 'footer' => $footer));
});

$app->get('/waiting', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'waiting'));

  // Render the page
  render($app, 'waiting', array('document' => $document));
});

/**
 * Webhook github
 * auto pull if push on master
 */
$app->post('/github-webhook', function() use ($app) {
    $data = json_decode(file_get_contents('php://input'), true);
    $ref = $data["ref"] ?? "none";
    $dir = __DIR__."/..";
    if ($ref != "refs/heads/master") {
        shell_exec("cd $dir && echo $ref >> git.log 2>&1");
    }
    shell_exec("cd $dir && git pull >> git.log 2>&1");
});

/**
 * Webhook github
 * manual pull
 */
$app->get('/github-webhook', function() use ($app) {
    $dir = __DIR__."/..";
    echo "<pre>";
    echo nl2br(shell_exec("cd $dir && git pull 2>&1"));
    echo "<hr>";
    echo nl2br(shell_exec("cd $dir && git log  --pretty=oneline -10"));
    echo "<pre>";
});

