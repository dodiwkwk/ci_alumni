<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Tracer Study</h6>
				</div>
				<div class="card-body">
					<?php if($jawaban == null): ?>
						<form method="post" action="<?= base_url('service/tracer/tambah') ?>">
							<table class="table table-borderless">
								<tr>
									<th>No</th>
									<th>Pertanyaan :</th>
									<th>Jawaban Anda</th>
								</tr>
								<?php
									$no = 1;
								 foreach($pertanyaan as $result): ?>
									<tr>
										<th><?= $no++ . '.' ?></th>
										<th><?= $result['pertanyaan'] ?></th>
										<td><input type="text" name="<?= $result['id_pertanyaan'] ?>" class="form-control"></td>
									</tr>
								<?php endforeach; ?>
							</table>
							<button type="submit" id="tombol_tracer" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Kirim Jawaban</button>
						</form>
					<?php else: ?>
						<a href="<?= base_url('service/tracer/edit/') . $this->session->userdata('id_user') ?>" class="btn btn-sm btn-primary mb-3 shadow"><i class="fas fa-edit mr-1"></i> Edit Jawaban</a>
						<table class="table table-borderless" id="dataTable">
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
								 foreach($jawaban as $row): ?>
									<tr>
										<td><?= $no++ . '.' ?></td>
										<th><?= $row['pertanyaan'] ?></th>
										<td><?= $row['jawaban'] ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>