@extends('layouts.app') @section('page_title', 'Book a book | Commandes')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">

	<livewire:show-orders-done />
	<!--override default form action -->
	<div class="end__cta end__cta--two">
		<a href="/" class="btn end__btn">Créer une nouvelle commande</a>
	</div>
	</form>
</div>
@endsection