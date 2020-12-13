<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Lowongan Kerja</h6>
				</div>
				<div class="card-body">
					<a href="<?= base_url('service/loker/create') ?>" class="btn btn-sm btn-primary shadow mb-3"><i class="fas fa-plus mr-1"></i> Tambah Loker</a>
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama Perusahaan</th>
								<th>Judul Lowongan</th>
								<th>Tanggal Posting</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php 
									$no = 1;
									foreach($loker as $row):
								 ?>
								<tr>
									 <td class="text-center"><?= $no++; ?></td>
									 <td><?= $row['nama_perusahaan'] ?></td>
									 <td><?= $row['judul_lowongan'] ?></td>
									 <td><?= $row['tanggal_posting'] ?></td>
									 <td class="text-center">
									 	<a href="<?= base_url('service/loker/view/') . $row['id_lowongan'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> <!-- Tombol detail -->

									 	<a href="<?= base_url('service/loker/update/') . $row['id_lowongan'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> <!-- Tombol edit -->
									 	<?php if($this->session->userdata('role_id') != 2): ?>
									 	<?php else: ?>
									 		<a href="<?= base_url('service/loker/delete/') . $row['id_lowongan'] ?>" class="tombol-hapus btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> <!-- Tombol hapus -->
									 	<?php endif ?>
									 </td>
								</tr>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>