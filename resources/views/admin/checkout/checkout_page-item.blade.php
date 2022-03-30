@foreach ($data as $key => $item)
    <tr class="table_row">
        <td class="column-1">
            <div class="how-itemcart1">
                <img src="{{$item['product']->image}}" alt="IMG">
            </div>
        </td>
        <td class="column-2">
            <p><b>{{$item['product']->name}}</b></p>
            <p>Size: {{$item['variant']->size}}</p>
            <p>Color: {{$item['variant']->color}}</p>
        </td>
        <td class="column-3" id="admin_cart_price_{{$item['variant']->id}}" data-price="{{$item['product']->price}}">{{number_format($item['product']->price)}}</td>
        <td class="column-4">
            <div class="wrap-num-product flex-w m-l-auto m-r-0">
                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                    <i class="fs-16 zmdi zmdi-minus" id = "admin_cart_quantity_minus"></i>
                </div>

                <input class="mtext-104 cl3 txt-center num-product" id="admin_cart_quantity_{{$item['variant']->id}}" type="number" data-id="{{$item['variant']->id}}" value="{{$item['quantity']}}">

                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                    <i class="fs-16 zmdi zmdi-plus"></i>
                </div>
            </div>
        </td>
        <td class="column-5" id="admin_cart_total_{{$item['variant']->id}}">{{number_format($item['quantity']*$item['product']->price)}}</td>
    </tr>
@endforeach