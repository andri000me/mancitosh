<?php
$this->extend('peserta/layout');
$this->section('content');
?>

<div class="container">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><?= anchor('peserta', 'Peserta Lomba') ?></li>
		<li class="breadcrumb-item"><?= anchor('peserta/' . $detail->kategori, 'Lomba ' . ucfirst($detail->kategori) ) ?></li>
		<li class="breadcrumb-item active" aria-current="page">Upload</li>
	</ol>

	<dl class="row">
		<dt class="col-sm-4 col-md-3 text-sm-right">Unduh</dt>
		<dd class="col-sm-8 col-md-9">
			<a href="<?= base_url( 'assets/cover/' . $detail->cover ) ?>" class="btn btn-success btn-sm">Cover</a>
			<a href="<?= base_url( 'assets/video/' . $detail->video ) ?>" class="btn btn-dark btn-sm ml-3">Video</a>			
		</dd>

		<dt class="col-sm-4 col-md-3 text-sm-right">Judul Karya</dt>
		<dd class="col-sm-8 col-md-9"><?= $detail->judul ?></dd>

		<dt class="col-sm-4 col-md-3 text-sm-right">Deskripsi video</dt>
		<dd class="col-sm-8 col-md-9"><?= $detail->deskripsi ?></dd>

		<dt class="col-sm-4 col-md-3 text-sm-right">Tanggal upload</dt>
		<dd class="col-sm-8 col-md-9"><?= $detail->created_at ?></dd>

		<div class="col-12 border-bottom text-info my-3">Data Peserta</div>

		<dt class="col-sm-4 col-md-3 text-sm-right">Ketua Tim</dt>
		<dd class="col-sm-8 col-md-9"><?= $peserta->ketua ?></dd>

		<dt class="col-sm-4 col-md-3 text-sm-right">WhatsApp</dt>
		<dd class="col-sm-8 col-md-9">0<?= $peserta->telepon ?></dd>

		<?php if ( $detail->kategori == 'robot' ): ?>
			<dt class="col-sm-4 col-md-3 text-sm-right">Guru Pendamping</dt>
			<dd class="col-sm-8 col-md-9"><?= $peserta->guru ?></dd>
		<?php endif ?>

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