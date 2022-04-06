
@foreach ($data as $key => $item)
    <tr class="{{fmod($key,2) == 0?"even":"odd"}} pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">{{$item->id}}</td>
        <td class=" ">{{$item->payment_id}}</td>
        <td class=" ">{{$item->admin_id}}</td>
        <td class=" ">{{$item->customer_id}}</td>
        <td class=" ">{{$item->total}}</td>
        <td class="">{{$item->payment_method}}</td>
        <td class=""><b>{{$item->status}}</b></td>
        <td class=""><a class="btn btn-success" href="{{route('detail_invoice',$item->id)}}">Detail</a></td>
    </tr>
@endforeach