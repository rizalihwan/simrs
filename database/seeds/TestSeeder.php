<?php

use Illuminate\Database\Seeder;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($a = 1; $a < 2; $a++)
        {
            DB::table('users')->insert([
                'role' => 'admin',
                'name' => 'Admin Rizal',
                'email' => 'admin',
                'password' => bcrypt('admin123'),
                'remember_token' => str_random(50)
            ]);
        }
    }
}
