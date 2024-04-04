<?php 


session_start();
require_once('config.php');

	if(isset($_POST['but_submit'])){
		
		
		if(empty($_POST['txt_uname']) || empty($_POST['txt_pwd']))
		{
		header("location:login.php?Empty=Lütfen kullanıcı adı ve şifre gir!");
			
		}else
		{
			$query="select * from users where username='".$_POST['txt_uname']."' and password='".$_POST['txt_pwd']."'";
			$result = $con->query($query);
			if(mysqli_fetch_assoc($result))
			{
				$_SESSION['user']=$_POST['txt_uname']; 
				header("location:index.php");
			}
			else
			{
				header("location:login.php?g=Yanlış kullanıcı adı veya şifre!");
			}
			
		}
		
	}
		else
		{
			echo 'Button is not working'; 
			
		}



?>
