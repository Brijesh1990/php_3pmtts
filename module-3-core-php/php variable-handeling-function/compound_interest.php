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
        $n=$_POST["n"];
        $r=$_POST["r"];

        $ci=$p*(pow((1+$r/100),$n));
        echo "<h1>The compound interest you have to paid off is :$ci</h1>";
      }
    ?>
   <h1>Calculate simple interest</h1>
    <form method="post">
        <label>Enter Principle ammount :</label>
        <input type="text" name="p" placeholder="a values" />
        <br><br>

        <label>Enter Number of years :</label>
        <input type="text" name="n" placeholder="b values" />
        <br><br>
    
        
        <label>Enter rate of interest :</label>
        <input type="text" name="r" placeholder="b values" />
        <br><br>
    
        <input type="submit" name="sub" value="Add" />
        <br><br>

    </form>
    
</body>
</html>    
</body>
</html>