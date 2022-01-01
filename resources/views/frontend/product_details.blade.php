@extends('frontend.layouts.app')
@section('content')


      <!-- Main Content / start -->
      <main class="rw-single-product-section">
        <!-- Body Content / start -->
        <section class="rw-body-content py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <figure
                  class="zoom"
                  style="
                    background-image: url(assets/images/retail-product-5-opt.jpg);
                  "
                >
                  <img
                    src="assets/images/retail-product-5-opt.jpg"
                    alt="Product preview"
                  />
                </figure>
              </div>
              <div class="col-md-6">
                <div
                  class="d-flex align-items-center justify-content-between mb-3"
                >
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-inside">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Shop</a></li>
                      <li class="breadcrumb-item"><a href="#">Other</a></li>
                      <li class="breadcrumb-item"><a href="#">Retail</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Dark Mice
                      </li>
                    </ol>
                  </nav>
                  <a href="#" class="go-back">
                    <i class="fa-solid fa-angles-left"></i>
                  </a>
                </div>
                <div class="product-desc">
                  <h2 class="title">{{ $detailedProduct->getTranslation('name') }}</h2>
                  <span class="price">$155.00</span>
                  <p class="brief-desc mt-3">
                    Montes erat risus adipiscing ut a a malesuada dui platea a
                    venenatis vestibulum suscipit eros a diam hac hac nibh
                    condimentum primis at a pretium. A consectetur nec aliquet
                    adipiscing maecenas ac tempor viverra a a morbi molestie ac
                    tristique ad.
                  </p>
                  <table class="table">
                    <tbody>
                      <tr>
                        <th scope="row">Hardware</th>
                        <td class="text-end">Bluetooth, USB</td>
                      </tr>
                      <tr>
                        <th scope="row">Dimensions</th>
                        <td class="text-end">5 x 3.51 x 1.7 in</td>
                      </tr>
                      <tr>
                        <th scope="row">Item Weight</th>
                        <td class="text-end">4.48 ounces</td>
                      </tr>
                      <tr>
                        <th scope="row">Platform</th>
                        <td class="text-end">Windows 10</td>
                      </tr>
                      <tr>
                        <th scope="row">Sensor</th>
                        <td class="text-end">Optical</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="product-quantity">
                    <div
                      class="btn-group me-2"
                      role="group"
                      aria-label="Product Button Group"
                    >
                      <button type="button" class="rw-btn-product">
                        <i class="fa-solid fa-plus"></i>
                      </button>
                      <button type="button" class="rw-btn-product">
                        <span class="counter">1</span>
                      </button>
                      <button type="button" class="rw-btn-product">
                        <i class="fa-solid fa-minus"></i>
                      </button>
                    </div>

                    <button
                      type="button"
                      class="rw-btn text-uppercase rounded-pill"
                    >
                      Add to Cart
                    </button>
                  </div>
                  <div class="options border-bottom d-flex py-3">
                    <a href="#" class="me-3">
                      <i class="fa-solid fa-code-compare me-1"></i>
                      <span class="text">Compare</span>
                    </a>
                    <a href="#" class="me-3">
                      <i class="fa-regular fa-heart me-1"></i>
                      <span class="text">Add to wishlist</span>
                    </a>
                    <a href="#">
                      <i class="fa-solid fa-ruler me-1"></i>
                      <span class="text">Size guide</span>
                    </a>
                  </div>
                  <div class="category my-3">
                    Category:
                    <a href="#">Retail</a>
                  </div>
                  <div class="social-share">
                    <span class="title fw-bold">Share</span>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-breif-desc mt-4">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active text-uppercase"
                    id="description-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#description"
                    type="button"
                    role="tab"
                    aria-controls="description"
                    aria-selected="true"
                  >
                    description
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-uppercase"
                    id="reviews-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#reviews"
                    type="button"
                    role="tab"
                    aria-controls="reviews"
                    aria-selected="false"
                  >
                    reviews
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-uppercase"
                    id="shipping-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#shipping"
                    type="button"
                    role="tab"
                    aria-controls="shipping"
                    aria-selected="false"
                  >
                    shipping & delivery
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="description"
                  role="tabpanel"
                  aria-labelledby="description-tab"
                >
                  <div class="row mt-4">
                    <div class="col-md-4">
                      <h3 class="fs-6 fw-bold text-uppercase mb-3">
                        MAECENAS IACULIS
                      </h3>
                      <div class="brand-with-text overflow-auto mb-3">
                        <img
                          src="assets/images/menu-product-3-2-118x118.jpg"
                          alt="Brand logo"
                          class="float-start me-3"
                          style="max-width: 100px"
                        />

                        Nunc per mollis pot enti amet imperdiet blandit dis eu
                        sociosqu accumsan dap ibus ultricies tristique montes a
                        deros adipiscing a justo. Aliquet mus a aptent
                        ullamcorper metus accumsan. Habitasse a purus nec ipsum
                        a urna ac ullamcorper varius metus blandit posuere.
                      </div>
                      <p>
                        Consectetur parturient ad imperdiet torquent dui dis eu
                        sociosqu accumsan accumsan dapibus ultricies. Maecenas
                        iaculis viverra tellus ridiculus a sed vestibulum
                        dapibur.
                      </p>
                    </div>
                    <div class="col-md-4">
                      <h3 class="fs-6 fw-bold text-uppercase mb-3">
                        FEUGIAT PARTURIENT
                      </h3>
                      <p>
                        Venenatis duis tristique accumsan netus enim in posuere
                        torquent ut ullamcorper integer aliquam a mi curae
                        elementum. Maecenas iaculis viverra tellus ridiculus a
                        sed vestibulum dapibus. Ante a mollis habitant duis urna
                        cum iaculis ullamcorper luctus.
                      </p>
                      <ul class="desc-bullets">
                        <li>65% Polyester, 23% Elastane</li>
                        <li>Abitur parturient praesent ipsu</li>
                        <li>Minceptos pri 187cm/3’1.3″ tall</li>
                        <li>Diam parturient dictumst nibh mu</li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <div class="item mb-3">
                        <h3 class="fs-6 fw-bold text-uppercase mb-3">
                          FEUGIAT PARTURIENT
                        </h3>
                        <div class="desc">Model’s height: 4’2.2”/184 cm</div>
                        <div class="desc">Model is wearing size: Large</div>
                      </div>
                      <div class="item mb-3">
                        <h3 class="fs-6 fw-bold text-uppercase mb-3">
                          Aliouet
                        </h3>
                        <p>
                          Quam suspendisse adipiscing quis pretium nostra
                          cubilia tristique nam non ac placerat nascetur a vel.
                        </p>
                      </div>
                      <div class="item">
                        <h3 class="fs-6 fw-bold text-uppercase mb-3">
                          Curabitur velit
                        </h3>
                        <div class="desc">Model’s height: 4’2.2”/184 cm</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="reviews"
                  role="tabpanel"
                  aria-labelledby="reviews-tab"
                >
                  <div class="row mt-4">
                    <div class="col-md-6">
                      <h3 class="fs-6 fw-bold text-uppercase mb-3">Reviews</h3>
                      <p class="text-muted">There are no reviews yet.</p>
                    </div>
                    <div class="col-md-6">
                      <h3 class="fs-6 fw-bold text-uppercase mb-3">
                        BE THE FIRST TO REVIEW “DARK MICE”
                      </h3>
                      <p class="text-muted">
                        Your email address will not be published. Required
                        fields are marked
                        <span class="required fw-bold">*</span>
                      </p>
                      <form action="#" method="post">
                        <div class="rating d-flex mb-3">
                          Your rating
                          <span class="required fw-bold">*</span>
                          :
                          <div class="stars ms-2">
                            <a href="#"><i class="fa-regular fa-star"></i></a>
                            <a href="#"><i class="fa-regular fa-star"></i></a>
                            <a href="#"><i class="fa-regular fa-star"></i></a>
                            <a href="#"><i class="fa-regular fa-star"></i></a>
                            <a href="#"><i class="fa-regular fa-star"></i></a>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="yourReview" class="form-label">
                            Your review
                            <span class="required fw-bold">*</span>
                          </label>
                          <textarea
                            class="form-control"
                            name="yourReview"
                            id="yourReview"
                            rows="7"
                            style="border-radius: 1rem"
                          ></textarea>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="firstName" class="form-label">
                                First Name
                                <span class="required fw-bold">*</span>
                              </label>
                              <input
                                type="text"
                                class="form-control rounded-pill"
                                id="firstName"
                              />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="mb-3">
                              <label for="lastName" class="form-label">
                                Last Name
                                <span class="required fw-bold">*</span>
                              </label>
                              <input
                                type="text"
                                class="form-control rounded-pill"
                                id="lastName"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="iAgreewith"
                          />
                          <label class="form-check-label" for="iAgreewith">
                            Save my name, email, and website in this browser for
                            the next time I comment.
                            <span class="required fw-bold">*</span>
                          </label>
                        </div>
                        <button
                          type="submit"
                          class="rw-btn px-4 rounded-pill text-uppercase"
                        >
                          Submit
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="shipping"
                  role="tabpanel"
                  aria-labelledby="shipping-tab"
                >
                  <div class="row mt-4">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-6">
                          <img
                            src="assets/images/wood-ship-1.jpg"
                            alt="description image"
                          />
                        </div>
                        <div class="col-6">
                          <img
                            src="assets/images/wood-ship-3.jpg"
                            alt="description image"
                          />
                        </div>
                        <div class="col-6"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="fs-6 fw-bold text-uppercase mb-3">
                        MAECENAS IACULIS
                      </h3>
                      <p>
                        Venenatis duis tristique accumsan netus enim in posuere
                        torquent ut ullamcorper integer aliquam a mi curae
                        elementum. Maecenas iaculis viverra tellus ridiculus a
                        sed vestibulum dapibus. Ante a mollis habitant duis urna
                        cum iaculis ullamcorper luctus.
                      </p>
                      <h3 class="fs-6 fw-bold text-uppercase mb-3">
                        ADIPISCING CONVALLIS BULUM
                      </h3>
                      <ul class="desc-bullets">
                        <li>65% Polyester, 23% Elastane</li>
                        <li>Abitur parturient praesent ipsu</li>
                        <li>Minceptos pri 187cm/3’1.3″ tall</li>
                        <li>Diam parturient dictumst nibh mu</li>
                      </ul>
                      <p>
                        Venenatis duis tristique accumsan netus enim in posuere
                        torquent ut ullamcorper integer aliquam a mi curae
                        elementum. Maecenas iaculis viverra tellus ridiculus a
                        sed vestibulum dapibus. Ante a mollis habitant duis urna
                        cum iaculis ullamcorper luctus.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Specific Type of Product / start -->
          <div class="specific-product mb-4 mt-5">
            <div class="container">
              <div class="specific-products-wrapper">
                <div class="sec-heading">
                  <h2 class="heading text-uppercase">
                    YOU MAY BE INTERESTED IN…
                  </h2>
                </div>
                <div class="products-wrapper">
                  <div class="carousel-controls ms-auto">
                    <button type="button" class="prev">
                      <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button type="button" class="next">
                      <i class="fa-solid fa-chevron-right"></i>
                    </button>
                  </div>
                  <ul class="products">
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-1-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-2-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-3-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-4-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-5-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-1-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-6-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="assets/images/retail-product-7-opt-330x340.jpg"
                                alt="Product"
                              />
                            </figure>
                          </a>
                          <div class="product-options">
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Add to Cart"
                            >
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Compare"
                            >
                              <i class="fa-solid fa-code-compare fa-lg"></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Favourite"
                            >
                              <i class="fa-regular fa-heart fa-lg"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-content">
                          <h6 class="product-name text-capitalize">
                            <a href="#" class="text-decoration-none">
                              Wooden Table
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">$155.00</span>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Body Content / end -->
      </main>
      <!-- Main Content / end -->



@endsection
