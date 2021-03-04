<!--                           <li>Trend</li>
    <li>Best Rated</li>-->
    <!--Trend Product Panel -->

    <div class="product_panel panel">
        <div class="featured_slider slider">

            @foreach ($trend as $row)
            <!-- Slider Item -->
                <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
                            <img src="{{ asset( $row->image_one )}}" alt="" style="height: 120px; width: 100px;"></div>
                        <div class="product_content">
                            <div class="product_price discount">

                                @if($row->discount_price == NULL)
                                   <div class="product_price discount">£{{ $row->selling_price }}<span> </div>
                                @else
                                   <div class="product_price discount">£{{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                @endif

                            </div>
                            <div class="product_name"><div><a href="product.html">{{ $row->product_name }}</a></div></div>
                            <div class="product_extras">
                                <div class="product_color">
                                    @php
                                    $colors = explode(",", $row->product_color);
                                    @endphp


                                    @foreach ($colors as $color)
                               <a href="#" style="color:{{ $color }};border:1px solid black;padding:1px; "><i class="fas fa-square "></i></a>

                                    @endforeach



                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
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
    <!--End Trend Product Panel -->
    <!--Best rated Product Panel -->

    <div class="product_panel panel">
        <div class="featured_slider slider">

            @foreach ($best as $row)
            <!-- Slider Item -->
                <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
                            <img src="{{ asset( $row->image_one )}}" alt="" style="height: 120px; width: 100px;"></div>
                        <div class="product_content">
                            <div class="product_price discount">

                                @if($row->discount_price == NULL)
                                   <div class="product_price discount">£{{ $row->selling_price }}<span> </div>
                                @else
                                   <div class="product_price discount">£{{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                @endif

                            </div>
                            <div class="product_name"><div><a href="product.html">{{ $row->product_name }}</a></div></div>
                            <div class="product_extras">
                                <div class="product_color">
                                    @php
                                    $colors = explode(",", $row->product_color);
                                    @endphp


                                    @foreach ($colors as $color)
                               <a href="#" style="color:{{ $color }};border:1px solid black;padding:1px; "><i class="fas fa-square "></i></a>

                                    @endforeach



                                </div>
                                <button class="product_cart_button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_fav"><i class="fas fa-heart"></i></div>
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
    <!--end Best rated Product Panel -->
