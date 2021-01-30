<?php
$this->extend('peserta/layout');
$this->section('content');
?>

	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('peserta', 'Peserta Lomba') ?></li>
			<li class="breadcrumb-item"><?= anchor('peserta/'.$lomba, 'Lomba '.ucfirst($lomba)) ?></li>
			<li class="breadcrumb-item active" aria-current="page">Ubah ID Peserta : <?= $peserta->id ?></li>
		</ol>

		<?= form_open(current_url()) ?>
			<div class="form-group">
				<label for="inputKetua">Ketua Tim</label>
				<?php
				$inputKetua = array(
					'name' => 'ketua',
					'value' => $peserta->ketua,
					'class' => 'form-control',
					'id' => 'inputKetua'
				);
				echo form_input($inputKetua);
				?>

			</div>

			<div class="form-group">
				<label for="inputTelepon">Nomor WhatsApp</label>
				<div class="input-group"><!-- mb-2 -->
					<div class="input-group-prepend">
						<div class="input-group-text">+62</div>
					</div>
					<?php
					$inputTelepon = array(
						'name' => 'telepon',
						'value' => $peserta->telepon,
						'class' => 'form-control',
						'id' => 'inputTelepon'
					);
					echo form_input($inputTelepon);
					?>
				</div>
			</div>

			<?php if ($lomba == 'robot'): ?>
				<div class="form-group">
					<label for="inputGuru">Guru Pendamping</label>
					<?php
					$inputGuru = array(
						'name' => 'guru',
						'value' => $peserta->guru,
						'class' => 'form-control',
						'id' => 'inputGuru'
					);
					echo form_input($inputGuru);
					?>

				</div>
			<?php endif ?>

			<div class="form-group">
				<label for="inputSekolah">Asal Sekolah</label>
				<?php
				$inputSekolah = array(
					'name' => 'sekolah',
					'value' => $peserta->sekolah,
					'class' => 'form-control',
					'id' => 'inputSekolah'
				);
				echo form_input($inputSekolah);
				?>

			</div>

			<div class="form-group">
				<label for="inputAnggota">Anggota Tim</label>
				<?php
				$inputAnggota = array(
					'name' => 'anggota',
					'value' => $peserta->anggota,
					'class' => 'form-control',
					'id' => 'inputAnggota'
				);
				echo form_input($inputAnggota);
				?>

			</div>

			<?= form_submit('update', 'Simpan Perubahan', ['class' => 'btn btn-success']) ?>
		<?= form_close() ?>
	</div>

<?php
$this->endSection();
