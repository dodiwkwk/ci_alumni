<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Event</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<?= form_open_multipart() ?>
								<label for="foto">Foto</label>
								<input type="file" name="foto" class="form-control">

								<label for="nama_event" class="mt-3">Nama Event</label>
								<input type="text" name="nama_event" class="form-control">
								<small class="text-danger"><?= form_error('nama_event') ?></small>

								<label for="judul_event" class="mt-3">Judul Event</label>
								<input type="text" name="judul_event" class="form-control">
								<small class="text-danger"><?= form_error('judul_event') ?></small>

								<label for="deskripsi" class="mt-3">Deskripsi</label> <br>
								<textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
								<small class="text-danger"><?= form_error('deskripsi') ?></small>
								
								<label for="tanggal_posting" class="mt-3">Tanggal Posting</label>
								<input class="form-control" type="date" name="tanggal_posting">
								<small class="text-danger"><?= form_error('tanggal_posting') ?></small>

								<input type="hidden" value="<?= $id_user; ?>" name="id_user">

								<a href="<?= base_url('service/event') ?>" class="btn btn-danger mt-3 shadow"><i class="fas fa-backspace"></i> Kembali</a>
								<button type="submit" class="btn btn-primary shadow mt-3"><i class="fas fa-save mr-1"></i> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

