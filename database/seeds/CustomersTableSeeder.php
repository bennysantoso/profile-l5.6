<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Dani Sanjaya',
            'address' => 'Jl. Hiri 2A',
            'register_date' => '2018-05-28 09:03:47',
        ]);

        DB::table('customers')->insert([
            'name' => 'Edwin Sudiro',
            'address' => 'Jl. Hawa Raya 17',
            'register_date' => '2018-05-29 10:05:57',
        ]);
    }
}


