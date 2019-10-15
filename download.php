<?php
$file = "" .$_GET['src'];
header('Content-Type: application/octet-stream');
readfile($file);
?>
