<?php include 'encrypt.php';?>
<!DOCTYPE html><html><head><meta charset=utf-8 />
<title>test hls video </title>
<style type="text/css">video {object-fit: fill;}</style>
  
<!-- <link href="//bomtv.gitlab.io/live/video-js.css" rel="stylesheet">
<script src="//bomtv.gitlab.io/live/video.js"></script> -->
  
<script src='https://cdn.jsdelivr.net/clappr/latest/clappr.min.js' type='text/javascript'></script>
<script src='https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js' type='text/javascript'></script>
</head><body><center>
<div id="player"></div><script>
var player = new Clappr.Player({source:"http://freeplayer.herokuapp.com/hls/hls.php?video=<?php echo $hash;?>",
poster: "https://jumptv.github.io//img/bein3.jpg",autoPlay:true,width:"714",height:"402",parentId: "#player"});
</script><br><br>
<!-- <video id="video" class="video-js vjs-default-skin vjs-big-play-centered vjs-controls-enabled" poster=""
controls autoplay preload="auto" width="714" height="402" data-setup='{}'></video>
<script>const player = videojs('video');  player.src({
src: 'hls.php?video=<?php echo $hash;?>',
type: 'application/x-mpegURL'  }); </script>--> <br><br>
<a href="http://freeplayer.herokuapp.com/hls/hls.php?video=<?php echo $hash;?>">
<h2> link hls token </h2></a></center></body></html>
