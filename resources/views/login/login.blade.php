@extends('layouts.applogreg')

@section('main')
<div class="row justify-content-center">
          <div class="col-lg-7 col-12">
            <div id="recover" class="section-title text-center login-title">
              <h2>Reset your password</h2>
            </div>
            <div class="recover-password form-wrapper">
              <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
                <div class="form-container">
                  <div class="form-heading">
                    <h4 class="recover-content">We will send you an email to reset your password</h4>
                  </div>
                </div>
                <div class="form-container">

                  <div class="field">
                    <input type="email" value="" name="email" id="RecoverEmail" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-container">
                  <button class="btn-secondary">Submit</button>
                  <a href="#login" class="btn-secondary">Cancel</a>
                </div>
              </form>
            </div>
            <div class="d-flex justify-content-center back-toshop">
              <a href="{{url('/home/index')}}" class="back-btn">
                <span class="svg-ic">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="5" viewBox="0 0 11 5" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5791 2.28954C10.5791 2.53299 10.3818 2.73035 10.1383 2.73035L1.52698 2.73048L2.5628 3.73673C2.73742 3.90636 2.74146 4.18544 2.57183 4.36005C2.40219 4.53467 2.12312 4.53871 1.9485 4.36908L0.133482 2.60587C0.0480403 2.52287 -0.000171489 2.40882 -0.000171488 2.2897C-0.000171486 2.17058 0.0480403 2.05653 0.133482 1.97353L1.9485 0.210321C2.12312 0.0406877 2.40219 0.044729 2.57183 0.219347C2.74146 0.393966 2.73742 0.673036 2.5628 0.842669L1.52702 1.84888L10.1383 1.84875C10.3817 1.84874 10.5791 2.04609 10.5791 2.28954Z" fill="white"></path>
                  </svg>
                </span>
                Back to Home
              </a>
            </div>
            <div class="section-title text-center">
              <h2>Already Registered?</h2>
            </div>
            <div class="form-wrapper">
              <form method="post" action="/check_login" id="customer_login" accept-charset="UTF-8" data-login-with-shop-sign-in="true" class="login-form" novalidate="novalidate">
                <input type="hidden" name="form_type" value="customer_login" />
                <input type="hidden" name="utf8" value="✓" />
                <div class="form-container">
                  <div class="form-heading">
                    <h4>Already Registered?</h4>
                  </div>
                </div>
                <div class="form-container">
                  <div class="row">
                    <div class="col-12">
                      <p>I am a returning customer</p>
                    </div>
                    @csrf
                    <div class="col-md-6 col-12">
                      <div class="field form-group">
                        <label>E-mail<sup aria-hidden="true">*</sup>:</label>
                        <input type="email" name="email" id="CustomerEmail" autocomplete="email" autocorrect="off" autocapitalize="off" placeholder="Email">
                        @error('email')
    <span style="color: red;font-weight: bold;">invalid email</span>
    @enderror
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group field">
                        <label>Password<sup aria-hidden="true">*</sup>:</label>
                        <input type="password" value="" name="password" id="CustomerPassword" autocomplete="current-password" placeholder="Password">
                        @error('password')
    <span style="color: red;font-weight: bold;">invalid password</span>
    @enderror
                      </div>
                    </div>

                  </div>
                </div>
                <div class="form-container">
                  <div class="row align-items-center form-footer justify-content-end">
                    <div class="col-lg-12  col-12 d-flex align-items-center justify-content-end mobile-direction-column">
                      <a href="#recover" class="forgot-pass">Forgot Password?</a>
                      <button class="btn submit-btn" type="submit">Login
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="14" viewBox="0 0 35 14" fill="none">
                          <path d="M25.0749 14L35 7L25.0805 0L29.12 6.06667H0V7.93333H29.12L25.0749 14Z"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="form-container">
                  <div class="row align-items-center">
                    <div class="col-sm-12 col-12 d-flex align-items-center justify-content-center">
                      <div class="reg-lbl">If you dont have account</div>
                      <a href="{{url('/register/register')}}" class="btn register-btn" type="submit">
                        Register
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="14" viewBox="0 0 35 14" fill="none">
                          <path d="M25.0749 14L35 7L25.0805 0L29.12 6.06667H0V7.93333H29.12L25.0749 14Z"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
@endsection
