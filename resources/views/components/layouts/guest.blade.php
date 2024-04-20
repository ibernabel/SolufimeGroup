<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://tailgrids.com/styles/tailwind.css" />
    <link rel="stylesheet" href="https://tailgrids.com/styles/nouislider.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.9.5/cdn.js"></script>

    <title>{{ $title ?? 'Laravel' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    {{ $slot }}

</body>

</html>
