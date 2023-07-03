@extends('layouts.applogreg')

@section('main')
<section class="register-page padding-top">
   <div class="container">
     <div class="row justify-content-center">
        <div class="col-lg-7 col-12">
          
        <div class="section-title text-center">
          <h2 class="h1">Create account</h2> 
        </div> 
        <div class="form-wrapper register-form">
          <form method="post" action="{{url('/register/save_account')}}" id="create_customer" accept-charset="UTF-8" data-login-with-shop-sign-up="true" novalidate="novalidate"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" /><div class="form-container">
          @csrf    
          <div class="form-heading">
                <h4>Your <b>Personal Details</b></h4>
              </div>
            </div>
            <div class="form-container">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group field">
                    <label>Username<sup aria-hidden="true">*</sup>:</label>
                    <input type="text" name="username_account" id="RegisterForm-FirstName"  autocomplete="given-name"
                    placeholder="username">
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-group field">
                    <label>E-mail<sup aria-hidden="true">*</sup>:</label>
                    <input type="email" name="email_account" id="RegisterForm-email"  spellcheck="false" autocapitalize="off"
                    autocomplete="email" aria-required="true"  placeholder="Email">
                  </div></div> 
              </div> 
            </div>
            <div class="form-container">
              <h4>Your <b>Password</b></h4>
              <div class="row">
                <div class="col-12">
                  <div class="form-group field">
                    <label>Password<sup aria-hidden="true">*</sup>:</label>
                    <input type="password" name="password_account" id="RegisterForm-password" aria-required="true"  placeholder="Password">
                  </div></div>
              </div> 
            </div>
            <div class="form-container"> 
              <div class="row align-items-center form-footer row-reverse"> 
                <div class="col-lg-4 col-12"> 
                  <button class="btn submit-btn" type="submit">Send message 
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="14" viewBox="0 0 35 14" fill="none">
                      <path d="M25.0749 14L35 7L25.0805 0L29.12 6.06667H0V7.93333H29.12L25.0749 14Z"></path>
                    </svg>
                  </button> 
                </div>
              </div>
            </div></form></div>
       </div>
     </div>
   </div>
</section>
@endsection