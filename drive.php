<?php
$id= $_GET['id'];
$file = "https://www.googleapis.com/drive/v3/files/" .$id. "?alt=media&key=AIzaSyAgJNu0Gt0vAFVCN3g0fqlRrksIrscRiLM";
header('Content-Type: application/octet-stream');
readfile($file);
exit;
?>
