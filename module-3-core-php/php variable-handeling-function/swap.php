<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
      if(isset($_POST["sub"]))
      {
        $a=$_POST["a"];
        $b=$_POST["b"];
        // swap 
        $a=$a+$b; // 30
        $b=$a-$b; //10
        $a=$a-$b; //20

        echo "<h1>after swap a is $a and after swap b is : $b</h1>";
      }
    ?>
   <h1>swap two number without using third variables</h1>
    <form method="post">
        <label>Enter a values :</label>
        <input type="text" name="a" placeholder="a values" />
        <br><br>

        <label>Enter b values :</label>
        <input type="text" name="b" placeholder="b values" />
        <br><br>
    
        <input type="submit" name="sub" value="Add" />
        <br><br>

    </form>
    
</body>
</html>    
</body>
</html>