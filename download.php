<?php
$id = "" .$_GET['id'];
$file = "https://freeplayer.herokuapp.com/mediafire.php?id=".$id;
header('Content-Type: application/octet-stream');
readfile($file);
exit;
?>
