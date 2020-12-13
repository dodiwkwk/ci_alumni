<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Testimoni</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<form method="post">
								<label for="testimoni" class="mt-3">Testimoni</label> <br>
								<textarea name="testimoni" id="testimoni" cols="30" rows="10" class="form-control"></textarea>
								<small class="text-danger"><?= form_error('testimoni') ?></small>
								
								<label for="is_view" class="mt-3">Tampilkan</label>
								<select name="is_view" id="is_view" class="form-control">
									<option value="Ya">Ya</option>
									<option value="Tidak">Tidak</option>
								</select>

								<input type="hidden" value="<?= $id_user; ?>" name="id_user">

								<a href="<?= base_url('service/testimoni') ?>" class="btn btn-danger mt-3 shadow"><i class="fas fa-backspace"></i> Kembali</a>
								<button type="submit" class="btn btn-primary shadow mt-3"><i class="fas fa-save mr-1"></i> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



