<?php
$LOGIN_INFORMATION=array('htmlkhaled@gmail.com'=>'khaled','admin'=>'adminpass');
define('USE_USERNAME',true);define('LOGOUT_URL','/run.php');
define('TIMEOUT_MINUTES',0);define('TIMEOUT_CHECK_ACTIVITY',true);
if(isset($_GET['help'])){die('Include following code into every page you would like to protect,
at the very beginning (first line):<br>&lt;?php include("'.str_replace('\\','\\\\',__FILE__).'"); ?&gt;');}$timeout=(TIMEOUT_MINUTES==0?0:time()+TIMEOUT_MINUTES*60);if(isset($_GET['logout'])){setcookie("verify",'',$timeout,'/');header('Location: '.LOGOUT_URL);exit();}if(!function_exists('showLoginPasswordProtect')){function showLoginPasswordProtect($error_msg){?>
<html><head><title>Please enter password to access this page</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
</head><body><style>input { border: 1px solid black; }</style>
<div style="width:500px; margin-left:auto; margin-right:auto; text-align:center">
<form method="post"><h3>Please enter password to access this page</h3>
<font color="red"><?php echo $error_msg; ?></font><br />
<?php if (USE_USERNAME) echo 'Login:<br /><input type="email" name="access_login" /><br />Password:<br />'; ?>
<input type="password" name="access_password" /><p></p><input type="submit" name="Submit" value="Submit" />
</form><br /><a style="font-size:9px; color: #B0B0B0; font-family: Verdana, Arial;" 
href="#" title="Download Password Protector">Powered by Password Protect</a></div></body></html>

<?php
die();}}if(isset($_POST['access_password'])){$login=isset($_POST['access_login'])?$_POST['access_login']:'';$pass=$_POST['access_password'];if(!USE_USERNAME&&!in_array($pass,$LOGIN_INFORMATION)||(USE_USERNAME&&(!array_key_exists($login,$LOGIN_INFORMATION)||$LOGIN_INFORMATION[$login]!=$pass))){showLoginPasswordProtect("Incorrect password.");}else {setcookie("verify",md5($login.'%'.$pass),$timeout,'/');unset($_POST['access_login']);unset($_POST['access_password']);unset($_POST['Submit']);}}else {if(!isset($_COOKIE['verify'])){showLoginPasswordProtect("");}$found=false;foreach($LOGIN_INFORMATION as $key=>$val){$lp=(USE_USERNAME?$key:'').'%'.$val;if($_COOKIE['verify']==md5($lp)){$found=true;if(TIMEOUT_CHECK_ACTIVITY){setcookie("verify",md5($lp),$timeout,'/');}break;}}if(!$found){showLoginPasswordProtect("");}}?>

<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>PHP Code Tester</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style  type="text/css">
body {background: url(https://www.html-editor.tk/img/bg-pattern.png) #1f78d1;}
input.btn1 {font-size:20px; width:45%; height:40px;  color:black;
font-family:impact,arial,tahoma,helvetica,sans-serif;
background-color:#fe5900;border: 1px solid; border-color:#fff;border-radius:5px;}
@media only screen and (max-width:980px) {input.btn1{width:47%; height:36px;}}
input.btn2 {font-size:20px; width:45%; height:40px;  color:black;
font-family:impact,arial,tahoma,helvetica,sans-serif;
background-color:#fe5900;border: 1px solid; border-color:#fff;border-radius:5px;}
@media only screen and (max-width:980px) {input.btn2{width:47%;height:36px;}}
h1 {font-family:impact, arial,tahoma ; color:#fe5900; font:bold 95%}
@media only screen and (max-width:980px) {h1{font-size:22px; }}
.textinput {width:90%; height:360px; outline: none;resize: none; border: 1px solid #000;border-radius:5px;}
@media only screen and (max-width:980px) {.textinput{width:98%;height:360px;}}</style>
<script language="JavaScript">
function preview(){temp=document.tester.box.value,preWindow=open("","preWindow"," menubar=yes, scrollbars=yes"),
preWindow.document.open(),
preWindow.document.write(temp),preWindow.document.close()}</script>
</head><body><center><h1>PHP And HTML & JavaScript Code Tester</h1>
<form action="test.php" target="_blank" method="POST">
<textarea  class="textinput"   wrap="physical" name="code"></textarea><br/>
<input class="btn1" name="submit" type="submit" value="Test PHP&HTML Code"/>
<input class="btn2" type="reset" value="Clear Text Box"></form><br/></center>
 <br/><a href="?logout=1">Logout</a>
</body></html>
<!--
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>PHP Code Tester</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head><body><center><form action="test.php" target="_blank" method="POST">
<textarea rows="8" cols="80" name="code"></textarea><br>
<input  name="submit" type="submit" />
<input type="reset" value="Clear Text"></form>
</center></body></html> -->
