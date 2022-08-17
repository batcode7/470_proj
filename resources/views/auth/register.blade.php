<x-guest-layout>
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Register</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">                          
            <div class=" main-content-area">
                <div class="wrap-login-item ">
                    <div class="register-form form-item ">
                    <x-jet-validation-errors class="mb-4" />
                        <form class="form-stl" action="{{route('register')}}" name="frm-login" method="POST" >
                        @csrf    
                        <fieldset class="wrap-title">
                                <h3 class="form-title">Create an account</h3>
                                
                            </fieldset>                                 
                            <fieldset class="wrap-input">
                                <div>
                                    <x-jet-label for="name" value="{{ __('Name') }}" />
                                     <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <div class="mt-4">
                                  <x-jet-label for="email" value="{{ __('Email') }}" />
                                   <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>
                            </fieldset>
                            
                            
                            <fieldset class="wrap-input item-width-in-half left-item ">
                               <div class="mt-4">
                                   <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>
                            </fieldset>
                            <fieldset class="wrap-input item-width-in-half ">
                               <div class="mt-4">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                     <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                              </div>
                            </fieldset>
                            <input type="submit" class="btn btn-sign" value="Register" name="register">
                        </form>
                    </div>                                          
                </div>
            </div><!--end main products area-->     
        </div>
    </div><!--end row-->

</div><!--end container-->

</main>


</x-guest-layout>