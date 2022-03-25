<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            
            {{-- show some category --}}
            @include('user.shop_page.shop-product-category')

            {{-- filter and search --}}
            @include('user.shop_page.shop-product-fillterAndSearch')

        </div>

        <div class="row isotope-grid">
            {{-- show items --}}
            @include('user.shop_page.shop-product-item')
            @include('user.shop_page.shop-product-item')
            @include('user.shop_page.shop-product-item')
            @include('user.shop_page.shop-product-item')
            @include('user.shop_page.shop-product-item')
            @include('user.shop_page.shop-product-item')
            @include('user.shop_page.shop-product-item')
            @include('user.shop_page.shop-product-item')
        </div>

        {{-- see more --}}
        @include('user.shop_page.shop-product-loadmore')
    </div>
</div>