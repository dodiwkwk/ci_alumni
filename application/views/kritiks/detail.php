<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Detail Testimoni</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<table class="table table-borderless">
								<tr>
									<th class="float-right">Nama</th>
									<td><?= $kritiks['nama'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Email</th>
									<td><?= $kritiks['email'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Kritik</th>
									<td><?= $kritiks['kritik'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Saran</th>
									<td><?= $kritiks['saran'] ?></td>
								</tr>
							</table>
							<a href="<?= base_url('service/kritik_dan_saran') ?>" class="btn btn-sm btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>