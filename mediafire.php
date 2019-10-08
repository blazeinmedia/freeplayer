<?php
header('Content-type: video/mp4');

$url = "" .$_GET['src'];
$link = file_get_contents($url);
$start = explode('href="https://download',$link);
$end = explode('">',$start[1]);
$file = "https://download".$end[0]; 
readfile($file);
?>
