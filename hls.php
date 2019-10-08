<?php
$file = "" .$_GET['src'];
header("Content-type: application/x-mpegURL");
readfile($file);
?>
