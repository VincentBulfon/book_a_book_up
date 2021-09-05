@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
<h1 class="header__title header__title--fw" role="heading" id="app_title">
    <svg id="logo" xmlns="http://www.w3.org/2000/svg" width="155.79" height="158.154" viewBox="0 0 155.79 158.154">
        <g id="Artboard_1" data-name="Artboard 1">
            <path id="Path_9" data-name="Path 9"
                d="M148.993,78.866Q189.9,68.606,189.9,46.25q0-19.359-31.056-31.26-20.7-7.94-56.918-10.57A236.187,236.187,0,0,1,126.915,8.5a141.308,141.308,0,0,1,24.1,6.535q31.041,11.9,31.041,31.26,0,22.324-40.938,32.616Q193.562,88.97,193.562,118.4q0,21.327-33.584,32.738T60.62,162.574H68.5q65.774,0,99.358-11.436T201.422,118.4Q201.422,88.921,148.993,78.866Z"
                transform="translate(-57.632 -4.42)" fill="#d09579" />
            <path id="Path_10" data-name="Path 10"
                d="M146.258,78.866Q187.2,68.606,187.2,46.25q0-19.359-31.041-31.26Q135.425,7.05,99.191,4.42A236.186,236.186,0,0,1,124.18,8.5a141.307,141.307,0,0,1,24.1,6.535q31.056,11.9,31.041,31.26,0,22.324-40.938,32.616Q190.827,88.97,190.827,118.4q0,21.327-33.584,32.738T57.9,162.574h7.814q65.774,0,99.358-11.436t33.63-32.788Q198.7,88.921,146.258,78.866Z"
                transform="translate(-55.942 -4.42)" fill="#d09579" opacity="0.56" />
            <path id="Path_11" data-name="Path 11"
                d="M143.693,78.866q40.923-10.259,40.923-32.616,0-19.359-31.056-31.26-20.7-7.94-56.949-10.57A236.187,236.187,0,0,1,121.6,8.5a141.307,141.307,0,0,1,24.1,6.535q31.041,11.9,31.041,31.26,0,22.324-40.938,32.616Q188.247,88.97,188.247,118.4q0,21.327-33.584,32.738T55.32,162.574h7.86q65.774,0,99.358-11.436T196.122,118.4Q196.122,88.921,143.693,78.866Z"
                transform="translate(-54.339 -4.42)" fill="#d09579" opacity="0.56" />
            <path id="Path_12" data-name="Path 12"
                d="M141.1,78.878q40.938-10.261,40.938-32.621,0-19.362-31.056-31.265Q130.255,7.051,94.036,4.42a236.4,236.4,0,0,1,24.989,4.06,141.287,141.287,0,0,1,24.1,6.536q31.056,11.879,31.056,31.241,0,22.36-40.954,32.621,52.445,10.057,52.445,39.492,0,21.331-33.584,32.744T52.73,162.552h7.875q65.774,0,99.358-11.437t33.569-32.744Q193.532,88.935,141.1,78.878Z"
                transform="translate(-52.73 -4.42)" fill="#d09579" opacity="0.56" />
            <path id="Path_13" data-name="Path 13"
                d="M143.693,78.866q40.923-10.259,40.923-32.616,0-19.359-31.056-31.26-20.7-7.94-56.949-10.57A236.187,236.187,0,0,1,121.6,8.5a141.307,141.307,0,0,1,24.1,6.535q31.041,11.9,31.041,31.26,0,22.324-40.938,32.616Q188.247,88.97,188.247,118.4q0,21.327-33.584,32.738T55.32,162.574h7.86q65.774,0,99.358-11.436T196.122,118.4Q196.122,88.921,143.693,78.866Z"
                transform="translate(-54.339 -4.42)" fill="#d09579" opacity="0.56" />
        </g>
        <g id="Artboard_1-2" data-name="Artboard 1" transform="translate(12)">
            <path id="Path_9-2" data-name="Path 9"
                d="M148.993,78.866Q189.9,68.606,189.9,46.25q0-19.359-31.056-31.26-20.7-7.94-56.918-10.57A236.187,236.187,0,0,1,126.915,8.5a141.308,141.308,0,0,1,24.1,6.535q31.041,11.9,31.041,31.26,0,22.324-40.938,32.616Q193.562,88.97,193.562,118.4q0,21.327-33.584,32.738T60.62,162.574H68.5q65.774,0,99.358-11.436T201.422,118.4Q201.422,88.921,148.993,78.866Z"
                transform="translate(-57.632 -4.42)" fill="#fff" />
            <path id="Path_10-2" data-name="Path 10"
                d="M146.258,78.866Q187.2,68.606,187.2,46.25q0-19.359-31.041-31.26Q135.425,7.05,99.191,4.42A236.186,236.186,0,0,1,124.18,8.5a141.307,141.307,0,0,1,24.1,6.535q31.056,11.9,31.041,31.26,0,22.324-40.938,32.616Q190.827,88.97,190.827,118.4q0,21.327-33.584,32.738T57.9,162.574h7.814q65.774,0,99.358-11.436t33.63-32.788Q198.7,88.921,146.258,78.866Z"
                transform="translate(-55.942 -4.42)" fill="#fff" opacity="0.56" />
            <path id="Path_11-2" data-name="Path 11"
                d="M143.693,78.866q40.923-10.259,40.923-32.616,0-19.359-31.056-31.26-20.7-7.94-56.949-10.57A236.187,236.187,0,0,1,121.6,8.5a141.307,141.307,0,0,1,24.1,6.535q31.041,11.9,31.041,31.26,0,22.324-40.938,32.616Q188.247,88.97,188.247,118.4q0,21.327-33.584,32.738T55.32,162.574h7.86q65.774,0,99.358-11.436T196.122,118.4Q196.122,88.921,143.693,78.866Z"
                transform="translate(-54.339 -4.42)" fill="#fff" opacity="0.56" />
            <path id="Path_12-2" data-name="Path 12"
                d="M141.1,78.878q40.938-10.261,40.938-32.621,0-19.362-31.056-31.265Q130.255,7.051,94.036,4.42a236.4,236.4,0,0,1,24.989,4.06,141.287,141.287,0,0,1,24.1,6.536q31.056,11.879,31.056,31.241,0,22.36-40.954,32.621,52.445,10.057,52.445,39.492,0,21.331-33.584,32.744T52.73,162.552h7.875q65.774,0,99.358-11.437t33.569-32.744Q193.532,88.935,141.1,78.878Z"
                transform="translate(-52.73 -4.42)" fill="#fff" opacity="0.56" />
            <path id="Path_13-2" data-name="Path 13"
                d="M143.693,78.866q40.923-10.259,40.923-32.616,0-19.359-31.056-31.26-20.7-7.94-56.949-10.57A236.187,236.187,0,0,1,121.6,8.5a141.307,141.307,0,0,1,24.1,6.535q31.041,11.9,31.041,31.26,0,22.324-40.938,32.616Q188.247,88.97,188.247,118.4q0,21.327-33.584,32.738T55.32,162.574h7.86q65.774,0,99.358-11.436T196.122,118.4Q196.122,88.921,143.693,78.866Z"
                transform="translate(-54.339 -4.42)" fill="#fff" opacity="0.56" />
        </g>
    </svg>

    <span class="login__title"> Bienvenue sur Book a book </span>
