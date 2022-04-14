<main id="main" class="main-site left-sidebar mainBG">

    <!-- CONTAINER-->

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Wishlist</span></li>
            </ul>
        </div>

        <div class="row">

            <!-- FOREACH PRODUCT-->
            @if(Cart::instance('wishlist')->content()->count() > 0)
            <ul class="product-list grid-products equal-container">
                @foreach (Cart::instance('wishlist')->content() as $item)

                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                    <div class="product product-style-3 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{ route('product.details', ['slug' => $item->model->slug])}}" title="{{ $item->model->name }}">
                                <figure><img src="{{ asset('assets/images/products/') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}"></figure>
                            </a>
                        </div>
                        <div class="product-info">
                            <a href="{{ route('product.details', ['slug' => $item->model->slug])}}" class="product-name"><span>{{ $item->model->name }}</span></a>
                            <div class="wrap-price"><span class="product-price">€{{ $item->model->regular_price }}</span></div>
                            <div class = "wishyWishy">
                                    <a href="#" wire:click.prevent = "removeFromWishlist({{ $item->model->id }}, '{{ $item->model->name }}', {{ $item->model->regular_price }} )"><i class = "fa fa-heart fill-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                @endforeach
            </ul>
            @else
                <h1>No items in wishlist</h1>
            @endif
        </div>
    </div>

    <!-- CLOSE CONTAINER-->

</main>