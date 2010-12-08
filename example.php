<?php
require 'class-http-request.php';
$r = new HttpRequest("get", "http://twitter.com/statuses/public_timeline.json");
if ($r->getError()) {
    echo "sorry, an error occured";
} else {
    // parse json and show tweets
    $tweets = json_decode($r->getResponse());
    var_dump($tweets);
}
?>