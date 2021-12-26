@extends('frontend.layouts.app')
@section('content')

      <!-- Main Content / start -->
      <main class="rw-archive-section">
        <!-- Hero / start -->
        <section class="common-hero-section text-center" style="background-image: url({{ static_asset('frontend/assets/images/retail-garden-banner-2-1-opt.jpg') }})">
          <div class="container">
            <h2 class="m-0">Shop</h2>

            <div class="row align-items-center g-4 mt-4">
              <div class="hero-block text-start col-6 col-md-4 col-lg-2">
                <div class="icon">
                  <i class="fa-solid fa-clock fa-3x"></i>
                </div>
                <div>
                  <h3 class="fs-6 mb-1 fw-bold text-uppercase">
                    <a href="#" class="title">Clocks</a>
                  </h3>
                  <span class="products-count">12 Products</span>
                </div>
              </div>
              <div class="hero-block text-start col-6 col-md-4 col-lg-2">
                <div class="icon">
                  <i class="fa-solid fa-lightbulb fa-3x"></i>
                </div>
                <div>
                  <h3 class="fs-6 mb-1 fw-bold text-uppercase">
                    <a href="#" class="title">Lighting</a>
                  </h3>
                  <span class="products-count">12 Products</span>
                </div>
              </div>
              <div class="hero-block text-start col-6 col-md-4 col-lg-2">
                <div class="icon">
                  <i class="fa-solid fa-chair fa-3x"></i>
                </div>
                <div>
                  <h3 class="fs-6 mb-1 fw-bold text-uppercase">
                    <a href="#" class="title">Furniture</a>
                  </h3>
                  <span class="products-count">12 Products</span>
                </div>
              </div>
              <div class="hero-block text-start col-6 col-md-4 col-lg-2">
                <div class="icon">
                  <i class="fa-solid fa-hat-wizard fa-3x"></i>
                </div>
                <div>
                  <h3 class="fs-6 mb-1 fw-bold text-uppercase">
                    <a href="#" class="title">Clocks</a>
                  </h3>
                  <span class="products-count">12 Products</span>
                </div>
              </div>
              <div class="hero-block text-start col-6 col-md-4 col-lg-2">
                <div class="icon">
                  <i class="fa-solid fa-utensils fa-3x"></i>
                </div>
                <div>
                  <h3 class="fs-6 mb-1 fw-bold text-uppercase">
                    <a href="#" class="title">Cooking</a>
                  </h3>
                  <span class="products-count">12 Products</span>
                </div>
              </div>
              <div class="hero-block text-start col-6 col-md-4 col-lg-2">
                <div class="icon">
                  <i class="fa-solid fa-horse fa-3x"></i>
                </div>
                <div>
                  <h3 class="fs-6 mb-1 fw-bold text-uppercase">
                    <a href="#" class="title">Toys</a>
                  </h3>
                  <span class="products-count">12 Products</span>
                </div>
              </div>
            </div>
          </div>
        </section>

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
                    <div class="top-rated-products">
                      <h3 class="text-uppercase title">TOP RATED PRODUCTS</h3>
                      <ul class="side-products">
                        <li class="product">
                          <div class="row g-0">
                            <div class="col-4">
                              <img
                                src="assets/images/retail-product-22-opt-330x340.jpg"
                                alt="Top Rated Product"
                              />
                            </div>
                            <div class="col-8">
                              <h4 class="product-title">
                                <a href="#"> Decoration for table pen </a>
                              </h4>
                              <span class="rating-stars text-warning"></span>
                              <span class="price">$188.00</span>
                            </div>
                          </div>
                        </li>
                        <li class="product">
                          <div class="row g-0">
                            <div class="col-4">
                              <img
                                src="assets/images/retail-product-22-opt-330x340.jpg"
                                alt="Top Rated Product"
                              />
                            </div>
                            <div class="col-8">
                              <h4 class="product-title">
                                <a href="#"> Decoration for table pen </a>
                              </h4>
                              <span class="rating-stars text-warning"></span>
                              <span class="price">$188.00</span>
                            </div>
                          </div>
                        </li>
                        <li class="product">
                          <div class="row g-0">
                            <div class="col-4">
                              <img
                                src="assets/images/retail-product-22-opt-330x340.jpg"
                                alt="Top Rated Product"
                              />
                            </div>
                            <div class="col-8">
                              <h4 class="product-title">
                                <a href="#"> Decoration for table pen </a>
                              </h4>
                              <span class="rating-stars text-warning"></span>
                              <span class="price">$188.00</span>
                            </div>
                          </div>
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
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Archive</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Furniture
                        <span class="queryField">test</span>
                      </li>
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

                <div class="products-wrapper py-2 mt-4">
                  <ul class="products">
                    @foreach ($products as $key => $product)
                    <li class="product">
                      <div class="product-inner">
                        <div class="backdrop"></div>
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="{{ uploaded_asset($product->thumbnail_img) }}"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
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
                            <div class="product-details"> 
                              <div class="show-more">
                                <i class="fa-solid fa-ellipsis"></i>
                              </div>
                            </div>
                            <div class="product-option-icons">
                              <a href="#" class="text-decoration-none">
                                <i class="fa-regular fa-heart fa-lg"></i>
                              </a>
                              <a href="#" class="text-decoration-none">
                                <i class="fa-solid fa-cart-shopping fa-lg"></i>
                              </a>
                              <a href="#" class="text-decoration-none">
                                <i
                                  class="fa-solid fa-magnifying-glass fa-lg"
                                ></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>

                <nav aria-label="Page navigation" class="mb-4">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">
                          <i class="fa-solid fa-arrow-left"></i>
                        </span>
                      </a>
                    </li>
                    <li class="page-item disabled">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item disabled">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item disabled">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <i class="fa-solid fa-ellipsis"></i>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">63</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">64</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">65</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">66</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">
                          <i class="fa-solid fa-arrow-right"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- Body Content / end -->
      </main>
      <!-- Main Content / end -->

@endsection