<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Philippine Regions')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    
    <header class="site-header">
        <h1>Philippine Regions History</h1>
    </header>

    
    <main>
        @yield('content')
    </main>

    
    <nav class="site-nav">
        <ul class="navbar">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('luzon') }}">Luzon</a></li>
            <li><a href="{{ route('visayas') }}">Visayas</a></li>
            <li><a href="{{ route('mindanao') }}">Mindanao</a></li>
        </ul>
    </nav>

</body>
</html>
