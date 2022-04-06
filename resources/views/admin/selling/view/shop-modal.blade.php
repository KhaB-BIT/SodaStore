<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="/images/icons/icon-close.png" alt="CLOSE">
            </button>

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb" id="modal_product_image">

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14" id="modal_product_name" data-id="">
                        </h4>

                        <span class="mtext-106 cl2" id="modal_product_price">
                        </span>

                        <p class="stext-102 cl3 p-t-23" id="modal_product_desc">
                        </p>
                        
                        <div class="p-t-33">
                            {{-- choose size of product --}}
                            @include('admin.selling.view.shop-modal-chooseSize')
                            {{-- choose color of product --}}
                            @include('admin.selling.view.shop-modal-chooseColor')
                            {{-- choose quantity and add to card --}}
                            @include('admin.selling.view.shop-modal-quantity')	
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>