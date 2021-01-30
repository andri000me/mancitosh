<?php
$this->extend('layout');

$this->section('content');
?>

<div class="container text-center py-3 py-xl-5">
	<a href="#zoom" class="btn btn-success btn-block btn-lg">
		<div class="font-weight-bold border-bottom mb-1 pb-2">Link Zoom Meeting</div>
		<small>password: man1ponorogo</small>
	</a>
	<!-- <h1 class="display-4"><?= $title ?></h1> -->
	<!-- <p class="lead"><?= $description ?></p> -->
	<img src="<?= base_url('assets/img/poster-qna.png') ?>" class="img-fluid" />
</div>

<?php
$this->endSection();