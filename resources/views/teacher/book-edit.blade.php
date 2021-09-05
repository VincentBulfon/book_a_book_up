@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">
    <h2 class="content__title">Modifier le livre</h2>
    {{-- do not forget enctype to submit images trough form --}}
    <form class="form__add__book" action="{{route('updateBookInfos', ['id'=>$book->id])}}" method="post"
        enctype="multipart/form-data">
        @csrf
        <h3 class="add__book__subtitle">Infos du livre</h3>
        <label class="label label--black" for="thumbnail">Couverture :</label>
        <input class="input input--blue" type="file" name="thumbnail" id="thumbnail" accept="image/jpeg image/jpg">
        @error('thumbnail')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <label class="label label--black" for="title">Titre du livre&nbsp;:</label>
        <input class="input input--blue" type="text" name="title" id="title" placeholder="Ergonomie web"
            value="{{$book->title}}">
        @error('title')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <label class="label label--black" for="authors">Auteurs du livre&nbsp;:</label>
        <input class="input input--blue" type="text" name="authors" id="authors"
            placeholder="Prénom Nom, Prénom Nom,..."
            value="@for ($i = 0; $i < $authorsCount; $i++){{$book->authors[$i]->name}}@if(($authorsCount > 1) && ($i+1 < $authorsCount)),@endif @endfor">
        @error('authors')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <label class="label label--black" for="isbn">ISBN&nbsp;:</label>
        <input class="input input--blue" type="text" name="isbn" id="isbn" placeholder="978-2081342620"
            value="{{$book->isbn}}">
        @error('isbn')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <label class="label label--black" for="edition">Édition&nbsp;:</label>
        <input class="input input--blue" type="text" name="edition" id="edition" placeholder="Eyrolles"
            value="{{$book->editor}}">
        @error('edition')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <label class="label label--black" for="public_price">Prix publique (€)&nbsp;:</label>
        <input class="input input--blue" type="text" name="public_price" id="public_price" placeholder="8.10"
            value="{{$sale->public_price}}">
        @error('public_price')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <label class="label label--black" for="student_price">Prix étudiant (€)&nbsp;:</label>
        <input class="input input--blue" type="text" name="student_price" id="student_price" placeholder="8.10"
            value="{{$sale->student_price}}">
        @error('student_price')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <label class="label label--black" for="edition_note">Remarque sur l'édition&nbsp;:</label>
        <textarea class="note__textarea" name="edition_note" id="edition_note" cols="30" rows="10"
            placeholder="Entrez un commentaire sur l'édition ✍️">@if ($book->textualContent){{$book->textualContent->text}}
            @endif</textarea>
        @error('edition_note')

        <svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <p class="alert alert__danger alert--red">
            {{$message}}
        </p>
        @enderror
        <div class="end__cta end__cta--two">
            <button class="btn end__btn btn--secondary form--half type=" reset">Reset</button>
            <button class="btn end__btn form--half" type="submit">Modifier le livre</button>
        </div>
    </form>
    <div class="end end--small end__cta end__cta--vertical">
        <p class="end__content">Le livre que vous cherchez est introuvable ?</p>
        <a class="
            end__link
            btn" href="https://bab_app.test/admin/book/add">Ajouter un livre</a>
    </div>
</div>


@endsection