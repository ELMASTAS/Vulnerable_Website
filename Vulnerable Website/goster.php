<!DOCTYPE html>
<html>
<head>
<style>
#veritabani{
	 width: 20%;
     margin: 0 auto;
	
}
</style>
</head
<body>
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
