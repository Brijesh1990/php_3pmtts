<?php 
if(!isset($_SESSION["aid"]))
{
echo "<script>
window.location='./';
</script>";  
}
?>
<div class="col-md-9">

<div class="container p-5">
    <h1 class="fs-5">
Change Password
</h1>
<form method="post">
<div class="form-group mt-3">
    <input type="password" name="opass" placeholder="Enter Old password" class="form-control w-75">
</div>

<div class="form-group mt-3">
    <input type="password" name="npass" placeholder="Enter New password" class="form-control  w-75 text-dark">
</div>


<div class="form-group mt-3">
    <input type="password" name="cpass" placeholder="Enter Confirmed password" class="form-control  w-75">
</div>


<div class="form-group mt-3">
    <input type="submit" name="changepass" value="Submit" class="btn btn-success btn-md text-white">
</div>

</form>
</div>

