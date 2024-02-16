<?php
if (isset($_POST['submit'])) {
     $file = $_FILES['file']; 
     $fileName = $file['name']; 
     $fileTmpName = $file['tmp_name']; 
     $fileSize = $file['size']; 
     $fileError = $file['error'];
    // Check if there is no error 
if ($fileError === 0) { 
    $uploadPath = 'uploads/' . $fileName; // Directory where to upload the file 
    move_uploaded_file($fileTmpName, $uploadPath); 
    echo "File uploaded successfully!";
    } else { 
        echo "Error uploading file."; 
    } } ?>