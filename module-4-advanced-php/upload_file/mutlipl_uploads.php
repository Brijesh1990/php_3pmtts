<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  </head>
  <body>
    <?php
    //  multiple file upload script
    if (isset($_POST["upload"])) {
        $upload_dir = "uploads/";
        $errors = [];
        $uploaded_files = [];

        foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
            $name = basename($_FILES["files"]["name"][$key]);
            $type = $_FILES["files"]["type"][$key];
            $size = $_FILES["files"]["size"][$key];
            $error = $_FILES["files"]["error"][$key];

            if ($error === UPLOAD_ERR_OK) {
                $upload_file = $upload_dir . $name;
                if (move_uploaded_file($tmp_name, $upload_file)) {
                    $uploaded_files[] = htmlspecialchars($name);
                } else {
                    $errors[] = "Error moving file: " . htmlspecialchars($name);
                }
            } else {
                $errors[] = "Error uploading file: " . htmlspecialchars($name) . " - Error code: " . htmlspecialchars($error);
            }
        }

        if (!empty($uploaded_files)) {
            echo "<h2>Files successfully uploaded:</h2>";
            echo "<ul>";
            foreach ($uploaded_files as $file) {
                echo "<li>" . htmlspecialchars($file) . "</li>";
            }
            echo "</ul>";
        }

        if (!empty($errors)) {
            echo "<h2>Errors:</h2>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>" . htmlspecialchars($error) . "</li>";
            }
            echo "</ul>";
        }
    }
   ?>

    <form method="post" enctype="multipart/form-data">
      <label for="files">Select files to upload:</label>
      <input type="file" name="files[]" id="files" multiple required />
      <br /><br />
      <input type="submit" name="upload" value="Upload Files" />
    </form>
  </body>
</html>
