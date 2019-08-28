<script language="JavaScript">
function preview(){temp=document.tester.code.value,preWindow=open("","preWindow"," menubar=yes, scrollbars=yes"),
preWindow.document.open(), preWindow.document.write(temp),preWindow.document.close()}
</script>
<center>
<h1>PHP And HTML & JavaScript Code Tester</h1> 
<form action="" name="tester" method="POST"> 
<textarea rows="8" cols="70" class="textinput" wrap="physical" name="code">
</textarea><br/> 
<input class="btn1" name="submit" type="submit" onclick="preview();" value="Test PHP&HTML Code"/>
<input class="btn2" type="reset" value="Clear Text Box">
<?php
 if (isset($_POST['submit'])) {$code = $_POST['code'];} eval("?> $code <?php "); ?> 
</form></center>
