<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Product <small>Item</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md- col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" method="POST" action="{{isset($data)?route('update_product',$data->id):route('addfunc_product')}}">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='name' type="text" class="form-control" placeholder="Name" value="{{isset($data)?$data->name:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name="desc" class="form-control" rows="3" placeholder='Description'>{{isset($data)?$data->desc:""}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="short_desc" type="text" class="form-control" placeholder="Short Description" value="{{isset($data)?$data->short_desc:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Image Url</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="image" type="url" class="form-control" placeholder="Image Url" value="{{isset($data)?$data->image:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="price" type="number" class="form-control" placeholder="Price" value="{{isset($data)?$data->price:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="category_id" class="form-control">
                    <option disabled>Choose option</option>
                    @php
                        $categorySelect = -1;
                        if(isset($data)) $categorySelect = $data->category_id;
                    @endphp
                    @foreach ($categories as $item)
                      <option value="{{$item->id}}" {{$categorySelect == $item->id?"selected":""}}>{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                @if (isset($data))
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                  <div class="col-md-9 col-sm-9 col-xs-12" style="text-align:center;">
                    <a class="btn btn-danger" href="{{route('list_variant',['product_id'=>$data->id])}}">Add variant</a>
                  </div>
                @endif
              </div>
              {{-- PUT METHOD AND TOKEN --}}
              @if(isset($data))
                <input type="hidden" name="_method" value="PUT">
              @endif
              @csrf
              {{--  --}}
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="button" class="btn btn-primary">Cancel</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" class="btn btn-success">{{isset($data)?"Update":"Add new"}}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
</div>