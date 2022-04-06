
@foreach ($data as $key => $item)
    <tr class="{{fmod($key,2) == 0?"even":"odd"}} pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">{{$item->id}}</td>
        <td class=" ">{{$item->transacion_id}}</td>
        <td class=" ">{{$item->variant_id}}</td>
        <td class=" ">{{$item->price}}</td>
        <td class=" ">{{$item->quantity}}</td>
    </tr>
@endforeach