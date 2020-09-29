<!DOCTYPE html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM users where id=. $_POST["kul_id"]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>

<html>
<body>


<form method = "GET" action="test.php">
  <label for="fname">id</label><br>
  
  <input type="text" id="id" name="kul_id" value=""><br>
  
 <button type="button" onclick="">Sorgula</button>
  
</form> 




</body>


</html>
