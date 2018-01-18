<?php
// Provide API access to a generation tool that provides a UUID for ViewInBrowser
// Take in the CampaignID and email address
// Use the current timestamp and calculate a UUID
// Return the UUID that can be included in the SparkPost template
// Variable declarations:

// Set the root URL for viewInBrowser link. Default is THIS FQDN 
$URL = $_SERVER['SERVER_NAME'];
// $URL = "";

// Set the desired protocol
$proto = "https://";


// Capture inbound HTTP REQUEST
  $verb = $_SERVER['REQUEST_METHOD'];
  if ($verb == "GET") {
    $body = file_get_contents("php://input");
    $email = preg_grep("/email[\:\"\s]*[\w\d\.-_]*\@[\w\d\.-_]*/", $body); 
    $campaign_id = preg_grep("/campaign_id[\:\"\s]*[\w\d\.-_]*/", $body);
    $t = date("Y-m-d:h:i:s",time()));
    $options = [
      'cost' => 11,
      'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    ];
    $UUID = password_hash($email.$campaign_id.$t, PASSWORD_BCRYPT, $options);
    echo $proto.$URL."?l="$UUID;
  }


?>
