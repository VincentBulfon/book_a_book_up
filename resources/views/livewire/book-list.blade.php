<div>
    <tbody>
        @foreach($books as $book)
        <tr class="body__row">
            <td class="body__cell body__cell--first"><a
                    href="{{route('viewBook',['id' => $book->id])}}"
                    class="body__link body__link--first"
                >{{$book->title}}</a></td>
            <td class="body__cell">{{$book->sales[0]->student_price}}€</td>
            <td class="body__cell">@if(count($book->orders)>0){{$book->orders[0]->pivot->quantity}} @else 0 @endif</td>
            <!-- If  -->
            {{-- @if($bookInfos == $book->id)
            <x-create-order-expand />
            @endif  --}}
            <!-- endif -->
        </tr>
        @endforeach
    </tbody>
</div>