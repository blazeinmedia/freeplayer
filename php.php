<center>
<h1>PHP And HTML & JavaScript Code Tester</h1> 
<form action="" target="_blank" method="POST"> 
<textarea class="textinput" wrap="physical" name="code">
</textarea><br/> 
<input class="btn1" name="submit" type="submit" value="Test PHP&HTML Code"/>
<input class="btn2" type="reset" value="Clear Text Box">

<?php
 if (isset($_POST['submit'])) {$code = $_POST['code'];} eval("?> $code <?php "); ?> 


</form><br/></center>
