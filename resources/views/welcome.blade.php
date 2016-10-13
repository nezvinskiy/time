<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 86px;
                font-weight: normal;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: normal;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Auth::guest())
                @if (Route::has('login'))
                    <div class="top-right links">
                        <a href="{{ url('/login') }}">{{ trans('app.login') }}</a>
                        <a href="{{ url('/register') }}">{{ trans('app.register') }}</a>
                    </div>
                @endif
            @else
                <div class="top-right links">
                    <a href="{{ url('/home') }}">{{ trans('app.dashboard') }}</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ env('APP_NAME') }}
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">{{ env('APP_SLOGAN') }}</a>
                </div>
            </div>
        </div>
    </body>
</html>