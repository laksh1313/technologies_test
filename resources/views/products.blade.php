<!-- common header-->
@include('common.header_common') 
<body>

<div class="container">
  <h2>Add Products</h2>
  <form method="POST">
    <div class="form-group">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control" id="product_name" required placeholder="Enter Product Name" name="product_name">
    </div>
    <div class="form-group">
      <label for="pwd">Quantity in stock:</label>
      <input type="number" class="form-control" id="quantity_in_stock" required step="0.01" placeholder="Quantity in stock" name="quantity_in_stock">
    </div>
	
    <div class="form-group">
      <label for="pwd">Price per item:</label>
      <input type="number" class="form-control" id="price_per_item" required step="0.01" placeholder="Price per item" name="price_per_item">
    </div>
    <input type="button" class="btn btn-default" id="add_product_price" value ="Add Product">
  </form>
	
	<div class="product_details"></div>
</div>
</body>
<script>
$('#add_product_price').click(function() {

	//getting the values in jquery
	var productName = $('#product_name').val(),
	    quantity_in_stock = $('#quantity_in_stock').val(), 
		price_per_item = $('#price_per_item').val();
		
	$.ajax({
		type: "POST",
        url: "{{ url('/add_product') }}",
        
		//json format data
        data: {product_price: productName, quantity_in_stock: quantity_in_stock, price_per_item:price_per_item} ,
        success: function (response) {
			console.log('view',response );
			$('.product_details').html('');
			$('.product_details').html(response);
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
});
</script>
</html>
