<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Search</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">


					<div class="wrap-shop-control">

						<h1 class="shop-title">Search</h1>

						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model="sorting">
									<option value="default" selected="selected">Default sorting</option>
									<option value="price-asc">Sort by price: low to high</option>
									<option value="price-desc">Sort by price: high to low</option>
								</select>
							</div>

							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" wire:model="pagesize">
									<option value="12" selected="selected">12 per page</option>
									<option value="16">16 per page</option>
									<option value="18">18 per page</option>
									<option value="21">21 per page</option>
									<option value="24">24 per page</option>
									<option value="30">30 per page</option>
									<option value="32">32 per page</option>
								</select>
							</div>

							

						</div>

					</div><!--end wrap shop control-->

                    @if ($products->count()>0)
					   <div class="row">
                    <ul class="product-list grid-products equal-container">
						
                         @foreach($products as $product)

							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
											<figure><img src="{{asset('assets/images/products/')}}/{{$product->image}}" alt="{{$product->name}}"></figure>
										
										</a>
									</div>
									<div class="product-info">
										<a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>Product Name: {{$product->name}}</span></a>
										<div class="wrap-price"><span class="product-price">Price: {{$product->regular_price}}</span></div>
										
						                @if ($product->catagory_id == "3")
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
								</div>
							</li>
							@endforeach
							
						</ul>

					   </div>
                    @else 
                       <p style = "padding-top:20px;"> No Product(s) found </p>
                    @endif



					<div class="wrap-pagination-info">
						{{$products->links()}}
						
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">All Categories</h2>
						<div class="widget-content">
							<ul class="list-category">

							@foreach ($catagories as $catagory)
							<li class="category-item has-child-cate">
									<a href="{{route('product.catagory',['catagory_slug'=>$catagory->slug])}}" class="cate-link">{{$catagory->name}}</a>
									
							</li>
							@endforeach
	
							</ul>
						</div>
					</div>
					
				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

</main>