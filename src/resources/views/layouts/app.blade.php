<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miryo Project</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>

    <div class="header">
        <div class="header-inner">
            <div class="header-title">
                <a href="{{ route('top') }}" class="top-link">
                    <h1 class="title">Miryo Project</h1>
                </a>
            </div>
            <div class="header-menu">

                @auth
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}" class="dashboard-link link">Admin</a>
                    @endif
                @endauth

                <a href="{{ route('miryo') }}" class="miryo-link link">Miryo's Cafe</a>
                <a href="{{ route('blog') }}" class="blog-link link">Blog</a>
                <a href="{{ route('items') }}" class="item-link link">Shopping</a>
                <a href="{{ route('events') }}" class="schedule-link link">Event</a>
                <a href="{{ route('my_page') }}" class="my_page-link link">My Page</a>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Log Out" class="logout-link link">
                </form>
            </div>

        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        <div class="icon-group">
            <a href="https://www.instagram.com/miryo1028?igsh=MTh3cjV0YXNxcWc2ZQ%3D%3D&utm_source=qr" class="instagram-link"><img src="{{ asset('storage/images/instagram.png') }}" alt="画像" class="instagram-img icon"></a>

            <a href="https://youtube.com/@miryo_wte?si=iUG_InLRcaVHL8Hx" class="youtube-link"><img src="{{ asset('storage/images/youtube.png') }}" alt="画像" class="youtube-img icon"></a>
        </div>
    </div>

</body>
</html>