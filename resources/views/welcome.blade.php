<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stock. Talk?</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('/images/welcome.jpg')}}) center/cover no-repeat fixed;;
                color: #fff;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            p {
                font-family: 'Nunito', sans-serif;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 20px;
                top: 25px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-family: 'Lora', sans-serif;
                margin-bottom: 38px;
            }

            .links > a {
                color: #fff;
                padding: 5px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:hover {
                border-bottom: 3px solid #fdbb28;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container text-center">
                <div class="title">
                    <strong>Stock. Talk?</strong>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur <span class="h5 font-weight-bold">Forum</span> elit. Debitis sunt officiis cupiditate harum, <span class="h5 font-weight-bold">Mahasiswa</span> excepturi labore tenetur dignissimos consequuntur distinctio similique cumque, nam nisi, atque quod iusto optio corrupti praesentium fugit <span class="h5 font-weight-bold">TC</span>. Fugit, incidunt voluptas. At eius pariatur, explicabo <span class="h5 font-weight-bold">ITS</span> omnis incidunt beatae, ipsa sit, et provident rerum eaque iste.</p>
            </div>
        </div>
    </body>
</html>
