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

	public function attendanceList($month, $year)
	{

		// $data = [
		// 	'status' => 'ok',
		// 	'attendances' => [
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Isnin',
		// 			'date' => '01-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Selasa',
		// 			'date' => '02-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		],
		// 		[
		// 			'day' => 'Rabu',
		// 			'date' => '03-01-2020',
		// 			'clockIn' => '08:15',
		// 			'clockOut' => '17.20'
		// 		]
		// 	]
		// ];

		$data = [
				"status"=> 200,
				"msg"=> "clocking_record",
				"data"=> [
						{
								"day_no"=> 1,
								"day"=> "Sunday",
								"day_my"=> "Ahad",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 2,
								"day"=> "Monday",
								"day_my"=> "Isnin",
								"day_status"=> "holiday",
								"holiday_desc"=> "Maal Hijrah (Gantian)",
								"data"=> null
						},
						{
								"day_no"=> 3,
								"day"=> "Tuesday",
								"day_my"=> "Selasa",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 4,
								"day"=> "Wednesday",
								"day_my"=> "Rabu",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 5,
								"day"=> "Thursday",
								"day_my"=> "Khamis",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 6,
								"day"=> "Friday",
								"day_my"=> "Jumaat",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 7,
								"day"=> "Saturday",
								"day_my"=> "Sabtu",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 8,
								"day"=> "Sunday",
								"day_my"=> "Ahad",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 9,
								"day"=> "Monday",
								"day_my"=> "Isnin",
								"day_status"=> "holiday",
								"holiday_desc"=> "Hari Keputeraan Seri Paduka Baginda Yang DiPertuan Agong",
								"data"=> {
										"uuid"=> "8e0f6659-8bfa-4aae-8f62-3e3c736c2dd0",
										"id"=> "32",
										"user_id"=> "830802115081",
										"clock_date"=> "2019-09-09",
										"clock_in"=> "2019-09-09 12=>24=>25",
										"clock_out"=> "2019-09-09 12=>41=>12",
										"reason_in"=> "lsjhdhd",
										"reason_submit_in"=> "2019-09-09 12=>24=>29",
										"reason_status_in"=> "0",
										"reason_status_update_in"=> null,
										"superior_id_in"=> null,
										"reason_out"=> "momo",
										"reason_submit_out"=> "2019-09-09 12=>41=>16",
										"reason_status_out"=> "0",
										"reason_status_update_out"=> null,
										"superior_id_out"=> null,
										"latitude_in"=> "2.98161690",
										"longitude_in"=> "101.80805260",
										"location_name_in"=> "Luar Kawasan",
										"latitude_out"=> "2.98163030",
										"longitude_out"=> "101.28611320",
										"location_name_out"=> "Luar Kawasan",
										"clocking_status_in"=> "1",
										"clocking_status_out"=> "1",
										"clock_type_in"=> "out_coverage",
										"clock_type_out"=> "out_coverage",
										"total_working_minutes"=> "16.78",
										"need_reason_in"=> false,
										"need_reason_out"=> false
								}
						},
						{
								"day_no"=> 10,
								"day"=> "Tuesday",
								"day_my"=> "Selasa",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 11,
								"day"=> "Wednesday",
								"day_my"=> "Rabu",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 12,
								"day"=> "Thursday",
								"day_my"=> "Khamis",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 13,
								"day"=> "Friday",
								"day_my"=> "Jumaat",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 14,
								"day"=> "Saturday",
								"day_my"=> "Sabtu",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 15,
								"day"=> "Sunday",
								"day_my"=> "Ahad",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 16,
								"day"=> "Monday",
								"day_my"=> "Isnin",
								"day_status"=> "holiday",
								"holiday_desc"=> "Hari Malaysia",
								"data"=> null
						},
						{
								"day_no"=> 17,
								"day"=> "Tuesday",
								"day_my"=> "Selasa",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 18,
								"day"=> "Wednesday",
								"day_my"=> "Rabu",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 19,
								"day"=> "Thursday",
								"day_my"=> "Khamis",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 20,
								"day"=> "Friday",
								"day_my"=> "Jumaat",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 21,
								"day"=> "Saturday",
								"day_my"=> "Sabtu",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 22,
								"day"=> "Sunday",
								"day_my"=> "Ahad",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 23,
								"day"=> "Monday",
								"day_my"=> "Isnin",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 24,
								"day"=> "Tuesday",
								"day_my"=> "Selasa",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 25,
								"day"=> "Wednesday",
								"day_my"=> "Rabu",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 26,
								"day"=> "Thursday",
								"day_my"=> "Khamis",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 27,
								"day"=> "Friday",
								"day_my"=> "Jumaat",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 28,
								"day"=> "Saturday",
								"day_my"=> "Sabtu",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 29,
								"day"=> "Sunday",
								"day_my"=> "Ahad",
								"day_status"=> "weekend",
								"holiday_desc"=> null,
								"data"=> null
						},
						{
								"day_no"=> 30,
								"day"=> "Monday",
								"day_my"=> "Isnin",
								"day_status"=> "weekday",
								"holiday_desc"=> null,
								"data"=> null
						}
				]
		];


		echo json_encode($data);
	}

}
