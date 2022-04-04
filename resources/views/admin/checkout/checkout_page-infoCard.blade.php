<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
        <h4 class="mtext-109 cl2 p-b-30">RECEIPT</h4>

        <div class="flex-w flex-t bor12 p-b-13">
            <div class="size-208">
                <span class="stext-110 cl2">Total:</span>
            </div>

            <div class="size-209 p-t-1">
                <?php
                    $total = 0;
                    foreach($data as $item){
                        $total += $item['product']->price * $item['quantity'];
                    }
                ?>
                <span class="mtext-110 cl2" id="admin_invoice_total" data-price="{{$total}}">
                    {{number_format($total)}} VND
                </span>
            </div>
        </div>

        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                <div class="p-t-15">
                    <span class="stext-112 cl8 m-b-5">
                        CUSTOMER ID
                    </span>
                    <div class="bor8 bg0 m-b-12" style="display: flex">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="Search by phone">
                        <button class="m-r-10" type="button" id="admin_customer_search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="bor8 bg0 m-b-12" style="display: flex">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" id="admin_customer_id" type="text" name="id" placeholder="ID" readonly>
                    </div>
                    <div class="bor8 bg0 m-b-12" style="display: flex">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" id="admin_customer_name" type="text" name="name" placeholder="Name" readonly>
                    </div>
                    <div class="bor8 bg0 m-b-12" style="display: flex">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" id="admin_customer_phone" type="text" name="phone" placeholder="Phone number" readonly>
                    </div>
                    <div class="bor8 bg0 m-b-12" style="display: flex">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" id="admin_customer_email" type="text" name="email" placeholder="Email" readonly>
                    </div>
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>

        @if (session()->has('cart'))
            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" id="payment_in_cash" type="button">
                Payment in cash
            </button>
            <div id="paypal-button" style="text-align: center; margin-top: 10px"></div>
        @else
            <div style="text-align: center; margin-top: 30px;"><b>CART IS EMPTY</b></div>
        @endif
    </div>
</div>