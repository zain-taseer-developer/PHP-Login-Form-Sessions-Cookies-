
<?php 
include_once('./dbconnection');
// echo "<pre>";
// print_r($result->num_rows);
// echo "</pre>";



if(isset($_GET['Deletetick'])){
$sql="delete from newphplogintable where name='paras'";
$result=mysqli_query($conn,$sql);
if($result){

echo "Done deleted data";

}

else{
  echo "connection fail hai".mysqli_connect_error();
}
}
else{
  echo "Xlick on btn";
}
?>

<form action="" method="get">
<button name="Deletetick">Insert Now</button>
</form>