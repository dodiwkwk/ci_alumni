<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Detail Tracer Study Alumni</h6>
				</div>
				<div class="card-body">
					<p>Npm : <?= $user['npm'] ?></p>
					<p>Nama : <?= $user['nama_lengkap'] ?></p>
					<p>Tahun Lulus : <?= $user['tahun_lulus'] ?></p>
					<hr>
					<table class="table table-borderless">
						<thead>
							<tr>
								<td>No</td>
								<td>Pertanyaan :</td>
								<td>Jawaban Anda :</td>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							 foreach($tracer as $row): ?>
								<tr>
									<td><?= $no++ . '.' ?></td>
									<th><?= $row['pertanyaan'] ?></th>
									<td><?= $row['jawaban'] ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<a href="<?= base_url('data/tracer_study') ?>" class="btn btn-danger shadow mt-3"><i class="fas fa-backspace mr-1"></i> Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>