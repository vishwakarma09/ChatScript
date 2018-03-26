<?php 

/**
 * Code to integrate chat script with telegram bot

step 1: get your telegram API from https://core.telegram.org/bots/api
step 2 : register this URL in the webhook URL of boot. So that all the updates are pushed to this URL
step 3: satusfy composer dependencies :
	
	for this run 

	composer require guzzlehttp/guzzle
	
steo 4: create a file in the same directory as the vendors folder (which contains composer dependencies). This file's URL is the webhook URL which you have registered in step 2

to test you can search for @pingubot on telegram

 */

require_once( '../vendor/autoload.php' );
use GuzzleHttp\Client;

$apiKey = 'XXXXXX:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'; // Put your bot's API key here
$apiURL = 'https://api.telegram.org/bot' . $apiKey . '/';

$client = new Client( array( 'base_uri' => $apiURL ) );

$update = json_decode( file_get_contents( 'php://input' ) );


$host = '0.0.0.0';
$port = 1024;	//The port where you're running the server
$null = "\x00";
$bot  = "";

 // fifth parameter in fsockopen is timeout in seconds
if(!$fp=fsockopen($host,$port,$errstr,$errno,300))
{
	$client->post( 'sendMessage', array( 'query' => array( 'chat_id' => $update->message->chat->id, 'text' => 'Error opening socket' ) ) );
}


$from = $update->message->from->id;
$msg  = $update->message->text; 


$message = $from.$null.$bot.$null.$msg.$null;

fputs($fp,$message);
while (!feof($fp))
{
	$ret.= fgets($fp, 128);
}

fclose($fp);

$client->post( 'sendMessage', array( 'query' => array( 'chat_id' => $update->message->chat->id, 'text' => $ret ) ) );
