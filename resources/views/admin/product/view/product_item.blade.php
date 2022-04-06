
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
        <td class=""><img src="{{$item->image}}" alt="#photo_{{$item->id}}" style="height: 150px"></td>
        <td class=""><b>{{number_format($item->price)}}</b></td>
        <td class="">
            <form action="{{route('delete_product',['id'=>$item->id])}}" method="POST">
                <button class="btn btn-danger" type="submit">Delete</button>
                @method('delete')
                @csrf
            </form>
        </td>
        <td class="last"><a class="btn btn-primary" href="{{route('item_product',['id'=>$item->id])}}">View</a>
        </td>
    </tr>
@endforeach