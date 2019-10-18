<?php
$file = 'http://live.faucontv.com:8000/live/arbi1/arbi2/557.ts';
header("Content-Type: video/MPT2");
readfile($file);
?>
