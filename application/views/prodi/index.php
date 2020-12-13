<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Info Kaprodi</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<a href="<?= base_url('prodi/edit_foto') ?>">								
							<img width="130" class="thumbnail img-thumbnail mb-3" src="<?= base_url('assets/img/profile/'). $kaprodi['gambar'] ?>" role="button"></a><br>
							<?php if($this->session->userdata('role_id') == 3): ?>
								<a href="<?= base_url('prodi/edit/') . $kaprodi['id_kaprodi']; ?>" class="btn btn-sm btn-primary shadow mt-3"><i class="fas fa-edit"></i> Edit Profile</a>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<table class="table table-borderless table-hover">
								<tr>
									<th>NIDN</th>
									<td><?= $kaprodi['nidn']; ?></td>
								</tr>
								<tr>
									<th>Nama Lengkap</th>
									<td><?= $kaprodi['nama_lengkap']; ?></td>
								</tr>
								<tr>
									<th>Email</th>
									<td><?= $kaprodi['email']; ?></td>
								</tr>
								<tr>
									<th>Tempat Lahir</th>
									<td><?= $kaprodi['tempat_lahir']; ?></td>
								</tr>
								<tr>
									<th>Tanggal Lahir</th>
									<td><?= $kaprodi['tanggal_lahir']; ?></td>
								</tr>
								<tr>
									<th>Jenis Kelamin</th>
									<td><?= $kaprodi['jenis_kelamin']; ?></td>
								</tr>
								<tr>
									<th>Agama</th>
									<td><?= $kaprodi['agama']; ?></td>
								</tr>
								<tr>
									<th>Alamat</th>
									<td><?= $kaprodi['alamat']; ?></td>
								</tr>
								<tr>
									<th>Telepon</th>
									<td><?= $kaprodi['telpon']; ?></td>
								</tr>
								<tr>
									<th>Periode Jabatan</th>
									<td><?= $kaprodi['periode_jabatan']; ?></td>
								</tr>
							</table>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>