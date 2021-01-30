<?php
$this->extend('peserta/layout');
$this->section('content');
?>

	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><?= anchor('peserta', 'Peserta Lomba') ?></li>
			<li class="breadcrumb-item"><?= anchor('peserta/vlog', 'Lomba Vlog') ?></li>
			<li class="breadcrumb-item active" aria-current="page">Data</li>
		</ol>

		<?= session('message') ?>

		<dl class="row">
			<dt class="col-sm-4 col-md-3 text-sm-right">ID Peserta</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->id ?></dd>

			<dt class="col-sm-4 col-md-3 text-sm-right">Ketua Tim</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->ketua ?></dd>

			<dt class="col-sm-4 col-md-3 text-sm-right">WhatsApp</dt>
			<dd class="col-sm-8 col-md-9">0<?= $peserta->telepon ?></dd>

			<dt class="col-sm-4 col-md-3 text-sm-right">Asal Sekolah</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->sekolah ?></dd>

			<?php if ( ! empty( $peserta->anggota )) : ?>
				<dt class="col-sm-4 col-md-3 text-sm-right">Anggota Tim</dt>
				<dd class="col-sm-8 col-md-9"><?= $peserta->anggota ?></dd>
			<?php endif; ?>

			<dt class="col-sm-4 col-md-3 text-sm-right">Tanggal Pendaftaran</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->created_at ?></dd>

			<dd class="col-sm-8 col-md-9 offset-sm-4 offset-md-3 mt-3"><?= anchor('peserta/update/vlog/'.$peserta->id, 'Edit Data Peserta', ['class' => 'btn btn-warning']) ?></dd>

		</dl>
	</div>

<?php
$this->endSection();
