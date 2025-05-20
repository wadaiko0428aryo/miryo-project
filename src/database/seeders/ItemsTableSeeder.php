<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => '登山靴',
                'price' => '3500',
                'description' => '私たちが作り上げたアウトドアブランド「みりょtoドア」で作った登山靴です。軽くて丈夫、履き心地抜群！',
                'image' => 'images/items/boots.jpg',
            ],
            [
                'name' => 'ブレスレット',
                'price' => '4500',
                'description' => '私たちがインドに行った際、現地の僧侶から譲り受けたもので神秘的な力を宿したブレスレットです！',
                'image' => 'images/items/bracelet.jpg',
            ],
            [
                'name' => 'キャンプチェアー（２脚）',
                'price' => '1200',
                'description' => '私たちが作り上げたアウトドアブランド「みりょtoドア」で作ったカンプチェアーです。特注の本革を使用し、座り心地抜群！',
                'image' => 'images/items/chairs.jpg',
            ],
            [
                'name' => 'アウトドアポット&コップセット',
                'price' => '4000',
                'description' => '私たちが作り上げたアウトドアブランド「みりょtoドア」で作ったアウトドアポットとコップのセットです。軽くて丈夫で割れにくい素材を使用、焚き火で直火OK！',
                'image' => 'images/items/cups and pot.jpg',
            ],
            [
                'name' => 'ブラジルの太鼓',
                'price' => '9000',
                'description' => '私たちがブラジルに行った時に現地の人が一つ一つ丁寧に作り上げた太鼓です。心地い音色と扱いやすさが特徴です！',
                'image' => 'images/items/drum in brazil.jpg',
            ],
            [
                'name' => 'アウトドアナイフ',
                'price' => '10000',
                'description' => '私たちが作り上げたアウトドアブランド「みりょtoドア」で作ったアウトドアナイフです。ヴィンテージ風に仕上げたこの一品は切れ味抜群で、非常に丈夫な作りのためアウトドアにぴったりです！',
                'image' => 'images/items/knife.jpg',
            ],
            [
                'name' => 'オイルランプ',
                'price' => '8000',
                'description' => '私たちが作り上げたアウトドアブランド「みりょtoドア」で作ったオイルランタンです。ヴィンテージ風で仕上げたもので、オイルランタンにしては光量が大きく明るいランタンです。',
                'image' => 'images/items/lamp.jpg',
            ],
            [
                'name' => 'ナンバープレート インテリア',
                'price' => '6000',
                'description' => '私たちがアメリカに行った時に実際に現地の人が使っていたナンバープレートをくれたものです。16枚入りとなっています',
                'image' => 'images/items/number plate in american.avif',
            ],
            [
                'name' => 'パロサント',
                'price' => '2000',
                'description' => '私たちがアマゾンに行った際現地で自生しているパラサントという木から採れたもの。アロマのような香りがする。',
                'image' => 'images/items/palosanto in amazon.avif',
            ],
            [
                'name' => 'インドのツボ',
                'price' => '20000',
                'description' => '私たちがインドに行った際に現地の職人が作った最高級ツボ。花瓶などにも使える',
                'image' => 'images/items/vase in indian.jpg',
            ],
        ]);
    }
}
