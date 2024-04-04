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

        /* Metin stil */
        p {
            font-size: 17px;
            color: #27EE04;
            text-align: center;
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
<br>
<div style="text-align:center;color:white">
 <form id="form_login" method="get" action="injection.php">
   <label for="name">id giriniz:</label>
   <input name="id_textbox" type="text">
   <input name="sorgula" type="submit" value="Sorgula">
 </form>
</div>


<?php
//veritabanı bağlantısını yaptım 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//veritabanı bağlantısını kontrol edelim?
if (mysqli_connect_errno())
{
    echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}
//else
//	 echo "MySQL bağlantısı başarılı :)  ". "<br>";
 
	


?>
<div id="veritabani">
<?php
if(isset($_GET['sorgula'])){
$id= $_GET['id_textbox'];

$sql = "SELECT id, username, password FROM users where id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. " - Name: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
	}
	}

}
else 
	echo "sayfa görüntülenemiyor!!"
	

?>
</div>
</body>

</html>

-------------------------------------------------
