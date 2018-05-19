<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('rashed'),
            'email' => 'lelinbabu784@gmail.com',
            'admin' => 1,
            'avatar' => 'avatars/avatar.jpg'
        ]);

        App\User::create([
            'name' => 'rashed',
            'password' => bcrypt('rashed'),
            'email' => 'diitrashed@gmail.com',
            'avatar' => 'avatars/avatar.jpg'
        ]);
    }
}
