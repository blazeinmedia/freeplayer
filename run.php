<?php
if (isset($_POST['submit'])) {$code = $_POST['code'];}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>PHP Code Tester</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head><body><center><form method="POST" action="run.php">
<textarea rows="8" cols="80" name="code"></textarea><br>
<input  name="submit" type="submit" />
<input type="reset" value="Clear Text"></form>
<div><?php eval("?> $code <?php "); ?></div>
</center></body></html>
