<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $t2 = 'Sed tristique nibh eu elit elementum facilisis.';
        $t3 = 'Mauris hendrerit nibh id ligula accumsan eleifend.';
        $t4 = 'Aliquam viverra sapien ac eros pellentesque, ac fringilla arcu molestie.';
        $t5 = 'Nunc maximus eros sit amet magna efficitur aliquet.';


        $d1 = [
            'title' => $t1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla lectus, ultricies ac purus nec, ultricies sodales nisi. Pellentesque magna enim, sagittis at posuere in, tempus vitae dolor. Praesent at arcu in nunc sagittis consequat.',
            'channel_id' => 1,
            'user_id' => 2,
            'slug' => str_slug($t1)
        ];

        $d2 = [
            'title' => $t2,
            'content' => 'Etiam pellentesque, turpis sed tempus suscipit, est est porttitor turpis, eget accumsan sem ipsum nec nisl. Quisque quis lobortis risus.',
            'channel_id' => 2,
            'user_id' => 2,
            'slug' => str_slug($t2)
        ];

        $d3 = [
            'title' => $t3,
            'content' => 'a porta arcu. Maecenas nec blandit mi. Fusce in ante cursus, aliquet purus vehicula, malesuada tellus. Nunc cursus orci tortor, non tincidunt leo accumsan nec.',
            'channel_id' => 3,
            'user_id' => 1,
            'slug' => str_slug($t3)
        ];


        $d4 = [
            'title' => $t4,
            'content' => 'Nulla non pellentesque lorem. Aliquam fringilla aliquam risus a aliquet. Suspendisse in tempor quam. Fusce scelerisque tristique nulla eget posuere. Sed hendrerit nibh in arcu porttitor gravida.',
            'channel_id' => 4,
            'user_id' => 1,
            'slug' => str_slug($t4)
        ];

        $d5 = [
            'title' => $t5,
            'content' => 'In malesuada, mauris eu tempus laoreet, nunc ligula facilisis ante, id tincidunt sapien purus sit amet ligula. Integer tempor faucibus lacinia.',
            'channel_id' => 5,
            'user_id' => 2,
            'slug' => str_slug($t5)
        ];


        App\Discussion::create($d1);
        App\Discussion::create($d2);
        App\Discussion::create($d3);
        App\Discussion::create($d4);
        App\Discussion::create($d5);


    }
}
