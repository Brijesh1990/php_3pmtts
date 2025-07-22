<?php 
if(isset($_POST["upload"]))
{
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = basename($_FILES["file"]["name"]);
    $type = $_FILES["file"]["type"];
    $size = $_FILES["file"]["size"];
    $error = $_FILES["file"]["error"];
    $upload_file = "uploads/".$_FILES["file"]["name"];
    // Ensure the uploads directory exists
    move_uploaded_file($tmp_name,$upload_file);

    echo "<h2>File Details:</h2>";
    echo "<p>File Name: " . htmlspecialchars($name) . "</p>";   
    echo "<p>File Type: " . htmlspecialchars($type) . "</p>";
    echo "<p>File Size: " . htmlspecialchars($size) . " bytes</p>";
    echo "<p>Error Code: " . htmlspecialchars($error) . "</p>";
    if ($error === UPLOAD_ERR_OK) {
        if (move_uploaded_file($tmp_name, $upload_file)) {
            echo "<p>File uploaded successfully to: " . htmlspecialchars($upload_file) . "</p>";
        } else {
            echo "<p>Error moving the uploaded file.</p>";
        }
    } else {
        echo "<p>Error uploading file: " . htmlspecialchars($error) . "</p>";
    }


}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>upload file</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data">
      <label for="file">Select file to upload:</label>
      <input type="file" name="file" id="file" required />
      <br /><br />
      <input type="submit" name="upload" value="Upload File" />
    </form>
  </body>
</html>
