<?php
header('Content-type: video/mp4');
$link = ''  .$_GET["id"];
$part = explode("/", $link);
$last = end($part);
$url = 'https://archive.org/embed/'.$last;
$result = file_get_contents($url);
preg_match('/source src="(.*)"/', $result, $matches);
$result = urldecode($matches[1]);
$file = "https://archive.org".$result;
readfile($file);
?> 
