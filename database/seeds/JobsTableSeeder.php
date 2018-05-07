<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->truncate();
        $newJobs = [
            ['Accounting', 'nguyenle','2016-06-06 17:30:00'],
            ['Executive', 'nguyenle','2016-06-05 09:30:00'],
            ['Manufacturing', 'nguyenthanh', '2016-06-04 11:30:00'],
            ['Health Care', 'nguyenthanh', '2016-05-06 22:30:00'],
            ['Engineering', 'nguyenthanh', '2016-04-06 13:30:00']
        ];
        foreach ($newJobs as $id => $occupation) {
            $category_id = DB::table('categories') -> select('id') -> where('name', '=', $occupation[0]) -> get();
            $creator = DB::table('users') -> select('id') -> where('username', '=', $occupation[1]) -> get();
            DB::table('jobs')->insert([
                'category_id' => $category_id[0] -> id,
                'creator' => $creator[0] -> id,
                'title' => '',
                'description' => '',
                'is_public' => 1
            ]);
        }
    }
}
