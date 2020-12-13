<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Detail User</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<table class="table table-borderless">
								<tr>
									<th class="float-right">Nama</th>
									<td><?= $user['nama'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Email</th>
									<td><?= $user['email'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Role</th>
									<td><?= $user['role'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Gambar</th>
									<td><img src="<?= base_url('assets/img/profile/') . $user['gambar'] ?>" class="img-thumbnail" width="140px"></td>
								</tr>
							</table>
							<a href="<?= base_url('service/user') ?>" class="btn btn-sm btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>