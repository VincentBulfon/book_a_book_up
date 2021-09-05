@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">
    <h2 class="content__title">Disponnibilité du livre {{$book->title}}</h2>
    <table class="table table--borders ">
        <thead>
            <tr>
                <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
                <th class="header__cell header__heading" scope="col">Titre</th>
                <th class="header__cell header__heading" scope="col">Dispo.</th>
                <th class="header__cell header__heading" scope="col">Stock</th>
            </tr>
        </thead>

        <tbody>
            <tr class="body__row">
                <td class="body__cell body__cell--first"><a href="{{route('editBook', ['id'=> $book->id])}}"
                        class="body__link body__link--first">{{$book->title}}</a></td>
                <td class="body__cell">
                    <span class="body__link">@if($book->availability == true) Oui @else Non
                        @endif</span>
                </td>
                <td class="body__cell">
                    <span class="body__link">{{$book->stock}}</span>
                </td>
            </tr>
            <tr class="book__info__bottom__row">
                <td colspan="3" class="book__info__cell">
                    <x-teacher-book-infos :book='$book' :sale='$sale' />
                </td>
            </tr>
        </tbody>
    </table>

</div>

@endsection