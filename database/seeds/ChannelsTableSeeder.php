<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $channel = ['title' => 'Laravel', 'slug' => str_slug('Laravel')];
        $channe2 = ['title' => 'Vuejs', 'slug' => str_slug('Vue js')];
        $channe3 = ['title' => 'CSS3', 'slug' => str_slug('css3')];
        $channe4 = ['title' => 'Javascript', 'slug' => str_slug('javascript')];
        $channe5 = ['title' => 'Php Testing', 'slug' => str_slug('php testing')];
        $channe6 = ['title' => 'Spark', 'slug' => str_slug('spark')];
        $channe7 = ['title' => 'Lumen', 'slug' => str_slug('lumen')];
        $channe8 = ['title' => 'Forge', 'slug' => str_slug('forge')];


        App\Channel::create($channel);
        App\Channel::create($channe2);
        App\Channel::create($channe3);
        App\Channel::create($channe4);
        App\Channel::create($channe5);
        App\Channel::create($channe6);
        App\Channel::create($channe7);
        App\Channel::create($channe8);

    }
}
