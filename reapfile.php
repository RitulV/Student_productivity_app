<?php
if (isset($_POST['submit'])) {
    // Check if a file was selected for upload
    if (isset($_FILES['fileToUpload'])) {
        $file = $_FILES['fileToUpload'];

        // Check for errors during file upload
        if ($file['error'] === UPLOAD_ERR_OK) {
            $file_name = $file['name'];
            $file_temp = $file['tmp_name'];

            // You can choose where to save the uploaded file
            $upload_dir = 'uploads/';
            $destination = $upload_dir . $file_name;

            // Move the uploaded file to the desired location
            if (move_uploaded_file($file_temp, $destination)) {
                // Read and display the contents of the uploaded file
                $file_contents = file_get_contents($destination);
                echo "File uploaded successfully!<br>";
                echo "File name: " . $file_name . "<br>";
                echo "File contents:<br>";
                echo "<pre>" . $file_contents . "</pre>";
            } else {
                echo "Failed to move the uploaded file.";
            }
        } else {
            echo "File upload error: " . $file['error'];
        }
    } else {
        echo "No file selected for upload.";
    }
}
?>