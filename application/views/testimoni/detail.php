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
									<th class="float-right">Nama Alumni</th>
									<td><?= $testimoni['nama'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Testimoni</th>
									<td><?= $testimoni['testimoni'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Tampikan</th>
									<td><?= $testimoni['is_view'] ?></td>
								</tr>
							</table>
							<a href="<?= base_url('service/testimoni') ?>" class="btn btn-sm btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>