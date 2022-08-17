<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\RequestItemComponent;
use App\Http\Livewire\PrefferedMechanicComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\user\UserDashboardComponent;
use App\Http\Livewire\admin\AdminDashboardCOmponent;
use App\Http\Livewire\admin\AdminOrderComponent;
use App\Http\Livewire\admin\AdminOrderDetailsComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CatagoryComponent;
use App\Http\Livewire\MainSearchComponent;
use App\Http\Livewire\ThankYouComponent;
use App\Http\Livewire\user\UserOrdersComponent;
use App\Http\Livewire\user\UserOrderDetailsComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class);

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::get('/wishlist',WishlistComponent::class)->name('product.wishlist');

Route::get('/requestedItemList',RequestItemComponent::class)->name('product.requestedItemList');

Route::get('/prefferedMechanicList',PrefferedMechanicComponent::class)->name('product.prefferedMechanicList');

Route::get('/mainsearch',MainSearchComponent::class)->name('product.mainsearch');

Route::get('/checkout',CheckoutComponent::class)->name('checkout');

Route::get('/thankyou',ThankYouComponent::class)->name('thankyou');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/product-catagory/{catagory_slug}',CatagoryComponent::class)->name('product.catagory');


// for user
Route::middleware(['auth:sanctum','verified'])->group(function(){
  Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
  Route::get('/user/orders',UserOrdersComponent::class)->name('user.orders');
  Route::get('/user/orders/{order_id}',UserOrderDetailsComponent::class)->name('user.orderdetails');
});
  
// for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
  Route::get('/admin/dashboard',AdminDashboardCOmponent::class)->name('admin.dashboard');
  Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.orders');
  Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});
  