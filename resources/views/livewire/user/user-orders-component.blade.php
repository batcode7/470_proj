<div>
	<style>
		nav svg{
			height:20px;
		}
		nav.hidden{
			display: block !important; 

		}
	</style>
	<div class = "container" style ="padding: 30px 0;">
		<div class = "row">
			<div class = "col-md-12">
				<div class = "panel panel-default">
					<div class = "panel-heading">
						All Orders

				    </div>
				    <div class = "panel-body">
				    	<table class =  "table table-striped">
				    		<thead>
				    			<tr>
				    				<th>OrderId</th>
				    				<th>Subtotal</th>
				    				<th>Discount</th>
				    				<th>Total</th>
				    				<th>First Name</th>
				    				<th>Last Name</th>
				    				<th>Mobile</th>
				    				<th>Email</th>
				    				<th>Status</th>
									<th>Action</th>
				    			</tr>
				    		</thead>
				    		<tbody>
				    			@foreach ($orders as $order)
				    			    <tr>
				    			    	<td>{{$order->id}}</td>
				    			    	<td>{{$order->subtotal}}</td>
				    			    	<td>{{$order->discount}}</td>
				    			    	<td>{{$order->total}}</td>
				    			    	<td>{{$order->firstname}}</td>
				    			    	<td>{{$order->lastname}}</td>
				    			    	<td>{{$order->mobile}}</td>
				    			    	<td>{{$order->email}}</td>
				    			    	<td>{{$order->status}}</td>
										<td><a href = "{{route('user.orderdetails',['order_id'=>$order->id])}}" class = "btn btn-info btn-sm"> Details </td>
                                        
				    			    </tr>
				    			@endforeach
				    		</tbody>
				    	</table>
				    	{{$orders->links()}}
					
					

					
				    </div>
                </div>
			</div>
			
		</div>
	</div>
</div>>