<?php
$id = "" .$_GET['id'];
header('Content-Type: application/octet-stream');
readfile($file);
exit;
?>
