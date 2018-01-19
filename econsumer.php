
<?php
// Read email to a var
// Capture inbound HTTP REQUEST
$verb = $_SERVER['REQUEST_METHOD'];
$authtoken = $_SERVER['HTTP_X-MessageSystems-Webhook-Token'];
$filepath = 
if ($verb == "POST") {
  if ($authtoken="5l<redacted>69"){
    $body = file_get_contents("php://input");
    $result = json_decode($body);
    // Extract HTML part and save it
    $location = "123123123123123";
    $htmlpart = $result['relay_message']['html'];
    file_put_contents ($filepath.$location,$htmlpart);

    // Extract TEXT part and save it
    $textpart = $result['relay_message']['text'];
    file_put_contents ($filepath.$location."txt",$textpart);

  }  
}


?>
