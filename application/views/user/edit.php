<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<form method="post">
								<input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
								<label for="nama">Nama</label>
								<input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>">
								<small class="text-danger"><?= form_error('nama') ?></small>

								<label for="email" class="mt-3">Email</label>
								<input type="text" name="email" class="form-control" value="<?= $user['email'] ?>">
								<small class="text-danger"><?= form_error('email') ?></small>

								<label for="role" class="mt-3">Role</label>
								<select name="role" id="role" class="form-control">
									<?php foreach($role as $result): ?>
										<?php if($result['id_role'] == $user['role_id']): ?>
											<option value="<?= $result['id_role'] ?>" selected><?= $result['role'] ?></option>
										<?php else: ?>
											<option value="<?= $result['id_role'] ?>"><?= $result['role'] ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
								<small class="text-danger"><?= form_error('role') ?></small>

								<a href="<?= base_url('service/user') ?>" class="btn btn-danger mt-3 shadow"><i class="fas fa-backspace"></i> Kembali</a>
								<button type="submit" class="btn btn-primary shadow mt-3"><i class="fas fa-save mr-1"></i> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>