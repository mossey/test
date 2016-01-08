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
        Eloquent::unguard();
        $this->call(UserTableSeeder::class);
        // $this->call(UserTableSeeder::class);
    }
}


class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        \Illuminate\Foundation\Auth\User::create(array(
            'name'     => 'Moses Nandwa',

            'email'    => 'nandwa.moses@gmail.com',
            'password' => Hash::make('qwerty41'),
        ));
    }

}