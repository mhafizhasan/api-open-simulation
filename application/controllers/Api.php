<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = [
			'success' => true,
			'data' => [
					'email' => $email,
					'password' => $password
				],
			'token' => JWT::encode('abc123xyz', $this->config->item('jwt_key'))
			];

		// echo json_encode(compact('data'));
		echo json_encode($data);
	}

}
