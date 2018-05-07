<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
                'username' => 'nguyenle',
                'password' => '12345678',
                'email' => 'nguyenle@gmail.com',
                'skills' => 'Accounting,Engineering'
            ]);
        DB::table('users')->insert(
            [
                'username' => 'nguyenthanh',
                'password' => '12345678',
                'email' => 'nguyenthanh@gmail.com',
                'skills' => 'Engineering'
            ]
        );
    }
}
