@extends('frontend.layouts.app')
@section('content')
      <!-- Main Content / start -->
      <main class="rw-my-account-section" style="background-color: rgb(240, 240, 240)"> 

        <!-- Body Content / start -->
        <section class="rw-body-content">
          <!-- FAQs Info. / start -->
          <div class="info py-5">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <div class="my-account-loginreg">
                <div class="row g-5">
                  <div class="col-md-6 border-end">
                    <div class="login-form fade show">
                      <h2 class="section-heading text-uppercase">Log In</h2> 
                        <div class="login-header">
                            
                          <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="loginUserEmail" class="form-label">
                                Username or email address
                                <span class="required fw-bold">*</span>
                              </label>
                              <input
                                type="email"
                                class="form-control rounded-pill"
                                id="loginUserEmail"
                                value="{{ old('email') }}"
                                name="email"
                              />
                            </div>
                            <div class="mb-3">
                              <label for="loginPassword" class="form-label">
                                Password
                                <span class="required fw-bold">*</span></label
                              >
                              <input
                                type="password"
                                class="form-control rounded-pill"
                                id="loginPassword"
                                name="password"
                              />
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="LoginRememberMe"
                                  name="remember"
                                {{ old('remember') ? 'checked' : '' }}
                                />
                                <label
                                  class="form-check-label"
                                  for="rememberMe"
                                >
                                  Remember me
                                </label>
                              </div>
                              <div class="mb-3">
                                <a href="#" class="lost-password">
                                  Lost your password?
                                </a>
                              </div>
                            </div>
                            <div class="mb-3">
                              <input
                                type="submit"
                                class="rw-btn form-control rounded-pill text-uppercase text-white"
                                id="loginSubmit"
                                value="Log In"
                              />
                            </div>
                          </form>
                        </div>
                        <div class="login-regi-footer">
                          <div class="login-options">
                            <span class="text-uppercase"> or login with </span>
                          </div>
                          <div class="social-logins">
                            <a
                              href="#"
                              target="_blank"
                              type="button"
                              class="rw-btn text-uppercase rounded-pill text-decoration-none position-relative"
                            >
                              <i class="fa-brands fa-facebook-square"></i>
                              <span class="rw-btn-text">Facebook</span>
                            </a>
                            <a
                              href="#"
                              target="_blank"
                              type="button"
                              class="rw-btn text-uppercase rounded-pill text-decoration-none position-relative"
                            >
                              <img
                                class="fa-brands google-icon"
                                src="assets/images/google-btn-icon.svg"
                                alt="google button"
                              />
                              <span class="rw-btn-text">Google</span>
                            </a>
                          </div>
                        </div> 
                    </div>
                    <div class="regi-form d-none fade">
                      <h2 class="section-heading text-uppercase">REGISTER</h2> 
                        <div class="login-header">
                          <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label for="Reguser" class="form-label">
                                Full Name
                                <span class="required fw-bold">*</span>
                              </label>
                              <input
                                type="text"
                                class="form-control rounded-pill"
                                id="Reguser"
                                name="name"
                                value="{{ old('name') }}"
                              />
                              @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="mb-3">
                              <label for="RegEmail" class="form-label">
                                Email
                                <span class="required fw-bold">*</span>
                              </label>
                              <input
                                type="email"
                                class="form-control rounded-pill"
                                id="RegEmail"
                                name="email"
                                value="{{ old('email') }}"
                              />
                              @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="mb-3">
                              <label for="RegPassword" class="form-label">
                                Password
                                <span class="required fw-bold">*</span></label
                              >
                              <input
                                type="password"
                                class="form-control rounded-pill"
                                id="RegPassword"
                                name="password"
                              />
                              @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="mb-3">
                              <label for="password_confirmation" class="form-label">
                                Confirm Password
                                <span class="required fw-bold">*</span></label
                              >
                              <input
                                type="password"
                                class="form-control rounded-pill"
                                id="password_confirmation"
                                name="password_confirmation"
                              />
                            </div>
                            <div class="mb-3">
                                <label class="aiz-checkbox">
                                    <input type="checkbox" name="checkbox_example_1" required>
                                    <span class=opacity-60>{{ translate('By signing up you agree to our terms and conditions.')}}</span>
                                    <span class="aiz-square-check"></span>
                                </label>
                            </div>
                            <div class="mb-3">
                              <input
                                type="submit"
                                class="rw-btn form-control rounded-pill text-uppercase text-white"
                                id="RegSubmit"
                                value="Register"
                              />
                            </div>
                          </form>
                        </div> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="login-trigger d-none fade text-center">
                      <h2 class="section-heading text-uppercase mb-3">LOGIN</h2>
                      <p class="mb-4">
                        Login here by filling you're username and password or
                        use your favorite social network account to enter to the
                        site. Site login will simplify the purchase process and
                        allows you to manage your personal account.
                      </p>
                      <button type="button" class="text-uppercase log-reg-btn">
                        Login
                      </button>
                    </div>
                    <div class="regi-trigger fade show text-center">
                      <h2 class="section-heading text-uppercase mb-3">
                        REGISTER
                      </h2>
                      <p class="mb-4">
                        Registering for this site allows you to access your
                        order status and history. Just fill in the fields below,
                        and we’ll get a new account set up for you in no time.
                        We will only ask you for information necessary to make
                        the purchase process faster and easier.
                      </p>
                      <button type="button" class="text-uppercase log-reg-btn">
                        Register
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Body Content / end -->
      </main>
@endsection