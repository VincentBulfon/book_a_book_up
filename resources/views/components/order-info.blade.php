<td colspan="3">
    <dl class="order__content ordered__by">
        <dt class="">Commandé par : </dt>
        <dd class="body__link body__link--first">{{$user}}</dd>
    </dl>
    <!-- foreach -->
    <table class="table table--nested">
        <thead>
            <tr>
                <td class="header__heading header__cell">Titre</td>
                <td class="header__heading header__cell">Prix unitaire</td>
                <td class="header__heading header__cell">Prix total</td>
            </tr>
        </thead>
        <tbody>

            @foreach($books as $book)
            <tr>
                <td class="body__cell body__link body__link--first">{{$book->title}}</td>
                <td class="body__cell ">{{$book->sale->student_price}}€</td>
                <td class="body__cell ">{{$book->sale->student_price * $book->pivot->quantity}}€ ({{$book->quantity}})
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</td>
<!-- endforeach -->