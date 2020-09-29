<?php include("ayarlar.php");?>

<!DOCTYPE html>
<html  xml:lang="en">
<head>
	<meta charset="utf-8" />
	<title>Veri gönderme</title>
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
 <form id="form_login" method="get" action="goster.php">
   <label for="name">id giriniz:</label>
   <input name="id_textbox" type="text">
   <input name="sorgula" type="submit" value="Sorgula">
 </form>
</div>
</body>

</html>