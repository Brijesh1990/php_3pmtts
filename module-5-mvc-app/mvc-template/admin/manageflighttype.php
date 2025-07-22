<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Flight type</h1>
<p class="mb-4">Manage all flight type Data </p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Manage Here</h6>
</div>
<div class="card-body">
<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Type</th>
<th>Descriptions</th>
<th>Added Date</th>
<th>Action</th>

</tr>
</thead>
<tfoot>
<tr>
<th>Type</th>
<th>Descriptions</th>
<th>Added Date</th>
<th>Action</th>
</tr>
</tfoot>

<tbody>
<?php 
foreach($shwflighttype as $row)
{
?>
<tr>
<td><?php echo $row["type"];?></td>
<td><?php echo $row["descriptions"];?></td>
<td><?php echo $row["added_date"];?></td>
<td>
<a href="" class="btn btn-sm btn-primary text-white"><span class="bi bi-pencil"></span></a>
|    
<a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a>

</td>

</tr>
<?php 
}
?>
</tbody>
</table>
</div>
</div>
</div>

</div>
<!-- /.container-fluid -->
