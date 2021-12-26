@extends('frontend.layouts.app')
@section('content')
<main class="rw-content-section">
    <!-- Hero Slider / start --> 
    @if (get_setting('home_slider_images') != null)
    <section id="hero-section">
      <ul class="hero-carousel"> 
        @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
        @foreach ($slider_images as $key => $value)
        <li class="hero-carousel-cell">
          <div class="hero-carousel-img">
            <img src="{{ uploaded_asset($slider_images[$key]) }}" alt="Hero Slide" />
          </div>
          
        </li> 
        @endforeach
      </ul>
      <div class="carousel-controls">
        <button type="button" class="prev">
          <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button type="button" class="next">
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>
    </section> 
    @endif
    <!-- Body Content / start -->
    <section class="rw-body-content">
        <!-- Favourite Product / start -->
        <div class="favourite-product">
          <div class="container"> 
            <div class="row mt-4 mb-5">
              <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
                <div class="details-wrapper">
                  <div class="index">1.</div>
                  <div class="content">
                    <h3 class="heading text-capitalize">Home Delivery.</h3>
                    <span class="text">The European languages.</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
                <div class="details-wrapper">
                  <div class="index">2.</div>
                  <div class="content">
                    <h3 class="heading text-capitalize">Order As a Gift.</h3>
                    <span class="text">Donec odio etiam sceles.</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <div class="details-wrapper">
                  <div class="index">3.</div>
                  <div class="content">
                    <h3 class="heading text-capitalize">High Quality.</h3>
                    <span class="text">Curabitur hac hac maece.</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <div class="details-wrapper">
                  <div class="index">4.</div>
                  <div class="content">
                    <h3 class="heading text-capitalize">Buy With Joy.</h3>
                    <span class="text">Ullamcorper magna nec.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      <!-- Specific Type of Product / start -->
      <div class="specific-product mb-4">
        <div class="container">
          <div class="specific-products-wrapper">
            <div class="sec-heading">
              <h2 class="heading text-uppercase">FEATURED PRODUCTS</h2>
              <div class="carousel-controls manageControls1 ms-auto">
                <button type="button" class="prev">
                  <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="next">
                  <i class="fa-solid fa-chevron-right"></i>
                </button>
              </div>
            </div>
            <div class="products-wrapper">
              
                  <ul class="products products1">
                    @foreach ($featured_products as $item)
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="{{ route('product', $item->slug) }}" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="{{ uploaded_asset($item->thumbnail_img) }}"
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
                              <i
                                class="fa-solid fa-cart-shopping fa-lg"
                              ></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i
                                class="fa-solid fa-magnifying-glass fa-lg"
                              ></i>
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
                            <a href="{{ route('product', $item->slug) }}" class="text-decoration-none">
                              {{  $item->getTranslation('name')  }}
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
                        </div>
                      </div>
                    </li>
                    @endforeach
                    
                  </ul> 
               
            </div>
          </div>
        </div>
      </div>


          <!-- Retails Categories / start -->
          <div class="retial-categories">
            <div class="container">
              <div class="sec-heading">
                <h2 class="heading text-uppercase">Top Categories</h2>
              </div>
    
              <div class="categories-carousel">
                <ul class="categories">
                  @foreach ($featured_categories as $item)
                  <li class="category-item ">
                    <a href="{{ route('products.category', $item->slug) }}" class="category-link">
                      <div class="category-img">
                        <img
                          src="{{ uploaded_asset($item->banner) }}"
                          alt="Lighting"
                          class="img-fluid"
                        />
                      </div>
                      <div class="category-content">
                        <h3 class="category-heading">{{ $item->getTranslation('name') }}</h3>
                        <span class="category-pd-count">16 products</span>
                      </div>
                    </a>
                  </li>   
                  @endforeach 
                </ul>
                <div class="carousel-controls">
                  <button type="button" class="prev">
                    <i class="fa-solid fa-chevron-left"></i>
                  </button>
                  <button type="button" class="next">
                    <i class="fa-solid fa-chevron-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>  


      <div class="specific-product mb-4">
        <div class="container">
          <div class="specific-products-wrapper">
            <div class="sec-heading">
              <h2 class="heading text-uppercase">FEATURED PRODUCTS</h2>
              <div class="carousel-controls manageControls2 ms-auto">
                <button type="button" class="prev">
                  <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="next">
                  <i class="fa-solid fa-chevron-right"></i>
                </button>
              </div>
            </div>
            <div class="products-wrapper">
              
                  <ul class="products products2">
                    @foreach ($featured_products as $item)
                    <li class="product">
                      <div class="product-inner">
                        <div class="product-thumbnail">
                          <a href="#" class="text-decoration-none d-block">
                            <figure class="product-img">
                              <img
                                src="{{ uploaded_asset($item->thumbnail_img) }}"
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
                              <i
                                class="fa-solid fa-cart-shopping fa-lg"
                              ></i>
                            </a>
                            <a
                              href="#"
                              class="text-decoration-none"
                              title="Search"
                            >
                              <i
                                class="fa-solid fa-magnifying-glass fa-lg"
                              ></i>
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
                            <a href="{{ route('product', $item->slug) }}" class="text-decoration-none">
                              {{  $item->getTranslation('name')  }}
                            </a>
                          </h6>
                          <div class="tags">
                            <a href="#" class="tag text-decoration-none"
                              >Retail</a
                            >
                          </div>
                          <div class="price">
                            <span class="price-text">${{ $item->unit_price  }}</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                    
                  </ul> 
               
            </div>
          </div>
        </div>
      </div>


       
      

    

    

  


     

     

      <!-- Blog Posts /start -->
      <div class="blog-posts">
        <div class="container">
          <div class="sec-heading">
            <h2 class="heading text-uppercase">Our Blogs</h2>
          </div>

          <div class="carousel-wrapper">
            <ul class="blogs">
              <li class="blog-item">
                <article class="post-article">
                  <div class="blog-thumbnail">
                    <div class="article-overlay">
                      <span class="dot"></span>
                    </div>
                    <figure class="article-img">
                      <img
                        src="assets/images/retail-blog-img-1-opt.jpg"
                        alt="Blog Image"
                        class="img-fluid"
                      />
                    </figure>
                    <div class="publication-date">
                      <span class="day">15</span>
                      <span class="month text-uppercase">Dec</span>
                    </div>
                    <div class="post-tags">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Design Trends</a
                      >
                      ,
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Plants</a
                      >
                    </div>
                  </div>
                  <div class="blog-content">
                    <h3>
                      <a
                        href="#"
                        class="blog-heading line-clamp line-clamp-2"
                      >
                        Furniture that explores wood as a material
                      </a>
                    </h3>
                    <div class="info">
                      <div class="author">
                        <span class="text">Posted by</span>
                        <img
                          src="assets/images/avatar-home.jpg"
                          alt="Author avatar"
                          class="img-fluid"
                        />
                        <a href="#" class="text author-name">S. Rogers</a>
                      </div>
                      <a
                        href="#"
                        class="message d-inline-block position-relative"
                      >
                        <i class="fa-regular fa-message"></i>
                        <span
                          class="position-absolute top-0 start-100 translate-middle badge rounded-pill"
                        >
                          <div class="message-count">0</div>
                          <span class="visually-hidden"
                            >unread messages</span
                          >
                        </span>
                      </a>
                      <div class="share-btn">
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
                        <a href="#">
                          <i class="fa-solid fa-share-nodes"></i>
                        </a>
                      </div>
                    </div>
                    <p class="content line-clamp line-clamp-3">
                      Consectetur adipisicing elit. Nihil illum molestiae
                      inventore, saepe consequuntur aliquid quis, a sed
                      commodi error exercitationem id ut adipisci animi?
                    </p>
                    <div class="read-more">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase text-green fw-bold"
                        >Continure Reading</a
                      >
                    </div>
                  </div>
                </article>
              </li>
              <li class="blog-item">
                <article class="post-article">
                  <div class="blog-thumbnail">
                    <div class="article-overlay">
                      <span class="dot"></span>
                    </div>
                    <figure class="article-img">
                      <img
                        src="assets/images/retail-blog-img-2-opt.jpg"
                        alt="Blog Image"
                        class="img-fluid"
                      />
                    </figure>
                    <div class="publication-date">
                      <span class="day">15</span>
                      <span class="month text-uppercase">Dec</span>
                    </div>
                    <div class="post-tags">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Design Trends</a
                      >
                      ,
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Plants</a
                      >
                    </div>
                  </div>
                  <div class="blog-content">
                    <h3>
                      <a
                        href="#"
                        class="blog-heading line-clamp line-clamp-2"
                      >
                        Furniture that explores wood as a material
                      </a>
                    </h3>
                    <div class="info">
                      <div class="author">
                        <span class="text">Posted by</span>
                        <img
                          src="assets/images/avatar-home.jpg"
                          alt="Author avatar"
                          class="img-fluid"
                        />
                        <a href="#" class="text author-name">S. Rogers</a>
                      </div>
                      <a
                        href="#"
                        class="message d-inline-block position-relative"
                      >
                        <i class="fa-regular fa-message"></i>
                        <span
                          class="position-absolute top-0 start-100 translate-middle badge rounded-pill"
                        >
                          <div class="message-count">0</div>
                          <span class="visually-hidden"
                            >unread messages</span
                          >
                        </span>
                      </a>
                      <div class="share-btn">
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
                        <a href="#">
                          <i class="fa-solid fa-share-nodes"></i>
                        </a>
                      </div>
                    </div>
                    <p class="content line-clamp line-clamp-3">
                      Consectetur adipisicing elit. Nihil illum molestiae
                      inventore, saepe consequuntur aliquid quis, a sed
                      commodi error exercitationem id ut adipisci animi?
                    </p>
                    <div class="read-more">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase text-green fw-bold"
                        >Continure Reading</a
                      >
                    </div>
                  </div>
                </article>
              </li>
              <li class="blog-item">
                <article class="post-article">
                  <div class="blog-thumbnail">
                    <div class="article-overlay">
                      <span class="dot"></span>
                    </div>
                    <figure class="article-img">
                      <img
                        src="assets/images/retail-blog-img-3-opt.jpg"
                        alt="Blog Image"
                        class="img-fluid"
                      />
                    </figure>
                    <div class="publication-date">
                      <span class="day">15</span>
                      <span class="month text-uppercase">Dec</span>
                    </div>
                    <div class="post-tags">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Design Trends</a
                      >
                      ,
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Plants</a
                      >
                    </div>
                  </div>
                  <div class="blog-content">
                    <h3>
                      <a
                        href="#"
                        class="blog-heading line-clamp line-clamp-2"
                      >
                        Furniture that explores wood as a material
                      </a>
                    </h3>
                    <div class="info">
                      <div class="author">
                        <span class="text">Posted by</span>
                        <img
                          src="assets/images/avatar-home.jpg"
                          alt="Author avatar"
                          class="img-fluid"
                        />
                        <a href="#" class="text author-name">S. Rogers</a>
                      </div>
                      <a
                        href="#"
                        class="message d-inline-block position-relative"
                      >
                        <i class="fa-regular fa-message"></i>
                        <span
                          class="position-absolute top-0 start-100 translate-middle badge rounded-pill"
                        >
                          <div class="message-count">0</div>
                          <span class="visually-hidden"
                            >unread messages</span
                          >
                        </span>
                      </a>
                      <div class="share-btn">
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
                        <a href="#">
                          <i class="fa-solid fa-share-nodes"></i>
                        </a>
                      </div>
                    </div>
                    <p class="content line-clamp line-clamp-3">
                      Consectetur adipisicing elit. Nihil illum molestiae
                      inventore, saepe consequuntur aliquid quis, a sed
                      commodi error exercitationem id ut adipisci animi?
                    </p>
                    <div class="read-more">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase text-green fw-bold"
                        >Continure Reading</a
                      >
                    </div>
                  </div>
                </article>
              </li>
              <li class="blog-item">
                <article class="post-article">
                  <div class="blog-thumbnail">
                    <div class="article-overlay">
                      <span class="dot"></span>
                    </div>
                    <figure class="article-img">
                      <img
                        src="assets/images/retail-blog-img-4-opt.jpg"
                        alt="Blog Image"
                        class="img-fluid"
                      />
                    </figure>
                    <div class="publication-date">
                      <span class="day">15</span>
                      <span class="month text-uppercase">Dec</span>
                    </div>
                    <div class="post-tags">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Design Trends</a
                      >
                      ,
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase"
                        >Plants</a
                      >
                    </div>
                  </div>
                  <div class="blog-content">
                    <h3>
                      <a
                        href="#"
                        class="blog-heading line-clamp line-clamp-2"
                      >
                        Furniture that explores wood as a material
                      </a>
                    </h3>
                    <div class="info">
                      <div class="author">
                        <span class="text">Posted by</span>
                        <img
                          src="assets/images/avatar-home.jpg"
                          alt="Author avatar"
                          class="img-fluid"
                        />
                        <a href="#" class="text author-name">S. Rogers</a>
                      </div>
                      <a
                        href="#"
                        class="message d-inline-block position-relative"
                      >
                        <i class="fa-regular fa-message"></i>
                        <span
                          class="position-absolute top-0 start-100 translate-middle badge rounded-pill"
                        >
                          <div class="message-count">0</div>
                          <span class="visually-hidden"
                            >unread messages</span
                          >
                        </span>
                      </a>
                      <div class="share-btn">
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
                        <a href="#">
                          <i class="fa-solid fa-share-nodes"></i>
                        </a>
                      </div>
                    </div>
                    <p class="content line-clamp line-clamp-3">
                      Consectetur adipisicing elit. Nihil illum molestiae
                      inventore, saepe consequuntur aliquid quis, a sed
                      commodi error exercitationem id ut adipisci animi?
                    </p>
                    <div class="read-more">
                      <a
                        href="#"
                        class="text-decoration-none text-uppercase text-green fw-bold"
                        >Continure Reading</a
                      >
                    </div>
                  </div>
                </article>
              </li>
            </ul>
            <div class="carousel-controls">
              <button type="button" class="prev">
                <i class="fa-solid fa-chevron-left"></i>
              </button>
              <button type="button" class="next">
                <i class="fa-solid fa-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Body Content / end -->
  </main>
@endsection