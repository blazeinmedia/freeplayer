<?php
session_start();
if (isset($_GET["video"]) && isset($_SESSION[$_GET["video"]])) {
header("Content-Type: application/vnd.apple.mpegurl");
$file = $_SESSION[$_GET["video"]]; //Get the filename
readfile($file); 
}
session_start();
$sid = session_id();
$path = 'video.m3u8';
$hash = md5($path.$sid); //You need to use proper encryption. This is not secure at all.
$_SESSION[$hash] = $path;
?>

<!DOCTYPE html><html><head><meta charset=utf-8 />
<title>test hls video </title>
<style type="text/css">video {object-fit: fill;}</style>
<link href="http://bomtv.gitlab.io/live/video-js.css" rel="stylesheet">
<script src="http://bomtv.gitlab.io/live/video.js"></script></head><body><center>
<video id="video" class="video-js vjs-default-skin vjs-big-play-centered vjs-controls-enabled" poster=""
controls autoplay preload="auto" width="714" height="402" data-setup='{}'></video></center>
<script>const player = videojs('video');  player.src({
src: 'hls.php?video=<?php echo $hash;?>',
type: 'application/x-mpegURL'  }); </script></body></html>
