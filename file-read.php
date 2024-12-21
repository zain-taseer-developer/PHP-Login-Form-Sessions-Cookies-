<?php 
$file_path="./files/dummy.txt";
$File=fopen($file_path,'r');
echo fread($File,filesize($file_path));
fclose($File);


// $file_path = "./files/dummy.txt";
// $File = fopen($file_path, 'r');
// echo fread($File, filesize($file_path));
// fclose($File);



?>