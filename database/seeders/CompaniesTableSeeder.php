<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
        $companies = [];
        $faker = Faker::create();

        foreach(range(1,20) as $index)
        {
            $companies[] = [
                'name' => $faker->company(),
                'age' => "test",
                'website' => $faker->domainName(),
                'address' => $faker->address(),
                'email' => $faker->email(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('companies')->insert($companies);
    }
}
