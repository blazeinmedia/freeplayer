<?php
$file = $_GET['src'];
header('Content-Type: application/image/jpg');
@readfile($file);
?>
