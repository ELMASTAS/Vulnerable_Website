<!DOCTYPE html>
<html>
<head>
    <title>Injection Test</title>
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
            font-family: Arial, sans-serif;
        }

        /* Arka plan GIF resmi stilleri */
        #gif-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('ss.jpg') no-repeat center center fixed;
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
            text-align: center;
        }

        li {
            display: inline;
            margin: 0 10px;
        }

        li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        li a:hover {
            background-color: #F3B416;
        }

        /* Buton stilleri */
        .myButton {
            float: right;
            background: #000;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
        }

        .myButton:hover {
            background: #222;
        }

        /* Form stilleri */
        .my_div {
            margin-top: 20px;
            text-align: center;
        }

        label {
            color: white;
        }

        input[type="text"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #27EE04;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #27EE04;
        }

        pre {
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="gif-container"></div>

    <!-- Ana başlık -->
    <h1>XSS Test</h1>

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
    
    <!-- Form -->
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

