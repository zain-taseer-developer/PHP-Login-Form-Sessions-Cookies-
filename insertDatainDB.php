<?php 
include_once('./dbconnection');
// echo "<pre>";
// print_r($result->num_rows);
// echo "</pre>";



if(isset($_GET['inserttick'])){
$sql="INSERT INTO `newphplogintable` (`name`, `password`) VALUES ('paras', '333');";
$result=mysqli_query($conn,$sql);
if($result){

echo "Done Inserted data";

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
<button name="inserttick">Insert Now</button>
</form>