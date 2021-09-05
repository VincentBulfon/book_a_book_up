<div>
    <table class="table">
        <thead class="table__header">
            <tr>
                <th class="header__cell header__heading">Titre</th>
                <th class="header__cell header__heading">P.étudiant</th>
                <th class="header__cell header__heading">Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
        <tr class="body__row">
            <td class="body__cell body__cell--first"><a
                    href="{{route('viewBookInfos',['id' => $book->id])}}"
                    class="body__link body__link--first"
                >{{$book->title}}</a></td>
            <td class="body__cell">{{$book->sales[0]->student_price}}€</td>
            <td class="body__cell">@if(count($book->orders)>0){{$book->orders[0]->pivot->quantity}} @else 0 @endif</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
