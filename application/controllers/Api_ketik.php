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

	public function attendanceList($x)
	{
		if($x == "1") {
			$data = [
				'status' => 'ok',
				'attendances' => [
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
				]
			];
		} else {
			$data = [
				'status' => 'ok',
				'attendances' => [
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Isnin',
						'date' => '01-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Selasa',
						'date' => '02-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					],
					[
						'day' => 'Rabu',
						'date' => '03-01-2020',
						'clockIn' => '08:15',
						'clockOut' => '17.20'
					]
				]
			];
		}


		echo json_encode($data);
	}

}
