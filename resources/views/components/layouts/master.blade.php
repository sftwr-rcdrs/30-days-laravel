<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Software Recorders PH {{ $title ?? '|' . config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <x-layouts.navbar />
    
    <main>
        {{ $slot }}
    </main>
    
    <x-layouts.footer />
</body>

</html>
