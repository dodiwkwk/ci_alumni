<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Riwayat</h6>
				</div>
				<div class="card-body">
					<form method="post">
						<input type="hidden" value="<?= $user['id_user'] ?>" name="id_user">
						<div class="row justify-content-center">
							<div class="col-md-4">
								<label for="riwayat_pendidikan">Riwayat Pendidikan</label><br>
								<textarea class="form-control" name="riwayat_pendidikan" id="riwayat_pendidikan" cols="30" rows="10" ></textarea>
								<small class="text-danger"><?= form_error('riwayat_pendidikan'); ?></small>
							</div>
							<div class="col-md-4">
								<label for="riwayat_pekerjaan">Riwayat Pekerjaan</label><br>
								<textarea class="form-control" name="riwayat_pekerjaan" id="riwayat_pekerjaan" cols="30" rows="10" ></textarea>
								<small class="text-danger"><?= form_error('riwayat_pekerjaan'); ?></small>
							</div>
							<div class="col-md-4">
								<label for="riwayat_organisasi">Riwayat Organisasi</label><br>
								<textarea class="form-control" name="riwayat_organisasi" id="riwayat_organisasi" cols="30" rows="10" ></textarea>
								<small class="text-danger"><?= form_error('riwayat_organisasi'); ?></small>
							</div>
						</div>
						<button type="submit" class="btn btn-primary shadow mt-3"><i class="fas fa-save mr-2"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>