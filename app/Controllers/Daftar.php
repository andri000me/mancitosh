<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Daftar extends Controller
{
	public function robot()
	{
		$request = \Config\Services::request();
		if ( $request->getMethod() == 'post' ) {
			return $this->_robot_save();
		}
		else
		{
			helper('form');

			$data = array(
				'title'       => 'Formulir Pendaftaran Lomba Robot',
				'description' => 'Formulir Pendaftaran Lomba Robot',
				'cssAssets'   => ['home'],
				'validation'  => \Config\Services::validation()
			);
			return view('daftar/robot', $data);
		}
	}

	private function _robot_save()
	{
		// validasi input
		$rules = array(
			'ketua'   => 'required',
			'telepon' => 'required|decimal|is_unique[robot_peserta.telepon]',
			'guru'    => 'required',
			'sekolah' => 'required'
		);

		if ( $this->validate( $rules ) ) {
			// jika valid simpan db
			$robotPeserta = new \App\Models\RobotPeserta();

			$saveData = array(
				'ketua'   => $this->request->getVar( 'ketua' ),
				'telepon' => $this->request->getVar( 'telepon' ),
				'guru'    => $this->request->getVar( 'guru' ),
				'sekolah' => $this->request->getVar( 'sekolah' ),
				'anggota' => $this->request->getVar( 'anggota' )
			);
			$robotPeserta->save( $saveData );

			return redirect()->back()->with( 'message', $this->bs_alert( 'Pendaftaran menunggu validasi, info lebih lanjut akan dihubungi panitia melalui WhatsApp yang terdaftar.' ) );
		} else {
			return redirect()->back()->withInput();
		}
	}

	public function vlog()
	{
		$request = \Config\Services::request();
		if ( $request->getMethod() == 'post' ) {
			return $this->_vlog_save();
		}
		else
		{
			helper('form');

			$data = array(
				'title'       => 'Formulir Pendaftaran Lomba Vlog',
				'description' => 'Formulir Pendaftaran Lomba Vlog',
				'cssAssets'   => ['home'],
				'validation'  => \Config\Services::validation()
			);
			return view('daftar/vlog', $data);
		}
	}

	private function _vlog_save()
	{
		// validasi input
		$rules = array(
			'ketua'   => 'required',
			'telepon' => 'required|decimal|is_unique[vlog_peserta.telepon]',
			'sekolah' => 'required'
		);

		if ( $this->validate( $rules ) ) {
			// jika valid simpan db
			$robotPeserta = new \App\Models\VlogPeserta();

			$saveData = array(
				'ketua'   => $this->request->getVar( 'ketua' ),
				'telepon' => $this->request->getVar( 'telepon' ),
				'sekolah' => $this->request->getVar( 'sekolah' ),
				'anggota' => $this->request->getVar( 'anggota' )
			);
			$robotPeserta->save( $saveData );

			return redirect()->back()->with( 'message', $this->bs_alert( 'Pendaftaran menunggu validasi, info lebih lanjut akan dihubungi panitia melalui WhatsApp yang terdaftar.' ) );
		} else {
			return redirect()->back()->withInput();
		}
	}

	private function bs_alert($message = 'BS-Allert', $alertClass = 'success')
	{
		$tampil = '<div class="alert alert-' . $alertClass . ' alert-dismissible fade show" role="alert">';
		$tampil .= $message;
		$tampil .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
		$tampil .= '<span aria-hidden="true">&times;</span>';
		$tampil .= '</button>';
		$tampil .= '</div>';

		return $tampil;
	}
}