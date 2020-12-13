<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary"> List tracer study</h6>
				</div>
				<div class="card-body">
					<table id="dataTable" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Nama</th>
								<th>Pendapatan</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach ($pendapatan as $result):
							 ?>
							 <?php if($result['jawaban'] == ''): ?>
							 <?php else: ?>
							 <tr>
							 	<td class="text-center"><?= $no++ ?></td>
							 	<td><?= $result['nama_lengkap'] ?></td>
							 	<td><?= $result['jawaban'] ?></td>
							 
							 </tr>
							<?php endif; ?>
							<?php endforeach; ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>