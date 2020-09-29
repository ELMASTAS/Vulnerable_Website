<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

}
?>
<html>
    <head>
        <title>Tetra Login Page</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
			
        <div class="container">
            <form method="post" action="process.php">
                <div id="div_login">
                    <h1>Login</h1>
				   
				   <?php 
				     if(@$_GET['Empty']==true)
					 {
					?>	 
					  <div class="alert-light text-danger text-center py-3"> <?php echo $_GET['Empty'] ?> </div>
					<?php
					 }
				   ?>
				   
				  <?php 
				     if(@$_GET['g']==true)
					 {
					?>	 
					  <div class="alert-light text-danger text-center py-3"> <?php echo $_GET['g'] ?> </div>
					<?php
					 }
				   ?>
				   
					
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit"  />
                    </div>

                </div>
            </form>
        </div>
    </body>
</html>

