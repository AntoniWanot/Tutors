<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory;

class TutorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutors')->truncate();
        $faker = Factory::create();
        $faker->addProvider(new \Faker\Provider\Person($faker));
        $tutor = [];
        for ($i = 0; $i < 25; $i++) {
            $tutor[] = [
                "name" => $faker->name, "email" => $faker->unique()->safeEmail, "experience" => $faker->text, "degree" => $faker->text,
                "phone_number" => $faker->unique()->e164PhoneNumber, "subject" => $faker->text,  "rating" => $faker->numberBetween(1, 5)
            ];
        }
        DB::table('tutors')->insert($tutor);
    }
}
