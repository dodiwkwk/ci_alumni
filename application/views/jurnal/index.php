<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Jurnal</h6>
				</div>
				<div class="card-body">
					<a href="<?= base_url('data/jurnal/upload') ?>" class="btn btn-sm btn-primary shadow mb-3"><i class="fas fa-plus mr-1"></i> Upload Jurnal</a>
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>File</th>
								<th>Deskripsi</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($jurnal as $result):
							 ?>
							 <tr>
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['nama_jurnal'] ?></td>
							 	<td><?= $result['deskripsi'] ?></td>
							 	<td class="text-center">
								 	<a href="<?= base_url('assets/upload/jurnal/') . $result['nama_jurnal'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-download"></i></a> <!-- Tombol download -->
								 	<?php if($this->session->userdata('role_id') != 2): ?>
								 	<?php else: ?>
								 		<a href="<?= base_url('data/jurnal/delete/') . $result['id_jurnal'] ?>" class="tombol-hapus btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> <!-- Tombol hapus -->
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