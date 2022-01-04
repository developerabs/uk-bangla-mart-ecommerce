@php
if(auth()->user() != null) {
    $user_id = Auth::user()->id;
    $cart = \App\Models\Cart::where('user_id', $user_id)->get();
} else {
    $temp_user_id = Session()->get('temp_user_id');
    if($temp_user_id) {
        $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
    }
}

@endphp

<header id="header">
    <!-- Top Bar / start -->
    <section class="top-bar d-none d-lg-block">
      <div class="container">
        <nav class="top-bar-inner d-flex justify-content-between">
          <ul class="nav left">
            @if(get_setting('show_language_switcher') == 'on')
            <li class="nav-item rw-dropdown" id="lang-change">
              @php
                    if(Session::has('locale')){
                        $locale = Session::get('locale', Config::get('app.locale'));
                    }
                    else{
                        $locale = 'en';
                    }
                @endphp
              <a class="nav-link text-uppercase" href="#">
                <span>{{ \App\Models\Language::where('code', $locale)->first()->name }}</span>
                <i class="fas fa-angle-down text-muted"></i>
              </a>
              <!-- Top Bar Dropdown / start -->
              <ul class="rw-dropdown-menu langChange">
                @foreach (\App\Models\Language::all() as $key => $language)
                <li>
                  <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="rw-dropdown-item">{{ $language->name }}</a>
                </li>
                @endforeach 
              </ul>
            </li>
            @endif
            @if(get_setting('show_currency_switcher') == 'on')
            <li class="nav-item rw-dropdown" id="currency-change">
              @php
                  if(Session::has('currency_code')){
                      $currency_code = Session::get('currency_code');
                  }
                  else{
                      $currency_code = \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code;
                  }
              @endphp
              <a class="nav-link text-uppercase" href="#">
                <span>
                  {{ \App\Models\Currency::where('code', $currency_code)->first()->name }} {{ (\App\Models\Currency::where('code', $currency_code)->first()->symbol) }}
                </span>
                <i class="fas fa-angle-down text-muted"></i>
              </a>
              <!-- Top Bar Dropdown / start -->
              <ul class="rw-dropdown-menu currencyChange">
                @foreach (\App\Models\Currency::where('status', 1)->get() as $key => $currency)
                <li >
                  <a class="rw-dropdown-item" href="javascript:void(0)" data-currency="{{ $currency->code }}">
                    {{ $currency->name }} ({{ $currency->symbol }})
                  </a>
                </li>
                @endforeach 
              </ul>
            </li> 
            @endif
          </ul>
          <ul class="nav right">
            <li class="nav-item">
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-pinterest"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#">
                  <i class="fab fa-telegram"></i>
                </a>
              </div>
            </li> 
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#">faqs</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>

    <!-- General Bar / start -->
    <section class="general-bar">
      <div class="container">
        <div class="general-bar-inner">
          <div class="mobile-menu d-block d-lg-none">
            <button
              type="button"
              class="btn menu-btn"
              data-bs-toggle="offcanvas"
              data-bs-target="#mobileMenu"
              aria-controls="offcanvasTop"
            >
              <i class="fa-solid fa-bars fa-lg"></i>
              <span class="d-none d-md-inline">menu</span>
            </button>

            <div
              class="offcanvas offcanvas-start"
              tabindex="-1"
              id="mobileMenu"
              aria-labelledby="mobileMenu"
            >
              <div class="offcanvas-header">
                <form action="#" method="post">
                  <div class="input-group">
                    <input
                      type="search"
                      class="form-control form-control-lg"
                      aria-label="Select Category"
                      placeholder="Search for products"
                    />
                    <button type="submit" class="input-group-text">
                      <i class="fas fa-search fa-lg"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div class="offcanvas-body">
                <ul
                  class="nav nav-tabs"
                  id="mobileMenuTabList"
                  role="tablist"
                >
                  <li class="nav-item w-50" role="presentation">
                    <button
                      class="nav-link text-muted w-100 active"
                      id="menu-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#menu"
                      type="button"
                      role="tab"
                      aria-controls="menu"
                      aria-selected="true"
                    >
                      Menu
                    </button>
                  </li>
                  <li class="nav-item w-50" role="presentation">
                    <button
                      class="nav-link text-muted w-100"
                      id="categories-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#categories"
                      type="button"
                      role="tab"
                      aria-controls="categories"
                      aria-selected="false"
                    >
                      Categories
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="mobileMenuTabContent">
                  <ul
                    class="nav tab-pane flex-column fade show active"
                    id="menu"
                    role="tabpanel"
                    aria-labelledby="menu-tab"
                  >
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">
                        Home
                      </a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link text-uppercase" href="#">
                        Pages
                        <button
                          type="button"
                          class="dropdown-btn"
                          data-bs-toggle="collapse"
                          data-bs-target="#seePages"
                          aria-expanded="false"
                          aria-controls="seePages"
                        >
                          <i class="fa-solid fa-chevron-right"></i>
                        </button>
                      </a>
                      <div class="collapse" id="seePages">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              Pre-Built Pages
                              <button
                                type="button"
                                class="dropdown-btn"
                                data-bs-toggle="collapse"
                                data-bs-target="#seelinks1"
                                aria-expanded="false"
                                aria-controls="seelinks1"
                              >
                                <i class="fa-solid fa-chevron-right"></i>
                              </button>
                            </a>
                            <div class="collapse" id="seelinks1">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link" href="#"
                                    >Contact Us</a
                                  >
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#"
                                    >Contact Us 2</a
                                  >
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#"
                                    >Contact Us 3</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              Pre-Built Layouts
                              <button
                                type="button"
                                class="dropdown-btn"
                                data-bs-toggle="collapse"
                                data-bs-target="#seelinks2"
                                aria-expanded="false"
                                aria-controls="seelinks2"
                              >
                                <i class="fa-solid fa-chevron-right"></i>
                              </button>
                            </a>
                            <div class="collapse" id="seelinks2">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Layout Us</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#"
                                    >Layout Us 2</a
                                  >
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#"
                                    >Layout Us 3</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>
                          <i class="fa-solid fa-code-compare me-1"></i>
                          Compare
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span>
                          <i class="fa-regular fa-circle-user me-1"></i>
                          Login / Register
                        </span>
                      </a>
                    </li>
                  </ul>
                  <ul
                    class="nav tab-pane flex-column fade"
                    id="categories"
                    role="tabpanel"
                    aria-labelledby="categories-tab"
                  >
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">
                        Furniture
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">lighting</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Clocks</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Cooking</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Electronics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Minimalism</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Fashion</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Toys</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="header-left">
            <a href="{{ route('home') }}">
              @php
                  $header_logo = get_setting('header_logo');
              @endphp
              @if($header_logo != null)
              <img
                class="logo"
                src="{{ uploaded_asset($header_logo) }}"
                alt="Header Logo"
              />
              @else
              <img
                class="logo"
                src="assets/images/wood-logo-white.svg"
                alt="Header Logo"
              />
              @endif
            </a>
          </div>
          <div class="header-middle d-none d-lg-block">
            <form action="{{ route('search') }}" method="GET">
              <div class="input-group">
                <input
                  type="search"
                  class="form-control form-control-lg"
                  name="keyword"
                  aria-label="Select Category"
                  placeholder="Search for products"
                  @isset($query)
                  value="{{ $query }}"
                  @endisset
                /> 
                <button type="submit" class="input-group-text">
                  <i class="fas fa-search fa-lg"></i>
                </button>
              </div>
            </form>
          </div>
          <div class="header-right">
            <ul class="nav right">
              @if(!Auth::user())
              <li class="nav-item d-none d-lg-inline-block">
                <a
                  class="nav-link text-uppercase" 
                  href="{{ route('user.login') }}" 
                >
                
                  <span>Login / Register</span>
                </a> 
              </li>
              @endif
              @auth
              @if(isAdmin())
              <li class="nav-item d-none d-lg-inline-block">
                <a
                  class="nav-link text-uppercase" 
                  href="{{ route('admin.dashboard') }}" 
                >
                
                  <span>My Account</span>
                </a> 
              </li>
              @else
              <li class="nav-item d-none d-lg-inline-block">
                <a
                  class="nav-link text-uppercase" 
                  href="{{ route('dashboard') }}" 
                >
                
                  <span>My Panel</span>
                </a> 
              </li>
              @endif
              @endauth
              <li class="nav-item d-none d-lg-inline-block">
                <a class="nav-link text-uppercase" href="{{ route('wishlists.index') }}">
                  <div class="badge-group position-relative d-inline-block">
                    <i class="far fa-heart fa-lg"></i>
                    <span
                      class="position-absolute translate-middle badge rounded-pill bg-danger"
                    >
                    @if(Auth::check())
                    {{ count(Auth::user()->wishlists)}}
                    @else
                        0
                    @endif
                    </span>
                  </div>
                </a>
              </li>
              <li class="nav-item d-none d-lg-inline-block">
                <a class="nav-link text-uppercase" href="{{ route('compare') }}">
                  <div class="badge-group position-relative d-inline-block">
                    <i class="fa-solid fa-code-compare fa-lg"> </i>
                    <span
                      class="position-absolute translate-middle badge rounded-pill bg-danger"
                    >
                    @if(Session::has('compare'))
                    {{ count(Session::get('compare')) }}
                    @else
                        0
                    @endif
                    </span>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link text-uppercase" 
                  href="{{ route('cart') }}" 
                >
                  <div
                    class="badge-group position-relative d-inline-block me-lg-2"
                  >
                    <i class="fa-solid fa-bag-shopping fa-lg"></i>
                    <span
                      class="position-absolute translate-middle badge rounded-pill bg-danger"
                      id="countCarts"
                    >
                    @if(isset($cart) && count($cart) > 0)
                      {{ count($cart)}}
                    @else
                        0
                    @endif 
                    </span>
                  </div> 
                </a>
                <div
                  class="offcanvas offcanvas-end"
                  tabindex="-1"
                  id="shoppingCart"
                  aria-labelledby="offcanvasShoppingCart"
                >
                @if(isset($cart) && count($cart) > 0)
                  <div class="offcanvas-header">
                    <h5 class="text-uppercase" id="offcanvasRightLabel">
                      {{translate('Cart Items')}}
                    </h5>
                    <button
                      type="button"
                      class="close-btn"
                      data-bs-dismiss="offcanvas"
                      aria-label="Close"
                    >
                      <i class="fa-solid fa-xmark"></i>
                      <span class="close-text">Close</span>
                    </button>
                  </div>
                  <div class="offcanvas-body d-flex flex-column p-0">
                    <div class="product-container">
                      @php
                          $total = 0;
                      @endphp
                      @foreach($cart as $key => $cartItem)
                      @php
                          $product = \App\Models\Product::find($cartItem['product_id']);
                          $total = $total + $cartItem['price'] * $cartItem['quantity'];
                      @endphp
                      @if ($product != null)
                      <div class="card">
                        <div class="row g-0">
                          <div class="col-3 pt-3">
                            <img
                              src="{{ uploaded_asset($product->thumbnail_img) }}"
                              class="img-fluid"
                              alt="Product"
                            />
                          </div>
                          <div class="col-9">
                            <div class="card-body">
                              <h6 class="card-title">{{  $product->getTranslation('name')  }}</h6>
                              <div
                                class="btn-group mb-2"
                                role="group"
                                aria-label="Product Button Group"
                              >
                                <button
                                  type="button"
                                  class="rw-btn-product"
                                >
                                  <i class="fa-solid fa-plus"></i>
                                </button>
                                <button
                                  type="button"
                                  class="rw-btn-product"
                                >
                                  <span class="counter">1</span>
                                </button>
                                <button
                                  type="button"
                                  class="rw-btn-product"
                                >
                                  <i class="fa-solid fa-minus"></i>
                                </button>
                              </div>
                              <div class="product-quantity">
                                <span class="quantity">1</span>
                                <i class="fa-solid fa-xmark"></i>
                                <span class="price">{{ single_price($cartItem['price']) }}</span>
                              </div>
                              <button type="button" class="close-btn">
                                <i class="fa-solid fa-xmark"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endif
                      @endforeach
                    </div>
                    <div class="cart-footer">
                      <div
                        class="sub-total-price d-flex align-items-center justify-content-between"
                      >
                        <h6 class="text-uppercase m-0">Subtotal:</h6>
                        <span class="price">{{ single_price($total) }}</span>
                      </div>
                      <div class="cart-buttons">
                        <a
                          href="{{ route('cart') }}"
                          role="button"
                          class="rw-btn text-uppercase d-block"
                          >view cart</a
                        >
                        <a
                          href="{{ route('checkout.shipping_info') }}"
                          role="button"
                          class="rw-btn text-uppercase d-block"
                          >checkout</a
                        >
                      </div>
                    </div>
                  </div>
                  @else
                      <div class="text-center p-3">
                          <i class="las la-frown la-3x opacity-60 mb-3"></i>
                          <h3 class="h6 fw-700">{{translate('Your Cart is empty')}}</h3>
                      </div>
                  @endif
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Mobile Product Search / start -->
    <section class="header-search-box d-block d-lg-none px-3 py-2 bg-white">
      <form action="#" method="post">
        <div class="input-group">
          <input
            type="search"
            class="form-control form-control-lg"
            aria-label="Select Category"
            placeholder="Search for products"
          />
          <button type="submit" class="input-group-text">
            <i class="fas fa-search fa-lg"></i>
          </button>
        </div>
      </form>
    </section>

    <!-- Bottom Bar / start -->
    <nav class="bottom-bar d-none d-lg-block">
      <div class="container">
        <ul class="nav">
          <li class="nav-item rw-dropdown">
            <a
              class="nav-link text-uppercase border-start border-end"
              href="#"
            >
              <i class="fa-solid fa-bars fa-sm"></i>
              <span style="margin: 0 3.875rem 0 0.5rem"
                >Browse Categories</span
              >
              <i class="fas fa-angle-down text-muted"></i>
            </a>
            <!-- Top Bar Dropdown / start -->
            <ul class="rw-dropdown-menu">
              @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)
              <li class="rw-dropdown-secondary">
                <a class="rw-dropdown-item" href="{{ route('products.category', $category->slug) }}">
                  <span class="rw-dropdown-text">
                    <i class="fa-solid fa-chair"></i>
                    {{ $category->getTranslation('name') }}
                  </span>
                  <i class="fa-solid fa-angle-right"></i>
                </a>
                <div class="rw-dropdown-menu-secondary">
                  <div class="product-links">
                    @foreach (\App\Models\Category::where('level', 1)->where('parent_id', $category->id)->orderBy('order_level', 'desc')->get()->take(11) as $key => $sub_category) 
                    <ul class="produt-menu">
                      <li>
                        <a
                          href="{{ route('products.category', $sub_category->slug) }}"
                          class="product-menu-item text-uppercase text-dark"
                        >
                        {{ $sub_category->getTranslation('name') }}
                        </a>
                      </li>
                      
                      @foreach (\App\Models\Category::where('level', 2)->where('parent_id', $sub_category->id)->orderBy('order_level', 'desc')->get()->take(11) as $key => $sub_sub_category) 
                      <li>
                        <a href="{{ route('products.category', $sub_sub_category->slug) }}" class="product-menu-item">
                          {{ $sub_sub_category->getTranslation('name') }}
                        </a>
                      </li>
                      @endforeach 

                    </ul> 
                    @endforeach 
                  </div> 
                </div>
              </li>
              @endforeach 
            </ul>
          </li>
          @if ( get_setting('header_menu_labels') !=  null )
          @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
          <li class="nav-item rw-dropdown">
            <a class="nav-link text-uppercase" href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}">
              <span>{{ translate($value) }}</span>
            </a>
          </li>
          @endforeach
          @endif
        </ul>
      </div>
    </nav>
  </header>