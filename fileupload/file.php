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
       move_uploaded_file($_FILES['pdf']['tmp_name'],'./fileupload/uploads/'.$_FILES['pdf']['name']);

    
    ?>
 

   </pre>


    <form action="" method="post" enctype="multipart/form-data">  
        <input type = "file" name="pdf">
        <input type="submit" name="submit" value="submit">
    </form> 
    
    
</body>
</html>



