<?php

require __DIR__ . "/Facebook/autoload.php";

function facebook_connect(){
	$fb = new Facebook\Facebook([
	  'app_id' => '838493322836219',
	  'app_secret' => '85cb031b1b349cc1a719d32526c7944a',
	  'cookie' => true ,
	  'req_perms' => 'publish_stream, manage_pages',
	  'default_graph_version' => 'v2.3',
	  ]);
	
	$token = 'EAAL6mvCnePsBACtp10JQgmlleefJyYIsmCzbH5rlfvw5eytJjvNzXzS4cZA15oUky1ZBbS9g7lTZAchwci61XqZBfPQJqEyKrsBX1mJZCZBMbjKX7hG6oqZB8Rfo5EG2ujSmYRY028T3THXlJoX9CB5fZCmTiyjSUxlZB3X39jrJmIy0sHJdaz49nQS9To2XkK9IZD';

	$fb->setDefaultAccessToken($token);
	return $fb;
}

function get_user_by_id($fb,$id){
	try {
	    $response = $fb->get('/'.$id);
	} catch (Facebook\Exceptions\FacebookResponseException $e) {
	    // When Graph returns an error
	    echo 'Graph returned an error: ' . $e->getMessage();
	    exit;
	} catch (Facebook\Exceptions\FacebookSDKException $e) {
	    // When validation fails or other local issues
	    echo 'Facebook SDK returned an error: ' . $e->getMessage();
	    exit;
	}
	$user = $response->getGraphUser()->asArray();
	return $user;
}