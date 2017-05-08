<?php

require_once("includes/config.php");


//require_once __DIR__ . '/facebook-php-sdk-v4\src\Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1620569411536507',
  'app_secret' => 'ef6865c50a65ec00d670031c042ad009',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;
	echo 'Welcome';
  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}


try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', $accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$userfb = $response->getGraphUser();

//echo 'Name: ' . $user['first_name'];
// OR
 echo 'Name: ' . $userfb->getName();

