<link rel="stylesheet" href="bootstrap.min.css">
	
<div class="container">
	<h3>Insert</h3>
	<form class="form-horizontal pull-left" method="post" action="prosesinsert.php" style="margin-top: 30px">
		<div class="form-body">
			<div class="form-group">
				<label class="control-label col-md-3">Kode Matkul</label>
				<div class="col-md-9">
					<input type="text" name="kdmk" class="form-control">	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Nama</label>
				<div class="col-md-9">
					<input type="text" name="nama" class="form-control">	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">SKS</label>
				<div class="col-md-9">
					<input type="number" name="sks" class="form-control">	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Semester</label>
				<div class="col-md-9">
					<input type="number" name="semester" class="form-control">	
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					<button class="btn btn-primary" type="submit">Insert</button>
				</div>
			</div>
		</div>
	</form>
</div>