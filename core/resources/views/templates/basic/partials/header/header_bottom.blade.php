<div class="header-bottom bg--section py-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 p-rel">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="@lang('logo')">
                        <!-- <h1>Cardiff Motors</h1> -->
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-5 order-lg-2 col-md-6 order-md-2">
                <ul class="menu  @if (request()->routeIs('home')) me-lg-auto @endif">
                    <li>
                        <a href="{{ route('home') }}" class="{{ menuActive('home') }}">
                            @lang('Home')
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('products') }}" class="{{ menuActive('products') }} dropdown-toggle" data-bs-toggle="dropdown">
                            Stock 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('all/products') }}">Current Stock</a></li>
                            <li><a class="dropdown-item" href="#">Old Stock</a></li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="{{ menuActive('contact') }}">
                            Sell
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('track-order') }}" class="{{ menuActive('track-order') }}">
                            Finance
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('track-order') }}" class="{{ menuActive('track-order') }}">
                            Reviews
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="{{ menuActive('contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 order-lg-3 col-md-3 order-md-1">
                <div class="rating">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/autotrader_alt.png') }}" alt="">
                        <!-- <h1>Cardiff Motors</h1> -->
                    </a>
                </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 order-md-last">
                <div class="contact">
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+0 (000) 954 765</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@support.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="cart-wrapper d-flex flex-wrap  me-4 me-lg-0">
                <a href="{{ route('wishlist') }}" class="cart--btn">
                    <i class="far fa-heart"></i>
                    <span class="qty show-wishlist-count">0</span>
                </a>
                <a href="{{ route('cart') }}" class="cart--btn">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span class="qty show-cart-count">0</span>
                </a>
            </div>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <form action="{{ route('products') }}" method="GET" class="search-form d-none d-lg-block">
                <div class="input-group search--group">
                    <button class="cmn--btn" type="submit"><i class="fas fa-search"></i></button>
                    <input type="text" class="form-control" name="search" placeholder="@lang('Search here')" value="{{ request()->search ?? null }}">                        
                </div>
            </form>
            -->
        </div>
    </div>
</div>