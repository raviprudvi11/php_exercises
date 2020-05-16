<?php
//var_dump($_FILES);

define('TARGET_DIR','uploaded_files/');
define('FILE_DATA_NAME','thefile');
          
if(isset($_FILES[FILE_DATA_NAME])) {

   $target_file = TARGET_DIR.$_FILES[FILE_DATA_NAME]["name"];          // Final uploaded file full name
   $upload_ok = move_uploaded_file($_FILES[FILE_DATA_NAME]["tmp_name"], $target_file);
   header('location: show_files.php');
}
else{
   header('location:index.php');
    exit();
}
