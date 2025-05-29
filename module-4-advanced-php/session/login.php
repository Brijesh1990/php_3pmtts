<?php 
error_reporting(0);
ob_start();
session_start();
if(isset($_POST["login"]) || $_POST["chk"])
{
    $em=$_POST["email"];
    $name=$_POST["name"];
    $pwd=$_POST["password"];
    $chk=$_POST["chk"];

    if($em=='brijesh@gmail.com' && $pwd=='brijesh123')
    {
        // used to stored session 
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["name"]=$_POST["name"];
        setcookie("email",$_POST["email"], time() + 3600, "/"); // Set cookie for 1 hour
        setcookie("password",$_POST["password"], time() + 3600, "/"); // Set cookie for 1 hour

        //  setcookie("email",$_POST["email"]); // Set cookie for 1 hour
        // setcookie("password",$_POST["password"]); // Set cookie for 1 hour

        echo "<div class='alert alert-success w-50 mt-5 mx-auto p-2'>
        <span class='fs-4'>You are Logged in successfully</span>
        </div>";

        header("refresh:2,dashboard.php");
    }
    else 
    {
         echo "<div class='alert alert-danger w-50 mt-5 mx-auto p-2'>
        <span class='fs-4'>Your email and password are wrong try again</span>
        </div>";

        header("refresh:2,login.php");
    }
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>session</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<div class="w-50 p-5 mt-5 shadow mx-auto">
    <h3>Login here >></h3>
    <form method="post">
        <div class="form-group mt-3">
            <input type="text" name="email" value="<?php echo $_COOKIE["email"];?>" placeholder="email" required>
        </div>

        <div class="form-group mt-3">
            <input type="hidden" name="name"  placeholder="email" required>
        </div>
        
        <div class="form-group mt-3">
            <input type="password" name="password" value="<?php echo $_COOKIE["password"];?>" placeholder="password" required>
        </div>

        <div class="form-group mt-3">
            Remember Me :<input type="checkbox" name="chk">
        </div>

        
        <div class="form-group mt-3">
            <input type="submit" name="login" value="Login">
        </div>
    </form>
</div>
</body>
</html>