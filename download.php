<?php
// You can used any file extension to output the file for download
$id = "" .$_GET['id'];
$file = "https://freeplayer.herokuapp.com/mediafire.php?id=".$id;

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
?>
