<div class="bg0 m-t-23 p-b-140" style="padding: 20px 50px">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            
            {{-- show some category --}}
            @include('admin.selling.view.shop-product-category')

            {{-- filter and search --}}
            @include('admin.selling.view.shop-product-fillterAndSearch')

        </div>

        <div class="row isotope-grid">
            {{-- show items --}}
            @foreach ($data as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{$item->image}}" alt="IMG-PRODUCT">
            
                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-url="{{route('show_shop_item',$item->id)}}">
                            Add to cart
                        </a>
                    </div>
            
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$item->name}}
                            </a>
            
                            <span class="stext-105 cl3">
                                {{number_format($item->price)}} VND
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- see more --}}
        {{-- @include('admin.selling.view.shop-product-loadmore') --}}
    </div>
</div>