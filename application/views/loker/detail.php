<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Detail Lowongan</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<table class="table table-borderless">
								<tr>
									<th>Foto</th>
									<td><img width="130" class="thumbnail img-thumbnail mb-3" src="<?= base_url('assets/img/loker/'). $loker['gambar'] ?>" role="button"></td>
								</tr>
								<tr>
									<th class="float-right">Nama Perusahaan</th>
									<td><?= $loker['nama_perusahaan'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Judul Lowongan</th>
									<td><?= $loker['judul_lowongan'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Deskripsi</th>
									<td><?= $loker['deskripsi'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Tanggal Posting</th>
									<td><?= $loker['tanggal_posting'] ?></td>
								</tr>
							</table>
							<a href="<?= base_url('service/loker') ?>" class="btn btn-sm btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>