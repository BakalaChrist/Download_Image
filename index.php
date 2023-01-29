<?php
if (isset($_POST['upload'])) 
{
$file_name= $_FILES['file']['name'];
$file_type= $_FILES['file']['type'];
$file_size= $_FILES['file']['size'];
$file_tem_loc= $_FILES['file']['tmp_name'];
$file_store= "image/" . $file_name;

move_uploaded_file($file_tem_loc, $file_store);


}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    


<form action="?" method="POST" enctype="multipart/form-data">

<center style=" font-size:18px" >

<div class="form-control">
<label>Image à télécharger:</label>
    <input type="file" name="file" style="color:white;"> 
</div>
 <br><br>
 <input type="submit" value="Télécharger Image" name="upload">
</div>

     </center>

   </form>	


    
</body>
</html>