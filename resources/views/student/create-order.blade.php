@extends('layouts.app') @section('page_title', 'Book a book | Connection')

@section('main_content')
<div class="content">
	<h2 class="content__title">Créer une nouvelle commande</h2>
	<livewire:student-book-list :pq="$pq" />
	<!--override default form action -->
	<div class="end">
		@if (session('status'))
		<p class="new__order__error">
			{{ session('status') }}
		</p>
		@endif
		<div class="end__cta">
			<form class="form--half" method="POST" action="{{route('resetOrder')}}">
				@csrf
				<button class="btn end__btn btn--secondary" type="submit">Réinitialiser la commande</button>
			</form>
			<form class="form--half" action="{{route('storeOrder')}}" method="POST">
				@csrf
				<button class="btn end__btn" type="submit">Passer la commande</button>
			</form>
		</div>
	</div>
</div>
@endsection