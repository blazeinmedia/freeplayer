<!DOCTYPE html><html><head>
<title>my web heroku</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head><body><center>
<?php
echo "<h1> Welcome To My Website</h1>";?>
<h2 id="host"></h2>  
<script>
var url = window.location.hostname;
document.getElementById("host").innerHTML=(url);
</script>
</center></body></html>


