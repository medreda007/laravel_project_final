<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if (Auth::check() && (Auth::user()->hasRole('admin') || Auth::user()->hasRole('client')))
        <h1>Admin</h1>
    @elseif (Auth::check() && Auth::user()->hasRole('client'))
        <h1>Client</h1>
    @endif
</body>

</html>
