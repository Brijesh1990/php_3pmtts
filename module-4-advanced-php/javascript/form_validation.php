<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>validation </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/valid.js'></script>
</head>
<body>
<h1>Form Validation Example</h1>
    <form method="post" action="welcome.php" name="myForm" onsubmit="return valid(this.value)">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        <br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter your email">
        <br><br>
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" min="1" max="120" placeholder="Enter your age">
        <br><br>
        
        <input type="submit" value="Submit">
    
    </form>
</body>
</html>