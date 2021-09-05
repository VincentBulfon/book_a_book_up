<div>
    <form class="sform sform--top" action="">
        <!-- le label doit être masqué -->
        <label for="searchfor" class="sro">Rechercher&nbsp;:</label>
        <input wire:model.debounce.250ms="searchfor" class="sform__input" type="text" name="searchfor" id="searchfor"
            placeholder="n°/nom" value={{Request('searchfor')}}>

        <button class="sform__btn btn" type="submit">
            Rechercher
        </button>

    </form>
    <div>
        <table class="table">
            <thead class="table__header">
                <tr>
                    <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
                    <th class="header__cell" scope="col"><a class="header__link" href="">Titre</a></th>
                    <th class="header__cell"><a class="header__link" href="">Prix unitaire</a></th>
                    <th class="header__cell"><a class="header__link" href="">Quantité</a>
                    </th>
                </tr>
            </thead>
            <tbody class="body__table">
                @foreach($books as $book)
                <tr class="body__row" wire:key="{{ $loop->index }}">
                    <td class="body__cell body__cell--first"><a href="{{route('viewBook',['id' => $book->id])}}"
                            class="body__link body__link--first">{{$book->title}}</a></td>
                    <td class="body__cell">
                        {{$book->sales[0]->student_price}}€
                    </td>
                    <td class="body__cell">@if(count($book->orders)>0){{$book->orders[0]->pivot->quantity}} @else 0
                        @endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- {{$book->sale->student_price * $book->pivot->quantity}}€ ({{$book->quantity}}) --}}