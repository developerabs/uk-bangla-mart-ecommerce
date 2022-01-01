@extends('frontend.layouts.app')
@section('content')

      <!-- Main Content / start -->
      <main class="rw-archive-section">
    
        <!-- Body Content / start -->
        <section class="rw-body-content pt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="side-bar" id="side-bar">
                  <div class="offcanvas-body">
                    <div class="side-block-wrapper">
                      <h3 class="text-uppercase title mb-3">FILTER BY PRICE</h3>
                      <!-- multi range slider start -->
                      <input
                        id="price-range"
                        type="text"
                        class="price-range-slider"
                        value=""
                        data-slider-min="0"
                        data-slider-max="900"
                        data-slider-step="5"
                        data-slider-value="[250,700]"
                      />

                      <div
                        class="filtered-price d-flex justify-content-between align-items-center mt-3"
                      >
                        <div class="price">
                          Price:
                          <span class="fw-bold"
                            >$
                            <span id="startPrice">250</span>
                          </span>
                          -
                          <span class="fw-bold"
                            >$
                            <span id="endPrice">700</span>
                          </span>
                        </div>
                        <button
                          type="button"
                          class="rw-btn filter-btn mt-0 py-2 rounded-pill"
                        >
                          Filter
                        </button>
                      </div>
                    </div>
                    <div class="side-block-wrapper">
                      <h3 class="text-uppercase title">Filter By Color</h3>
                      <ul class="categories">
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="colorBlue"
                              />
                              <label class="form-check-label" for="colorBlue">
                                Blue
                              </label>
                            </div>
                            <span class="item-count">12</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="colorRed"
                              />
                              <label class="form-check-label" for="colorRed">
                                Red
                              </label>
                            </div>
                            <span class="item-count">12</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="colorGreen"
                              />
                              <label class="form-check-label" for="colorGreen">
                                Green
                              </label>
                            </div>
                            <span class="item-count">12</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="colorBlack"
                              />
                              <label class="form-check-label" for="colorBlue">
                                Black
                              </label>
                            </div>
                            <span class="item-count">12</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="colorGrey"
                              />
                              <label class="form-check-label" for="colorGrey">
                                Gray
                              </label>
                            </div>
                            <span class="item-count">12</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="colorYellow"
                              />
                              <label class="form-check-label" for="colorYellow">
                                Yellow
                              </label>
                            </div>
                            <span class="item-count">12</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="colorBrown"
                              />
                              <label class="form-check-label" for="colorBrown">
                                Brown
                              </label>
                            </div>
                            <span class="item-count">12</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="side-block-wrapper">
                      <h3 class="text-uppercase title">Filter By Size</h3>
                      <ul class="categories">
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <span class="size fw-bold fs-6">X</span>
                            <span class="item-count">1</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <span class="size fw-bold fs-6">XL</span>
                            <span class="item-count">1</span>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="category-link">
                            <span class="size fw-bold fs-6">XXL</span>
                            <span class="item-count">1</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="side-block-wrapper">
                      <h3 class="text-uppercase title">Product Status</h3>
                      <ul class="categories">
                        <li class="category-item">
                          <a href="#" class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="onSale"
                            />
                            <label class="form-check-label" for="onSale">
                              In stock
                            </label>
                          </a>
                        </li>
                        <li class="category-item">
                          <a href="#" class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="onSale"
                            />
                            <label class="form-check-label" for="onSale">
                              On sale
                            </label>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="side-block-wrapper">
                      <h3 class="text-uppercase title">Product Status</h3>
                      <ul class="brands">
                        <li class="brand-item">
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-alessi.png"
                              alt="Brand"
                            />
                          </a>
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-Eva-Solo.png"
                              alt="Brand"
                            />
                          </a>
                        </li>
                        <li class="brand-item">
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-flos.png"
                              alt="Brand"
                            />
                          </a>
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-hay.png"
                              alt="Brand"
                            />
                          </a>
                        </li>
                        <li class="brand-item">
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-Joseph-Joseph.png"
                              alt="Brand"
                            />
                          </a>
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-Louis-Poulsen.png"
                              alt="Brand"
                            />
                          </a>
                        </li>
                        <li class="brand-item">
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-Magisso.png"
                              alt="Brand"
                            />
                          </a>
                          <a href="#" class="brand-link d-inline-block">
                            <img
                              src="assets/images/brand-PackIt.png"
                              alt="Brand"
                            />
                          </a>
                        </li>
                      </ul>
                    </div> 
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div
                  class="bread-filter rw-border-bottom pb-2 d-flex align-items-center"
                >
                  <nav aria-label="breadcrumb" class="me-auto">
                    <ol class="breadcrumb breadcrumb-inside">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ translate('Home')}}</a></li>
                      @if(!isset($category_id))
                      <li class="breadcrumb-item"><a href="{{ route('search') }}">{{ translate('All Categories')}}</a></li>
                      @else
                      <li class="breadcrumb-item"><a href="{{ route('search') }}">{{ translate('All Categories')}}</a></li>
                      @endif
                      @if(isset($category_id))
                      <li class="breadcrumb-item"><a href="{{ route('products.category', \App\Models\Category::find($category_id)->slug) }}">{{ \App\Models\Category::find($category_id)->getTranslation('name') }}</a></li>
                      @endif
                    </ol>
                  </nav>
                  <div class="show-product-amount d-none d-lg-block me-3">
                    <span class="fw-bold">Show:</span>
                    <span class="numberOfProducts px-2">9</span> /
                    <span class="numberOfProducts px-2 active">12</span> /
                    <span class="numberOfProducts px-2">18</span> /
                    <span class="numberOfProducts px-2">24</span>
                  </div>
                  <div class="sorting">
                    <select
                      class="form-select"
                      aria-label="Default select example"
                      style="width: 10rem"
                    >
                      <option selected>Default sorting</option>
                      <option value="Low to High">Low to High</option>
                      <option value="High to Low">High to Low</option>
                      <option value="Most Popularity">Most Popularity</option>
                    </select>
                  </div>
                </div>
                <div
                  class="another-bread-filter d-flex align-items-center justify-content-between mt-3"
                >
                  <div class="show-product-amount d-lg-none">
                    <span class="fw-bold">Show:</span>
                    <span class="numberOfProducts px-2">9</span> /
                    <span class="numberOfProducts px-2 active">12</span> /
                    <span class="numberOfProducts px-2">18</span> /
                    <span class="numberOfProducts px-2">24</span>
                  </div>
                  <button
                    type="button"
                    class="rw-btn me-3 mt-0 rounded-pill text-uppercase d-block d-lg-none"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#side-bar"
                    aria-controls="side-bar"
                  >
                    <i class="fa-solid fa-filter fa-lg"></i>
                    Filter
                  </button>
                </div>
                <h1 class="h6 fw-600 text-body">
                  @if(isset($category_id))
                      {{ \App\Models\Category::find($category_id)->getTranslation('name') }}
                  @elseif(isset($query))
                      {{ translate('Search result for ') }}"{{ $query }}"
                  @else
                      {{ translate('All Products') }}
                  @endif
              </h1>
                <div class="products-wrapper py-2 mt-4">
                  <ul class="products">
                    @foreach ($products as $key => $product)
                    <li class="product">
                      <div class="product-inner">
                        <div class="backdrop"></div>
                        <div class="product-thumbnail">
                          <a href="{{ route('product', $product->slug) }}" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="{{ uploaded_asset($product->thumbnail_img) }}"
                                alt="Product"
                              />
                            </figure>
                          </a> 
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="{{ route('product', $product->slug) }}" class="text-decoration-none">
                                {{  $product->getTranslation('name')  }}
                            </a>
                          </h6>
                          <div class="tags">
                            <div class="rating rating-sm mt-1">
                                {{ renderStarRating($product->rating) }}
                            </div>
                          </div>
                          <div class="price">
                            <span class="price-text">{{ home_discounted_base_price($product) }}</span>
                            <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
                          </div>
                          <div class="fadein-content">
                            <div class="product-option-icons">
                              <a href="#" class="text-decoration-none">
                                <i class="fa-regular fa-heart fa-lg"></i>
                              </a>
                              <a href="javascript:void(0)" onclick="addToCart({{ $product->id }})" class="text-decoration-none">
                                <i class="fa-solid fa-cart-shopping fa-lg"></i>
                              </a>
                              <a href="javascript:void(0)" onclick="addToCompare({{ $product->id }})" class="text-decoration-none">
                                <i class="fa-solid fa-code-compare fa-lg"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="aiz-pagination aiz-pagination-center mt-4">
                  {{ $products->appends(request()->input())->links() }}
              </div> 
              </div>
            </div>
          </div>
        </section>
        <!-- Body Content / end -->
      </main>
      <!-- Main Content / end -->

@endsection