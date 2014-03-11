<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "brigantecarlo",
    'oauth_access_token_secret' => "",
    'consumer_key' => "Nb1xZshVEwimMAIzboS85g",
    'consumer_secret' => "YN0xLObDEQ7SXgAi1uAQkCuhwJ22yr2GMiQImtQgU"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?q=#stopujadestransport&result_type=recent';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();
