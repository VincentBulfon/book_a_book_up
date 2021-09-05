<div>
	<h2 class="content__title">Commandes effectuées</h2>
		<table class="table">
			<livewire:sort-orders />
			<tbody class="table__body">
				<!-- foreach -->
				@foreach ($orders as $order)
                <tr class="table__row">
					<td class="body__cell body__cell__first"><a
							href="{{route('studentShowOrder', ['id' => $order->id])}}"
							class="body__link body__link--first"
						>{{$order->id}}</a></td>
					<td class="body__cell body__cell__first">{{$order->created_at->format('d/m/Y')}}</td>
					<td class="body__cell body__cell__first">{{$order->current_status_name}}</td>
				</tr>
                @endforeach
				<!-- endforeach -->
			</tbody>
		</table>
</div>