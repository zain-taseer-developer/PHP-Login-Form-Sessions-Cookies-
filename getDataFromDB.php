<?php 
include_once('./dbconnection');
// echo "<pre>";
// print_r($result->num_rows);
// echo "</pre>";


$sql="select * from newphplogintable where name='zain'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){

$row=mysqli_fetch_assoc($result);


// while($row=mysqli_fetch_assoc($result)){
// echo "Name is :". $row['name'] . "</br>" ."Password is :" .$row['password'];
// }


foreach($row as $keys=>$dataAll){
echo $dataAll ."its keys is".$keys."<br>";
}
}

else{
  echo "connection fail hai".mysqli_connect_error();
}


?>