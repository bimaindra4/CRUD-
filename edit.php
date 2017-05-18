<?php 

include('koneksi.php'); 
$id = $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM matkul WHERE kode_matkul='$id'");
$row = mysqli_fetch_array($sql);

?>
<link rel="stylesheet" href="bootstrap.min.css">
	
<div class="container">
	<h3>Edit</h3>
	<form class="form-horizontal pull-left" method="post" action="prosesedit.php" style="margin-top: 30px">
		<div class="form-body">
			<div class="form-group">
				<label class="control-label col-md-3">Kode Matkul</label>
				<div class="col-md-9">
					<input type="text" name="kdmk" class="form-control"  value="<?php echo $row['kode_matkul'] ?>" readonly>	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Nama</label>
				<div class="col-md-9">
					<input type="text" name="nama" class="form-control" value="<?php echo $row['nama_matkul'] ?>" >	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">SKS</label>
				<div class="col-md-9">
					<input type="number" name="sks" class="form-control" value="<?php echo $row['sks'] ?>" >	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Semester</label>
				<div class="col-md-9">
					<input type="number" name="semester" class="form-control" value="<?php echo $row['semester'] ?>" >	
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					<button class="btn btn-primary" type="submit">Edit</button>
				</div>
			</div>
		</div>
	</form>
</div>