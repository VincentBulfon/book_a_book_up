@extends('layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<div class="content">
	@if ($errors->any())
	<div class="alert alert-danger" style="color: red">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<h2 class="content__title">Modifier les coordonnées de payement</h2>
	<form class="form__control--pay" action="{{route('payementDetailsUpdate', ['id'=>1])}}" method="POST">
		@csrf
		<label class="label label--black" for="text">Coordonnées de payement (BExx xxxx xxxx xxxx)&nbsp;: </label>
		<input class="input input--blue input--white" type="text" name="text" id="text" value="{{$currentText->text}}"
			placeholder="BExx xxxx xxxx xxxx">
		@error('text')

		<svg class="input__error" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="#e81c1c"
				stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		</svg>

		<p class="alert alert__danger alert--red">
			{{$message}}
		</p>
		@enderror
		<button class="btn" type="submit">
			Modifier
		</button>
	</form>
</div>
@endsection