<?php
$this->extend('peserta/layout');
$this->section('content');
?>

	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('peserta', 'Peserta Lomba') ?></li>
			<li class="breadcrumb-item"><?= anchor('peserta/robot', 'Lomba Robot') ?></li>
			<li class="breadcrumb-item active" aria-current="page">Data</li>
		</ol>
		<dl class="row">
			<dt class="col-sm-4 col-md-3 text-sm-right">ID Peserta</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->id ?></dd>

			<dt class="col-sm-4 col-md-3 text-sm-right">Ketua Tim</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->ketua ?></dd>

			<dt class="col-sm-4 col-md-3 text-sm-right">WhatsApp</dt>
			<dd class="col-sm-8 col-md-9">0<?= $peserta->telepon ?></dd>

			<dt class="col-sm-4 col-md-3 text-sm-right">Guru Pendamping</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->guru ?></dd>

			<dt class="col-sm-4 col-md-3 text-sm-right">Asal Sekolah</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->sekolah ?></dd>

			<?php if ( ! empty( $peserta->anggota )) : ?>
				<dt class="col-sm-4 col-md-3 text-sm-right">Anggota Tim</dt>
				<dd class="col-sm-8 col-md-9"><?= $peserta->anggota ?></dd>
			<?php endif; ?>

			<dt class="col-sm-4 col-md-3 text-sm-right">Tanggal Pendaftaran</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->created_at ?></dd>

		</dl>
	</div>

<?php
$this->endSection();
