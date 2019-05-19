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

	public function userList()
	{
		echo '{
						"data": [{
							"id": 3,
							"uuid": "ce075a11-bdca-40f1-b631-1165bc2c8835",
							"cont_name": "AAAA",
							"cont_nric": null,
							"cont_passport": null,
							"cont_mobile": "9999999",
							"cont_email": "aaaa@urusewa.com",
							"user_id": 1
						}, {
							"id": 9,
							"uuid": "f8b8f1a7-3ca3-4891-a344-4c4921536b21",
							"cont_name": "AAAAA",
							"cont_nric": null,
							"cont_passport": null,
							"cont_mobile": "12345676",
							"cont_email": "aaaaa@asd.com",
							"user_id": 1
						}, {
							"id": 4,
							"uuid": "684d9e45-d345-4fbd-8b7f-0c8f3d252a15",
							"cont_name": "BBBBB",
							"cont_nric": null,
							"cont_passport": null,
							"cont_mobile": "0123456789",
							"cont_email": "hello@urusewa.com",
							"user_id": 1
						}, {
							"id": 5,
							"uuid": "4c64e47b-8592-4494-a30d-dd59cb4ec651",
							"cont_name": "CCCCCC",
							"cont_nric": null,
							"cont_passport": null,
							"cont_mobile": "99999",
							"cont_email": "kajsda@ads.com",
							"user_id": 1
						}, {
							"id": 6,
							"uuid": "fa09e489-dceb-41aa-bf5f-9a5f985128d5",
							"cont_name": "DDDDDD",
							"cont_nric": null,
							"cont_passport": null,
							"cont_mobile": "qweqeq",
							"cont_email": "asdad@asd.com",
							"user_id": 1
						}],
						"total": 7
					}';
	}

}
