@extends('layouts.app') @section('page_title', 'Book a book | Commandes')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">

<livewire:show-orders-done/>
		<!--override default form action -->
		<div class="end__cta end__cta--two">
			<button
				type="submit"
				formaction="save"
				class="btn end__btn--half btn--secondary"
			>Sauver la commande</button>
			<button type="submit" 	class="btn end__btn--half">Passer la commande</button>
		</div>
	</form>
</div>
@endsection