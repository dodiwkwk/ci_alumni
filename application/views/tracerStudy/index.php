<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Data Tracer Study Alumni</h6>
				</div>
				<div class="card-body">
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama Alumni</th>
								<th>Npm</th>
								<th>Status Jawaban</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($user as $result):
							 ?>
							 <tr>
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['nama_lengkap'] ?></td>
							 	<td><?= $result['npm'] ?></td>
							 	<td><?= $result['status'] ?></td>
							 	<td class="text-center">
							 		<a href="<?= base_url('data/tracer_study/view/') . $result['id_user'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> <!-- Tombol detail -->
									<?php if($this->session->userdata('role_id') != 2): ?>
									<?php else: ?>
								 		<a href="<?= base_url('data/tracer_study/delete/') . $result['id_user'] ?>" class="tombol-hapus btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> <!-- Tombol hapus -->
									<?php endif; ?>
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