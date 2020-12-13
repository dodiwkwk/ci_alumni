<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Lengkapi Profile</h6>
				</div>
				<div class="card-body">
					<form method="post">
						<div class="row justify-content-center">
							<div class="col-md-4">
								<label>NIDN</label>
                     			<input type="text" class="form-control" name="nidn" value="<?= $kaprodi['nidn']; ?>">
                     			<small class="text-danger"><?= form_error('nidn'); ?></small>

								<label class="mt-2">Nama Lengkap</label>
                     			<input type="text" class="form-control" name="nama_lengkap" value="<?= $kaprodi['nama_lengkap']; ?>">
                     			<small class="text-danger"><?= form_error('nama_lengkap'); ?></small>

								<label class="mt-2">Agama</label>
                     			<input type="text" class="form-control" name="agama" value="<?= $kaprodi['agama']; ?>">
                     			<small class="text-danger"><?= form_error('agama'); ?></small>

								<label class="mt-2">Alamat</label>
                     			<input type="text" class="form-control" name="alamat" value="<?= $kaprodi['alamat']; ?>">
                     			<small class="text-danger"><?= form_error('alamat'); ?></small>

								<label class="mt-2">Telepon</label>
                     			<input type="text" class="form-control" name="telpon" value="<?= $kaprodi['telpon']; ?>">
                     			<small class="text-danger"><?= form_error('telpon'); ?></small>
							</div>

							<div class="col-md-4">
								<label>Tanggal Lahir</label>
                     			<input type="text" class="form-control" name="tanggal_lahir" value="<?= $kaprodi['tanggal_lahir']; ?>">
                     			<small class="text-danger"><?= form_error('tanggal_lahir'); ?></small>

								<label>Tempat Lahir</label>
                     			<input type="text" class="form-control" name="tempat_lahir" value="<?= $kaprodi['tempat_lahir']; ?>">
                     			<small class="text-danger"><?= form_error('tempat_lahir'); ?></small>

								<label class="mt-2">Periode Jabatan</label>
                     			<input type="text" class="form-control" name="periode_jabatan" value="<?= $kaprodi['periode_jabatan']; ?>">
                     			<small class="text-danger"><?= form_error('periode_jabatan'); ?></small>

								<input type="hidden" name="id_kaprodi" value="<?= $kaprodi['id_kaprodi'] ?>">

                     			<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Simpan</button>
																	
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>