<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Edit Kritik Saran</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<form method="post">
								<label for="kritik" class="mt-3">Kritik</label> <br>
								<textarea name="kritik" id="kritik" cols="20" rows="10" class="form-control"><?= $kritiks['kritik'] ?></textarea>
								<small class="text-danger"><?= form_error('kritik') ?></small>

								<label for="saran" class="mt-3">Saran</label><br>
								<textarea name="saran" id="saran" cols="20" rows="10" class="form-control"><?= $kritiks['saran'] ?></textarea>
								<small class="text-danger"><?= form_error('saran') ?></small>
							
								<input type="hidden" value="<?= $kritiks['id_kritiksaran'] ?>" name="id_kritiksaran">

								<a href="<?= base_url('service/kritik_dan_saran') ?>" class="btn btn-danger mt-3 shadow"><i class="fas fa-backspace"></i> Kembali</a>
								<button type="submit" class="btn btn-primary shadow mt-3"><i class="fas fa-save mr-1"></i> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

