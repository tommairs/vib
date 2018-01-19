
<?php
// Read email to a var
// Capture inbound HTTP REQUEST
  $verb = $_SERVER['REQUEST_METHOD'];
  if ($verb == "POST") {
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

// Extract HTML part and save it

// Extract TEXT part and save it

// Delete original email

?>
