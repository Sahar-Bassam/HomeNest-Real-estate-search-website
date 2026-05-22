<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <title>HomeNest</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    @if(session('success'))
    <div class="p-4 text-center bg-green-50 text-green-500 font-bold">
        {{session('success')}}
    </div>
    @endif
    <header>
        <nav>
            <img src="/images/favicon.png" alt="" class="logo">
            <a href="{{route('properties.index')}}">All Properties</a>
            @guest
            <a href={{route('show.login')}} class="btn">Login</a>
            <a href={{route('show.register')}} class="btn">Register</a>
            @endguest
            @Auth
            <span class="border-r-2 pr-2">Hi there, {{Auth::user()->name}}</span>
            <a href="{{route('properties.create')}}">Add Your Own Listing</a>
      <form action="{{ route('logout') }}" method="POST" class="m-0">
        @csrf
        <button type="submit" class="btn">Logout</button>
      </form>
      @endAuth



        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>