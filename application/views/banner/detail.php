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
									<td><img width="330" class="img-thumbnail mb-3" src="<?= base_url('assets/img/banner/'). $banner['gambar'] ?>" role="button"></td>
								</tr>
								<tr>
									<th class="float-right">Judul Banner</th>
									<td><?= $banner['judul_banner'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Deskripsi</th>
									<td><?= $banner['deskripsi'] ?></td>
								</tr>
							</table>
							<a href="<?= base_url('data/banner') ?>" class="btn btn-sm btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>