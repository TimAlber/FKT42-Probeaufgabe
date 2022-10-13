<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mitarbeiter;

class MitarbeiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mitarbeiter::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 200; $i++) {
			Mitarbeiter::create([
				'firmen_id' => $faker->uuid(),
				'vorname' => $faker->word(),
                'nachname' => $faker->word(),
                'email' => $faker->email(),
			]);
		}
    }
}
