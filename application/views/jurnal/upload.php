<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Upload File</h6>
				</div>
				<div class="card-body">
					<?= form_open_multipart('data/jurnal/upload_proses'); ?>
						<div class="row justify-content-center">
	                        <div class="col-sm-5">
	                            <div class="custom-file">
	                              <input type="file" class="custom-file-input" name="jurnal">
	                              <label class="custom-file-label" for="jurnal">Choose file</label>
	                              <small class="text-danger"><?= form_error('jurnal') ?></small>

	                              <label for="deskripsi" class="mt-3">Deskripsi</label>
	                              <input type="text" name="deskripsi" class="form-control">
	                           </div>
	                            <a href="<?= base_url('data/jurnal') ?>" class="btn btn-danger mt-3">Kembali</a>

								<input type="submit" value="simpan" class="btn btn-primary mt-3">
	                        </div>
	                	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>