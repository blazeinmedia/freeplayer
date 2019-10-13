<?php
// You can used any file extension to output the file for download
$file = $_GET['src'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>


/* <?php
header('Content-type: video/mp4');
$file = $_GET['src'];
readfile($file);
exit;
?>*/
