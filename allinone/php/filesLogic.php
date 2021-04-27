<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'login_sample_db');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $sname = $_POST['subjects'] ;
    $desc = $_POST['descriptions'] ; 

    $filename = $_FILES['myfile']['name'];
    $file = $_FILES['myfile']['tmp_name'];      // the physical file on a temporary uploads directory on the server
    $size = $_FILES['myfile']['size'];
    $fileError = $_FILES['myfile']['error'] ;   // For error 

    $fileExt = explode('.', $filename) ;
    $fileActualExt = strtolower(end($fileExt)) ;    // get the file extension

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    // $extension = pathinfo($filename, PATHINFO_EXTENSION);

    
   

    if (!in_array($fileActualExt, ['pdf', 'docx'])) {
        echo "You cannot upload file of this type.";
    } elseif ($_FILES['myfile']['size'] > 1000000000) { 
        echo "Your file is too big!!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, sname, description, size, downloads) VALUES ('$filename','$sname', '$desc', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}