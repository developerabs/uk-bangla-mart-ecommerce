
      <!-- Footer Section / start -->
      <footer id="footer">
        <!-- Top Footer / start -->
        <section class="top-footer rw-border-bottom py-4">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-lg-3 col-md-6">
                  <a class="text-reset text-center p-4 d-block" href="{{ route('terms') }}">
                      <i class="la la-file-text la-3x text-primary mb-2"></i>
                      <h4 class="h6">{{ translate('Terms & conditions') }}</h4>
                  </a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <a class="text-reset border-left text-center p-4 d-block" href="{{ route('returnpolicy') }}">
                      <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                      <h4 class="h6">{{ translate('Return Policy') }}</h4>
                  </a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <a class="text-reset border-left text-center p-4 d-block" href="{{ route('supportpolicy') }}">
                      <i class="la la-support la-3x text-primary mb-2"></i>
                      <h4 class="h6">{{ translate('Support Policy') }}</h4>
                  </a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <a class="text-reset border-left text-center p-4 d-block" href="{{ route('privacypolicy') }}">
                      <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                      <h4 class="h6">{{ translate('Privacy Policy') }}</h4>
                  </a>
              </div>
          </div>
          </div>
          </div>
        </section>

        <!-- General Footer / start -->
        <section class="general-footer rw-border-bottom py-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-6 col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item text-uppercase px-2">
                        <a href="{{ route('home') }}">
                          @if(get_setting('footer_logo') != null)
                          <img
                            class="logo mb-4"
                            src="{{ uploaded_asset(get_setting('footer_logo')) }}"
                            alt="Footer Logo"
                          /> 
                          @endif
                        </a>
                      </li>
                      <li class="nav-item">
                        {!! get_setting('about_us_description',null,App::getLocale()) !!}
                      </li>
                    </ul>
                  </div>
                  <div class="col-6 col-md-6 mt-4 mt-md-0">
                    <ul class="nav flex-column"> 
                      <li class="nav-item"> 
                        <div class="fb-page" data-href="https://www.facebook.com/ubmdhaka" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                          <blockquote cite="https://www.facebook.com/ubmdhaka" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/ubmdhaka">UK Bangla Mart</a>
                          </blockquote>
                        </div> 
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-8 col-lg-4 mt-4 mt-lg-0">
                <div class="general-footer-app-sec text-center text-sm-start mt-4"> 
                  <div
                    class="join-newsletter text-capitalize text-white fs-5 mb-3"
                  >
                    join newsletter
                  </div> 
                  <form method="POST" action="{{ route('subscribers.store') }}">
                    @csrf
                    <div class="input-group mb-3">
                      <input
                        type="email"
                        class="form-control form-control-lg bg-transparent text-white rounded-pill me-2"
                        placeholder="Your email address"
                        aria-label="User's email"
                        aria-describedby="footer-subscribtion"
                        name="email" 
                        required
                      />
                      <button
                        type="submit"
                        class="btn bg-success text-white fs-7 px-4 rounded-pill text-uppercase"
                        id="footer-subscribtion"
                      >
                        Subscribe
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Bottom Footer / start -->
        <section class="bottom-footer rw-border-bottom py-4">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-lg-4 offset-lg-2 mt-4 mt-lg-0 ps-3 ps-sm-0">
                <h6 class="text-white mb-3 text-capitalize">Payment System</h6>
                
                @if ( get_setting('payment_method_images') !=  null )
                @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                    <img
                      src="{{ uploaded_asset($value) }}"
                      alt="payment system"
                      class="img-fluid"
                      style="max-height: 30px; width:40px; float:left; margin-right:10px"
                    />
                @endforeach
                @endif
              </div> 
              <div class="col-sm-6 col-lg-4 offset-lg-2 mt-4 mt-lg-0 ps-3 ps-sm-0">
                <h6 class="text-white mb-3 text-capitalize">
                  Our Social Links:
                </h6>
                <div class="footer-social-links">
                  @if ( get_setting('facebook_link') !=  null )
                  <a href="{{ get_setting('facebook_link') }}" target="_blank" class="social-link">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  @endif
                  @if ( get_setting('twitter_link') !=  null )
                  <a href="{{ get_setting('twitter_link') }}" target="_blank" class="social-link">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  @endif
                  @if ( get_setting('instagram_link') !=  null )
                  <a href="{{ get_setting('instagram_link') }}" target="_blank" class="social-link">
                    <i class="fa-brands lab la-instagram"></i>
                  </a>
                  @endif 
                  @if ( get_setting('youtube_link') !=  null )
                  <a href="{{ get_setting('youtube_link') }}" target="_blank" class="social-link">
                    <i class="fa-brands fa-youtube"></i>
                  </a>
                  @endif
                  @if ( get_setting('linkedin_link') !=  null )
                  <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="social-link">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Copyright Footer / start -->
        <section class="copyright-footer bg-blue py-3">
          <div class="container">
            <div class="copyright-text text-center text-uppercase text-white">
              {!! get_setting('frontend_copyright_text',null,App::getLocale()) !!}
             
            </div>
          </div>
        </section>
      </footer>
      <!-- Footer Section / end -->
    </div> 
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ static_asset('frontend/assets/modules/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Tiny Slider Library -->
    <script src="{{ static_asset('frontend/assets/modules/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{ static_asset('frontend/assets/modules/tiny-slider/min/tiny-slider.helper.ie8.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ static_asset('frontend/assets/js/index.js') }}"></script>
    <script src="{{ static_asset('frontend/assets/js/home.js') }}"></script>  
    <script src="{{ static_asset('frontend/assets/js/my-account.js') }}"></script>  

       <!-- SCRIPTS -->
       <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
       <script src="{{ static_asset('assets/js/aiz-core.js') }}"></script>
       
    <script>
      @foreach (session('flash_notification', collect())->toArray() as $message)
      let timerInterval
                    Swal.fire({
                      title: '{{ $message['message'] }}', 
                      timer: 2000,
                      timerProgressBar: true,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    }) 
      @endforeach
  </script>
    <script>
      $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                        $.post('{{ route('category.elements') }}', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });

            if ($('#lang-change').length > 0) {
                $('#lang-change .langChange li a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.ajax({ 
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type:"post",
                            url: '{{ route('language.change') }}',
                            data: {locale:locale}, 
                            success: function(data){
                              location.reload();
                            },
                            error: function() {
                              alert('error')
                            }
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .currencyChange li a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.ajax({ 
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type:"post",
                            url: '{{ route('currency.change') }}',
                            data: {currency_code:currency_code}, 
                            success: function(data){
                              location.reload();
                            },
                            error: function() {
                              alert('error')
                            }
                        });

                    });
                });
            }
        });
    </script>
    <script> 
        function addToCompare(id){ 
          $.ajax({ 
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:"POST",
                url: '{{ route('compare.addToCompare') }}', 
                data: {id : id},
                success: function(data){
                  if(data == 1){
                  let timerInterval
                    Swal.fire({
                      title: 'Item adding to your compare', 
                      timer: 2000,
                      timerProgressBar: true,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                    location.reload();
                }
                },
                error: function() {
                  alert('compare error')
                }
            });
        }
    </script>
    <script> 
        function addToWishList(id){ 
          $.ajax({ 
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:"POST",
                url: '{{ route('wishlists.store') }}', 
                data: {id : id},
                success: function(data){
                  if(data == 1){
                  let timerInterval
                    Swal.fire({
                      title: 'Item adding to your wishlist', 
                      timer: 2000,
                      timerProgressBar: true,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                  location.reload();
                }
                },
                error: function() {
                  alert('wishlist error')
                }
            });
        }
    </script>

    <script>
      
      function addToCart(id){ 
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
              type:"POST",
              url: '{{ route('cart.addToCart') }}',
              data: {id : id},
              success: function(data){ 
                if(data == 1){
                  let timerInterval
                    Swal.fire({
                      title: 'Item adding to your cart', 
                      timer: 2000,
                      timerProgressBar: true,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                }else if(data == 0){
                  let timerInterval
                    Swal.fire({
                      title: 'Something went wrong', 
                      timer: 2000,
                      timerProgressBar: true,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                }else if(data == 2){
                  let timerInterval
                    Swal.fire({
                      title: 'Already added in cart', 
                      timer: 2000,
                      timerProgressBar: true,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                }else if(data == 3){
                  let timerInterval
                    Swal.fire({
                      title: 'Out of stock', 
                      timer: 2000,
                      timerProgressBar: true,
                      didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                          b.textContent = Swal.getTimerLeft()
                        }, 100)
                      },
                      willClose: () => {
                        clearInterval(timerInterval)
                      }
                    }).then((result) => {
                      /* Read more about handling dismissals below */
                      if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                      }
                    })
                }
                
                location.reload();
              },
              error: function() {
                alert('error')
              }
          });
        }

        


        function countCarts(){ 
          $.ajax({ 
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:"get",
                url: '{{ route('cart.countCarts') }}', 
                success: function(data){
                  $('#countCarts').html(data); 
                },
                error: function() {
                  alert('error')
                }
            });
        }
    </script> 

    <script>
      function removeFromCart(id){
          $.ajax({ 
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:"post",
                url: '{{ route('cart.removeFromCart') }}', 
                data: {id : id},
                success: function(data){
                  countCarts();
                  location.reload(); 
                },
                error: function() {
                  alert('error')
                }
            });
            
        }
    </script>
    <script type="text/javascript">
      function removeFromWishlist(id){
        $.ajax({ 
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:"post",
                url: '{{ route('wishlists.remove') }}', 
                data: {id : id},
                success: function(data){
                  location.reload(); 
                },
                error: function() {
                  alert('error')
                }
            });
      }
  </script> 
  <script>
    function updateNavCart(view,count){
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        
  </script>

<script type="text/javascript">
  function filter(){
      $('#search-form').submit();
  }
  function rangefilter(arg){
      $('input[name=min_price]').val(arg[0]);
      $('input[name=max_price]').val(arg[1]);
      filter();
  }
</script>

