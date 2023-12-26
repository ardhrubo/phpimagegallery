<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <pre>
    <?php 
        print_r($_FILES);
      

    
    if($_FILES['photo']){
        $allowed = ['image/jpeg','image/png','image/jpg'];

        if(in_array($_FILES['photo']['type'],$allowed)){

            move_uploaded_file($_FILES['photo']['tmp_name'],'./fileupload/uploads/'.$_FILES['photo']['name']);
            
        }  else {
            echo "This is not a right file type, only jpg,jpeg,png allowed";
        }

    }
 

    ?>
 


   </pre>


    <form action="" method="post" enctype="multipart/form-data">  
        <input type = "file" name="photo">
        <input type="submit" name="submit" value="submit">
    </form> 
    
    
</body>
</html>



