@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('main_content')
<div class="content__container content__container--fh content__container--register">
    <h2 class="subtitle">
        Encore une dernière étape <span class="sro">pour compléter votre inscription</span>
    </h2>
    <p class="register__more">
        Afin de pouvoir vous connecter vous dever valider votre compte via le lien qui vous à été envoyé par
        email (l'email sera reçu dans les 5 minutes
        suivant l'inscription).
    </p>
    <p class="register__more">
        Vous serez automatiquement connecté une fois que vous aurez cliquer sur le lien.
    </p>
    <form class="form form--mw" action="/email/verification-notification" method="POST">
        @csrf
        <button class="btn cta__btn" type="submit">Renvoyer l'email</button>
    </form>
    @if (session('status'))
    <p class="register__more">
        {{ session('status') }}
    </p>
    @endif
</div>
@endsection