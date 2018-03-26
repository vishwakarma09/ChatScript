<?php 

require_once( '../vendor/autoload.php' );

use GuzzleHttp\Client;

/**
* Pingubot
* From this page, you can test the getUpdates method for bot
  Also, you can setup a webhook.

  After a webhook is added, all the updates will be automatically sent to that webhook URL
  see the webhook.php (in same folder)

  Before running, install composer dependency by running

  composer require guzzlehttp/guzzle

  and adjust the path of vendor/autoload.php

  NOTE: The webhook URL must be an HTTPS endpoint

*/
class Pingu
{
	
	private $apiKey;
	private $apiURL;
	private $client;

	public function __construct()
	{
		$this->apiKey = 'XXXXX:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
		$this->apiURL = 'https://api.telegram.org/bot' . $this->apiKey . '/';
		$this->client = new Client(['base_uri' => $this->apiURL, 'verify' => false]);
	}

	public function get_updates()
	{

		$response = $this->client->get('getUpdates');
		$updates = json_decode( $response->getBody() );

		foreach ( $updates->result as $update )
		{

			echo $update->message->text;

			if ( $update->message->text == 'Hello' )
			{
				echo 'Hello has been recieved';

				// $this->client->post( 'sendMessage', array( 'query' => array( 'chat_id' => $update->message->chat->id, 'text' => "Tundi Love Mundi" ) ) );
			}
		}

	}

	public function register_webhook()
	{
		$webHookURL = 'https://xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/webhook.php';
		$response = $this->client->post( 'setWebhook', array( 'query' => array( 'url' => $webHookURL ) ) );
	}

}


$pingu = new Pingu();
// $pingu->get_updates();
$pingu->register_webhook();
