<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Class example</title>
    <link rel="stylesheet" href"{{ asset('css/styles.css')}}">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('books.index') }}">Home</a></li>
                <li> <a href="{{ route('books.create') }}">Create a New Book</a> </li>
            </ul>
        </nav>
    </header>

    <main> 
        @yield('content')
</main>
<footer>