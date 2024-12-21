<?php 
if(isset($_POST['name_input_file'])){
  $filename="./files/".$_POST["name_input_file"];
  $content=$_POST['content_input_file'];
  $file=fopen($filename,'w');
  fwrite($file,$content);
  fclose($file);
  echo "file created";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>  

  <form action="" method="post" style="display:flex; flex-direction:column;">
    <label for="filenameee">Write File Name </label>
  <input type="text" name="name_input_file" id="filenameee">
  <label for="contentt">Write File Content</label>
  <textarea name="content_input_file" id="contentt"></textarea>
  <button> Create File</button>
  </form>   

</body>
</html>