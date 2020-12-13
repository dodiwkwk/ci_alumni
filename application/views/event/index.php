<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Event</h6>
				</div>
				<div class="card-body">
					<?php if($this->session->userdata('role_id') != 2): ?>
					<?php else: ?>
						<a href="<?= base_url('service/event/create') ?>" class="btn btn-sm btn-primary shadow mb-3"><i class="fas fa-plus mr-1"></i> Tambah Event</a>
					<?php endif; ?>
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama Event</th>
								<th>Judul</th>
								<th>Tanggal Posting</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($event as $result):
							 ?>
							 <tr>
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['nama_event'] ?></td>
							 	<td><?= $result['judul_event'] ?></td>
							 	<td><?= $result['tanggal_posting'] ?></td>
							 	<td class="text-center">
							 		<a href="<?= base_url('service/event/view/') . $result['id_event'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a> <!-- Tombol detail -->
									<?php if($this->session->userdata('role_id') != 2): ?>
									<?php else: ?>
								 	<a href="<?= base_url('service/event/update/') . $result['id_event'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> <!-- Tombol edit -->
								 	
								 	<a href="<?= base_url('service/event/delete/') . $result['id_event'] ?>" class="tombol-hapus btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> <!-- Tombol hapus -->
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