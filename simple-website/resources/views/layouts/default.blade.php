<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webster Chan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body class="bg-gray-700 text-white flex flex-col min-h-screen">
    <header class="bg-gray-900">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black text-white">Webster Chan</h1>
            <nav class="-mx-2">
                <a href="{{route('home')}}" class="text-lg mx-2 text-white hover:text-pink-900 transition">Home</a>
                <a href="{{route('about')}}" class="text-lg mx-2 text-white hover:text-pink-900 transition">About</a>
            </nav>
        </div>
    </header>
    <main class="pt-10">
        @yield('page-content')
    </main>
    <footer>
        <div class="container mx-auto p-4">
            <p class="text-white">&copy; Webster Chan | Learn to code </p>
        </div>
    </footer>
</body>
</html>
