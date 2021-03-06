<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Daftar Alumni</h6>
				</div>
				<div class="card-body">
					 <table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Npm</th>
								<th>Nama</th>
								<th>Jenjang</th>
								<th>Tahun Lulus</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($user as $result):
							 ?>
							 <?php if($result['role_id'] != 2 && $result['role_id'] != 3): ?>
							 <tr>
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['npm'] ?></td>
							 	<td><?= $result['nama_lengkap'] ?></td>
							 	<td><?= $result['jenjang'] ?></td>
							 	<td><?= $result['tahun_lulus'] ?></td>
							 	<td class="text-center">
							 		<a href="<?= base_url('angkatan/view/') . $result['id_user'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> <!-- Tombol detail -->
							 	</td>
							 </tr>
							<?php endif; ?>
							<?php endforeach; ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>