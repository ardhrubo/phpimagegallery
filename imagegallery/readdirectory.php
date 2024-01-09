<?php


function directoryReader($directory,array $exclude = array('.','..')){
    $files = [];




    if(!is_dir($directory)){
        return null;
    } 

    if(($openDir = opendir($directory))){
        while(($file = readdir($openDir)) !== false){
            
            if(in_array($file,$exclude)){
                continue;
            }

            $files[] = $directory. '/' . $file;
            

        }
        
       
    }

    closedir($openDir);
    
    // if(!($fileDirectory = opendir($directory))){
    //     return null;
      
    // }
    // while(($file = readdir($directory)) !== false ){
    //     var_dump($file) ;
    // }

    



    // loop throught the file
    // do some check
    // add to image  array
    // return images array

   return $files;

}


?>


