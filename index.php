<?php
include('koneksi.php');

$batas = 5; // Jumlah data per-halaman
$pg = isset($_GET['pg']) ? $_GET['pg'] : ""; // cek apakah variabel pg terisi
 
// cek jika variabel pg kosong
if(empty($pg)) {
	$posisi = 0;
	$pg = 1;
} else {
	$posisi = ( $pg - 1 ) * $batas;
}

// query mahasiswa
$sql = "SELECT * FROM matkul limit $posisi, $batas";
$no = 1+$posisi;
$res = mysqli_query($con,$sql);

if(mysqli_num_rows($res) > 0) { ?>
	<link rel="stylesheet" href="bootstrap.min.css">
	
	<div class="container" style="margin-top: 40px">
		<a class="btn btn-primary" href="insert.php">Tambah Data</a>
		<table class="table" style="margin-top: 30px">
			<tr>
				<th>No</th>
				<th>Kode Matkul</th>
				<th>Nama</th>
				<th>SKS</th>
				<th>Semester</th>
				<th></th>
			</tr>		
			<?php
				while($row = mysqli_fetch_assoc($res)) {
					echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$row['kode_matkul']."</td>";
						echo "<td>".$row['nama_matkul']."</td>";
						echo "<td>".$row['sks']."</td>";
						echo "<td>".$row['semester']."</td>";
						echo '<td>
							  <a class="btn btn-info" href="edit.php?id='.$row['kode_matkul'].'">Edit</a>
							  <a class="btn btn-danger" href="prosesdelete.php?id='.$row['kode_matkul'].'">Delete</a>
							  </td>';
					echo "</tr>";	
					$no++;
				}
			?>
		</table>
		<?php
			// hitung jumlah data
			$sql1 = "SELECT * FROM matkul";
			$res2 = mysqli_query($con,$sql1);
			$jml_data = mysqli_num_rows($res2);
			
			// Jumlah halaman
			$JmlHalaman = ceil($jml_data / $batas); // ceil digunakan untuk pembulatan keatas
			 
			// Navigasi ke sebelumnya
			if ( $pg > 1 ) {
				$link = $pg-1;
				$prev = "<a href='?pg=$link'>Sebelumnya </a>";
			} else {
				$prev = "Sebelumnya ";
			}
			 
			// Navigasi nomor
			$nmr = '';
			for ( $i = 1; $i<= $JmlHalaman; $i++ ){
				if ( $i == $pg ) {
					$nmr .= $i . " ";
				} else {
					$nmr .= "<a href='?pg=$i'>$i</a> ";
				}
			}
			 
			// Navigasi ke selanjutnya
			if ( $pg < $JmlHalaman ) {
				$link = $pg + 1;
				$next = " <a href='?pg=$link'>Selanjutnya</a>";
			} else {
				$next = " Selanjutnya";
			}
			 
			// Tampilkan navigasi
			echo $prev . $nmr . $next;
		?>
	</div>
<?php 
} 
mysqli_close($con);
?>