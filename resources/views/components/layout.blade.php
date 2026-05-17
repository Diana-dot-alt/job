<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>

    <nav>
        <x-nav-link href="{{ route('home') }}">Home</x-nav-link>
        <x-nav-link href="{{ route('about') }}">About</x-nav-link>
        <x-nav-link href="{{ route('jobs.show') }}">Jobs</x-nav-link>
        <x-nav-link href="{{ route('contact') }}">Contact</x-nav-link>
      
    </nav>

    <div>
        {{ $slot }}
    </div>

</body>
</html>