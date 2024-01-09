<?php
function uploadFiles($filesArray) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($filesArray['photo'])){
            foreach($filesArray['photo']['tmp_name'] as $key => $tmp_name ){
                $allowed = ['image/jpeg','image/png','image/jpg'];
                if(!in_array($filesArray['photo']['type'][$key], $allowed)){
                    echo 'File type not supported. Only jpg, jpeg, and png are allowed';
                    exit;
                }
                if($filesArray['photo']['size'][$key] > 1020*1024){
                    echo 'File size should be less than 1 MB';
                    exit;
                }
                move_uploaded_file($tmp_name, './imagegallery/images/'.$filesArray['photo']['name'][$key]);
            }
        } else {
            echo 'Please fill up the form';
            exit;
        }
    }
}


?>
