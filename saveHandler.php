<?php
    $fileParam = "files";
    $uploadRoot = "uploads/";
    $files = $_FILES[$fileParam];
 
    if (isset($files['name']))
    {
        $error = $files['error'];
 
        if ($error == UPLOAD_ERR_OK) {
            $targetPath = $uploadRoot . basename($files["name"]);
            $uploadedFile = $files["tmp_name"];
 
            if (is_uploaded_file($uploadedFile)) {
                if (!move_uploaded_file($uploadedFile, $targetPath)) {
                    echo "Error moving uploaded file";
                }
            }
        } else {
            // See http://php.net/manual/en/features.file-upload.errors.php
            echo "Error code " . $error;
        }
    }

     // Return an empty string to signify success
     echo "";
?>