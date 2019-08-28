<script language="JavaScript">
function preview(){temp=document.tester.code.value,preWindow=open("/?","preWindow"," menubar=yes, scrollbars=yes"),
preWindow.document.open(), preWindow.document.write(temp),preWindow.document.close()}
</script>

<center>
<h1>PHP And HTML & JavaScript Code Tester</h1> 
<form action="" name="tester" method="POST"> 
<textarea rows="8" cols="70" name="code">
...
</textarea><br/> 
<input class="btn1" name="submit" type="submit" onclick="preview();" value="Test PHP&HTML Code"/>
</form></center>
