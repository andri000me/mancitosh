<?php
$this->extend('layout');
$this->section('content');
?>

<div class="container">
	<div class="row justify-content-sm-center">
		<div class="col-12 col-sm-9 col-md-5 col-lg-5 align-self-center text-lg-right order-2 order-md-1 p-0">
			<img src="<?= base_url( 'assets/img/sapiens-4.svg' ) ?>" class="img-fluid">
		</div>
		<div class="col-12 col-sm-9 col-md-7 col-lg-6 order-1 order-md-2">
			<div class="mb-3 my-xl-5">
				<h1 class="display-1">Formulir</h1>
				<h1 class="display-4"><span class="text-success">pengumpulan</span> karya</h1>
			</div>
			<?= session()->getFlashdata('message') ?>


			<?= form_open_multipart( current_url(), ['class'=>'my-3'] ) ?>

				<?= csrf_field() ?>

				<div class="form-group">
					<?php
					$options = array(
						'' => 'Kategori Lomba',
						'robot' => 'Lomba Robot',
						'vlog' => 'Lomba Vlog',
					);
					$dropdownClass = array(
						'class' => 'custom-select' . (( $validation->hasError('kategori') ) ? ' is-invalid' : '')
					);
					echo form_dropdown('kategori', $options, old( 'kategori' ), $dropdownClass);
					echo '<div class="invalid-feedback">' . $validation->getError('kategori') . '</div>';
					?>

				</div>

				<div class="form-group">
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text">+62</div>
						</div>
						<!-- <input type="text" class="form-control" id="inputWa" placeholder="Nomor WhatsApp sesuai pendaftaran"> -->
						<?php
						$inputTelepon = array(
							'name'  => 'telepon',
							'value' => old('telepon'),
							'class' => 'form-control' . (( $validation->hasError('telepon') ) ? ' is-invalid' : ''),
							'id'    => 'inputTelepon',
							'placeholder' => 'Nomor WhatsApp sesuai pendaftaran'
						);
						echo form_input($inputTelepon);
						echo '<div class="invalid-feedback">' . $validation->getError('telepon') . '</div>';
						?>

					</div>
				</div>

				<div class="form-group">
					<?php
					$inputJudul = array(
						'name'        => 'judul',
						'value'       => old('judul'),
						'class'       => 'form-control' . (( $validation->hasError('judul') ) ? ' is-invalid' : ''),
						'id'          => 'inputJudul',
						'placeholder' => 'Judul karya'
					);
					echo form_input($inputJudul);
					echo '<div class="invalid-feedback">' . $validation->getError('judul') . '</div>';
					?>
				</div>
				<div class="form-group">
					<label for="textDeskripsi">Deskripsi video</label>
					<?php
					$textDeskripsi = array(
						'name'  => 'deskripsi',
						'value' => old('deskripsi'),
						'class' => 'form-control' . (( $validation->hasError('deskripsi') ) ? ' is-invalid' : ''),
						'id'    => 'textDeskripsi',
						'rows'  => '2'
					);
					echo form_textarea($textDeskripsi);
					echo '<div class="invalid-feedback">' . $validation->getError('deskripsi') . '</div>';
					?>
				</div>

				<div class="form-group">
					<div class="custom-file">
						<?php
						$uploadVideo = array(
							'name'        => 'video',
							'value'       => old('video'),
							'class'       => 'custom-file-input' . (( $validation->hasError('video') ) ? ' is-invalid' : ''),
							'id'          => 'uploadVideo'
						);
						echo form_upload($uploadVideo);
						?>
						<label class="custom-file-label" for="customFile">Video</label>
						<?php echo '<div class="invalid-feedback">' . $validation->getError('video') . '</div>'; ?>
					</div>
				</div>

				<div class="form-group">
					<div class="custom-file">
						<?php
						$uploadCover = array(
							'name'        => 'cover',
							'value'       => old('cover'),
							'class'       => 'custom-file-input' . (( $validation->hasError('cover') ) ? ' is-invalid' : ''),
							'id'          => 'uploadCover'
						);
						echo form_upload($uploadCover);
						?>
						<label class="custom-file-label" for="uploadCover">Gambar pratinjau video</label>
						<?php echo '<div class="invalid-feedback">' . $validation->getError('cover') . '</div>'; ?>
					</div>
				</div>

				<?php
				$formSubmit = array(
					'name'  => 'submit',
					'class' => 'btn btn-success',
					'value' => 'Kirim'
				);
				echo form_submit( $formSubmit );
				?>

			<?= form_close() ?>

		</div>
	</div>
</div>

<?php
$this->endSection();