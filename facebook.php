<?php
header('Content-type: video/mp4');
function getHTML($url,$timeout)
{$ch = curl_init($url); // initialize curl with given url
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); // set  useragent
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // write the response to a variable
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); // max. seconds to execute
curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
return @curl_exec($ch);}
$link = ''  .$_GET["src"];
$url = ($link);
$html=getHTML($url,10);
preg_match_all('/sd_src:"(.*?)",hd_tag/m', $html, $matches);
foreach ($matches[1] as $key=>$sd) { }
preg_match_all('/hd_src:"(.*?)",sd_src/m', $html, $matches);
foreach ($matches[1] as $key=>$hd) { }
if($hd){readfile($hd);} else {readfile($sd);}
?>
