@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
<img src="#TODO" alt="">
Book a book
@endsection
@section('main_content')
<div class="content__container content__container--fh content__container--register">
    <h2 class="subtitle">Récupérer son mot de passe</h2>
    <form class="form form--mw form--pd" action="/reset-password" method="POST">
        @csrf
        <input class="sro" type="email" name="email" id="email" value="{{$request->email}}" />
        <div class="label__container">
            <label class="label label--white" for="password">Nouveau mot de passe&nbsp;:</label>
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
            <label class="label label--white" for="password_confirmation">Confirmez le mot de passe&nbsp;:</label>
        </div>
        <input class="input input--white" type="password" name="password_confirmation" id="password_confirmation" />
        @error('password')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="alert alert__danger">
            {{$message}}
        </div>
        <input type="hidden" name="token" value="{{request()->route('token')}}">
        @enderror
        @if (session('status'))
             <p class="register__more">
                {{ session('status')}}
            </p>
        @endif
        <button class="btn cta__btn cta--last" type="submit">Valider</button>
    </form>
</div>
@endsection