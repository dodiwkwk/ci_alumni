<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Testimoni Alumni</h6>
				</div>
				<div class="card-body">
					
				<?php if($this->session->userdata('role_id') == 4): ?>
					<div class="row justify-content-center">
						<div class="col-md-4">
							<img width="140" class="thumbnail rounded-circle img-thumbnail shadow mb-3" src="<?= base_url('assets/img/profile/'). $user['gambar'] ?>" role="button">
						</div>
						<div class="col-md-4">
							<?php if($user['testimoni'] == ''): ?>
							<a href="<?= base_url('service/testimoni/create') ?>" class="btn btn-sm btn-primary shadow mb-3"><i class="fas fa-plus mr-1"></i> Tambah Testimoni</a>
							<?php else: ?>
								<table class="table table-borderless">
									<tr>
										<th><h6><?= $user['nama'] ?></h6></th>
									</tr>
									<tr>
										<td><h5><i>" <?= $user['testimoni'] ?> "</i></h5></td>
									</tr>
								</table>
							<?php endif; ?>
						</div>
					</div>
				<?php elseif($this->session->userdata('role_id') == 3): ?>
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama Alumni</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($testimoni as $result):
							 ?>
							 <tr role="row">
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['nama'] ?></td>
							 	<td class="text-center">
							 		<a href="<?= base_url('service/testimoni/view/') . $result['id_testimoni'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> <!-- Tombol detail -->
							 	</td>
							 </tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php else: ?>
					<a href="<?= base_url('service/testimoni/create') ?>" class="btn btn-sm btn-primary shadow mb-3"><i class="fas fa-plus mr-1"></i> Tambah Testimoni</a>
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama Alumni</th>
								<th>Testimoni</th>
								<th>Tampilkan</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($testimoni as $result):
							 ?>
							 <tr role="row">
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['nama'] ?></td>
							 	<td class="d-inline-block text-truncate" style="max-width: 150px;"><?= $result['testimoni'] ?></td>
							 	<td><?= $result['is_view'] ?></td>
							 	<td class="text-center">
							 		<a href="<?= base_url('service/testimoni/view/') . $result['id_testimoni'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> <!-- Tombol detail -->

								 	<a href="<?= base_url('service/testimoni/update/') . $result['id_testimoni'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> <!-- Tombol edit -->
								 	
								 	<a href="<?= base_url('service/testimoni/delete/') . $result['id_testimoni'] ?>" class="tombol-hapus btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> <!-- Tombol hapus -->
							 	</td>
							 </tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>