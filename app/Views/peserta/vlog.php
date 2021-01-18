<?php
$this->extend('peserta/layout');
$this->section('content');
?>

<div class="container">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><?= anchor('peserta', 'Peserta Lomba') ?></li>
		<li class="breadcrumb-item active" aria-current="page">Lomba Vlog</li>
	</ol>
	
	<table data-toggle="table" data-search="true" data-pagination="true">
			<thead>
				<tr>
					<th data-sortable="true">No.</th>
					<th data-sortable="true">Nama Peserta</th>
					<th data-sortable="true">Asal Sekolah</th>
					<th>WhatsApp</th>
					<th>Upload</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ( $robot_peserta->findAll() as $peserta ) : ?>
					<tr>
						<td><?= $no ?></td>
						<td><a href="<?= site_url( 'peserta/vlog/' . $peserta->id ) ?>"><?= $peserta->ketua ?></a></td>
						<td><?= $peserta->sekolah ?></td>
						<td><?= anchor( 'https://api.whatsapp.com/send/?phone=62' . $peserta->telepon . '&text=dari+panitia+mancitosh&app_absent=1', '0' . $peserta->telepon ) ?></td>
						<td>
							<?php
							$cek_berkas = $berkas->where('telepon', $peserta->telepon)->first();
							if ( $cek_berkas ) {
								echo anchor('peserta/upload/' . $cek_berkas->id, $cek_berkas->created_at );
							}
							else
							{
								echo 'Belum';
							}
							?>

						</td>
					</tr>
				<?php $no++; endforeach; ?>

			</tbody>
		</table>
</div>

<?php
$this->endSection();
