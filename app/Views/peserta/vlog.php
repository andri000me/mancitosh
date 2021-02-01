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
					<th>No.</th>
					<th data-sortable="true">Nama Peserta</th>
					<th data-sortable="true">Asal Sekolah</th>
					<th>WhatsApp</th>
					<th data-sortable="true">Upload</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ( $robot_peserta->findAll() as $peserta ) : ?>
					<tr>
						<td><?= $no ?></td>
						<td><a href="<?= site_url( 'peserta/vlog/' . $peserta->id ) ?>"><?= $peserta->ketua ?></a></td>
						<td><?= $peserta->sekolah ?></td>
						<td><?= anchor( 'https://api.whatsapp.com/send/?phone=62' . $peserta->telepon . '&text=Assalamualaikum%2C%20Selamat%20Pendaftaran%20anda%20sudah%20berhasil.%20Selanjutnya%20silahkan%20bergabung%20dengan%20grup%20pendaftar%20untuk%20tanya%20jawab%20dan%20mendapat%20informasi%20selanjutnya.%20Terimakasih.%0D%0Ahttps%3A%2F%2Fchat.whatsapp.com%2FH9HiziBr6Gi5jNrObsz8Ha&app_absent=1', '0' . $peserta->telepon ) ?></td>
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
