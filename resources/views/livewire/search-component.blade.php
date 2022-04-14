<main id="main" class="main-site left-sidebar">

    <!-- CONTAINER-->

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Electronics</span></li>
            </ul>
        </div>

        <!-- ROW-->

        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <!-- SHOP CONTROL-->

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Electronics</h1>

                    <div class="wrap-right">

                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen" wire:model = "sorting">
                                <option value="default" selected="selected">Default sorting</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>

                        <div class="change-display-mode">
                            <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                            <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div>

                </div>
                
                <!-- CLOSE SHOP CONTROL-->

                @if($products->count() > 0)
                <div class="row">

                    <!-- FOREACH PRODUCT-->

                    <ul class="product-list grid-products equal-container">
                        @foreach ($products as $product)

                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ route('product.details', ['slug' => $product->slug])}}" title="{{ $product->name }}">
                                        <figure><img src="{{ asset('assets/images/products/') }}/{{ $product->image }}" alt="{{ $product->name }}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('product.details', ['slug' => $product->slug])}}" class="product-name"><span>{{ $product->name }}</span></a>
                                    <div class="wrap-price"><span class="product-price">€{{ $product->regular_price }}</span></div>
                                    <a href="#" class="btn add-to-cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Add To Cart</a>
                                </div>
                            </div>
                        </li>

                        @endforeach
                    </ul>

                </div>

                @else
                    <p style = "padding-top = 30px;">No Products</p>
                @endif
                <!-- CLOSE FOREACH PRODUCTS-->

                <div class="wrap-pagination-info">
                    {{ $products->links()}}
                </div>
            </div>
            
            <!-- CLOSE MAIN AREA-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">

                <!-- ALL CATEGORIES AREA-->

                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            @foreach ($categories as $category)

                            <li class="category-item">
                                <a href="{{ route('product.category', ['category_slug' => $category->slug]) }}" class = "cate-link">{{ $category->name}}</a>
                            </li>
                            
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <!-- CLOSE CATEGORIES AREA-->

                <!-- BRAND AREA-->

                <div class="widget mercado-widget filter-widget brand-widget">
                    <h2 class="widget-title">Brand</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list list-limited" data-show="6">
                            <li class="list-item"><a class="filter-link active" href="#">Samsung</a></li>
                            <li class="list-item"><a class="filter-link " href="#">LG</a></li>
                            <li class="list-item"><a class="filter-link " href="#">OPPO</a></li>
                            <li class="list-item"><a class="filter-link " href="#">SONY</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Xiaomi</a></li>
                            <li class="list-item"><a class="filter-link " href="#">Apple</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- -CLOSE BRAND-->

                <!-- PRICE AREA-->

                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Price</h2>
                    <div class="widget-content">
                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Price:</label>
                            <input type="text" id="amount" readonly>
                            <button class="filter-submit">Filter</button>
                        </p>
                    </div>
                </div>

                <!-- CLOSE PRICE AREA-->

                <!-- POPULAR PRODUCTS AREA-->

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>
                    <div class="widget-content">
                        <ul class="products">
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{ asset('assets/images/products/digital_01.jpg') }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>

                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{ asset('assets/images/products/digital_17.jpg') }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>

                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{ asset('assets/images/products/digital_18.jpg') }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>

                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="{{ asset('assets/images/products/digital_20.jpg') }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                        <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <!-- CLOSE POPULAR PRODUCTS AREA-->

                </div>
                
                <!-- CLOSE BRAND AREA-->
            
            </div>
            
            <!-- CLOSE SITE BAR-->
        
        </div>

        <!-- CLOSE ROW-->

    </div>

    <!-- CLOSE CONTAINER-->

</main>