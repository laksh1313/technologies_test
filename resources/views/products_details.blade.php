<!-- common header-->
@include('common.header_common') 
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Products Detail Table</h2>
	<?php $totalArrayInfo = []; ?>
	@if(!empty($products))
		<table>
			  <tr>
				<th>Product Name</th>
				<th>Quantity In Stock</th>
				<th>Price Per Item</th>
				<th>Total Value Number</th>
			  </tr>
		  @foreach($products as $key=>$value)
		    <?php $totalArrayInfo[] = $value->total_value_number; ?>
			   <tr>
				<td>{{$value->product_name}}</td>
				<td>{{$value->quantity_in_stock}}</td>
				<td>{{$value->price_per_item}}</td>
				<td>{{$value->total_value_number}}</td>
			  </tr>
		  @endforeach
			 <tr>
				<td><b>Total</b></td>
				<td></td>
				<td></td>
				<td><b>{{array_sum($totalArrayInfo)}}</b></td>
			 </tr>
		</table>
	@else
		<div class="alert alert-danger">
			Sorry Something Went Wrong Please try again
		</div>
	@endif
</body>
</html>
