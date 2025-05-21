
@extends('layouts.app')
@section('content')
    <main>
        <div class="container mw-1620 bg-white border-radius-10">
            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
            <section class="category-banner container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="category-banner__item border-radius-10 mb-5">
                            <img loading="lazy" class="h-auto" src="{{ asset('assets/images/home/demo3/BannerCamisa.png') }}" width="690" height="665"
                                 alt="" />
                            <div class="category-banner__item-mark">
                                Starting at $19
                            </div>
                            <div class="category-banner__item-content">
                                <h3 class="mb-0">Camisas</h3>
                                <a href="http://127.0.0.1:8000/shop?_token=XwRcw3VIrwufcNGNKx9xs2SC00fGFf3NrQDXWpEB&page=1&size=12&order=-1&brands=&categories=2&min=1&max=500"
                                 class="btn-link default-underline text-uppercase fw-medium">{{__('messages.Shop Now')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-banner__item border-radius-10 mb-5">
                            <img loading="lazy" class="h-auto" src="{{ asset('assets/images/home/demo3/BannerCaneca.png') }}" width="690" height="665"
                                 alt="" />
                            <div class="category-banner__item-mark">
                                Starting at $19
                            </div>
                            <div class="category-banner__item-content">
                                <h3 class="mb-0">Canecas</h3>
                                <a href="http://127.0.0.1:8000/shop?_token=XwRcw3VIrwufcNGNKx9xs2SC00fGFf3NrQDXWpEB&page=1&size=12&order=-1&brands=&categories=1&min=1&max=500"
                                 class="btn-link default-underline text-uppercase fw-medium">{{__('messages.Shop Now')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!--<div class="mb-3 mb-xl-5 pt-1 pb-4"></div>-->
            <section class="hot-deals container">
                <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">{{__('messages.Hot Deals')}}</h2>
                <div class="row">
                    <div
                        class="col-md-6 col-lg-4 col-xl-20per d-flex align-items-center flex-column justify-content-center py-4 align-items-md-start">
                        <h2>Summer Sale</h2>
                        <h2 class="fw-bold">Up to 60% Off</h2>

                        <div class="position-relative d-flex align-items-center text-center pt-xxl-4 js-countdown mb-3"
                             data-date="18-3-2024" data-time="06:50">
                            <div class="day countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Days</span>
                            </div>

                            <div class="hour countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Hours</span>
                            </div>

                            <div class="min countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Mins</span>
                            </div>

                            <div class="sec countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Sec</span>
                            </div>
                        </div>

                        <a href="{{ route('shop.index') }}" class="btn-link default-underline text-uppercase fw-medium mt-3">{{__('messages.View All')}}</a>
                    </div>
                    <div class="col-md-6 col-lg-8 col-xl-80per">
                        <div class="position-relative">
                            <div class="swiper-container js-swiper-slider" data-settings='{
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": 4,
                      "slidesPerGroup": 4,
                      "effect": "none",
                      "loop": false,
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 2,
                          "slidesPerGroup": 2,
                          "spaceBetween": 14
                        },
                        "768": {
                          "slidesPerView": 2,
                          "slidesPerGroup": 3,
                          "spaceBetween": 24
                        },
                        "992": {
                          "slidesPerView": 3,
                          "slidesPerGroup": 1,
                          "spaceBetween": 30,
                          "pagination": false
                        },
                        "1200": {
                          "slidesPerView": 4,
                          "slidesPerGroup": 1,
                          "spaceBetween": 30,
                          "pagination": false
                        }
                      }
                    }'>
                                <div class="swiper-wrapper">
                                    @foreach($sproducts as $sproduct)
                                        <div class="swiper-slide product-card product-card_style3">
                                        <div class="pc__img-wrapper">
                                            <a href="{{ route('shop.product.details', ['product_slug' => $sproduct->slug]) }}">
                                                <img loading="lazy" src="{{ asset('uploads/products') }}/{{ $sproduct->image }}" width="258" height="313"
                                                     alt="{{ $sproduct->name }}" class="pc__img">
                                            </a>
                                        </div>

                                        <div class="pc__info position-relative">
                                            <h6 class="pc__title"><a href="{{ route('shop.product.details', ['product_slug' => $sproduct->slug]) }}">{{ $sproduct->name }}</a></h6>
                                            <div class="product-card__price d-flex">
                                                <span class="money price text-secondary">
                                                    @if($sproduct->sale_price)
                                                        <s>${{ $sproduct->regular_price }}</s> ${{ $sproduct->sale_price }}
                                                    @else
                                                        ${{ $sproduct->regular_price }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /.swiper-container js-swiper-slider -->
                        </div><!-- /.position-relative -->
                    </div>
                </div>
            </section>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>



            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="products-grid container">
                <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">{{__('messages.Featured Products')}}</h2>
                <div class="row">
                    @foreach($fproducts as $fproduct)
                        <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="{{ route('shop.product.details', ['product_slug' => $fproduct->slug]) }}">
                                    <img loading="lazy" src="{{ asset('uploads/products') }}/{{ $fproduct->image }}" width="330" height="400"
                                         alt="{{ $fproduct->name }}" class="pc__img">
                                </a>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title"><a href="{{ route('shop.product.details', ['product_slug' => $fproduct->slug]) }}">{{ $fproduct->name }}</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price text-secondary">
                                        @if($fproduct->sale_price)
                                            <s>${{ $fproduct->regular_price }}</s> ${{ $fproduct->sale_price }}
                                        @else
                                            ${{ $fproduct->regular_price }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- /.row -->

                <div class="text-center mt-2">
                    <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">{{__('messages.Load More')}}</a>
                </div>
            </section>
        </div>

        <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
    </main>
@endsection
