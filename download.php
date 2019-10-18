<?php
session_start();
if (isset($_GET["src"]) && isset($_SESSION[$_GET["src"]])) {
$file = $_SESSION[$_GET["src"]];
header('Content-Type: application/octet-stream');  
readfile($file);}

//$file = $_GET['src'];
//header('Content-Type: application/octet-stream');
//readfile($file);
?>


