<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Detail Alumni</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-4">
							<a href="">								
							<img width="130" class="thumbnail img-thumbnail mb-3" src="<?= base_url('assets/img/profile/'). $user_detail['gambar'] ?>" role="button"></a> <br>
							<a href="<?= base_url('angkatan') ?>" class="btn btn-sm btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>	
						</div>
						<div class="col-md-6">
							<table class="table table-hover table-light">
								<tr>
									<th>Npm</th>
									<td><?= $user_detail['npm']; ?></td>
								</tr>
								<tr>
									<th>Nama Lengkap</th>
									<td><?= $user_detail['nama_lengkap']; ?></td>
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