<?php
$id= "" .$_GET['id'];
$title = file_get_contents('https://www.dropbox.com/s/'.$id);
preg_match('/<title>Dropbox -(.*) - Simplify/', $title, $matches);
$title = urldecode($matches[1]);
$dropbox = 'https://dl.dropboxusercontent.com/s/'.$id.'/'.$title;

session_start();
if (isset($_GET["token"]) && isset($_SESSION[$_GET["token"]])) {
header('Content-Type: application/octet-stream');
$file = $_SESSION[$_GET["token"]]; //Get the filename
readfile($file);    
}
session_start();
$sid = session_id();
$path = $dropbox;
//$hash = md5($path.$sid); //You need to use proper encryption. This is not secure at all.
$token = sha1(uniqid(time(), true));
$_SESSION[$token] = $path;
$url = "https://freeplayer.herokuapp.com/dropbox.php?token=".$token."/".$title;
//header('Location: ' . $url);
echo '"url:""'. $url .'";';
?>
