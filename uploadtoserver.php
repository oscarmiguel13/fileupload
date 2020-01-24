<?php
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $fileSize = $_FILES["file"]["size"];
    $targetFilePath = $targetDir.$fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $errors = array();

    //echo $fileSize; die;

    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        
        if($fileSize >= 1033414){
            $errors[] = "Allowed file size must be less than 1Mb only.";
        }
        if(in_array($fileType, $allowTypes) === false){
            $errors[] = "Error uploading file. Allowed types (jpg, png, jpeg, gif, pdf) only.";
        }
        if(empty($errors) == true){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                echo "File successfully uploaded.";
            }
        }
        else{
            foreach($errors as $error){
                echo $error;
            }
        }    
        }
    else{
        echo "No file to upload.";
    }
?>