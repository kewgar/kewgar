
<?php

if (isset($_GET['user_id'])) 
        {
            $user_id = $_GET['user_id'];
        } 
        else 
        {
            $user_id = 29;
        }

// //chdir('/var/www/html/kewgar/dataset');
// $create2 = 'mkdir -p /var/www/html/kewgar/dataset/esad';
// exec($create2,$output);


$uploads_dir = "dataset/".$user_id."/"; //Directory to save the file that comes from client application.
if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
}
?>