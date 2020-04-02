@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row mb-3">
		<div class="col-md-12">
			<h2>Manage orders for <span style="font-weight: bold;">{{ $restro->name }}</span></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			@if ($orders->count() > 0)
			<table class="table table-hover table-borderd table-striped">
				<thead>
					<tr>
						<th>Order Id</th>
						<th>Amount</th>
						<th>Status</th>
						<th>Customer details</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($orders as $order)
						<tr>
							<td>{{ $order->id }}</td>
							<td>{{ $order->amount }}</td>
							<td><span class="{{($order->isComplete) ? 'badge badge-success' : 'badge badge-danger'}}" style="font-size: 12px;">{{($order->isComplete) ? 'Completed' : 'Incomplete'}}</span></td>
                            <td style="font-size: 12px;">
                                <span style="font-weight: bold;">Name:</span> {{$order['order_details']['customer_name']}}
                                <br>
                                <span style="font-weight: bold;">Phone:</span> {{$order['order_details']['customer_phone']}}
                                <br>
                                <span style="font-weight: bold;">Address:</span> {{$order['order_details']['customer_address']}}
                            </td>
                            <td>
                            	<button style="border-radius: 50%; background: #fad342;"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            </td>

						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $orders->render() }}
			@else
				<p>Yo don't have any order.</p>
			@endif
		</div>
	</div>
</div>
@endsection
