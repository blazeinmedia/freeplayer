<?php
if (isset($_POST['submit'])) {$code = $_POST['code'];}
?>
<div>
<?php eval("?> $code <?php "); ?>
</div>

