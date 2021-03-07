@extends('layouts.app')

@section('content')
@include('layouts.menubar')
  <!-- Characteristics -->


  <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_1.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_2.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_3.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_4.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Deals -->

                    <div class="deals">
                        <div class="deals_title">Deals of the Week</div>
                        <div class="deals_slider_container">

                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">

                                @foreach($hot as $ht)
                                <!-- Deals Item -->
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><a href="{{ url('product/details/'.$ht->id.'/'.$ht->product_name) }}">
                                        <img src="{{ asset( $ht->image_one )}}" alt=""></a></div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#">{{ $ht->brand_name }}</a></div>

                                    @if($ht->discount_price == NULL)
                                    @else
                                    <div class="deals_item_price_a ml-auto">${{ $ht->selling_price }}</div>
                                    @endif


                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name"><a href="{{ url('product/details/'.$ht->id.'/'.$ht->product_name) }}">
                                                 {{ $ht->product_name }}</a></div>

                                   @if($ht->discount_price == NULL)
                                   <div class="deals_item_price ml-auto">${{ $ht->selling_price }}</div>
                                    @else

                                     @endif

                                      @if($ht->discount_price != NULL)
                                   <div class="deals_item_price ml-auto">${{ $ht->discount_price }}</div>
                                    @else

                                     @endif



                                        </div>

                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Available: <span>{{ $ht->product_quantity  }}</span></div>
                                                <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                            </div>
                                            <div class="available_bar"><span style="width:17%"></span></div>
                                        </div>
                                        <!--
                                        <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                            <div class="deals_timer_title_container">
                                                <div class="deals_timer_title">Hurry Up</div>
                                                <div class="deals_timer_subtitle">Offer ends in:</div>
                                            </div>
                                            <div class="deals_timer_content ml-auto">
                                                <div class="deals_timer_box clearfix" data-target-time="">
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                        <span>hours</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                        <span>mins</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                        <span>secs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    -->
                                    </div>
                                </div>
                               @endforeach

                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                        </div>
                    </div>

                    <!-- Featured -->
<div class="featured">
    <div class="tabbed_container">
        <div class="tabs">
            <ul class="clearfix">
                <li class="active">Featured</li>

            </ul>
            <div class="tabs_line"><span></span></div>
        </div>

