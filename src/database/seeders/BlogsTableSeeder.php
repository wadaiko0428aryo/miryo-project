<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'blog' => '2026/8/30 私たちは世界遺産の一つモン・サン・ミシェルにたどりついた。〜〜〜〜 とてもいい経験をした。',
                'image' => 'images/mont-saint-michel-france.avif',
                'location' => 'France in Normandy',
            ],
            [
                'blog' => '2026/9/4 私たちは世界一偉大な川、アマゾン川に来た。〜〜〜〜 とてもいい経験をした。',
                'image' => 'images/amazon-rever.avif',
                'location' => 'Peru',
            ],
            [
                'blog' => '2027/8/30 私たちの第二の故郷、喜界島についた。〜〜〜 とてもいい経験をした。',
                'image' => 'images/island.avif',
                'location' => 'Japan in Kikaizima',
            ],
            [
                'blog' => '2027/10/10 私たちは世界遺産の一つ富士山にたどりついた。〜〜〜〜 とてもいい経験をした。',
                'image' => 'images/mountain-fuji.avif',
                'location' => 'Japan in Sizuoka',
            ],
            [
                'blog' => '2027/12/30 私たちは世界遺産の一つエアーズロックにたどりついた。〜〜〜〜 とてもいい経験をした。',
                'image' => 'images/mountains-Australia.avif',
                'location' => 'Australia in Uluru Kata Tjuta',
            ],
            [
                'blog' => '2028/2/7 私たちは南フランスにたどりついた。〜〜〜〜 とてもいい経験をした。',
                'image' => 'images/South-france.avif',
                'location' => 'France',
            ],
        ]);
    }
}
