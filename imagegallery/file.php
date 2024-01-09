

<?php

include('./imagegallery/readdirectory.php');
include('./imagegallery/filecheck.php');

$dir = opendir(directory:'./imagegallery/images');

$images =  directoryReader('./imagegallery/images');


// Call the uploadFiles function with the $_FILES array and the destination directory
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = './imagegallery/images'; 
    uploadFiles($_FILES, $destination);
}



if(!$images){

    die('No folder found');

} 


// while($imageFile = readdir($dir)){
//     var_dump($imageFile);
// }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

<div class="container">
    <div class="image-gallery">
        <div class="imgae-gallery-heading">
            <h1> Image Gallery </h1>
        
                <form action="" method="post" enctype="multipart/form-data">
                   
                    <input type="file"  name="photo[]" multiple id="fileUpload">
                    <input type="submit" name="submit" value="Upload" class="btn" >
                
                </form>
                 <br>
        </div>
        
  


        <div class="images">
            

            <?php foreach($images as $image): ?>

            <img src="<?php echo $image ?>">

            <?php endforeach; ?>


        </div>
    </div>
</div>


<style>



.container {
    display: grid;
    width: 80%;
    text-align: center;
    margin: auto;
    border: 2px solid #9f4242;
}
.images{
    display: flex;
    flex-wrap: wrap;
    justify-items: stretch;
    flex-direction: row;
    align-content: space-around;
    justify-content: center;
}

.images img {
    max-width: 600px;
    max-height: 600px;
    margin: 8px;
}
.imgae-gallery-heading {
    background-color: #cb264d;
    padding: 7px;
    margin-bottom: 20px;
}
.btn{
    border: 1px solid #253cdd;
    border-radius: 8px;
    background-color: #3838f5eb;
    color: white;
    padding: 8px 20px;
    margin: 0px -46px 

}
#fileUpload {
    border: 1px solid #7c2121;
    padding: 6px 4px;
    border-radius: 8px;
    color: #f3eae2;
    margin: 0px -43px;
    padding-right: 16px;
}


</style>
 
</body>

</html>



