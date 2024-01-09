<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

 <h1 style="text-align: center; background-color: #e34fb2; "> Image Gallery </h1>
 
    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="photo[]" multiple id="">
        <input type="submit" name="submit" value="submit">

    </form>

    <br>
    
</body>

</html>





<?php

include('./imagegallery/readdirectory.php');

$dir = opendir(directory:'./imagegallery/images');

$images =  directoryReader(directory:'./imagegallery/images');



if(!$images){

    die('No folder found');

} 


// while($imageFile = readdir($dir)){
//     var_dump($imageFile);
// }


?>

