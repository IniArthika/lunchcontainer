<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];

        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        
        // Define allowed file types
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
        if (in_array($fileType, $allowedTypes)) {
            // Specify the target directory for uploads
            $uploadDir = 'uploads/';
            $destinationPath = $uploadDir . basename($fileName);
            
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destinationPath)) {
            } else {
                echo "Error moving the uploaded file.";
            }

            
        } else {
            echo "Unsupported file type.";
        }
    } else {
        echo "Error uploading file.";
    }

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <h3>
        <?php 
            echo $nama;
        ?>
    </h3>    
    <h3>
        <?php 
            echo $deskripsi;
        ?>
    </h3>    
    <h3>
        <?= $harga; ?>
    </h3>    
        
    <h1>
        <?php 
              echo "<img src='$destinationPath' alt='Uploaded Image' style='max-width: 400px;'>";
        ?>
    </h1>



</body>
</html>