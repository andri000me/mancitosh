<?php namespace App\Controllers;

class Qna extends BaseController
{
	public function index()
	{
		$viewData = array(
			'title'     => 'Q&A',
			'description' => 'Penyamaan persepsi sebelum lomba',
			'cssAssets' => array(
				'home'
			)
		);
		return view('qna', $viewData);
	}

	//--------------------------------------------------------------------

}