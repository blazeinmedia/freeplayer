<?php
header('Content-type: video/mp4');
$id= $_GET['id'];
$file = "https://www.googleapis.com/drive/v3/files/" .$id. "?alt=media&key=AIzaSyAgJNu0Gt0vAFVCN3g0fqlRrksIrscRiLM";
readfile($file);
exit;
?>
