<main id="main" class="main-site">

		<div class="container">

		<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Wishlist</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				
			@if (Cart::instance('wishlist')->count()> 0)

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products </h3>
					<ul class="products-cart">											    
					    @foreach(Cart ::instance('wishlist')->content() as $item)
					    <li class="pr-cart-item">
				    	    <div class="product-image">
							    <figure><img src="{{ ('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
				    	    </div>
				    	    <div class="product-name">
								<a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
							</div>
							 		
							<div class="price-field produtc-price">
								<p class="price">{{$item->model->regular_price}}</p>
							</div>
				    	</li>
				    	@endforeach
                    </ul>
                </div>
			@else
				<h3> No wish </h3>
			@endif
		</div><!--end main content area-->
	</div><!--end container-->

</main>