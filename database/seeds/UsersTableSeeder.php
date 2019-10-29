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
        //
        factory(App\User::class, 2)->create();

        App\User::create([
			'name'=>'alexies iglesia',
            'email'=>'ialexies@gmail.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('ialexies'),
            'remember_token' => str_random(10),
        ]);
    }
}
