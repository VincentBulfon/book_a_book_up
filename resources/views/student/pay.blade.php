@extends('layouts.app') @section('page_title', 'Book a book | Commandes')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">
	<h2 class="content__title">Payer</h2>
	<p class="content__infos">
		Les commandes passées sont affichées ici tant que le paiement n’as pas été reçu par le professeur et que ce
		dernier ne l'a pas validé au sein de l'application. Une fois le paiement reçu et son statut changé la commande
		est déplacée dans
		les <a href="{{route('studentOrders')}}">commandes effectuées</a>.
	</p>
	<livewire:show-order-to-pay />
</div>
@endsection