<?php
$link = $_GET['src'];
$head = get_headers($link);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    foreach ($head as $value) {if(stristr($value, 'Set-Cookie') || stristr($value, 'Content-Disposition')){header($value);} }
    header('Content-Transfer-Encoding: chunked');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Disposition: attachment; filename="'.basename($_GET['src']).'"');
    $stream = fopen('php://output', 'w');

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_READFUNCTION, function($ch, $fd, $length) use ($stream) {
return fwrite($stream, fread($fd, $length));
});

curl_exec($ch);
curl_close($ch);    

?>
