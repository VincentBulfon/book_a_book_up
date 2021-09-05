<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="keywords"
        content="Book a book, commande de livres on lige, hepl, liège, province de liège, livres, cours" />
    <title>Book a book | @yield('page_title')</title>
</head>

<body class="app__body">
    <header class="header @if (Request::is('login')){{ " header--normal"}} @endif" aria-labelledby="app__title">
        @if (Request::is('login'))
        @yield('title')
        @else
        <h1 class="@if(Str::contains(Request::url(), 'register')|| Str::contains(Request::url(),'forgot-password') || Str::contains(Request::url(), 'email/verify')){{"
            header__title__right"}}@endif" role="heading" id="app_title">
            <a class="header__title" href="/">Book a book</a>
        </h1>
        <livewire:menu />
        @endif
    </header>
    <section class="main__content">
        @yield('main_content')
    </section>
    @livewireScripts
</body>

</html>