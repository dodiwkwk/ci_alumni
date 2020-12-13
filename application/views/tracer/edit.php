<div class="container">
	<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
     <?php endif; ?>
	<div class="row">
		<div class="col-md">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Edit Jawaban</h6>
				</div>
				<div class="card-body">
					<form method="post" action="<?= base_url('service/tracer/edit_proses') ?>">
						<table class="table table-borderless">
							<tr>
								<th>No</th>
								<th>Pertanyaan :</th>
								<th>Jawaban Anda</th>
							</tr>
							<tr>
								<th>1</th>
								<th><?= $pertanyaan['pertanyaan'] ?></th>
								<td><input type="text" name="pendapatan" class="form-control" value="<?= $pertanyaan['jawaban'] ?>"></td>
							</tr>
						</table>
						<input type="hidden" name="pertanyaan" value="<?= $pertanyaan['id_pertanyaan'] ?>">
						<input type="hidden" name="id_user" value="<?= $pertanyaan['id_user'] ?>">
						<button type="submit" id="tombol_tracer" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Kirim Jawaban</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>