@extends('layouts.main')

@section('title', 'Product')

@section('style_product')
    <link rel="stylesheet" type="text/css" href="/styles/product.css">
    <link rel="stylesheet" type="text/css" href="/styles/product_responsive.css">
@endsection

@section('script_product')
    <script src="js/product.js"></script>
@endsection

@section('content')

    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(/images/categories.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Smart Phones<span>.</span></div>
                                <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">
                <!-- Product Image -->
                <div class="col-lg-6">
                    @php
                        $img = '';
                        if(count($item->images) > 0){
                            $img = $item->images[0]['img'];
                        }
                        else{
                            $img = 'no_image.png';
                        }
                    @endphp
                    <div class="details_image">
                            <div class="details_image_large"><img src="/images/{{$img}}" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
                            <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                                @if($img == 'no_image.png')
                                    <div class="details_image_thumbnail active" data-image="images/{{$img}}"><img src="/images/{{$img}}" alt=""></div>
                                @else
                                    @foreach($item->images as $images)
                                        @if($loop->first)
                                            <div class="details_image_thumbnail active" data-image="images/{{$images['img']}}"><img src="/images/{{$images['img']}}" alt=""></div>
                                        @else
                                            <div class="details_image_thumbnail" data-image="images/{{$images['img']}}"><img src="/images/{{$images['img']}}" alt=""></div>
                                        @endif
                                    @endforeach
                                @endif

                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">Smart Phone</div>
                            @if($item->new_price)
                                <div class="details_price">${{$item->new_price}}</div>
                                <div class="details_discount">${{$item->price}}</div>
                            @else
                                <div class="details_price">${{$item->price}}</div>
                            @endif
                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>
                            @if($item->is_stocke)
                                <span>In Stock</span>
                            @else
                                <span style="color: red">None</span>
                            @endif
                        </div>
                        <div class="details_text">
                            <p>{{$item->description}}</p>
                        </div>

                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Qty</span>
                                <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="button cart_button"><a href="#">Add to cart</a></div>
                        </div>

                        <!-- Share -->
                        <div class="details_share">
                            <span>Share:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Description</div>
                        <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
                    </div>
                    <div class="description_text">
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="products_title">Related Products</div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="/images/product_1.jpg" alt=""></div>
                            <div class="product_extra product_new"><a href="categories.html">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="/images/product_2.jpg" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$520</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="/images/product_3.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$710</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="/images/product_4.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$330</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                        <div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required">
                                <button class="newsletter_button trans_200"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



