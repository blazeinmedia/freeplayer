<?php include 'encrypt.php';?>
<!DOCTYPE html><html><head><meta charset=utf-8 />
<title>test hls video </title>
<style type="text/css">video {object-fit: fill;}</style>
<link href="//bomtv.gitlab.io/live/video-js.css" rel="stylesheet">
<script src="//bomtv.gitlab.io/live/video.js"></script></head><body><center>
<video id="video" class="video-js vjs-default-skin vjs-big-play-centered vjs-controls-enabled" poster=""
controls autoplay preload="auto" width="714" height="402" data-setup='{}'></video></center>
<script>const player = videojs('video');  player.src({
src: 'hls.php?video=<?php echo $hash;?>',
type: 'application/x-mpegURL'  }); </script></body></html>
