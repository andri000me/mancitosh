<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Upload extends Controller
{
	protected $helpers = ['bs_alert', 'form'];

	function __construct()
	{
		$this->robotPeserta = new \App\Models\RobotPeserta();
		$this->vlogPeserta = new \App\Models\VlogPeserta();
		$this->berkas = new \App\Models\Berkas();
		// $this->request = \Config\Services::request();
	}

	public function index()
	{
		
		if ( $this->request->getMethod() == 'post' ) {
			return $this->_save();
		}
		else
		{
			$data = array(
				'validation' => \Config\Services::validation(),
				'title'      => 'Formulir Pengumpulan Karya',
				'jsAssets'   => ['bs-custom-file-input.min', 'upload']
			);
			return view('upload/form', $data);
		}
	}

	private function _save()
	{
		// echo 'kategori '.$this->request->getVar( 'kategori' );
		$rules = array(
			'kategori' => 'required',
			'telepon'  => 'required|decimal',
		);

		if ( $this->validate( $rules ) )
		{
			$telepon = $this->request->getVar( 'telepon' );

			$kategori = $this->request->getVar( 'kategori' );
			
			if ($kategori == 'robot' OR $kategori == 'vlog')
			{
				// echo 'cek nomor';
				if ( $kategori == 'robot' )
				{
					$peserta = $this->robotPeserta->where('telepon', $telepon)->first();
				}
				else
				{
					$peserta = $this->vlogPeserta->where('telepon', $telepon)->first();
				}

				if ( $peserta )
				{
					// echo $peserta->id;
					$rules_upload = array(
						'judul'     => 'required',
						'deskripsi' => 'required',
						'video'     => 'uploaded[video]|ext_in[video,mov,mpeg4,mp4]',
						'cover'     => 'uploaded[cover]|is_image[cover]'
					);
					if ( $this->validate( $rules_upload ) )
					{
						echo 'valid';
						// ambil file
						$fileVideo = $this->request->getFile('video');
						// generate nama random
						$namaVideo = $fileVideo->getRandomName();
						// pindah video
						$fileVideo->move('assets/video', $namaVideo);

						$fileCover = $this->request->getFile('cover');
						$namaCover = $fileCover->getRandomName();
						$fileCover->move('assets/cover', $namaCover);

						// query
						$berkas_save = array(
							'kategori'  => $this->request->getVar( 'kategori' ),
							'telepon'   => $telepon,
							'judul'     => $this->request->getVar( 'judul' ),
							'deskripsi' => $this->request->getVar( 'deskripsi' ),
							'video'     => $namaVideo,
							'cover'     => $namaCover
						);
						$this->berkas->save( $berkas_save );

						return redirect()->back()->with( 'message', bs_alert( 'Karya Anda telah kami terima, selamat menunggu pengumuman final.' ) );
					}
					else
					{
						return redirect()->back()->withInput();
					}
				}
				else
				{
					// echo 'tidak terdaftar';
					return redirect()->back()->withInput()->with('message', bs_alert('Nomor WhatsApp tidak terdaftar', 'danger'));
				}
			}
			else
			{
				return redirect()->back()->withInput();
			}
			
		}
		else
		{
			return redirect()->back()->withInput();
		}
	}
}