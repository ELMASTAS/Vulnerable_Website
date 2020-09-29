<html>
<head>
<title> welcome to xss </title>
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
<div style="text-align:center" class="my_div">
<form action="xss.php" method="GET">
  <label for="name">Name:</label>
  <input type="text" name="name">
<input type="submit" value="Submit">
</form>


<?php

    
	// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Feedback for end user
	echo '<pre>Hello ' . $_GET[ 'name' ] . '</pre>';
	
}

?>
</div>
</body>
</html>
