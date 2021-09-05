<form class="form__control--inline" action="{{route('updateBook',['id'=> $bookId])}}" method="POST"
    class="book__data__form">
    @csrf
    <div class="quantity__container">
        <label for="stock" class="sro">Quantité :</label>
        <input class="quantity__input" type="number" name="stock" id="stock" @if(old('stock')) value="{{old('stock')}}"
            @else value="{{$stock}}" @endif />
    </div>
    <button class="btn end__btn--half" type="submit">Modifier le stock</button>

</form>
@error('stock')

<p class="alert alert__danger alert--red">
    {{$message}}
</p>
@enderror
<form action="{{route('updateBook',['id'=>$bookId])}}" method="POST" class="book__data__form">
    @csrf
    <input type="hidden" name="availability" @if($availability) value=0 @else value=1 @endif>
    <button class="btn btn--secondary" type="submit">@if(!!$availability)Ne plus rendre ce livre disponnible à la
        commande @else Rendre ce livre disponnible à la commande @endif</button>
</form>
<a href="{{route('editBook', ['id' => $bookId])}}" class="btn btn--fw">Modifier les informations du livre</a>