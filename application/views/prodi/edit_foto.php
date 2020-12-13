<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Edit Foto</h6>
				</div>
				<div class="card-body">
					<?= form_open_multipart('prodi/edit_foto_proses'); ?>
						<div class="row justify-content-center">
							<input type="hidden" value="<?= $user['id_user'] ?>" name="id_user">
	                        <div class="col-sm-3">
	                            <img src="<?= base_url('assets/img/profile/') . $user['gambar'] ?>" class="img-thumbnail shadow" width="160">
	                        </div>
	                        <div class="col-sm-5">
	                            <div class="custom-file">
	                              <input type="file" class="custom-file-input" id="gambar" name="gambar">
	                              <label class="custom-file-label" for="gambar">Choose file</label>
	                           </div>
	                            <a href="<?= base_url('prodi') ?>" class="btn btn-danger mt-3">Kembali</a>

								<input type="submit" value="simpan" class="btn btn-primary mt-3">
	                        </div>
	                	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>