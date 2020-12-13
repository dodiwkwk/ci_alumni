<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Profile</h6>
				</div>
				<div class="card-body">
					

					<div class="row justify-content-center">
						<div class="col-md-4">
							<a href="<?= base_url('service/profile/edit_foto') ?>">								
								<img width="140" class="thumbnail rounded-circle img-thumbnail shadow mb-3" src="<?= base_url('assets/img/profile/'). $user['gambar'] ?>" role="button">	
							</a> 
							<br>
							<?php if(!$user_detail): ?>
								<a href="<?= base_url('service/profile/lengkapi/')?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Lengkapi Profile</a>
							<?php else: ?>
								<a href="<?= base_url('service/profile/edit/') . $user['id_user']; ?>" class="btn btn-sm btn-primary shadow mt-3"><i class="fas fa-edit"></i> Edit Profile</a>
							<?php endif; ?>
						</div>

						<div class="col-md-6">
							<table class="table table-borderless table-sm table-hover">
								<tr>
									<?php if ($this->session->userdata('role_id') == 2) : ?>
										<th>Nip</th>
									<?php else : ?>
										<th>Npm</th>
									<?php endif; ?>
									
									<td><?= $user_detail['npm']; ?></td>
								</tr>
								<tr>
									<th>Nama Lengkap</th>
									<td><?= $user_detail['nama_lengkap']; ?></td>
								</tr>
								<tr>
									<th>Email</th>

									<td><?= $user['email']; ?></td>
								</tr>
								<tr>
									<th>Tempat Lahir</th>
									<td><?= $user_detail['tempat_lahir']; ?></td>
								</tr>
								<tr>
									<th>Jenis Kelamin</th>
									<td><?= $user_detail['jenis_kelamin']; ?></td>
								</tr>
								<tr>
									<th>Agama</th>

									<td><?= $user_detail['agama']; ?></td>
								</tr>
								<tr>
									<th>Alamat</th>

									<td><?= $user_detail['alamat']; ?></td>
								</tr>
								<tr>
									<th>Telepon</th>

									<td><?= $user_detail['telpon']; ?></td>
								</tr>
								<tr>
									<th>IPK</th>

									<td><?= $user_detail['ipk']; ?></td>
								</tr>
								<tr>
									<th>Jenjang Pendidikan</th>
									<td><?= $user_detail['jenjang']; ?></td>
								</tr>
								<tr>
									<th>Pekerjaan</th>

									<td><?= $user_detail['pekerjaan']; ?></td>
								</tr>
								<tr>
									<th>Nama Perusahaan</th>
									<td><?= $user_detail['nama_perusahaan']; ?></td>
								</tr>
								<tr>
									<th>Tahun Masuk</th>
									<td><?= $user_detail['tahun_masuk']; ?></td>
								</tr>
								<tr>
									<th>Tahun Lulus</th>
									<td><?= $user_detail['tahun_lulus']; ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>