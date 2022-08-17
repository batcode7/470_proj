<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Checkout</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        <form wire:submit.prevent = "placeOrder">
        <div class = "row">
            <div class = "col-md-12">
               <div class="wrap-address-billing">
                  <h3 class="box-title">Billing Address</h3>
                  <div calss = "billing-address">
                        <p class="row-in-form">
                            <label for="fname">first name<span>*</span></label>
                            <input type="text" name="fname" value="" placeholder="Your first name" wire:model = "firstname">
                            @error('firstname') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                           <label for="lname">last name<span>*</span></label>
                           <input  type="text" name="lname" value="" placeholder="Your last name" wire:model = "lastname">
                           @error('lastname') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="email">Email Addreess:</label>
                            <input  type="email" name="email" value="" placeholder="Type your email" wire:model = "email">
                            @error('email') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Phone number<span>*</span></label>
                            <input  type="number" name="phone" value="" placeholder="01*********" wire:model = "mobile">
                            @error('mobbile') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                             <label for="add"> Road No:</label>
                             <input  type="text" name="add" value="" placeholder="Road number" wire:model = "line1">
                             @error('line1') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">House No:</label>
                            <input  type="text" name="add" value="" placeholder="House number" wire:model = "line2">
                        </p>
                        <p class="row-in-form">
                            <label for="country">Country<span>*</span></label>
                            <input  type="text" name="country" value="" placeholder="Bangladesh"  wire:model = "country">
                            @error('country') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                       
                        <p class="row-in-form">
                            <label for="city">Thana<span>*</span></label>
                            <input  type="text" name="province" value="" placeholder="Thana"  wire:model = "province">
                            @error('province') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">City<span>*</span></label>
                            <input  type="text" name="city" value="" placeholder="City name"  wire:model = "city">
                            @error('city') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                             <label for="zip-code">Postcode / ZIP:</label>
                            <input  type="number" name="zip-code" value="" placeholder="Your postal code"  wire:model = "zipcode">
                            @error('zipcode') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                         <p class="row-in-form fill-wife">
                    
                               <label class="checkbox-field">
                                    <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                    <span>Ship to a different address?</span>
                                </label>
                        </p>
                    </div>
                </div>


            </div>
            
            @if ($ship_to_different)

            <div class = "col-md-12">
               <div class="wrap-address-billing">
                  <h3 class="box-title">Shipping Address</h3>
                  <div calss = "billing-address">
                  <p class="row-in-form">
                          <label for="fname">first name<span>*</span></label>
                          <input type="text" name="fname" value="" placeholder="Your first name" wire:model = "s_firstname">
                          @error('s_firstname') <span class = "text-danger">{{$message}}</span> @enderror
                      </p>
                       <p class="row-in-form">
                           <label for="lname">last name<span>*</span></label>
                           <input  type="text" name="lname" value="" placeholder="Your last name" wire:model = "s_lastname">
                           @error('s_lastname') <span class = "text-danger">{{$message}}</span> @enderror
                       </p>
                       <p class="row-in-form">
                           <label for="email">Email Addreess:</label>
                           <input  type="email" name="email" value="" placeholder="Type your email" wire:model = "s_email">
                           @error('s_email') <span class = "text-danger">{{$message}}</span> @enderror
                       </p>
                       <p class="row-in-form">
                           <label for="phone">Phone number<span>*</span></label>
                           <input  type="number" name="phone" value="" placeholder="01*********" wire:model = "s_mobile">
                           @error('s_mobile') <span class = "text-danger">{{$message}}</span> @enderror
                       </p>
                        <p class="row-in-form">
                            <label for="add">Road No:</label>
                            <input  type="text" name="add" value="" placeholder="Road number" wire:model = "s_line1">
                            @error('s_line1') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Line2:</label>
                            <input  type="text" name="add" value="" placeholder="House number" wire:model = "s_line2">
                        </p>
                         <p class="row-in-form">
                             <label for="country">Country<span>*</span></label>
                             <input  type="text" name="country" value="" placeholder="Bangladesh"  wire:model = "s_country">
                             @error('s_country') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                       
                        <p class="row-in-form">
                            <label for="city">Thana<span>*</span></label>
                            <input  type="text" name="province" value="" placeholder="Thana name"  wire:model = "s_province">
                            @error('s_thana') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">City<span>*</span></label>
                            <input  type="text" name="city" value="" placeholder="City name"  wire:model = "s_city">
                            @error('s_city') <span class = "text-danger">{{$message}}</span> @enderror
                        </p>
                        <p class="row-in-form">
                             <label for="zip-code">Postcode / ZIP:</label>
                            <input  type="number" name="zip-code" value="" placeholder="Your postal code"  wire:model = "s_zipcode">
                            @error('s_zipcode') <span class = "text-danger">{{$message}}</span> @enderror 
                        </p>
                         
                    </div>
                </div>


            </div>
            @endif

        </div>
        
        <div class="summary summary-checkout">
            <div class="summary-item payment-method">
                <h4 class="title-box">Payment Method</h4>
                <div class="choose-payment-methods">
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model = "paymentmode">
                        <span>Cash On Delivery</span>
                        <span class="payment-desc"> Order now and pay upon receiving the products.</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model = "paymentmode">
                        <span>Credit Card</span>
                        <span class="payment-desc">Pay now and enjoy our services</span>
                    </label>
                    @error('paymentmode') <span class = "text-danger">{{$message}}</span> @enderror 
                </div>

                @if (Session::has('checkout'))
                  <p class="summary-info grand-total"><span>Total</span> <span class="grand-total-price">{{Session::get('checkout')['subtotal']}}</span></p>
                @endif
                  <button type = "submit" class= "btn btn-medium">Place order now</button>
            </div>
            
            <div class="summary-item shipping-method">
                <h4 class="title-box f-title">Shipping method</h4>
                <p class="summary-info"><span class="title">Flat Rate</span></p>
                <p class="summary-info"><span class="title">Fixed 0.00</span></p>
                
            </div>
        </div>
        </form>


    </div><!--end main content area-->
</div><!--end container-->

</main>