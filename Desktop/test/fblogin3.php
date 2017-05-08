<?php 

require_once("includes/config.php");

//require_once __DIR__ . '/facebook-php-sdk-v4\src\Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1620569411536507',
  'app_secret' => 'ef6865c50a65ec00d670031c042ad009',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['public_profile','email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://www.smapsters.com/login-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>