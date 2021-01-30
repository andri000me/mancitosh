<?php
$this->extend('layout');

$this->section('content');
?>

<div class="container text-center py-3 py-xl-5">
	<a href="https://us02web.zoom.us/j/81794704908?pwd=cmlibXVDU2F5V1NERE44Mk9paVhNZz09" class="btn btn-success btn-block btn-lg mb-1" target="_blank">
		<div class="font-weight-bold border-bottom mb-1 pb-2">Link Zoom Meeting</div>
		<small class="d-block">Meeting ID: 817 9470 4908</small>
		<small class="d-block">Passcode: man1</small>
	</a>
	<!-- <h1 class="display-4"><?= $title ?></h1> -->
	<!-- <p class="lead"><?= $description ?></p> -->
	<img src="<?= base_url('assets/img/poster-qna.png') ?>" class="img-fluid" />
</div>

<?php
$this->endSection();