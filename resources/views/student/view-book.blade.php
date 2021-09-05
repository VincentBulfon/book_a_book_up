@extends('layouts.app') @section('page_title', 'Book a book | Connection')

@section('main_content')
<div class="content">
	<h2 class="content__title">Ajouter un livre à ma commande</h2>
	<form action="{{route('updateOrderBooks')}}" method="post">
		@csrf
		<div>
			<table class="table">
				<thead class="table__header">
					<tr>
						<th class="header__cell" scope="col"><a class="header__link" href="">Titre</a></th>
						<th class="header__cell">P.étudiant</th>
					</tr>
				</thead>
				<livewire:student-book-infos />
			</table>
		</div>
	</form>
	<!--override default form action -->
	<div class="end end__cta end__cta--two">
		<a href="/" class="btn end__btn btn--secondary" type="submit">Retour</a>

	</div>

</div>
@endsection