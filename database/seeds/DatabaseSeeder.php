<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'name' => 'leo',
           'email' => 'vieiraleonardo695@gmail.com',
           'password' => Hash::make('123456'),
       ]);
    }
    }

