<?php
/**
 * Created by PhpStorm.
 * User: Mark Jayson
 * Date: 5/10/14
 * Time: 1:25 AM
 */

class EventTableSeeder extends Seeder {
	public function run() {
		DB::table('events')->delete();

		$data = [
			[ //1
				'category_id' => 1,
				'location' => '11.3942406,122.4226067',
				'geobounds' => '11.3942406,122.4226067;11.325408, 122.534887;11.276591, 122.483388',
				'est_alive' => 1000,
				'est_dead' => 2,
				'user_id' => 2
			],

			[ //2
				'category_id' => 1,
				'location' => '14.5482037,121.0384825',
				'geobounds' => '14.559461, 121.034620;11.325408, 122.534887;14.532792, 121.027239;14.547664, 121.018398',
				'est_alive' => 40000,
				'est_dead' => 300,
				'user_id' => 3
			],
			[ //3
				'category_id' => 2,
				'location' => '14.5637389,121.0587385',
				'geobounds' => '14.573334, 121.074188;14.549658, 121.074188;14.551070, 121.049640;14.572835, 121.039341',
				'est_alive' => 20000,
				'est_dead' => 4,
				'user_id' => 4
			],
			[ //4
				'category_id' => 14,
				'location' => '14.590279, 120.997799',
				'geobounds' => '14.592854, 121.009987;14.577321, 121.017626;14.577653, 121.000889;14.594681, 120.999172',
				'est_alive' => 2,
				'est_dead' => 49998,
				'user_id'=> 5
			],
		];

		foreach ($data as $d)
		{
			Event::create($d);
		}
	}
}