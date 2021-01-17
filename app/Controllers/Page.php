<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
	public function index()
	{
		$data = array(
			'title' => 'Login',
			'cssAssets' => array(
				'floating-labels'
			)
		);
		return view( 'auth/login', $data );
	}
}