@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('main_content')
<div class="content__container content__container--fh content__container--register">
    <h2 class="subtitle">Inscription</h2>
    <form class="form form--mw form--pd" action="/register" method="POST">
        @csrf
        <div class="label__container">
            <label class="label label--white" for="name">Nom&nbsp;:</label>
        </div>
        <input class="input input--white" type="text" name="name" id="name" value="{{old("name")}}" />
        @error('name')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="alert alert__danger">
            {{$message}}
        </div>
        @enderror
        <div class="label__container">
            <label class="label label--white" for="firstname">Prénom&nbsp;:</label>
        </div>
        <input class="input input--white" type="text" name="firstname" id="firstname" value="{{old("firstname")}}" />
        @error('firstname')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="alert alert__danger">
            {{$message}}
        </div>
        @enderror
        <div class="label__container">
            <label class="label label--white" for="email">Email&nbsp;:</label>
        </div>
        <input class="input input--white" type="email" name="email" id="email" value="{{old("email")}}" />
        @error('email')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="alert alert__danger">
            {{$message}}
        </div>
        @enderror
        <div class="label__container">
            <label class="label label--white" for="password">Mot de passe&nbsp;:</label>
        </div>
        <input class="input input--white" type="password" name="password" id="password" />
        @error('password')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="alert alert__danger">
            {{$message}}
        </div>
        @enderror
        <div class="label__container">
            <label class="label label--white" for="password_confirmation">Répétez votre mot de passe&nbsp;:</label>
        </div>
        <input class="input input--white" type="password" name="password_confirmation" id="password_confirmation" />
        @error('password_confirmation')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="alert alert__danger">
            {{$message}}
        </div>
        @enderror
        <p class="register__more">Un email vous sera envoyé afin de valider votre inscription</p>
        <button class="btn cta__btn cta--last" type="submit">
            S'inscrire
        </button>
    </form>

</div>
@endsection