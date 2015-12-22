<?php
require_once 'InstagramDownload.class.php';
$url 	= 'https://www.instagram.com/p/-NJ81vvhHV/';

$client = new InstagramDownload($url);
$url 	= $client->downloadUrl(); // returns download URL

echo $url; // print download URL