<?php
$this->extend('peserta/layout');
$this->section('content');
?>

	<div class="container">
		<div class="list-group my-3">
			<?php
			echo anchor('peserta/robot', 'Peserta Lomba Robot', [ 'class' => 'list-group-item list-group-item-action' ] );
			echo anchor('peserta/vlog', 'Peserta Lomba Vlog', [ 'class' => 'list-group-item list-group-item-action' ] );
			?>

		</div>
	</div>

<?php
$this->endSection();
