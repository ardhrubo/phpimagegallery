<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   


<form action="" method="post" enctype="multipart/form-data">  
        <input type="file" name="photo[]" multiple>
        <input type="submit" name="submit" value="submit">
    </form> 
    


<pre>
    <?php 

        print_r($_FILES);

        print_r($_POST);
                
        // print_r($_SERVER);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_FILES['photo']){
        
                foreach($_FILES['photo']['tmp_name'] as $key => $tmp_name ){
                
                

                $allowed = ['image/jpeg','image/png','image/jpg'];

                    if(!in_array($_FILES['photo']['type'][$key],$allowed)){
                        echo 'File type not supported. Only jpg,jpeg and png are allowed';
                        exit;
                    
                    }
                    if($_FILES['photo']['size'][$key]> 1020*1024){
                        echo 'File size should be less than 1 mb';
                        exit;
                    }
            
                move_uploaded_file($tmp_name,'./fileupload/uploads/'.$_FILES['photo']['name'][$key]);
            
                }

            }   

        } else {
            echo 'please fill up the form';
            exit;
        }
        
    ?>
</pre>



    
</body>
</html>



