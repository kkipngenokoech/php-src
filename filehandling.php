<?php
$readFile = readfile("/")

?>

<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Hello World</h1>
        <p>This is the body of the page</p>

        <form action="./upload.php" method="POST" enctype="multipart/form-data">
            select image to upload:
            <br>
            <input type="file" name="file" />
            <br> <br>
            <input type="submit" value="Upload" name="submit"/>
        </form>

    </body>
