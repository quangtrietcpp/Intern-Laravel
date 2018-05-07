<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = [
            1 => 'Accounting',
            2 => 'Executive',
            3 => 'Manufacturing',
            4 => 'Health Care',
            5 => 'Engineering'
        ];
        foreach ($categories as $id => $occupation) {
            DB::table('categories')->insert([
                'name' => $occupation
            ]);
        }
    }
}