</h1>

@endsection
@section('main_content')


<div class="content__container content__container--fh content__container--login">
    <h2 class="sro">Se connecter</h2>
    <form class="form form--mw" action="/login" method="POST">
        @csrf
        <div class="label__container">
            <svg class="label__svg" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    stroke="#ECE5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <label class="label label--white" for="email">

                Email&nbsp;:</label>
        </div>
        <input class="input input--white" type="text" id="email" name="email" value="{{old("email")}}" />
        @error('email')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="alert alert__danger">
            {{$message}}
        </div>
        @enderror
        <!-- TODO insert error field here -->
        <div class="label__container">
            <svg class="label__svg" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                    stroke="#ECE5FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <label class="label label--white" for="password">Mot de passe&nbsp;:</label>
        </div>
        <input class="input input--white" type="password" id="password" name="password" />
        @error('password')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <div class="alert alert__danger">
            {{$message}}
        </div>
        @enderror
        <button class="btn cta__btn" type="submit">Se connecter</button>
    </form>
    <a class="link link--white link__forgot" href="/forgot-password">Mot de passe oublié?</a>
    <span class="login__create">Pas encore de compte ? <a class="link link--goldish link--tall" href="/register">Créer
            en un ici!</a></span>
</div>
<div class="content__annex">
    <p class="content__annex__content">Commandez vos livres facilement&nbsp;!</p>
</div>


@endsection