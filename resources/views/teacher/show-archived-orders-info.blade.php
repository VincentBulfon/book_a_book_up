{{-- @extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">
	<h2 class="content__title">Commades archivées</h2>
	<p class="content__infos">
		Pour remettre une commande archivée dans les <a href="">"commandes en reçues"</a>, changez simplement son statut
		par
		un autre que “Archivée”.
	</p>
	<!-- TODO method et action du form lui tranmetre la page active -->
	<form class="sform sform--top">
		<!-- le label doit être masqué -->
		<label for="searchfor">Rechercher</label>
		<input type="text" name="searchfor" id="searchfor" placeholder="n°/nom">
		<button type="submit">Rechercher</button>
	</form>
	<table>
		<thead>
			<tr>
				<!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
				<th><a href="">Numero</a></th>
				<th><a href="">Date</a></th>
				<th><a href="">Status</a></th>
			</tr>
		</thead>
		<tbody>
			<!-- foreach -->
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
				<x-order-info />
			</tr>
			<!-- endforeach -->
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>sample</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
		</tbody>
	</table>
	<p>La commande que vous cherchez est introuvable ?</p>
	<a href="">Voir les commandes reçues</a>
</div>
@endsection --}}