<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
			'title'     => config('Site')->description,
			'cssAssets' => array(
				'timeline',
				'home'
			)
		);
		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
