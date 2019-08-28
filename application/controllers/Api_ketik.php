<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_ketik extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{

			$data = [
				'success' => false,
				'data' => [
						'email' => 'email',
						'password' => 'password'
				]
			];

		echo json_encode($data);
	}

}
