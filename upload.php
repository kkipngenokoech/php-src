<?php
$target_directory = "uploads/";
$target_file = $target_directory.basename($_FILES["file"]["name"]);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// we are going to check if the image is true or false

if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false)
    {
        echo "file is an image - ".$check["mime"].".";
        $uploadOk = 1;
    }
    else
    {
        echo "file is not an image.";
        $uploadOk = 0;
    }
}

if(file_exists($target_file))
{
    echo "sorry the file already exists";
    $uploadOk = 0;
}

if ($_FILES["file"]["size"] > 500000)
{
    echo "file is too large";
    $uploadOk = 0;
}

if ($uploadOk == 0)
{
    echo "upload failed";
}
else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }
    else 
    {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>