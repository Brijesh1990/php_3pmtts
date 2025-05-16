<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
     require("add-even.php");
    ?>
    <form method="post">
        <label for="name">Enter a Number:</label><br>
        <input type="text" id="name" name="number"><br>
        <input type="submit" value="Submit" name="chk">
    </form>

    </form>
</body>
</html>