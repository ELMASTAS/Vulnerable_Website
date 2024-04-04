<!DOCTYPE html>
<html>
<head>
    <title>File Upload Test</title>
    <meta charset="UTF-8">
    <style>
        /* Genel stiller */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        /* Arka plan GIF resmi stilleri */
        #gif-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('s.gif') no-repeat center center fixed;
            background-size: cover;
            z-index: -1;
        }

        /* Ana başlık stilleri */
        h1 {
            color: #27EE04;
            text-align: center;
        }

        /* Menü stilleri */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #111111;
        }

        li {
            float: left;
        }

        li a {
            display: table;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #F3B416;
        }

        /* Buton stilleri */
        .myButton {
            float: right;
            box-shadow: -2px 1px 0px 0px #fafafa;
            background: linear-gradient(to bottom, #000000 5%, #000000 100%);
            background-color: #000000;
            border-radius: 12px;
            display: inline-block;
            cursor: pointer;
            color: white;
            font-family: Arial;
            font-size: 24px;
            font-weight: bold;
            padding: 10px 28px;
            text-decoration: none;
            text-shadow: 0px 0px 0px #080808;
        }

        .myButton:hover {
            background: linear-gradient(to bottom, #000000 5%, #000000 100%);
            background-color: #000000;
        }

        .myButton:active {
            position: relative;
            top: 1px;
        }
    </style>
</head>

<body>
    <div id="gif-container"></div>

    <!-- Ana başlık -->
    <h1>File Upload Test</h1>

    <!-- Menü -->
    <ul>
        <li><a href='xss.php'  target='_self' title='şimdilik boş sayfa'>XSS Zaafiyet</a></li>
        <li><a href='injection.php' target='_self' title='şimdilik boş sayfa'>SQL Injection</a></li>
        <li><a href='common_injection.php' target='_self' title='şimdilik boş sayfa'>Command Injection</a></li>
        <li><a href='file.php' target='_self' title='şimdilik boş sayfa'>File Upload</a></li>
        <li><a href='' target='_self' title='şimdilik boş sayfa'>Brute Force</a></li>
        <li><a href='' target='_self' title='şimdilik boş sayfa'>CSRF</a></li>
    </ul>

    <!-- Logout butonu -->
    <?php
    session_start();
    if(isset($_SESSION['user'])) {
        echo '<a href="logout.php?logout" class="myButton">LOGOUT</a>';
    } else {
        header("location:login.php");
    }
    ?>
<br>
<br>
<br>
<br>

<div style="text-align:center;color:white">
<h2>Dosya Yükleme Formu</h2>
<form action="file.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload Image" name="submit">
</form>


<?php
if( isset( $_POST[ 'submit' ] ) ) {
	// Where are we going to be writing to?
	$target_path  =  '/opt/lampp/htdocs/test/s/upload/';
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

