<div>
    <tbody class="table__body">
        @foreach($orders as $order)
        <tr class="body__row">

            <td class="body__cell body__cell--first"><a class="body__link body__link--first"
                    href="{{route('showOrder',['id' => $order->id])}}">{{$order->id}}</a></td>
            <td class="body__cell">
                <span class="body__link">{{$order->current_status_date}}</span>
            </td>
            <td class="body__cell">
                <span
                    class="body__status @if($order->current_status_id == 1) {{"body__status--red"}} @elseif($order->current_status_id == 2){{"body__status--orange"}} @elseif($order->current_status_id == 3) {{"body__status--green"}} @else {{"body__status--white"}} @endif">{{$order->current_status_name}}</span>
            </td>
        </tr>
        @endforeach
    </tbody>

</div>