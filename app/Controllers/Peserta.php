<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Peserta extends Controller
{
	function __construct()
	{
		$this->robotPeserta = new \App\Models\RobotPeserta();
		$this->vlogPeserta  = new \App\Models\VlogPeserta();
		$this->berkas       = new \App\Models\Berkas();
	}

	public function index( $page = 'index')
	{
		$data = array(
			'footer' => false
		);
		return view('peserta/home', $data);
	}

	public function robot( $page = 'index' )
	{
		if ( $page == 'index' )
		{
			$data = array(
				'robot_peserta' => $this->robotPeserta,
				'berkas' => $this->berkas,
				'footer' => false,
				'cssAssets' => ['bootstrap-table.min'],
				'jsAssets'  => ['bootstrap-table.min']
			);
			return view('peserta/robot', $data);
		}
		else
		{
			$peserta = $this->robotPeserta->find( $page );
			if ( $peserta )
			{
				$data = array(
					'peserta' => $peserta,
					'berkas' => $this->berkas,
					'footer' => false
				);
				return view( 'peserta/robot-detail', $data );
			}
			else
			{
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Peserta tidak dikenal');
			}
		}
	}

	public function vlog( $page = 'index' )
	{
		if ( $page == 'index' )
		{
			$data = array(
				'robot_peserta' => $this->vlogPeserta,
				'berkas' => $this->berkas,
				'footer' => false,
				'cssAssets' => ['bootstrap-table.min'],
				'jsAssets'  => ['bootstrap-table.min']
			);
			return view('peserta/vlog', $data);
		}
		else
		{
			$peserta = $this->vlogPeserta->find( $page );
			if ( $peserta )
			{
				$data = array(
					'peserta' => $peserta,
					'berkas' => $this->berkas,
					'footer' => false
				);
				return view( 'peserta/vlog-detail', $data );
			}
			else
			{
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Peserta tidak dikenal');
			}
		}
	}

	public function upload($id = 'index')
	{
		if ( $id == 'index' )
		{
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('index belum tersedia');
		}
		else
		{
			$detail = $this->berkas->find( $id );
			if ( $detail )
			{
				if ( $detail->kategori == 'robot' )
				{
					$peserta = $this->robotPeserta->where( 'telepon', $detail->telepon )->first();
				}
				else
				{
					$peserta = $this->vlogPeserta->where( 'telepon', $detail->telepon )->first();
				}

				$data = array(
					'detail' => $detail,
					'peserta' => $peserta,
					'footer' => false
				);
				return view( 'peserta/upload-detail', $data );
			}
			else
			{
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Berkas tidak ditemukan');
			}
		}
	}

	public function update($lomba = 'index', $id = 0)
	{
		if ( $this->request->getMethod() == 'post' ) {
			helper('bs_alert');

			switch ($lomba) {
				case 'robot':
					$dataRobotPeserta = array(
						'id' => $id,
						'ketua' => $this->request->getPost('ketua'),
						'telepon' => $this->request->getPost('telepon'),
						'guru' => $this->request->getPost('guru'),
						'sekolah' => $this->request->getPost('sekolah'),
						'anggota' => $this->request->getPost('anggota')
					);
					$this->robotPeserta->save($dataRobotPeserta);
					return redirect()->to('/peserta/'.$lomba.'/'.$id)->with( 'message', bs_alert( 'Data peserta berhasil diubah oleh panitia' ) );
					break;
				case 'vlog':
					$dataVlogPeserta = array(
						'id' => $id,
						'ketua' => $this->request->getPost('ketua'),
						'telepon' => $this->request->getPost('telepon'),
						'sekolah' => $this->request->getPost('sekolah'),
						'anggota' => $this->request->getPost('anggota')
					);
					$this->vlogPeserta->save($dataVlogPeserta);
					return redirect()->to('/peserta/'.$lomba.'/'.$id)->with( 'message', bs_alert( 'Data peserta berhasil diubah oleh panitia' ) );
					break;
				
				default:
					throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Gagal mengubah data peserta');
					break;
			}
		} else {
			switch ($lomba) {
				case 'robot':
					$peserta = $this->robotPeserta->find($id);
					break;
				case 'vlog':
					$peserta = $this->vlogPeserta->find($id);
					break;
				
				default:
					$peserta = false;
					break;
			}

			if ($peserta) {
				helper('form');

				$dataDetail = array(
					'title' => 'Form Ubah Data Peserta',
					'lomba' => $lomba,
					'peserta' => $peserta
				);
				return view('peserta/update', $dataDetail);
			} else {
				throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data peserta tidak ditemukan');
			}

		}
		
	}
}