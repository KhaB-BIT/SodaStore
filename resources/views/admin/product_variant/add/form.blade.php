<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md- col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" method="POST" action="{{isset($data)?route('update_variant',$data->id):route('addfunc_variant',$id)}}">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product ID</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='product_id' type="number" class="form-control" placeholder="Product ID" value="{{isset($data)?$data->product_id:$id}}" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Size</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="size" class="form-control">
                    <option selected disabled>Choose option</option>
                    @php
                        $sizeSelect = -1;
                        if(isset($data)) $sizeSelect = $data->size;
                        $sizeMap = ['XS','S','M','L','XL','XXL','XXXL']
                    @endphp
                    @foreach ($sizeMap as $item)
                      <option value="{{$item}}" {{$sizeSelect == $item?"selected":""}}>{{$item}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product ID</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='color' type="text" class="form-control" placeholder="Color" value="{{isset($data)?$data->color:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product ID</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='quantity' type="number" class="form-control" placeholder="Quantity" value="{{isset($data)?$data->quantity:""}}">
                </div>
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