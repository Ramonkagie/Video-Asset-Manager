<?php
    $fileParam = "files";
    $uploadRoot = "uploads/";
    $targetPath = $uploadRoot . basename($_POST["fileNames"]);
 
    unlink($targetPath);
 
    // Return an empty string to signify success
    echo "";
?>