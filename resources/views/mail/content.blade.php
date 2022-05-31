<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail da Boolpress</title>
</head>
<body>
    <h1>{{ $author }} ti ha contattato via form sul sito boolpress.com</h1>
    <h3>La mail alla quale vorrebbe essere contattato è:  {{ $authorEmail }} </h3>
    <p>
        Questo è il contenuto del messaggio: {{ $guestMessage }}
    </p>
</body>
</html>