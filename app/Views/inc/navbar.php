<nav class="navbar navbar-expand-lg navbar-dark bg-green navbar-top">
	<div class="container">
		<a class="navbar-brand" href="<?= site_url() ?>">
			<img src="<?= base_url( 'assets/img/ig-profile.jpg' ) ?>" width="30" height="30" class="d-inline-block align-top rounded-circle mr-2">
			<?= config('Site')->title ?>
		</a>
		<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-xl-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDaftar" role="button" data-toggle="dropdown">
						Pendaftaran
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownDaftar">
						<?php
						echo anchor('daftar/robot', 'Lomba Robot', ['class' => 'dropdown-item']);
						echo anchor('daftar/vlog', 'Lomba Vlog', ['class' => 'dropdown-item']);
						?>

					</div>
				</li>
				<li class="nav-item">
					<?= anchor('upload', 'Pengumpulan Karya', ['class' => 'nav-link']) ?>

				</li>
			</ul>
			<ul class="navbar-nav ml-lg-auto ml-xl-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle border rounded-pill text-white px-lg-3 text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Petunjuk Teknis
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a href="<?= base_url( 'assets/juknis-robotik.pdf' ) ?>" class="dropdown-item">Lomba Robot</a>
						<a href="<?= base_url( 'assets/juknis-vlog.pdf' ) ?>" class="dropdown-item">Lomba Vlog</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
