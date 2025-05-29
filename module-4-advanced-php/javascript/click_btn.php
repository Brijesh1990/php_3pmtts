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
        //    function handleClick() {
        //     var name="Brijesh kumar pandey";
        //        alert("Name is :" + name);
        //    }


         function handleClick() {
            var name="Brijesh kumar pandey";
               document.getElementById("demo").innerHTML = "Name is: " + name;
           }
    </script>
    <p id="demo"></p>
    <button type="button" onclick="handleClick()">Click Me!</button>
</body>
</html>