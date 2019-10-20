<?php
$file = $_GET['src'];
header('Content-Type: image/jpeg');
@readfile($file);
?>
