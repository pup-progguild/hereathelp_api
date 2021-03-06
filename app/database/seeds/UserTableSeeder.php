<?php

/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 10:23 AM
 */
class UserTableSeeder extends Seeder {
	public function run()
	{
		$data = [
			[
				'username' => 'awkwardusername',
				'email' => 'awkwardusername@gmail.com',
				'password' => Hash::make('MAILOLIWAIFUS'),
				'first_name' => 'Awkward',
				'middle_name' => 'User',
				'last_name' => 'Name',
				'position' => 'Disaster Manager',
				'contacts' => '09062713651'
			],
			[
				'username' => 'Temoto-kun',
				'email' => 'kiirofuriku@gmail.com',
				'password' => Hash::make('MAILOLIWAIFUS'),
				'first_name' => 'Tem',
				'middle_name' => 'Oto',
				'last_name' => 'Kun',
				'position' => 'Barangay Captain',
				'contacts' => '09394813792'
			],
			[
				'username' => 'engJEHneer',
				'email' => 'tabing.jeremiah@gmail.com',
				'password' => Hash::make('MAILOLIWAIFUS'),
				'first_name' => 'Jeremiah',
				'middle_name' => 'A',
				'last_name' => 'Tabing',
				'position' => 'Barangay Captain',
				'contacts' => '09272276107'
			],
			[
				'username' => 'ichi-san',
				'email' => 'ichi-san@gmail.com',
				'password' => Hash::make('MAILOLIWAIFUS'),
				'first_name' => 'Ichi',
				'middle_name' => 'Ichi',
				'last_name' => 'San',
				'position' => 'Barangay Captain',
				'contacts' => '09272276107'
			],
			[
				'username' => 'ni-san',
				'email' => 'ni-san@gmail.com',
				'password' => Hash::make('MAILOLIWAIFUS'),
				'first_name' => 'Ni',
				'middle_name' => 'Ni',
				'last_name' => 'San',
				'position' => 'Barangay Captain',
				'contacts' => '09272276107'
			]

		];

		foreach ($data as $d)
		{
			User::create($d);
		}
	}
}