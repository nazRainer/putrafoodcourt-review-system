<?php
session_start();
 require('dbconfig.php');
extract($_POST);
if(isset($sub)){
  $user=$_SESSION['user'];
  $sql=mysqli_query($conn,"select * from feedback where StudentID='$user'");
  $r=mysqli_num_rows($sql);
  if($r==true){
  echo "<h2 style='color:red'>You already given feedback</h2>";
  }
  else{
    $query="insert into feedback (`StudentID`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `date`) values('$user','$q1','$q2','$q3','$q4','$q5','$q6','$q7',now())";
    mysqli_query($conn,$query);
    echo "<h2 style='color:green'>Thanks for your feedback :) </h2>";
  }
}
?>
<html>
<title>PFC Feedback</title>
<head>
<style>
body{
  font-family: sans-serif;
  background-color: black;
  background-image: url("image/pfc.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
button{
  border: none;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
}
fieldset{
  background-color: white;
  color: black;
}
</style>
  </head>
    <body>
      <form method="post">
        <center><h2 style="color:rgba(200, 35, 75); font-size: 50px;">PFC FEEDBACK FORM</h2>
        </center>
        <center>
          <h3 id="01">Answer question below:</h3>
          <script>
            var myElement = document.getElementById("01");
            myElement.textContent = "Answer the following questions using the following scales:";
          </script>
          <?php $grade = array('5-Excellect', '4-Good', '3-Nice', '2-Poor', '1-Bad'); ?>
          <button type="button" style="font-size:12pt;color:white;background-color:green;"><?php echo json_encode($grade[0]);?></button>
          <button type="button" style="font-size:12pt;color:white;background-color:teal;"><?php echo json_encode($grade[1]);?></button>
          <button type="button" style="font-size:12pt;color:white;background-color:dodgerblue;"><?php echo json_encode($grade[2]);?></button>
          <button type="button" style="font-size:12pt;color:white;background-color:tomato"><?php echo json_encode($grade[3]);?></button>
          <button type="button" style="font-size:12pt;color:white;background-color:red;"><?php echo json_encode($grade[4]);?></button>
          <br>
          <h3></h3>
          <table class="table table-bordered">
            <tr>
              <td><b>1:</b> Service Quality:</td>
              <td><input type="radio" name="q1" value="5" required>5
                <input type="radio" name="q1" value="4">4
                <input type="radio" name="q1" value="3">3
                <input type="radio" name=" q1" value="2">2
                <input type="radio" name="q1" value="1">1</td>
            </tr>
            <tr>
              <td>
                <b>2:</b> Cleanliness:
              </td>
              <td><input type="radio" name="q2" value="5" required>5
                <input type="radio" name="q2" value="4">4
                <input type="radio" name="q2" value="3">3
                <input type="radio" name=" q2" value="2">2
                <input type="radio" name="q2" value="1">1</td>
            </tr>
            <tr>
              <td>
                <b>3:</b> Price of the food:
              </td>
              <td>
                <input type="radio" name="q3" value="5" required>5
                <input type="radio" name="q3" value="4">4
                <input type="radio" name="q3" value="3">3
                <input type="radio" name="q3" value="2">2
                <input type="radio" name="q3" value="1">1
              </td>
            </tr>
            <tr>
              <td>
                <b>4:</b> Foodcourt's Toilet:
              </td>
              <td>
                <input type="radio" name="q4" value="5" required>5
                <input type="radio" name="q4" value="4">4
                <input type="radio" name="q4" value="3">3
                <input type="radio" name="q4" value="2">2
                <input type="radio" name="q4" value="1">1
              </td>
            </tr>
            <tr>
              <td>
                <b>5:</b> Quanlity of the food:
              </td>
              <td>
                <input type="radio" name="q5" value="5" required>5
                <input type="radio" name="q5" value="4">4
                <input type="radio" name="q5" value="3">3
                <input type="radio" name="q5" value="2">2
                <input type="radio" name="q5" value="1">1
              </td>
            </tr>
            <tr>
              <td>
                <b>6:</b> Overall performance:
              </td>
              <td>
                <input type="radio" name="q6" value="5" required>5
                <input type="radio" name="q6" value="4">4
                <input type="radio" name="q6" value="3">3
                <input type="radio" name="q6" value="2">2
                <input type="radio" name="q6" value="1">1
              </td>
            </tr>
          </table>
          <h3>Suggestion for improvement:</h3>
          <textarea name="q7" rows="5" cols="40" id="comments" style="font-family:sans-serif;font-size:1.2em;"> </textarea>
          <h3></h3>
          <table>
            <tr>
              <td>
                <p><button type="submit" style="font-size:10pt;color:white;background-color:rgba(200, 35, 75);padding:7px" name="sub">Submit</button></p>
              </td>
              <td>
                <p><button type="reset" style="font-size:10pt;color:white;background-color:grey;padding:7px" name="sub">Reset</button></p>
              </td>
              <td>
                <a href="login.php">Log Out</a>
              </td>
            </tr>
          </table>
        </form>
      </center>
    </body>
</html>
