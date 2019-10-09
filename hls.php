<?php
$clientIP = null; // provide client IP optionally
// $clientIP = $_SERVER['REMOTE_ADDR'];
$host = "freeplayer.herokuapp.com"; // your ip/host
$url= "http://livecdnh2.tvanywhere.ae/";
$stream = "hls/mbc3"; // your stream
$start = time();
$validity = 1000; // validity in seconds
$end = time() + $validity;
$secret = "00secret"; // your secret
$tokenName = "wt";
$params = array("{$tokenName}starttime=".$start, "{$tokenName}endtime=".$end, $secret);
if(!is_null($clientIP)){
        $params[] = $clientIP;
}
sort($params);
$string4Hashing = $stream."?";
foreach($params as $entry){
        $string4Hashing .= $entry."&";
}
$string4Hashing = preg_replace("/(\&)$/","", $string4Hashing);
$hash = hash('sha256', $string4Hashing, true); // generate the hash string
echo $string4Hashing;
echo "<br>";
$base64Hash = strtr(base64_encode($hash), '+/', '-_'); // Base64 encode the hashed string
$playbackURL = $url.$stream."/03.m3u8?".$tokenName."starttime=".$start.$tokenName."endtime=".$end.$tokenName."hash=".$base64Hash;
echo $base64Hash;
echo "<br>";
echo $playbackURL;
echo "<br>";
?>
