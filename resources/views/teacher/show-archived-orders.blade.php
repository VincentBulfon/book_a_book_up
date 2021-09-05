@extends('layouts.app') @section('page_title', 'Liste des commandes')
@section('title', 'Book a book')
@section('main_content')
<div class="content">
    <h2 class="content__title">Commades archivées </h2>
    <!-- TODO method et action du form lui tranmetre la page active -->
    <form class="sform sform--top">
        <!-- le label doit être masqué -->
        <label for="searchfor" class="sro">Rechercher&nbsp;:</label>
        <input class="sform__input" type="text" name="searchfor" id="searchfor" placeholder="n°/nom"
            value={{Request('searchfor')}}>
        <button class="sform__btn btn" type="submit">Rechercher</button>
    </form>
    <table class="table">
        <thead class="table__header">
            <tr>
                <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
                <th class="header__cell header__heading" scope="col">Numero</th>
                <th class="header__cell header__heading" scope="col">Date</th>
                <th class="header__cell header__heading" scope="col">Status</th>
            </tr>
        </thead>
        <livewire:show-archived-orders />
    </table>
    <div class="end end__cta end__cta--vertical">
        <p class="end__content">La commande que vous cherchez est introuvable ?</p>
        <a class="
            end__link
            btn" href="{{route('adminHome')}}">Voir les commandes en cours</a>
    </div>
</div>
@endsection