<?php
session_start();
require('dbconfig.php');
extract($_POST);
if(isset($login))
{
	if($email=="" || $pass=="")	{
	   $errormessage="<font color='red'>Please fill everything first !</font>";
	}
	else{
    $sql=mysqli_query($conn,"select * from user where Email='$email' and Password='$pass'");
    $r=mysqli_num_rows($sql);
    if($r==true){
      $_SESSION['user']=$email;
      header('location:give_feedback.php');
    }
    else{
      $errormessage="<font color='red'>Invalid email/password! Please try again</font>";
    }
  }
}

?>
<html>
  <title>PFC Login</title>
  <head>
    <style>
      body{
        font-family: sans-serif;
        background-image: url("image/bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      h1{
        background-color: rgba(200, 35, 75);
        padding: 10px;
        color: white;
        font-family: helvetica;
      }
      a{
        color: blue;
      }
      .btn{
        border: none;
        cursor: pointer;
        padding: 5px;
        border-radius: 4px;
      }
#login{
  background-color: rgba(200, 35, 75);
  color: white;
}

    </style>
  </head>
  <center>
    <body>
      <h1>PUTRA FOODCOURT FEEDBACK</h1>
      <img src="image/upm.png" >
      <form method="post">
	       <div class="row">
		         <h2>LOGIN PAGE</h2>
		           <?php echo @$errormessage; ?>
		             <div>UPM Email:</div>
		               <input type="email" name="email" class="form-control"/>
		             <div><br>Password:</div>
		               <input type="password" name="pass" class="form-control"/>
	               <div class="row" style="margin-top:10px">
									 <h5><h5>
                   <input type="submit" value="Login" name="login" class="btn btn-info" id="login"/>
                   <input type="reset" value="Reset" class="btn"/>
                   <p>Haven't register yet?
                     <a href="registration.php">Click Here</a>
                   </p>
    </form>
    </div>
    </div>
    </body>
  </center>
</html>
