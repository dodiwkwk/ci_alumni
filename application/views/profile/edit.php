<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
				</div>
				<div class="card-body">
					<form method="post">
						<input type="hidden" value="<?= $user_detail['id_user']; ?>" name="id_user">
						<div class="row justify-content-center">
							<div class="col-md-4">
								<label>Npm</label>
                     			<input type="text" class="form-control" name="npm" value="<?= $user_detail['npm'] ?>">
                     			<small class="text-danger"><?= form_error('npm'); ?></small>

								<label class="mt-2">Nama Lengkap</label>
                     			<input type="text" class="form-control" name="nama_lengkap" value="<?= $user_detail['nama_lengkap'] ?>">
                     			<small class="text-danger"><?= form_error('nama_lengkap'); ?></small>

								<label class="mt-2">Tempat Lahir</label>
                     			<input type="text" class="form-control" name="tempat_lahir" value="<?= $user_detail['tempat_lahir'] ?>">
                     			<small class="text-danger"><?= form_error('tempat_lahir'); ?></small>

								<label class="mt-2">Jenis Kelamin</label>
								<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
									<?php foreach ($jenis_kelamin as $row): ?>
										<?php if($row == $user_detail['jenis_kelamin']): ?>
											<option value="<?= $row ?>" selected><?= $row; ?></option>
										<?php else: ?>
											<option value="<?= $row ?>"><?= $row; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>									
								</select>

								<label class="mt-2">Agama</label>
                     			<input type="text" class="form-control" name="agama" value="<?= $user_detail['agama']; ?>">
                     			<small class="text-danger"><?= form_error('agama'); ?></small>

								<label class="mt-2">Alamat</label>
                     			<input type="text" class="form-control" name="alamat" value="<?= $user_detail['alamat']; ?>">
                     			<small class="text-danger"><?= form_error('alamat'); ?></small>

								<label class="mt-2">Telepon</label>
                     			<input type="text" class="form-control" name="telpon" value="<?= $user_detail['telpon']; ?>">
                     			<small class="text-danger"><?= form_error('telpon'); ?></small>
							</div>

							<div class="col-md-4">
								<label>IPK</label>
                     			<input type="text" class="form-control" name="ipk" value="<?= $user_detail['ipk']; ?>">
                     			<small class="text-danger"><?= form_error('ipk'); ?></small>

								<label class="mt-2">Jenjang Pendidikan</label>
                     			<select name="jenjang" id="jenjang" class="form-control">
                     				<?php foreach ($jenjang as $row): ?>
										<?php if($row == $user_detail['jenjang']): ?>
											<option value="<?= $row ?>" selected><?= $row; ?></option>
										<?php else: ?>
											<option value="<?= $row ?>"><?= $row; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>

								<label class="mt-2">Pekerjaan</label>
                     			<input type="text" class="form-control" name="pekerjaan" value="<?= $user_detail['pekerjaan']; ?>">
                     			<small class="text-danger"><?= form_error('pekerjaan'); ?></small>

                     			<label class="mt-2">Nama Perusahaan</label>
                     			<input type="text" class="form-control" name="nama_perusahaan" value="<?= $user_detail['nama_perusahaan']; ?>">

                     			<label class="mt-2">Tahun Masuk</label>
                     			<input type="number" class="form-control" name="tahun_masuk" value="<?= $user_detail['tahun_masuk']; ?>">
                     			<small class="text-danger"><?= form_error('tahun_masuk'); ?></small>

                     			<label class="mt-2">Tahun Lulus</label>
                     			<input type="number" class="form-control" name="tahun_lulus" value="<?= $user_detail['tahun_lulus']; ?>">
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