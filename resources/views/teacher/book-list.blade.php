@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">
    <h2 class="content__title">Liste des livres</h2>
    <form class="sform sform--top" action="">
        <!-- le label doit être masqué -->
        <label for="searchfor" class="sro">Rechercher&nbsp;:</label>
        <input class="sform__input" type="text" name="searchfor" id="searchfor" placeholder="Titre"
            value={{Request('searchfor')}}>
        <button class="sform__btn btn" type="submit">Rechercher</button>
    </form>
    <table class="table">
        <thead class="table__header">
            <tr>
                <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
                <th class="header__cell" scope="col"><a class="header__link" href="">Titre</a></th>
                <th class="header__cell" scope="col"><a class="header__link" href="">Dispo.</a></th>
                <th class="header__cell" scope="col"><a class="header__link" href="">Stock</a></th>
            </tr>
        </thead>
        <tbody>
            <!-- ajouter un if pour afficher le tr relatif au livre-->
            @foreach($books as $book)
            <tr class="body__row">
                <td class="body__cell body__cell--first"><a class="body__link body__link--first"
                        href="{{route('showBook', ['id' => $book->id ])}}">{{$book->title}}</a></td>
                <td class="body__cell">@if($book->availability == true) Oui @else Non @endif</td>
                <td class="body__cell">{{$book->stock}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="end end__cta end__cta--vertical">
        <p class="end__content">Le livre que vous cherchez est introuvable ?</p>
        <a class="
            end__link
            btn" href="{{route('createBook')}}">Ajouter un livre</a>
    </div>
</div>



@endsection