<!-- Featured  Product Panel -->
        <div class="product_panel panel active">
            <div class="featured_slider slider">
                @foreach ($featured as $row)
                    <!-- Slider Item -->
                    <div class="featured_slider_item">
                        <div class="border_active"></div>
                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{ asset( $row->image_one )}}" alt="" style="height: 120px; width: 100px;">
                                </div>
                                <div class="product_content">
                                    <div class="product_price discount">

                                        @if($row->discount_price == NULL)
                                            <div class="product_price discount">£{{ $row->selling_price }}<span> </div>
                                        @else
                                            <div class="product_price discount">£{{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                        @endif

                                    </div>
                                    <div class="product_name"><div><a href="product.html">{{ $row->product_name }}</a></div>
                                    </div>
                                    <div class="product_extras">
                                        <div class="product_color">
                                            @php
                                            $colors = explode(",", $row->product_color);
                                            @endphp


                                            @foreach ($colors as $color)
                                                <a href="#"  style="color:{{ $color }}; stroke: black;
                                                stroke-width: 10;"><i class='fas fa-circle '></i></a>
                                            @endforeach
                                        </div>
                                        <button class="product_cart_button addcart" data-id="{{ $row->id }}">Add to Cart

                                        </button>
                                    </div>
                                </div>


                                <a class="addwishlist" data-id="{{ $row->id }}" >
                                    <div class="product_fav"><i class="fas fa-heart"></i>
                                    </div>
                                </a>


                                <ul class="product_marks">
                                    @if($row->discount_price == NULL)
                                        <li class="product_mark product_discount" style="background: blue;">New</li>
                                    @else
                                        <li class="product_mark product_discount">
                                        @php
                                            $amount = $row->selling_price - $row->discount_price;
                                            $discount = $amount/$row->selling_price*100;

                                        @endphp
                                        <!-- get integer-->
                                        {{ intval($discount) }}%

                                        </li>
                                    @endif


                                </ul>
                            </div>
                    </div>
                @endforeach




            </div>
            <div class="featured_slider_dots_cover"></div>
        </div>
        <!-- end Featured  Product Panel -->

    </div>
</div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->
    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Popular Categories</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                        <div class="popular_categories_link"><a href="#">full catalog</a></div>
                    </div>
                </div>



            @php
            $category = DB::table('categories')->get();
            @endphp
                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">

                        @foreach($category as $cat)
                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">

                                    <div class="popular_category_text"><h3>{{ $cat->category_name  }}</h3></div>
                                </div>
                            </div>

                          @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url({{ asset('public/frontend/images/banner_2_background.jpg')}})"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                <!-- Banner 2 Slider Item -->

                @foreach($mid as $row)
                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category"><h4>{{ $row->category_name }}</h4></div>
                                            <div class="banner_2_title"><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                                                {{ $row->product_name }}</a></div>
                                            <div class="banner_2_text"><h4> {{ $row->brand_name }}</h4> <br>
                                                <h2>${{ $row->selling_price }} </h2>

                                            </div>
                                            <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a href="#">Explore</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                                                <img src="{{ asset( $row->image_one )}} " alt="" style="height: 300px; width: 250px;"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>

    <!--hot new Category one-->


    <div class="new_arrivals">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="tabbed_container">
                                <div class="tabs clearfix tabs-right">
                                    <div class="new_arrivals_title">{{ $cats1->category_name }}</div>
                                    <ul class="clearfix">
                                        <li class="active"> </li>

                                    </ul>
                                    <div class="tabs_line"><span></span></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="z-index:1;">

                                        <!-- Product Panel -->
                                        <div class="product_panel panel active">
                                            <div class="arrivals_slider slider">

                @foreach($product1 as $row)
            <!-- Slider Item -->
            <div class="featured_slider_item">

                <div class="border_active"></div>
                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                        <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}"><img src="{{ asset( $row->image_one )}}" alt=""
                         style="height: 120px; width: 100px;"></a></div>
                    <div class="product_content">

            @if($row->discount_price == NULL)
        <div class="product_price discount">${{ $row->selling_price }}<span> </div>
            @else
        <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
            @endif



                        <div class="product_name"><div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a></div></div>
                        <div class="product_extras">
                            <div class="product_color">
                                @php
                                $colors = explode(",", $row->product_color);
                                @endphp

                                        @foreach ($colors as $color)
                                <a href="#"  style="color:{{ $color }}; stroke: black;
                                stroke-width: 10;"><i class='fas fa-circle '></i></a>
                                @endforeach


                            </div>
                            <button class="product_cart_button addcart" data-id="{{ $row->id }}">Add to Cart

                            </button>
                        </div>
                        </div>


                    <a class="addwishlist" data-id="{{ $row->id }}" >
                    <div class="product_fav" ><i class="fas fa-heart  " ></i></div>
                    </a>


                    <ul class="product_marks">
            @if($row->discount_price == NULL)
            <li class="product_mark product_discount" style="background: blue;">New</li>
            @else
                            <li class="product_mark product_discount">
                            @php
                                $amount = $row->selling_price - $row->discount_price;
                                $discount = $amount/$row->selling_price*100;

                            @endphp

                            {{ intval($discount) }}%

                            </li>
            @endif



                    </ul>
                </div>
            </div>
            @endforeach

                                        </div>
                                        <div class="featured_slider_dots_cover"></div>
                                    </div>

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    </div>



<!--hot new Category two-->

<div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tabbed_container">
                            <div class="tabs clearfix tabs-right">
                                <div class="new_arrivals_title">{{ $cats->category_name }}</div>
                                <ul class="clearfix">
                                    <li class="active"> </li>

                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="z-index:1;">

                                    <!-- Product Panel -->
                                    <div class="product_panel panel active">
                                        <div class="arrivals_slider slider">

            @foreach($product as $row)
        <!-- Slider Item -->
        <div class="featured_slider_item">
            <div class="border_active"></div>
            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                    <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                        <img src="{{ asset( $row->image_one )}}" alt="" style="height: 120px; width: 100px;"></a></div>
                <div class="product_content">

        @if($row->discount_price == NULL)
    <div class="product_price discount">${{ $row->selling_price }}<span> </div>
        @else
    <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
        @endif



                    <div class="product_name"><div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a></div></div>
                    <div class="product_extras">
                        <div class="product_color">
                            @php
                                            $colors = explode(",", $row->product_color);
                                            @endphp


                                            @foreach ($colors as $color)
                                                <a href="#"  style="color:{{ $color }}; stroke: black;
                                                stroke-width: 10;"><i class='fas fa-circle '></i></a>
                                            @endforeach
                        </div>
                        <button class="product_cart_button addcart" data-id="{{ $row->id }}">Add to Cart

                        </button>
                    </div>
                </div>


                <a class="addwishlist" data-id="{{ $row->id }}" >
                <div class="product_fav"><i class="fas fa-heart"></i></div>
                </a>


                <ul class="product_marks">
        @if($row->discount_price == NULL)
        <li class="product_mark product_discount" style="background: blue;">New</li>
        @else
                        <li class="product_mark product_discount">
                        @php
                            $amount = $row->selling_price - $row->discount_price;
                            $discount = $amount/$row->selling_price*100;

                        @endphp

                        {{ intval($discount) }}%

                        </li>
        @endif



                </ul>
            </div>
        </div>
        @endforeach

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
</div>





    <!-- Buy one get one -->


    <!-- Trends -->

    <div class="trends">
        <div class="trends_background" style="background-image:url({{ asset('public/frontend/images/trends_background.jpg')}})"></div>
        <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

                        <!-- Trends Content -->
                        <div class="col-lg-3">
                            <div class="trends_container">
                                <h2 class="trends_title">Buy One Get One</h2>

                                <div class="trends_slider_nav">
                                    <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                    <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                                </div>
                            </div>
                        </div>



                        <!-- Trends Slider -->
            <div class="col-lg-9">
                <div class="trends_slider_container">

                                <!-- Trends Slider -->

                    <div class="owl-carousel owl-theme trends_slider">
                            @foreach($buyget as $row)
                                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                                                <div class="trends_image d-flex flex-column align-items-center justify-content-center">
                                                                    <a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                                                                    <img src="{{ asset( $row->image_one )}}" alt="" ></a></div>
                                                                <div class="trends_content">
                                                    <div class="trends_category"><a href="#">{{ $row->brand_name }}</a></div>
                                                                    <div class="trends_info clearfix">
                                                    <div class="trends_name"><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                                                        {{ $row->product_name }}</a></div>


                                            @if($row->discount_price == NULL)
                                            <div class="product_price discount">${{ $row->selling_price }}<span> </div>
                                                @else
                                            <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                                @endif

                                                <a  class="btn btn-danger text-white addcart btn-sm" data-id="{{ $row->id }}">Add to Cart</a>
                                                                    </div>
                                                                </div>
                                                                <ul class="trends_marks">

                                                                    <li class="trends_mark trends_new">BuyGet</li>
                                                                </ul>
                                                                <a class="addwishlist" data-id="{{ $row->id }}" >
                                                                <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                                                </a>

                                    </div>
                                </div>

                            @endforeach


                        </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <!-- Reviews -->


    <!-- Recently Viewed -->


    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">
                              @foreach ($brand as $brands)
                              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center">
                                  <img src="{{ asset($brands->brand_logo)}}" alt="" style="width: 130px;"></div></div>
                              @endforeach


                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

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
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="{{ asset('public/frontend/images/send.png')}}" alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="{{route('store.newslater')}}" method="post" class="newsletter_form">
                            @csrf
                                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address" name='email'>
                                <button class="newsletter_button" type="submit">Subscribe</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="">unsubscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script type="text/javascript">
        function productview(id){
            $.ajax({
             url: "{{ url('/cart/product/view/') }}/"+id,
             type: "GET",
             dataType:"json",
             success:function(data){
           $('#pcode').text(data.product.product_code);
           $('#pcat').text(data.product.category_name);
           $('#psub').text(data.product.subcategory_name);
           $('#pbrand').text(data.product.brand_name);
           $('#pname').text(data.product.product_name);
           $('#pimage').attr('src',data.product.image_one);
           $('#product_id').val(data.product.id);

           var d = $('select[name="color"]').empty();
           $.each(data.color,function(key,value){
           $('select[name="color"]').append('<option value="'+value+'">'+value+'</option>');
            });

              var d = $('select[name="size"]').empty();
           $.each(data.size,function(key,value){
           $('select[name="size"]').append('<option value="'+value+'">'+value+'</option>');
            });


             }
            })
        }


    </script>



    <script type="text/javascript">

       $(document).ready(function(){
         $('.addcart').on('click', function(){
            var id = $(this).data('id');
            if (id) {
                $.ajax({
                    url: " {{ url('/add/to/cart/') }}/"+id,
                    type:"GET",
                    datType:"json",
                    success:function(data){
                 const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      onOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })

                 if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                      icon: 'success',
                      title: data.success
                    })
                 }else{
                     Toast.fire({
                      icon: 'error',
                      title: data.error
                    })
                 }


                    },
                });

            }else{
                alert('danger');
            }
         });

       });


    </script>












    <script type="text/javascript">

        $(document).ready(function(){
          $('.addwishlist').on('click', function(){
             var id = $(this).data('id');
             if (id) {
                 $.ajax({
                     url: " {{ url('add/wishlist/') }}/"+id,
                     type:"GET",
                     datType:"json",
                     success:function(data){
                  const Toast = Swal.mixin({
                       toast: true,
                       position: 'top-end',
                       showConfirmButton: false,
                       timer: 3000,
                       timerProgressBar: true,
                       onOpen: (toast) => {
                         toast.addEventListener('mouseenter', Swal.stopTimer)

                       }
                     })

                  if ($.isEmptyObject(data.error)) {

                     Toast.fire({
                       icon: 'success',
                       title: data.success
                     })
                  }else{
                      Toast.fire({
                       icon: 'error',
                       title: data.error,

                     })

                  }


                     },
                 });

             }else{
                 alert('danger');
             }
          });

        });


     </script>

@endsection
