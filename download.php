<?php
session_start();
if (isset($_GET["src"]) && isset($_SESSION[$_GET["src"]])) {
$file = $_SESSION[$_GET["src"]];
header('Content-Type: application/octet-stream');  
readfile($file);}
?>

/*
<?php
$file = $_GET['src'];
header('Content-Type: application/octet-stream');
readfile($file);
echo "test tst ";
?>
/**
