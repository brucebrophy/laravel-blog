<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - {{ config('app.name') }}</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="mb-6 bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center sm:items-stretch justify-start">
                    <div class="flex-shrink-0">
                        <h1 class="px-3 py-2 text-sm text-white">
                            <a href="/">
                                {{ config('app.name') }}
                            </a>
                        </h1>
                    </div>
                    <div class="flex items-center ml-6">
                        <a href="{{ route('posts.index') }}" class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>