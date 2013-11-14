<div class="product sws">

	<div class="product-meta">
		<% loop OrderedImages %>
			$SetSize(50,50)
		<% end_loop %>

		<h1>$Product.Title</h1>
		<h3 class="product-price-js">$Product.Price.Nice</h3>
	
		<div class="add-to-cart">
			$ProductForm(1)
		</div>
	</div>

	<div class="product-description">
		$Product.Content
	</div>

</div>
