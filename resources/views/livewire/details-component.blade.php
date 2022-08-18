<main id="main" class="main-site">
	<div class="container">
		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="/" class="link">home</a></li>
				<li class="item-link"><span>detail</span></li>
			</ul>
		</div>
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
				<div class="wrap-product-detail">
					<div class="detail-media">
						<div class="product-gallery">
						  
                            <li data-thumb="{{asset('assets/images/products')}}/{{$product->image}}">
						    	<img src="{{asset('assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}" />
						    </li>
						</div>
					</div>
					<div class="detail-info">
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div class="short-desc">
                              {{$product->short_description}}
                        </div>
                        <div class="wrap-social">
                        	<a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                        </div>						
						<div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>                       
						@if ($product->catagory_id == "3")
						<a href="#" class="btn add-to-cart" wire:click.prevent="addToMechanicPreferencelist({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Add Preference List</a>
							@if  ($product->stock_status == "instock") 
							   <div class="wrap-price"><span class="-">Available</span></div>
							@else 
							   <div class="wrap-price"><span class="-">Not Available</span></div>
					        @endif
						@else
						     <div class="wrap-price"><span class="-">{{$product->stock_status}}</span></div> 
						@endif					
						@if  ($product->stock_status == "instock") 
							<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Add To Cart</a>
										
						@else 
						   @if ($product->catagory_id == "3")
							    <a href="#" class="btn add-to-cart" wire:click.prevent="addToRequestedItemList ({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Request for Schedule </a>
							@else 
							     <a href="#" class="btn add-to-cart" wire:click.prevent="addToRequestedItemList ({{$product->id}},'{{$product->name}}', {{$product->regular_price}})">Request Restock </a>
						    @endif
						@endif
						<div class =" wish-btn">
							<a href = "#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}', {{$product->regular_price}})"> <i class ="fa fa-heart"></i></a>																							
						</div>
					</div>
					<div class="advance-info">
						<div class="tab-control normal">
							<a href="#description" class="tab-control-item active">description</a>
							
							
						</div>
						<div class="tab-contents">
							<div class="tab-content-item active" id="description">
                            {{$product->description}}
							</div>
							
							
						</div>
					</div>
				</div>
			</div><!--end main products area-->
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
				<div class="widget widget-our-services ">
					<div class="widget-content">
						<ul class="our-services">
							<li class="service">
								<a class="link-to-service" href="/shop">
									<i class="fa fa-truck" aria-hidden="true"></i>
									<div class="right-content">
										<b class="title">Free Shipping</b>
										<span class="subtitle">On Oder Over 50tk</span>
										
									</div>
								</a>
							</li>
							<li class="service">
								<a class="link-to-service" href="#">
									<i class="fa fa-reply" aria-hidden="true"></i>
									<div class="right-content">
										<b class="title">Order Return</b>
										<span class="subtitle">Return within 7 days</span>
										<p class="desc">With full money back.</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>	
            </div>				
		</div>
	</div>
</main>