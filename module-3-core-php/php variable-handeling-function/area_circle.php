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
        $p=$_POST["p"];
        $r=$_POST["r"];
        $a=$p*pow($r,2);
        echo "<h1>The area of circle :$a</h1>";
      }
    ?>
   <h1>Area of circle</h1>
    <form method="post">
        <label>Enter Pie values :</label>
        <input type="text" name="p" placeholder="a values" />
        <br><br>

        <label>Enter radius of circle :</label>
        <input type="text" name="r" placeholder="b values" />
        <br><br>
    
        
    
        <input type="submit" name="sub" value="Add" />
        <br><br>

    </form>
    
</body>
</html>    
</body>
</html>