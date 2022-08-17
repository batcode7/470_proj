<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Home</a></li>
					<li class="item-link"><span>Cart</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				
				@if(Cart::instance('cart')->count() > 0)

				    <div class="wrap-iten-in-cart">
				    	<h3 class="box-title">Products Name</h3>
				    	<ul class="products-cart">
				    		
				    	    
				    	    @foreach(Cart ::instance('cart')->content() as $item)
				    	    <li class="pr-cart-item">
				    	    		<div class="product-image">
				    	    			<figure><img src="{{ ('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
				    	    		</div>
				    	    		<div class="product-name">
				    	    			<a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
				    	    		</div>
				    	    		<div class="price-field produtc-price"><p class="price">{{$item->model->regular_price}}</p></div>
				    	    		<div class="quantity">
				    	    			<div class="quantity-input">
				    	    				<input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
				    	    				<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
				    	    				<a class="btn btn-reduce"    href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
				    	    			</div>
				    	    		</div>
				    	    		<div class="price-field sub-total"><p class="price">{{$item->subtotal}}</p></div>
				    	    		<div class="delete">
				    	    			<a href="#" wire:click.prevent="deletion('{{$item->rowId}}')" class="btn btn-delete" title="">
				    	    				<span>Delete from your cart</span>
				    	    				<i class="fa fa-times-circle" aria-hidden="true"></i>
				    	    			</a>
				    	    		</div>
				    	    </li>
				    	    @endforeach
                        </ul>
                    </div>
				@else
				    <p> No item in the cart </p>
				@endif
				

				@if(Cart::instance('cart')->count() > 0)

				    <div class="summary">
				    	<div class="order-summary">
				    		<h4 class="title-box">Order Summary</h4>
				    		<p class="summary-info"><span class="title">Subtotal</span><b class="index">{{Cart::subtotal()}}</b></p>
				    		
				    		<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
				    		<p class="summary-info total-info "><span class="title">Total</span><b class="index">{{Cart::subtotal()}}</b></p>
				    	</div>
				    	<div class="checkout-info">
				    		
				    		<a class="btn btn-checkout" href="#" wire:click.prevent = "checkout">Check out</a>
				    		<a class="link-to-shop" href="/shop">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
				    	</div>
                    </div>
				    
				@else 
				    <div class = "text-center" style ="padding:30px 0;">
				    	<h1> Cart is empty</h1>
				    	<p> Add items to checkout</p>
				    	<a href = "/shop" class = "btn btn-success">Shop now</a>
				    </div>
				@endif
			   

			

			</div><!--end main content area-->
		</div><!--end container-->

	</main>