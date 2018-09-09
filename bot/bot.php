<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('LINE_CHANNEL_ACCESS_TOKEN', 'B6wMPzDKLZ3EY8Jh8g8ZQA95I/IOZBu8E1RjQYdDTvqh9XAfIn4+rmM/Bo9wwg6CWrkGfGpdbNYbUzRay2ZZxbUbs2EKZjA3o8crqhT4YZIEzGjJ7YDeliTLIByQ0bf8dXg0i34yR82FxO6Hj+YSOQdB04t89/1O/w1cDnyilFU=');
define('LINE_MESSAGING_API', 'https://api.line.me/v2/bot/message/');
define('LINE_USER_ID', 'U843383c156dff8825f5cb0bbbee3f832');

if (isset($_GET['push'])) {
      push();
} else {
      reply();
}

function push() {
	$msg = 'Hi Pairat Atichart (Taati)';

	// Msg payload
 $message =[
   'type' => 'text',
   'text' =>  $msg
 ];
	// Body payload (replyToken => to)
 $body = [
   'to' => LINE_USER_ID,
   'messages' => [$message]
 ];
	// Curl
	curl('push',$body);
	echo $msg;
}

function reply() {
	// get body from POST or PUT
  $jsonObj = file_get_contents('php://input');
	// convert to array
  $events = json_decode($jsonObj,true);

	// Validate parsed JSON data
	if (!is_null($events['events'])) {

		foreach ($events['events'] as $event) {

			// Reply only when message type is text
			if ($event['type'] == 'message' && $event['message']['type'] == 'text') {

				// Msg payload
        $text = $event['message']['text'];
        if($text=="hi"){
          $text = "good";
        }
        $message =[
          'type' => 'text',
          'text' =>  $text
        ];
				// Body payload
        $body = [
          'replyToken' => $event['replyToken'],
          'messages' => [$message]
        ];
				// Curl
        curl('reply',$body);
			}
		}
	}
}

function curl($apiType, $postFields) {
	$headers = array('Content-Type: application/json', 'Authorization: Bearer '.LINE_CHANNEL_ACCESS_TOKEN);
	$ch = curl_init(LINE_MESSAGING_API.$apiType);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields));
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_exec($ch);
	curl_close($ch);
}
?>
