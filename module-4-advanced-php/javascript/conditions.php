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
    <script>
        function display()
        {
            var ag= document.getElementById("age").value;
            if(ag < 18) {
                document.getElementById("demo").innerHTML = "You are a minor.";
            } else if(ag >= 18 && ag < 60) {
                document.getElementById("demo").innerHTML = "You are an adult.";
            } else {
                document.getElementById("demo").innerHTML = "You are a senior citizen.";
            }
        }
    </script>
    <p id="demo"></p>
    Enter your age : <input type="text" id="age" name="age"><br><br>      
    <button type="button" onclick="display()">Click Me!</button>
</body>
</html>