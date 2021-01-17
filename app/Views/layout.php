<?php
$site = new \Config\Site();
?>
<!doctype html>
<html lang="id-ID" class="h-100">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<title><?php echo ( isset( $title )? $title . ' &ndash; ' : '' ) . $site->title; ?></title>
		<meta name="description" content="<?php echo isset($description)?$description:$site->description; ?>">

		<link rel="canonical" href="<?= current_url() ?>">

		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/roboto.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
		<?php
		if ( isset( $cssAssets ) )
		{
			foreach ($cssAssets as $css)
			{
				echo '<link rel="stylesheet" type="text/css" href="' . base_url( 'assets/css/' . $css . '.css' ) . '">';
			}
		}
		?>

	</head>
	<body class="d-flex flex-column h-100">
		<?php
		if ( !isset($navbar) OR $navbar == TRUE )
		{
			echo $this->include('inc/navbar');
		}
		?>

		<?= $this->renderSection('content') ?>

		<?php
		if ( !isset($footer) OR $footer == TRUE )
		{
			echo $this->include('inc/footer');
		}
		?>

		<script type="text/javascript" src="<?= base_url( 'assets/js/jquery.slim.min.js' ) ?>"></script>
		<script type="text/javascript" src="<?= base_url( 'assets/js/bootstrap.bundle.min.js' ) ?>"></script>
		<?php
		if ( isset( $jsAssets ) )
		{
			foreach ($jsAssets as $js)
			{
				echo '<script type="text/javascript" src="' . base_url( 'assets/js/' .$js. '.js' ) . '"></script>'.PHP_EOL;
			}
		}
		?>

	</body>
</html>