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
								<label>Npm</label>
                     			<input type="text" class="form-control" name="npm">
                     			<small class="text-danger"><?= form_error('npm'); ?></small>

								<label class="mt-2">Nama Lengkap</label>
                     			<input type="text" class="form-control" name="nama_lengkap">
                     			<small class="text-danger"><?= form_error('nama_lengkap'); ?></small>

								<label class="mt-2">Tempat Lahir</label>
                     			<input type="text" class="form-control" name="tempat_lahir">
                     			<small class="text-danger"><?= form_error('tempat_lahir'); ?></small>

								<label class="mt-2">Jenis Kelamin</label>
								<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
									<option>=== Pilih Jenis Kelamin ===</option>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>

								<label class="mt-2">Agama</label>
                     			<input type="text" class="form-control" name="agama">
                     			<small class="text-danger"><?= form_error('agama'); ?></small>

								<label class="mt-2">Alamat</label>
                     			<input type="text" class="form-control" name="alamat">
                     			<small class="text-danger"><?= form_error('alamat'); ?></small>

								<label class="mt-2">Telepon</label>
                     			<input type="text" class="form-control" name="telpon">
                     			<small class="text-danger"><?= form_error('telpon'); ?></small>
							</div>

							<div class="col-md-4">
								<label>IPK</label>
                     			<input type="text" class="form-control" name="ipk">
                     			<small class="text-danger"><?= form_error('ipk'); ?></small>

								<label class="mt-2">Jenjang Pendidikan</label>
                     			<select name="jenjang" id="jenjang" class="form-control">
                     				<option>=== Pilih Jenjang Pendidikan ===</option>
									<option value="D3">Diploma III</option>
									<option value="S1">Sarjana S1</option>
									<option value="S2">Magister S2</option>
								</select>

								<label class="mt-2">Pekerjaan</label>
                     			<input type="text" class="form-control" name="pekerjaan">
                     			<small class="text-danger"><?= form_error('pekerjaan'); ?></small>

                     			<label class="mt-2">Nama Perusahaan</label>
                     			<input type="text" class="form-control" name="nama_perusahaan">

                     			<label class="mt-2">Tahun Masuk</label>
                     			<input type="number" class="form-control" name="tahun_masuk">
                     			<small class="text-danger"><?= form_error('tahun_masuk'); ?></small>

                     			<label class="mt-2">Tahun Lulus</label>
                     			<input type="number" class="form-control" name="tahun_lulus">
                     			<small class="text-danger"><?= form_error('tahun_lulus'); ?></small>

                     			<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Simpan</button>
																	
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>