<?php 
// download a file via header function in php_check_syntax
if (isset($_POST['dwn'])) {
    //$file = basename($_GET['file']);
    $filepath = 'brijesh.jpg';

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filepath . '"');
        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}

?>
<<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form method="post">
      <h1>Download File</h1>
      <p>
        To download a file, please provide the file name in the URL as a query
        parameter.
      </p>
      <p>Example: <input type="submit" name="dwn" /></p>
    </form>
  </body>
</html>
