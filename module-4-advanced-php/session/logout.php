<?php 
session_start();
unset($_SESSION["email"]);
unset($_SESSION["name"]);
session_destroy();
header("refresh:1;login.php");
echo "<script>
alert('You are Logout successfully')
</script>";
?>