<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            ['size_id' => 1,
            'name' => 'Small'],
            ['size_id' => 2,
            'name' => 'Medium'],
            ['size_id' => 3,
            'name' => 'Large']
        ]);
    }
}
