<?php
session_start();
 require('dbconfig.php');
extract($_POST);
if(isset($register)){//check user alereay exists or not
  $sql=mysqli_query($conn,"select * from user where Email='$email'");
  $r=mysqli_num_rows($sql);
  if($r==true){
    $errormessage= "<font color='red'><h3 align='center'>User already exists</h3></font>";
  }
  else{
    $query="insert into user(Name,Email,Password) values('$name','$email','$pass')";
    mysqli_query($conn,$query);
    $errormessage="<font color='blue'><h3 align='center'>Your new account has been succesfully created!<h3></font>";
  }
}

?>
<html>
  <title>PFC Register</title>
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
        padding: 15px;
        color: white;
      }
      a{
        color: blue;
      }
      .btn{
        border: none;
        cursor: pointer;
        padding: 7px;
        border-radius: 10px;
      }
      #register{
        background-color: rgba(200, 35, 75);
        color: white;
      }
    </style>
  </head>
  <body>
    <center>
      <h1>PUTRAFOODCOURT FEEDBACK </h1>
      <img src="image/upm.png" >
      <form method="post" enctype="multipart/form-data">
        <table class="table table-bordered" style="margin-bottom:50px">
        <caption><h2 align="center">Registration Page</h2></caption>
        <Tr>
          <Td colspan="2">
            <?php echo @$errormessage; ?>
          </Td>
        </Tr>
        <tr>
          <td>Name:</td>
          <Td><input  type="text" name="name" class="form-control" required/></td>
        </tr>
        <tr>
          <td>UPM Email: </td>
          <Td><input type="email" name="email" class="form-control" required/></td>
        </tr>
        <tr>
          <td>Password: </td>
          <Td><input type="password" name="pass" class="form-control" required/></td>
        </tr>
        <tr>
          <Td colspan="2" align="center">
            <input type="submit" value="Register" class="btn" name="register" id="register"/>
            <input type="reset" value="Reset" class="btn"/>
            <p>Already register?
              <a href="login.php">Click Here</a>
            </p>
          </td>
        </tr>
      </table>
    </form>
  </center>
</body>
</html>
