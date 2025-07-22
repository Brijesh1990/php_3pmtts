<?php 
class A 
{
    public function display()
    {
        if(isset($_POST["ad"]))
        {
            $a=$_POST["a"];
            $b=$_POST["b"];
            $c=$a+$b;
            echo "Additions of numbers is :".$c;
        }
    }
}

$obj=new A;
$obj->display();
 ?>
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
    <form method="post">
      <label>Enter a values</label>
      <br />
      <input type="text" name="a" placeholder="a values" />
      <br /><br />

      <label>Enter b values</label>
      <br />
      <input type="text" name="b" placeholder="b values" />
      <br /><br />
      <input type="submit" value="submit" name="ad" />
    </form>
  </body>
</html>
