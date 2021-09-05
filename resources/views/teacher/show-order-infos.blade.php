@extends('layouts.app') @section('page_title', 'Liste des commandes')
@section('title', 'Book a book')
@section('main_content')
<div class="content">
    <h2 class="content__title">Commade de {{$order->user->firstname}} {{$order->user->name}} </h2>

    <p class="content__infos">
        Les commandes marquées comme livrées sont automatiquement archivées et
        son accessibles via la page <a href="">"commandes archivées"</a>.
    </p>
    <table class="table">
        <thead class="table__header">
            <tr>
                <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
                <th class="header__cell header__heading">Numero</th>
                <th class="header__cell header__heading">Date</th>
                <th class="header__cell header__heading">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="body__row">
                <td class="body__cell body__cell--first"><span
                        class="body__link body__link--first">{{$order->id}}</span></td>
                <td class="body__cell">
                    <span class="body__link">{{$order->created_at->format('d/m/Y')}}</span>
                </td>
                <td class="body__cell">
                    <span class="body__status @if($order->activeStatus->status->id == 1) {{"body__status--red"}}
                        @elseif($order->activeStatus->status->id == 2){{"body__status--orange"}}
                        @elseif($order->activeStatus->status->id == 3) {{"body__status--green"}} @else
                        {{"body__status--white"}} @endif">{{$order->activeStatus->status->status}}</span>
                </td>
            </tr>

            <tr class="body__row__data">
                <x-order-info :order="$order" :statuses="$statuses" />
            </tr>
        </tbody>
    </table>
    <dl class="order__content order__content--price">
        <dt class="body__link body__link--first">Total : </dt>
        <dd>{{$order->totalPrice}}€</dd>
    </dl>
    <form class="order__content order__content--shadow" action="{{route('updateOrder',['id' => $order->id])}}"
        method="POST">
        @csrf
        <div class="order__status__container">
            <label class="order__status__label" for="status">
                Statut :
            </label>
            <select class="order__status__select" name="status_id" id="status">
                @foreach($statuses as $status)
                <option value="{{$status->id}}" @if($status->id == $order->activeStatus->status_id)
                    selected
                    @endif
                    >
                    {{$status->name}}
                </option>
                @endforeach
            </select>
            <input type="hidden" name="order_id" value="{{$order->id}}">
        </div>
        <button class="end__link btn order__status__link" type="submit">Valider</button>
    </form>
    <div class="end end__cta end__cta--vertical">
        <a class="btn end__btn btn--secondary" href="{{url()->previous()}}">Retour</a>
    </div>
</div>
@endsection