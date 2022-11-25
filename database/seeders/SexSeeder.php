<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexes')->insert([
            ['sex_id' => 1,
            'name' => 'Male'],
            ['sex_id' => 2,
            'name' => 'Female']
        ]);
    }
}
