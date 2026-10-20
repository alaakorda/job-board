<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>{{$title ?? 'On Boarding'}}</title>



</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1>Job Bord</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </nav>
    {{ $slot }}
</body>

</html>