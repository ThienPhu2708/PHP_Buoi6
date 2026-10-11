<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Lab 01')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #f3f4f6; text-align: left; }
        .adult { font-weight: 600; }
        .flash { background: #dcfce7; color: #166534; padding: 8px 12px; margin-bottom: 12px; }
        .error { color: #b91c1c; font-size: 13px; }
        .field { margin-bottom: 12px; }
        .field label { display: block; margin-bottom: 4px; }
    </style>
</head>
<body>
@include('partials.header')

<main>
    @if(session('success'))
        <div class="flash">{{ session('success') }}</div>
    @endif
    @yield('content')
</main>

<footer>
    <hr>
    <small>&copy; HUIT – Khoa CNTT</small>
</footer>
</body>
</html>
