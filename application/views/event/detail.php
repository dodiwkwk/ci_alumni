<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Detail Event</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<table class="table table-borderless">
								<tr>
									<th>Foto</th>
									<td><img width="130" class="thumbnail img-thumbnail mb-3" src="<?= base_url('assets/img/event/'). $event['foto'] ?>" role="button"></td>
								</tr>
								<tr>
									<th class="float-right">Nama Event</th>
									<td><?= $event['nama_event'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Judul Event</th>
									<td><?= $event['judul_event'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Deskripsi</th>
									<td><?= $event['deskripsi'] ?></td>
								</tr>
								<tr>
									<th class="float-right">Tanggal Posting</th>
									<td><?= $event['tanggal_posting'] ?></td>
								</tr>
								<tr>
									<th class="float-right">User</th>
									<td><?= $event['nama'] ?></td>
								</tr>
							</table>
							<a href="<?= base_url('service/event') ?>" class="btn btn-sm btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>