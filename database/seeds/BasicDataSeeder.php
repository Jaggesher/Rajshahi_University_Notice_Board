<?php

use Illuminate\Database\Seeder;

class BasicDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_type')->delete();

		DB::table("user_type")->insert([
			['ID'=>'1','CatagoryName'=>'Faculty Members'],
			['ID'=>'2','CatagoryName'=>'Officers'],
			['ID'=>'3','CatagoryName'=>'Student'],
			['ID'=>'4','CatagoryName'=>'Staff']
		]);


		DB::table('admin_up_table')->delete();

		DB::table('admin_up_table')->insert([
			['ID'=>'1','UserID'=>'14015439','Pass'=>bcrypt('14015439'),'Name'=>'Shabbir Mahmood','Type'=>'admin'],
			['ID'=>'2','UserID'=>'14035440','Pass'=>bcrypt('14035440'),'Name'=>'Hasnain Mahmud','Type'=>'upload'],
			['ID'=>'3','UserID'=>'14025423','Pass'=>bcrypt('14025423'),'Name'=>'Jaggesher Mondal','Type'=>'admin']
			]);
    }
}
