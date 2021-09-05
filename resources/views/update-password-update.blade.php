@extends('layouts.app') @section('page_title', 'Liste des commandes')
@section('title', 'Book a book')
@section('main_content')
<div class="content">
    <h2>Formulaire de modification du mot de passe</h2>
    <form
        action="#TODO"
        method="#TODO"
    >
        <label for="new_password">Nouveau mot de passe&nbsp;:</label>
        <input
            type="new_password"
            name="new_password"
            id="new_password"
        />
        <label for="repeat_new_password">Répétez nouveau mot de passe&nbsp;:</label>
        <input
            type="text"
            name="repeat_new_password"
            id="repeat_new_password"
        />
        <button type="submit">Modifer</button>
    </form>
</div>

@endsection