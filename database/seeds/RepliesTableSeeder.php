<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Donec eu ligula risus. Ut eleifend in lectus quis vestibulum. Nullam id laoreet orci, pharetra pretium ex. Nunc pellentesque, sapien at malesuada consequat.'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'tortor massa scelerisque enim, a lacinia mauris diam non libero. Praesent auctor dolor vel nisi placerat pellentesque. Cras gravida.'
        ];

        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'quam a justo bibendum dapibus non vel tellus. Suspendisse id volutpat ligula. Duis varius elit ut porta cursus. Sed venenatis augue eget.'
        ];

        $r4 = [
            'user_id' => 2,
            'discussion_id' => 4,
            'content' => 'Aenean ultrices odio at dapibus ullamcorper. Vivamus pretium congue urna at ultrices. Morbi non erat ex. Cras ut nunc risus. Nullam porttitor.'
        ];

        $r5 = [
            'user_id' => 1,
            'discussion_id' => 5,
            'content' => 'Nunc tellus felis, bibendum non eleifend eget, ultricies vitae dolor. Nunc posuere egestas eleifend. Maecenas mattis risus quis ipsum rhoncus maximus.'
        ];


        App\Reply::create($r1);
        App\Reply::create($r2);
        App\Reply::create($r3);
        App\Reply::create($r4);
        App\Reply::create($r5);

    }
}
