<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tambah Akun User</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<form action="" method="POST">
								<label for="nama" class="mt-3">Nama</label>
								<input type="text" name="nama" class="form-control">
								<small class="text-danger"><?= form_error('nama') ?></small>

								<label for="email" class="mt-3">Email</label>
								<input type="text" name="email" class="form-control">
								<small class="text-danger"><?= form_error('email') ?></small>

								<label for="password" class="mt-3">Password</label>
								<input type="text" name="password" class="form-control">
								<small class="text-danger"><?= form_error('password') ?></small>

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
