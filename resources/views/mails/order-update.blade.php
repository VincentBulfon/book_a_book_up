<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body class="mail">
    <header class="header" aria-labelledby="app__title">
        <h1 class="header__title " role="heading" id="app_title">
            <span>Book a book</span>
        </h1>
    </header>
    <section class="mail__content">
        <h2 class="mail__subtitle">{{$order->user->name}} {{$order->user->firstname}}</h2>
        <p class="mail__content">Votre commande à été mis à jour et est maintenant :
            <span>{{$order->activeStatus->status->status}}</span>
        </p>
    </section>
    <p class="mail__greetings">L'équipe book a book.</p>
</body>

</html>