<?php
$id = "" .$_GET['id'];
$url = "https://www.mediafire.com/file/".$id;
$link = file_get_contents($url);
$start = explode('href="https://download',$link);
$end = explode('">',$start[1]);
$file = "https://download".$end[0]; 
//header('Content-type: video/mp4');
header('Content-type: application/octet-stream');
readfile($file);
?>
