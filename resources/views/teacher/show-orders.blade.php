@extends('layouts.app') @section('page_title', 'Liste des commandes')
@section('title', 'Book a book')
@section('main_content')
<div class="content">
    <h2 class="content__title">Commades reçues </h2>
    <p class="content__infos">
        Les commandes marquées comme livrées sont automatiquement archivées et
        son accessibles via la page <a href="{{route('archivedOrders')}}">"commandes archivées"</a>.
    </p>
    <!-- TODO method et action du form lui tranmetre la page active -->
    <form class="sform" action="">
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
        <livewire:show-orders />
    </table>
    <div class="end end__cta end__cta--vertical">
        <p class="end__content">La commande que vous cherchez est introuvable ?</p>
        <a class="
            end__link
            btn" href="{{route('archivedOrders')}}">Voir les commandes archivées</a>
    </div>
</div>
@endsection