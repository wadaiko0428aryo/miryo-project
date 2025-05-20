@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/top_page.css') }}">
@endsection

@section('content')
<div class="content-header_img">
    <img src="{{ asset('storage/images/panoramic-vanlife.jpg') }}" alt="画像" class="panorama">
</div>
<div class="greeting">
    <h4 class="text1 text">おはようございます！こんにちは！こんばんは！</h4>
    <p class="text2 text">私たちは、日本全国から世界の果てまで旅をする二人「Miryo」です！<br>始めに私たち二人についてみなさんにお話しします！</p>
    <h5 class="Q text">何をしている人なの？</h5>
    <p class="text3 text A">私たちは、互いに23歳の時に結婚して、25歳で二人の夢だった「VAN LIFE」をスタートしました。<br>車での生活を約３年続けた後もう一つの大きな夢である「世界旅行」に出発しました。<br>今も地球のどこかで旅をしながら、SNS発信や商品開発、音楽活動にイベント企画などなど、幅広く活動しています！
    </p>
    <h5 class="Q text">このサイトではなにができるの？</h5>
    <p class="text4 text A">このサイトでは、普段私たちが活動している様子を書き記したブログや、<br>私たちが考案した商品などの販売、私たちが企画しているイベント情報の予約などを紹介しているサイトです！</p>
    <h5 class="Q text">今後の二人の夢は？</h5>
    <p class="text5 text A">私たちはいままでの、そしてこれからの旅で経験したことや今の世界に必要だと思うことを<br>少しでも多くの人々に知ってもらおうと日々頑張っています。<br>その内の一つとして私たち二人にとって特別な場所である、「兵庫県明石市」に私たちの「カフェ&個展」を開きました！！<br>このお店をスタートに、新たな夢に向かって私たちの、世界をより良くする計画、『Miryo Project』が始まります！！！</p>

</div>



@endsection