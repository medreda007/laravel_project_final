<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    We are sorry to inform you that we changed the table you reserved to the table
    {{ $reservation->table->table_number }} due to some sudden circumstances.
    as we express our deep apology, we are pleased to offer you a free entry for you and your company in your next vist.
    <br>
    for more information, you are always welcome to contact us at <a href="http://www.eden_haul.org">http://www.eden_haul.org</a>
    <span>or call us in this number : +212-777673189</span>
    <br>
    <br>
    <br>
    <br>
    {{ auth()->user()->name }} : {{ auth()->user()->role }} at Eden Haul
</body>
</body>

</html>
