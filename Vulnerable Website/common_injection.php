<?php ?>
<!DOCTYPE html>
<html  xml:lang="en">
<head>
	<meta charset="utf-8" />
	<title>Common injection</title>
	<style>
div {
  height: 200px;
  line-height: 200px;
  text-align: center;
  
}
span {
  display: inline-block;
  vertical-align: middle;
  line-height: normal;
}

</style>
</head>



<body>

<div style="text-align:center">
 <form id="form_login" method="get" action="common_injection.php">
   <label for="name">komutu giriniz</label>
   <input name="id_textbox" type="text">
   <input name="sorgula" type="submit" value="Sorgula">
 </form>
 <?php
if( isset( $_GET[ 'sorgula' ]  ) ) {
	// Get input
	$target = $_REQUEST[ 'id_textbox' ];

	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( 'ping  ' . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( 'ping  -c 4 ' . $target );
	}

	// Feedback for the end user
	echo  "<pre>{$cmd}</pre>";
}

?>
</div>

</body>

</html>

