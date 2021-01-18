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
}