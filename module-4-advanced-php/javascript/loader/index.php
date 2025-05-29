<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>validation </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/valid.js'></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #content 
        {
            width: 50%;
            height: auto;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display:none;
        }
        #loader {
            position: absolute;
            width:380px;
            height: 400px;
            background: url('https://assets-v2.lottiefiles.com/a/91cc0ece-1150-11ee-b7cb-d3afb5c0c001/QNF78Uk4YE.gif') no-repeat;
            left: 35%;
            top: 0%;
        }

        </style>
</head>
<body onload="mainLoader()">
<div id="loader"></div>
<div id="content">
    <h1>Form Validation Example</h1>
    <p>Fill out the form below and click submit to see validation in action.</p>
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

    </div>
</body>
</html>