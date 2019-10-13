<?php
$id= "" .$_GET['id'];
$title = file_get_contents('https://www.dropbox.com/s/'.$id);
preg_match('/<title>Dropbox -(.*) - Simplify/', $title, $matches);
$title = urldecode($matches[1]);
$link = 'https://dl.dropboxusercontent.com/s/'.$id.'/'.$title;
header('Content-type: application/octet-stream');
readfile($link);
?>
