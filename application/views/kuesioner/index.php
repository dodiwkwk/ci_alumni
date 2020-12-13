<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Data Kuesioner</h6>
				</div>
				<div class="card-body">
					<a href="<?= base_url('data/kuesioner/create') ?>" class="btn btn-sm btn-primary shadow mb-3"><i class="fas fa-plus mr-1"></i> Tambah Kuesioner</a>
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Pertanyaan</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($pertanyaan as $result):
							 ?>
							 <tr>
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['pertanyaan'] ?></td>
							 	<td class="text-center">
								 	<a href="<?= base_url('data/kuesioner/update/') . $result['id_pertanyaan'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> <!-- Tombol edit -->
								 	
								 	<a href="<?= base_url('data/kuesioner/delete/') . $result['id_pertanyaan'] ?>" class="tombol-hapus btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> <!-- Tombol hapus -->
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