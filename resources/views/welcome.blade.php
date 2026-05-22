<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <title>HomeNest</title>
        @vite(['resources/css/app.css'])
</head>
<body class="text-center px-8 py-12 welcome">
    <h1>Welcome to HomeNest</h1>
    <p>Find your dream property today. Browse our listings and explore your perfect home.</p>
    <a href="/properties" class="btn mt-4 inline-block">
        Find Your New Home!
    </a>
</body>
</html>