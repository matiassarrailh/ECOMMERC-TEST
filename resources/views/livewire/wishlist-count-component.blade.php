<div class="wrap-icon-section wishlist">
    <a href="{{ route('product.wishlist') }}" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            @if(Cart::instance('wishlist')->count() > 0)
            <span class="index" style = "background-color: grey;">{{ Cart::instance('wishlist')->count()}} item</span>
            @endif
        </div>
    </a>
</div>