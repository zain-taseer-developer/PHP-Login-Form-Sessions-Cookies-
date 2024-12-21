<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container" style="flex-direction: column">
      
      <form
        class="formPart"
        action=""
        method="post" 
        enctype="multipart/form-data"
      >
      <h1
        
        class="loginHead"
      >
        LOGIN
      </h1>
        <label for="nameHere" class="formLabel">UserName:</label>
        <input
          type="text"
          id="nameHere"
          name="nameHere"
          placeholder="Enter your full name"
          required
          class="formInputs"
        />

        <label for="passwordHere" class="formLabel">Password:</label>
        <input
          type="text"
          id="passwordHere"
          name="passwordHere"
          placeholder="Enter your Password"
          required
          class="formInputs"
        />

        <!-- <input type="file" name="uploadfile" /> -->
        <input type="submit" value="Submit" id="btndefalt" name="login"/>
      </form>
    </div>
  </body>

  <script>
    document.querySelector("#btndefalt").addEventListener("click", (e) => {
      document.querySelector("#btndefalt").style.color = "red";
    });
  </script>
</html>


<?php 
include("dbconnection");
echo "</br>";
if(isset($_POST['login'])){
    $username=$_POST['nameHere'];
    $pwd=$_POST['passwordHere'];
    // echo $username;
    // echo $pwd;
    $query="SELECT * FROM newphplogintable WHERE name='$username' && password='$pwd' ";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  // echo $total;
if($total==1){
// echo "data matched login";
$_SESSION['user_name']=$username;
header('location:DisplayPage.php');

}else{
  echo"In login  something wrong with data match";
}
}

?>