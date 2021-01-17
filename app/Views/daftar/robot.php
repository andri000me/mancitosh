<?php
$this->extend('layout');
$this->section('content');
?>

<div class="container">
	<div class="row justify-content-center my-xl-5 my-5">
		<div class="col-12 col-sm-9 col-md-5 col-lg-5 text-lg-right"><!-- align-self-center -->
			<div class="text-center text-md-right">
				<h1 class="display-4"><?= $title ?></h1>
			</div>
			<img src="<?= base_url('assets/img/sapiens-3.svg') ?>" class="img-fluid">
		</div>
		<div class="col-12 col-sm-9 col-md-7 col-lg-6">
			<div class=" bg-white border rounded shadow-sm p-3" id="form">
				
				<?= session()->getFlashdata('message') ?>

				<?= form_open( current_url() ) ?>

					<?= csrf_field() ?>

					<div class="form-group">
						<label for="inputKetua">Nama Ketua Tim</label>
						<?php
						$inputKetua = array(
							'name'      => 'ketua',
							'value'     => old('ketua'),
							'class'     => 'form-control' . (( $validation->hasError('ketua') ) ? ' is-invalid' : ''),
							'id'        => 'inputKetua'
						);
						echo form_input($inputKetua);
						echo '<div class="invalid-feedback">' . $validation->getError('ketua') . '</div>';
						?>

					</div>

					<div class="form-group">
						<label for="inputTelepon">Nomor WhatsApp yang bisa dihubungi</label>
						<div class="input-group">
							<div class="input-group-prepend">
			          <div class="input-group-text">+62</div>
			        </div>
							<?php
							$inputTelepon = array(
								'name'  => 'telepon',
								'value' => old('telepon'),
								'class' => 'form-control' . (( $validation->hasError('telepon') ) ? ' is-invalid' : ''),
								'id'    => 'inputTelepon'
							);
							echo form_input($inputTelepon);
							echo '<div class="invalid-feedback">' . $validation->getError('telepon') . '</div>';
							?>

						</div>
					</div>

					<div class="form-group">
						<label for="inputGuru">Guru Pendamping</label>
						<?php
						$inputGuru = array(
							'name'      => 'guru',
							'value'     => old('guru'),
							'class'     => 'form-control' . (( $validation->hasError('guru') ) ? ' is-invalid' : ''),
							'id'        => 'inputGuru'
						);
						echo form_input($inputGuru);
						echo '<div class="invalid-feedback">' . $validation->getError('guru') . '</div>';
						?>

					</div>

					<div class="form-group">
						<label for="inputSekolah">Asal Sekolah</label>
						<?php
						$inputSekolah = array(
							'name'      => 'sekolah',
							'value'     => old('sekolah'),
							'class'     => 'form-control' . (( $validation->hasError('sekolah') ) ? ' is-invalid' : ''),
							'id'        => 'inputSekolah'
						);
						echo form_input($inputSekolah);
						echo '<div class="invalid-feedback">' . $validation->getError('sekolah') . '</div>';
						?>

					</div>

					<div class="form-group">
						<label for="inputAnggota">Anggota (jika ada)</label>
						<?php
						$inputAnggota = array(
							'name'      => 'anggota',
							'value'     => old('anggota'),
							'class'     => 'form-control' . (( $validation->hasError('anggota') ) ? ' is-invalid' : ''),
							'id'        => 'inputAnggota'
						);
						echo form_input($inputAnggota);
						echo '<div class="invalid-feedback">' . $validation->getError('anggota') . '</div>';
						?>

					</div>

					<?php
					$formSubmit = array(
						'name'  => 'submit',
						'class' => 'btn btn-success',
						'value' => 'Daftar'
					);
					echo form_submit( $formSubmit );
					?>

				<?= form_close() ?>
			</div><!-- #form -->

		</div>
	</div>
</div>

<?php
$this->endSection();
