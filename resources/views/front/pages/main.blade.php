@extends('front.layout.app')
@section('mainContent')
    <section id="billboard">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <button class="prev slick-arrow">
                        <i class="icon icon-arrow-left"></i>
                    </button>

                    <div class="main-slider pattern-overlay">
                        <div class="slider-item">
                            <div class="banner-content">
                                <h2 class="banner-title">Life of the Wild</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
                                    feugiat amet, libero
                                    ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend.
                                    Amet, quis
                                    urna, a eu.</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div><!--banner-content-->
                            <div class="slider-img"><img src="{{ asset('project/images/main-banner1.jpg') }}" alt="banner"
                                    class="banner-image"></div>
                        </div><!--slider-item-->

                        <div class="slider-item">
                            <div class="banner-content">
                                <h2 class="banner-title">Birds gonna be Happy</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
                                    feugiat amet, libero
                                    ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend.
                                    Amet, quis
                                    urna, a eu.</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div><!--banner-content-->
                            <div class="slider-img"><img
                                    src="{{ asset('project/images/slider img/photo_2023-06-11_19-43-18.jpg') }}"
                                    alt="banner" class="banner-image"></div>
                        </div><!--slider-item-->
                        <div class="slider-item">
                            <div class="banner-content">
                                <h2 class="banner-title">Birds gonna be Happy</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
                                    feugiat amet, libero
                                    ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend.
                                    Amet, quis
                                    urna, a eu.</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div><!--banner-content-->
                            <div class="slider-img"><img src="{{ asset('project/images/slider img/Image 11.jpg') }}"
                                    alt="banner" class="banner-image"></div>
                        </div><!--slider-item-->
                        <div class="slider-item">
                            <div class="banner-content">
                                <h2 class="banner-title">Birds gonna be Happy</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu
                                    feugiat amet, libero
                                    ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend.
                                    Amet, quis
                                    urna, a eu.</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                            class="icon icon-ns-arrow-right"></i></a>
                                </div>
                            </div><!--banner-content-->
                            <div class="slider-img"><img src="{{ asset('project/images/main-banner2.jpg') }}" alt="banner"
                                    class="banner-image"></div>
                        </div><!--slider-item-->



                    </div><!--slider-->

                    <button class="next slick-arrow">
                        <i class="icon icon-arrow-right"></i>
                    </button>

                </div>
            </div>
        </div>

    </section>

    <section id="">
        <div class="section-header align-center">
            <div class="title">
                <span>Kitafs</span>
            </div>
            <h2 class="section-title">Featured Books</h2>
        </div>

        <div class="swiper-container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($product as $productItem)
                        @if ($productItem->language === 'en')
                            <div class="swiper-slide">
                                <img src="product_img/{{ $productItem->image }}">
                                <div class="database">
                                    <span>Language : {{ $productItem->language }}</span>
                                    <span>{{ $productItem->title }}</span>
                                    <span>{{ $productItem->description }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section id="client-holder" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="inner-content">
                    <div class="logo-wrap">
                        <div class="d-flex">
                            <a href="#"><img src="{{ asset('project/images/client-image1.png') }}" alt="client"></a>
                            <a href="#"><img src="{{ asset('project/images/client-image2.png') }}" alt="client"></a>
                            <a href="#"><img src="{{ asset('project/images/client-image3.png') }}"
                                    alt="client"></a>
                            <a href="#"><img src="{{ asset('project/images/client-image4.png') }}"
                                    alt="client"></a>
                            <a href="#"><img src="{{ asset('project/images/client-image5.png') }}"
                                    alt="client"></a>
                        </div>
                    </div><!--image-holder-->
                </div>
            </div>
        </div>
    </section>

    <section id="featured-books" class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Some quality items</span>
                        </div>
                        <h2 class="section-title">Featured Books</h2>
                    </div>

                    <div class="product-list" data-aos="fade-up">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="product-item ">
                                    <figure class="product-style">
                                        <img src="{{ asset('project/images/product-item1.jpg') }}" alt="Books"
                                            class="product-item">
                                        <div type="button" class="add-to-cart" data-product-tile="add-to-cart">
                                            <div class="droplisthover">
                                                <ul>
                                                    <li><a href="https://www.google.com/"><i
                                                                class="fa-regular fa-eye"></i></a></li>
                                                    <li><a href="https://www.google.com/"><i
                                                                class="fa-solid fa-heart"></i></a></li>
                                                </ul>
                                            </div>


                                            <!-- <div class="testdesign">hey</div> -->
                                            <div class="testdesign">
                                                <a href="./pages/contact.html"><i class="fa-solid fa-cart-plus"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <span>Armor Ramsey</span>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="{{ asset('project/images/product-item1.jpg') }}" alt="Books"
                                            class="product-item">
                                        <div type="button" class="add-to-cart" data-product-tile="add-to-cart">Add
                                            to
                                            Cart</div>
                                    </figure>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <span>Armor Ramsey</span>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="{{ asset('project/images/product-item1.jpg') }}" alt="Books"
                                            class="product-item">
                                        <div type="button" class="add-to-cart" data-product-tile="add-to-cart">Add
                                            to
                                            Cart</div>
                                    </figure>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <span>Armor Ramsey</span>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="{{ asset('project/images/product-item1.jpg') }}" alt="Books"
                                            class="product-item">
                                        <div type="button" class="add-to-cart" data-product-tile="add-to-cart">Add
                                            to
                                            Cart</div>
                                    </figure>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <span>Armor Ramsey</span>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </div>
                            </div>

                            <!-- <div class="col-md-3">

                            
                        </div><!--grid-->

                        </div><!--inner-content-->
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="btn-wrap align-right">
                                <a href="#" class="btn-accent-arrow">View all products <i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
    </section>
    <section id="">
        <div class="section-header align-center">
            <div class="title">
                <span>Kitafs</span>
            </div>
            <h2 class="section-title">Featured Books</h2>
        </div>

        <div class="swiper-container">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($product2 as $productItem2)
                        @if ($productItem2->language === 'tr')
                            <div class="swiper-slide">
                                <img src="product_img/{{ $productItem2->image }}">
                                <div class="database">
                                    <span>Language : {{ $productItem2->language }}</span>
                                    <span>{{ $productItem2->title }}</span>
                                    <span>{{ $productItem2->description }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section id="popular-books" class="bookshelf py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Some quality items</span>
                        </div>
                        <h2 class="section-title">Popular Books</h2>
                    </div>

                    <ul class="tabs">
                        <li data-tab-target="#all-genre" class="active tab">All Genre</li>
                        <li data-tab-target="#business" class="tab">Business</li>
                        <li data-tab-target="#technology" class="tab">Technology</li>
                        <li data-tab-target="#romantic" class="tab">Romantic</li>
                        <li data-tab-target="#adventure" class="tab">Adventure</li>
                        <li data-tab-target="#fictional" class="tab">Fictional</li>
                    </ul>

                    <div class="tab-content">
                        <div id="all-genre" data-tab-content class="active">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item1.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Portrait photography</h3>
                                            <span>Adam Silber</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item2.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Once upon a time</h3>
                                            <span>Klien Marry</span>
                                            <div class="item-price">$ 35.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item3.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Tips of simple lifestyle</h3>
                                            <span>Bratt Smith</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item4.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Just felt from outside</h3>
                                            <span>Nicole Wilson</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item5.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item6.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item7.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item8.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div id="business" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item2.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item4.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item6.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item8.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="technology" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item1.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item3.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item5.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item7.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="romantic" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item1.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item3.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item5.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item7.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="adventure" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item5.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item7.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="fictional" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item5.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="{{ asset('project/images/tab-item7.jpg') }}" alt="Books"
                                                class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!--inner-tabs-->

            </div>
        </div>
    </section>

    <section id="quotation" class="align-center pb-5 mb-5">
        <div class="inner-content">
            <h2 class="section-title divider">Quote of the day</h2>
            <blockquote data-aos="fade-up">
                <q>“The more that you read, the more things you will know. The more that
                    you learn, the more places
                    you’ll go.”</q>
                <div class="author-name">Dr. Seuss</div>
            </blockquote>
        </div>
    </section>

    <section id="download-app" class="leaf-pattern-overlay">
        <div class="corner-pattern-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-5">
                            <figure>
                                <img src="{{ asset('project/images/device.png') }}" alt="phone" class="single-image">
                            </figure>
                        </div>

                        <div class="col-md-7">
                            <div class="app-info">
                                <h2 class="section-title divider">Download our app now !</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis
                                    sed ptibus
                                    liberolectus nonet psryroin. Amet sed lorem posuere sit iaculis amet,
                                    ac urna.
                                    Adipiscing fames semper erat ac in suspendisse iaculis.</p>
                                <div class="google-app">
                                    <img src="{{ asset('project/images/google-play.jpg') }}" alt="google play">
                                    <img src="{{ asset('project/images/app-store.jpg') }}" alt="app store">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
