@extends('empty')
@section('content')


<div class="pd-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="slider" class="owl-carousel product-slider">
                    <div class="item">
                    <a> </a>
                        <img
                            src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                    </div>
                    <div class="item">
                        <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                    </div>
                    <div class="item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                    </div>
                    <div class="item">
                        <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                    </div>
                    <div class="item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                    </div>
                    <div class="item">
                        <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                    </div>
                    <div class="item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                    </div>
                </div>
                <div id="thumb" class="owl-carousel product-thumb">
                    <div class="item">
                        <img
                            src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                    </div>
                    <div class="item">
                        <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                    </div>
                    <div class="item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                    </div>
                    <div class="item">
                        <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                    </div>
                    <div class="item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                    </div>
                    <div class="item">
                        <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                    </div>
                    <div class="item">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="product-name">{{$product->productName }}</div>
                        <div class="reviews-counter">
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" checked />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" checked />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" checked />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                            <span>3 Reviews</span>
                        </div>
                        <div class="product-price-discount">
                            <span > {{$product->offer/100 * $product->price}}</span> <span class="line-through" >  {{$product->price }}</span>
                        </div>
                    </div>
                    <p>
                        {{$product->description}}
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="size">Size</label>
                            <select id="size" name="size" class="form-control">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="color">Color</label>
                            <select id="color" name="color" class="form-control">
                                <option>Blue</option>
                                <option>Green</option>
                                <option>Red</option>
                            </select>
                        </div>
                    </div>
                    <div class="product-count">
                        <label for="size">Quantity</label>
                        <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty" />
                            <div class="qtyplus">+</div>
                        </form>
                        <a href="{{url('#')}}" class="round-black-btn">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('recent')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
@endsection
