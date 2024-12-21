<?php 
session_start();
// echo "welcome :".$_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $check_username=$_SESSION['user_name'];
  if($check_username==true){
    echo " <h1> hello $check_username ! Your are logged in </h1>";
  }else{
    header('location:index.php');
  }
  ?>
  
  <a href="./logout.php"><button>LOGOUT ME :</button></a>
</body>
</html>