<div class="flex-w flex-l-m filter-tope-group m-tb-10">
    <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{$id == null?'how-active1':""}}" href="{{route('list_selling')}}" >
        All
    </a>
    @foreach ($categories as $item)
        <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{$id == $item->id?'how-active1':""}}" href="{{route('list_selling',$item->id)}}" >
            {{$item->name}}
        </a>
    @endforeach
</div>