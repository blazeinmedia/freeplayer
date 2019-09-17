<?php
function getHTML($url,$timeout)
{$ch = curl_init($url); // initialize curl with given url
       curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); // set  useragent
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // write the response to a variable
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); // max. seconds to execute
       curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
       return @curl_exec($ch);}
$link = '' .$_GET["src"];
$url = ($link);
$html=getHTML($url,10);
preg_match_all("/file: '(.*)',/m", $html, $matches);
foreach ($matches[1] as $key=>$value) {}
?>
<!DOCTYPE html><html><head><meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-Frame-Options" content="deny">
<title>api preg_match</title><style type="text/css">
.jw-controls:before {text-shadow: 1px 1px 2px #000; font-size: 2vw;color:#2dff03;position: absolute;
right: 0;bottom:20;left: 0; z-index: 0;display: flex;
flex-direction: column;  justify-content: center; align-items: center;
pointer-events: none; font-family:Arial,Helvetica,sans-serif; font-weight: bold; text-shadow: 0 3px 3px #000;
content: "www.flaxtv.ga"; height: 100px;}
html,body { height:100%; width:100%; padding:0; margin:0; }
#my-video{position:fixed; height:100%;width:100%; padding:0; margin:0;}</style>
<script data-cfasync='false' src='http://jwpsrv.com/library/SakQCEfSEeOHhRIxOQfUww.js'></script>
<!-- <script src="https://zoptv.github.io/jwplayer7/jwplayer7.js" type="text/javascript"></script> -->
<!-- <script>jwplayer.key="XYS/ica6YQUMq9rC6J2E77obUFoIPLeM";</script> -->
</head><body><div id="my-video"></div>
<script type="text/javascript"> jwplayer("my-video").setup({
file:'<?php  echo $value; ?>',
image: '',
sharing: {code: '<iframe src="'+ window.location.href +'" frameborder="0" width="800" height="460"></iframe>',},
link : {code: "'+ window.location.href +'",}, 
logo: {file: 'http://www7.0zz0.com/2017/01/21/01/526944764.png', position: 'top.left', hide: 'true', margin: '2', linktarget: '_blank',
hide: 'false', over: '70',out: '', link: "http://www.khaledtv.ga"},
title: 'www.khaledtv.ga',autostart:'true',width:'100%',height:'100%',
stretching: "exactfit",androidhls:"true"});
</script></body></html>
