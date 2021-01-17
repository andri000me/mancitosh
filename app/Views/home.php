<?php
$this->extend('layout');

$this->section('content');
?>

	<div class="container">
		<div class="row no-gutters my-5 my-xl-5">
			<div class="col-sm-12 col-md-7 col-xl-6 text-center text-lg-left">
				<img src="<?= base_url( 'assets/img/event-title.png' ) ?>" class="img-fluid">
			</div>
			<div class="col-sm-12 col-md-5 col-xl-6 text-center text-xl-right">
				<img src="<?= base_url( 'assets/img/robot-vlog.png' ) ?>" class="img-fluid">
			</div>
		</div>

		<div class="row no-gutters mt-xl-5" id="timeline">
			<div class="col-lg-3 col-xl-2 mb-3 text-md-center text-lg-right">
				<h2 class="text-success ">Alur Pelaksanaan Mancitosh 2021</h2>
			</div>
			<div class="col-lg-9 col-xl-10">
				<?= $this->include('inc/timeline') ?>

			</div>
		</div><!-- timeline -->

		<div class="row no-gutters justify-content-center" id="faq">
			<div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-6">
				<img src="<?= base_url( 'assets/img/sapiens-2.svg' ) ?> " class="img-fluid" />
			</div>
			<div class="col-sm-12 col-lg-7 col-xl-6">
				<h1 class="display-4 mb-3 my-lg-4 my-xl-5">Pertanyaan yang sering diajukan</h1>
				
				<?php echo $this->include('inc/faq') ?>
			</div>
		</div><!-- faq -->
	</div>

<?php
$this->endSection();