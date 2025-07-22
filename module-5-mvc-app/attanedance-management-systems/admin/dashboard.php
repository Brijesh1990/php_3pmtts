<?php 
if(!isset($_SESSION["aid"]))
{
echo "<script>
window.location='./';
</script>";  
}
?>
<div class="col-md-9 p-5">
<h1 class="fs-4">
Logged In On :<span class="text-success">10/07/2025 01:09 pm</span>
</h1>
<div class="row">
<div class="col-md-3 bg-info m-4 ms-4">
<span class="bi bi-people-fill fs-1 text-primary"></span>
<span class="fs-5">Total Registrations</span> <br />
<p class="fs-5 text-center">46</p>
</div>

<div class="col-md-3 bg-danger m-4 ms-4">
<span class="bi bi-people-fill fs-1 text-white"></span>
<span class="fs-5 text-white">Total Registrations</span> <br />
<p class="fs-5 text-center text-white">46</p>
</div>

<div class="col-md-3 bg-primary m-4 ms-4 text-white">
<span class="bi bi-people-fill fs-1 text-white"></span>
<span class="fs-5">Total Registrations</span> <br />
<p class="fs-5 text-center">46</p>
</div>
<div class="mt-2 col-md-6">
<div id="chart_div"></div>
</div>
<div class="col-md-4 ms-5">
<table class="table table-responsive table-bordered mt-3">
<tr class="bg-white">
<td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
<td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>

</tr>

<tr class="bg-white">
<td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
<td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>

</tr>

<tr class="bg-white">
<td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
<td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>

</tr>

<tr class="bg-white">
<td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
<td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>

</tr>

<tr class="bg-white">
<td><span class="bi bi-check-circle-fill text-success"></span>&nbsp;Present</td>
<td align="right"><span class="bi bi-file-earmark text-success"></span>Export</td>

</tr>
</table>
</div>
</div>

