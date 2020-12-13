<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Edit Pertanyaan</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<form method="post">
								<input type="hidden" name="id_pertanyaan" value="<?= $pertanyaan['id_pertanyaan'] ?>">
								<label for="pertanyaan">Pertanyaan</label>
								<input type="text" name="pertanyaan" class="form-control" value="<?= $pertanyaan['pertanyaan'] ?>">
								<small class="text-danger"><?= form_error('pertanyaan') ?></small>

								<a href="<?= base_url('data/kuesioner') ?>" class="btn btn-danger mt-3 shadow"><i class="fas fa-backspace"></i> Kembali</a>
								<button type="submit" class="btn btn-primary shadow mt-3"><i class="fas fa-save mr-1"></i> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

