
@foreach ($data as $key => $item)
    <tr class="{{fmod($key,2) == 0?"even":"odd"}} pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">{{$item->id}}</td>
        <td class=" ">{{$item->category_id}}</td>
        <td class=" ">{{$item->name}}</td>
        <td class=" ">{{$item->desc}}</td>
        <td class=" ">{{$item->short_desc}}</td>
        <td class="">{{$item->image}}</td>
        <td class="a-right a-right ">{{$item->price}}</td>
        <td class=" last"><a href="#">View</a>
        </td>
    </tr>
@endforeach