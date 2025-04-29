<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Laravel Job Board</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body 
    class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-200 from-10% via-sky-200 via-30% to-emerald-200 to-90% ... text-slate-700">

    <nav>
        <ul></ul>
        <ul class="flex space-x-2">
            @auth
                <li>
                    {{ auth()->user()->name ?? 'Anynomus' }}
                </li>
                <li>
                    <form action="{{ route('auth.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </li>
                @else
                <li>
                    <a href="{{ route('auth.create') }}">sign in</a>
                </li>
            @endauth
        </ul>
    </nav>

    {{ auth()->user()->name ?? 'Guest' }}

    {{ $slot }}
</body>
</html>