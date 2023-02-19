<!DOCTYPE>
<html lang="Ja">
<head>
    <title>課題：タスク管理アプリケーション</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto">
        @include('commons.error_messages')
        @yield('content')
    </div>
</body>
</html>