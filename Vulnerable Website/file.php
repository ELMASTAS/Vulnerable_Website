<!DOCTYPE html>
<html>
<head>

</head>
<body>
<br>
<div style="text-align:center">
<form action="file.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload Image" name="submit">
</form>


<?php
if( isset( $_POST[ 'submit' ] ) ) {
	// Where are we going to be writing to?
	$target_path  =  '/xampp/htdocs/';
	$target_path .= basename( $_FILES[ 'fileToUpload' ][ 'name' ] );

	// Can we move the file to the upload folder?
	if( !move_uploaded_file( $_FILES[ 'fileToUpload' ][ 'tmp_name' ], $target_path ) ) {
		// No
		echo '<pre>Your image was not uploaded.</pre>';
	}
	else {
		// Yes!
		echo "<pre>{$target_path} succesfully uploaded!</pre>";
	}
}
?> 
</div>
</body>
</html>



