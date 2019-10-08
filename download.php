<?php
header('Content-type: video/mp4');

$file = $_GET['src'];
readfile($file);
exit();
?>
