<?php 
if(isset($_POST["upload"]))
{
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = "products/".$_FILES["file"]["name"];
    // Ensure the uploads directory exists
    move_uploaded_file($tmp_name,$name  );

    echo "<h2>File successfully uploaded</h2>";

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
