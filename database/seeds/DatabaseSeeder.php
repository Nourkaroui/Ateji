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
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
            'name'=>'nour admin',
            'email'=> 'nour.karoui@esprit.tn',
            'password'=>Hash::make('123456789'),
        ]);
    }
}
