<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Lowongan</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<form method="post">
								<label for="judul_banner" class="mt-3">Judul Banner</label>
								<input type="text" name="judul_banner" class="form-control" value="<?= $banner['judul_banner'] ?>">
								<small class="text-danger"><?= form_error('judul_banner') ?></small>

								<label for="deskripsi" class="mt-3">Deskripsi</label> <br>
								<textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"><?= $banner['deskripsi'] ?></textarea>
								<small class="text-danger"><?= form_error('deskripsi') ?></small>

								<input type="hidden" name="id_banner" value="<?= $banner['id_banner'] ?>">
						
								<a href="<?= base_url('data/banner') ?>" class="btn btn-danger mt-3 shadow"><i class="fas fa-backspace"></i> Kembali</a>
								<button type="submit" class="btn btn-primary shadow mt-3"><i class="fas fa-save mr-1"></i> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
