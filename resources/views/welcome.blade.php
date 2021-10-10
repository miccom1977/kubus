<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zawody Pływackie klas Trzecich WATERRR CUP 2021/2022</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div id="popWindow">
        </div>
        <div id="activeWindow">
            <div title="zamknij" class="close"></div>
            <h1 class="windowTitle"></h1>
            <div class="windowBody"></div>
        </div>
        @if(Session::has('message'))
            <div class="alert">
                {{Session::get('message')}}
                <div class="closeAlert">{{ __('web.close_window') }}</div>
            </div>
        @endif
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('web.dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('web.login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"> {{ __('web.register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <img src="{{ asset('/images/footerCup.jpg') }}" style="margin:0 auto;"/>
						<div class="header">
							IX Zawody Pływackie Klas Trzecich Waterrr Cup 2022
						</div>
					</div>
            </div>
        </div>
    </body>
</html>
