<?php 
class A 
{
    public function display()
    {
        if(isset($_POST["chk"]))
        {
            $arr=array("brijesh","kaushik","sanket","harsh","krish","vishwjeet");

            $name=$_POST["name"];
            if(in_array($name,$arr))
            {
                echo "<h1 style='color:green'>This name is available &#9786 </h1>";
            }
            else 
            {
                
                echo "<h1 style='color:red'>This name is Not available &#9785 </h1>";
            }

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
      <label>Enter your Name ?</label>
      <br />
      <input type="text" name="name" placeholder="Name check" />
      <br /><br />

      <input type="submit" value="submit" name="chk" />
    </form>
  </body>
</html>
