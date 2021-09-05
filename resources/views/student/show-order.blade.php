@extends('layouts.app') @section('page_title', 'Book a book | Commandes')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">
	<livewire:student-show-order />
	<!--override default form action -->
	<div class="end end__cta end__cta--two">
		<a href="{{route('studentOrders')}}" class="btn end__btn btn--secondary">Retour</a>
	</div>
</div>
@endsection