<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="<?= base_url('assets/sb-admin2/') ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="text-center p-0 mb-3">
	<h3 class="text-uppercase">Laporan Data Alumni</h3>
	<small class="m-0 p-0">Program Studi Pendidikan Fisika</small><br>
	<small class="m-0 p-0">Universitas Sultan Ageng Tirtayasa</small><br>
	<small class="m-0 p-0">Tahun 2020</small>
</div>	

<table class="table table-bordered">
	<tr>
		<th>#</th>
		<th>Npm</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tahun Lulus</th>
	</tr>
	<?php 
	$no = 1;
	foreach($laporan_pdf as $row): ?>
		<?php if($row['role_id'] == 4): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['npm'] ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['jenis_kelamin'] ?></td>
				<td><?= $row['tahun_lulus'] ?></td>
			</tr>
		<?php endif; ?>
	<?php endforeach; ?>
</table>


<script src="<?= base_url('assets/sb-admin2/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/sb-admin2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/sb-admin2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/sb-admin2/') ?>js/sb-admin-2.min.js"></script>	
</body>
</html>


