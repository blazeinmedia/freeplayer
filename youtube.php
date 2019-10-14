<?php
$id = "" .$_GET['id'];
$file = "https://uplody.com/watch/?v=".$id;
header('Content-Type: application/octet-stream');
readfile($file);
exit;
?>
