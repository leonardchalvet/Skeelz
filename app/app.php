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
  return $response->withStatus(302)->withHeader('Location', '/home');
});

$app->get('/home', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'home'));
  $header   = $api->query(Predicates::at('document.type', 'header'));
  // Render the page
  render($app, 'home', array('document' => $document, 'header' => $header));
});

$app->get('/talent', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'talent'));
  $header   = $api->query(Predicates::at('document.type', 'header'));

  // Render the page
  render($app, 'talent', array('document' => $document, 'header' => $header));
});

$app->get('/entreprise', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'entreprise'));
  $header   = $api->query(Predicates::at('document.type', 'header'));

  // Render the page
  render($app, 'entreprise', array('document' => $document, 'header' => $header));
});

$app->get('/about', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'about'));
  $header   = $api->query(Predicates::at('document.type', 'header'));

  // Render the page
  render($app, 'about', array('document' => $document, 'header' => $header));
});

$app->get('/contact', function ($request, $response) use ($app, $prismic) {
  // Query the API
  $api = $prismic->get_api();
  $document = $api->query(Predicates::at('document.type', 'contact'));
  $header   = $api->query(Predicates::at('document.type', 'header'));

  // Render the page
  render($app, 'contact', array('document' => $document, 'header' => $header));
});
