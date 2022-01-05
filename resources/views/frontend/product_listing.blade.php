@extends('frontend.layouts.app')
@section('content')

      <!-- Main Content / start -->
      <main class="rw-archive-section" style="background-color: rgb(240, 240, 240); padding-bottom:40px;">
        <form class="" id="search-form" action="" method="GET">
        <!-- Body Content / start -->
        <section class="rw-body-content pt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                  <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                  <div class="collapse-sidebar c-scrollbar-light text-left">
                      <div class="d-flex d-xl-none justify-content-between align-items-center pl-3 border-bottom">
                          <h3 class="h6 mb-0 fw-600">{{ translate('Filters') }}</h3>
                          <button type="button" class="btn btn-sm p-2 filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" >
                              <i class="las la-times la-2x"></i>
                          </button>
                      </div>
                      <div class="bg-white shadow-sm rounded mb-3">
                          <div class="fs-15 fw-600 p-3 border-bottom">
                              {{ translate('Categories')}}
                          </div>
                          <div class="p-3">
                              <ul class="list-unstyled">
                                  @if (!isset($category_id))
                                      @foreach (\App\Models\Category::where('level', 0)->get() as $category)
                                          <li class="mb-2 ml-2">
                                              <a class="text-reset fs-14" href="{{ route('products.category', $category->slug) }}">{{ $category->getTranslation('name') }}</a>
                                          </li>
                                      @endforeach
                                  @else
                                      <li class="mb-2">
                                          <a class="text-reset fs-14 fw-600" href="{{ route('search') }}">
                                              <i class="las la-angle-left"></i>
                                              {{ translate('All Categories')}}
                                          </a>
                                      </li>
                                      @if (\App\Models\Category::find($category_id)->parent_id != 0)
                                          <li class="mb-2">
                                              <a class="text-reset fs-14 fw-600" href="{{ route('products.category', \App\Models\Category::find(\App\Models\Category::find($category_id)->parent_id)->slug) }}">
                                                  <i class="las la-angle-left"></i>
                                                  {{ \App\Models\Category::find(\App\Models\Category::find($category_id)->parent_id)->getTranslation('name') }}
                                              </a>
                                          </li>
                                      @endif
                                      <li class="mb-2">
                                          <a class="text-reset fs-14 fw-600" href="{{ route('products.category', \App\Models\Category::find($category_id)->slug) }}">
                                              <i class="las la-angle-left"></i>
                                              {{ \App\Models\Category::find($category_id)->getTranslation('name') }}
                                          </a>
                                      </li>
                                      @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category_id) as $key => $id)
                                          <li class="ml-4 mb-2">
                                              <a class="text-reset fs-14" href="{{ route('products.category', \App\Models\Category::find($id)->slug) }}">{{ \App\Models\Category::find($id)->getTranslation('name') }}</a>
                                          </li>
                                      @endforeach
                                  @endif
                              </ul>
                          </div>
                      </div>
                      <div class="bg-white shadow-sm rounded mb-3">
                          <div class="fs-15 fw-600 p-3 border-bottom">
                              {{ translate('Price range')}}
                          </div>
                          <div class="p-3">
                              <div class="aiz-range-slider">
                                  <div
                                      id="input-slider-range"
                                      data-range-value-min="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::min('unit_price') }} @endif"
                                      data-range-value-max="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::max('unit_price') }} @endif"
                                  ></div>

                                  <div class="row mt-2">
                                      <div class="col-6">
                                          <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                              @if (isset($min_price))
                                                  data-range-value-low="{{ $min_price }}"
                                              @elseif($products->min('unit_price') > 0)
                                                  data-range-value-low="{{ $products->min('unit_price') }}"
                                              @else
                                                  data-range-value-low="0"
                                              @endif
                                              id="input-slider-range-value-low"
                                          ></span>
                                      </div>
                                      <div class="col-6 text-right">
                                          <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                              @if (isset($max_price))
                                                  data-range-value-high="{{ $max_price }}"
                                              @elseif($products->max('unit_price') > 0)
                                                  data-range-value-high="{{ $products->max('unit_price') }}"
                                              @else
                                                  data-range-value-high="0"
                                              @endif
                                              id="input-slider-range-value-high"
                                          ></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      @foreach ($attributes as $attribute)
                          <div class="bg-white shadow-sm rounded mb-3">
                              <div class="fs-15 fw-600 p-3 border-bottom">
                                  {{ translate('Filter by') }} {{ $attribute->getTranslation('name') }}
                              </div>
                              <div class="p-3">
                                  <div class="aiz-checkbox-list">
                                      @foreach ($attribute->attribute_values as $attribute_value)
                                          <label class="aiz-checkbox">
                                              <input
                                                  type="checkbox"
                                                  name="selected_attribute_values[]"
                                                  value="{{ $attribute_value->value }}" @if (in_array($attribute_value->value, $selected_attribute_values)) checked @endif
                                                  onchange="filter()"
                                              >
                                              <span class="aiz-square-check"></span>
                                              <span>{{ $attribute_value->value }}</span>
                                          </label>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      @endforeach

                      @if (get_setting('color_filter_activation'))
                          <div class="bg-white shadow-sm rounded mb-3">
                              <div class="fs-15 fw-600 p-3 border-bottom">
                                  {{ translate('Filter by color')}}
                              </div>
                              <div class="p-3">
                                  <div class="aiz-radio-inline">
                                      @foreach ($colors as $key => $color)
                                      <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="{{ $color->name }}">
                                          <input
                                              type="radio"
                                              name="color"
                                              value="{{ $color->code }}"
                                              onchange="filter()"
                                              @if(isset($selected_color) && $selected_color == $color->code) checked @endif
                                          >
                                          <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                              <span class="size-30px d-inline-block rounded" style="background: {{ $color->code }};"></span>
                                          </span>
                                      </label>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      @endif

                      {{-- <button type="submit" class="btn btn-styled btn-block btn-base-4">Apply filter</button> --}}
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
                  <div class="sorting">
                    <div class="row">
                      <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                        @if (Route::currentRouteName() != 'products.brand')
                            <label class="mb-0 opacity-50">{{ translate('Brands')}}</label>
                            <select class="form-control" data-live-search="true" name="brand" onchange="filter()">
                                <option value="">{{ translate('All Brands')}}</option>
                                @foreach (\App\Models\Brand::all() as $brand)
                                    <option value="{{ $brand->slug }}" @isset($brand_id) @if ($brand_id == $brand->id) selected @endif @endisset>{{ $brand->getTranslation('name') }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                    <div class="col-6 col-lg-auto mb-3 w-lg-200px">
                        <label class="mb-0 opacity-50">{{ translate('Sort by')}}</label>
                        <select class="form-control" name="sort_by" onchange="filter()">
                            <option value="newest" @isset($sort_by) @if ($sort_by == 'newest') selected @endif @endisset>{{ translate('Newest')}}</option>
                            <option value="oldest" @isset($sort_by) @if ($sort_by == 'oldest') selected @endif @endisset>{{ translate('Oldest')}}</option>
                            <option value="price-asc" @isset($sort_by) @if ($sort_by == 'price-asc') selected @endif @endisset>{{ translate('Price low to high')}}</option>
                            <option value="price-desc" @isset($sort_by) @if ($sort_by == 'price-desc') selected @endif @endisset>{{ translate('Price high to low')}}</option>
                        </select>
                    </div>
                    </div>
                  </div>
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
                <div class="products-wrapper py-2 mt-4" style="background-color: #fff; padding-bottom:10px;">
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
                          </div>
                          <div class="price">
                            <span class="price-text">{{ home_discounted_base_price($product) }}</span>
                            <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
                          </div>
                          <div class="fadein-content">
                            <div class="product-option-icons">
                              <a href="javascript:void(0)" onclick="addToWishList({{ $product->id }})" class="text-decoration-none">
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
            </form>
      </main>
      <!-- Main Content / end -->

@endsection

 