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
  @if (isset($variant))
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <div style="font-size: 21px;"><b>Product <span>Variant</span></div>
        <div class="clearfix"></div>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <a class="btn btn-success" href="{{route('add_variant',$data->id)}}" style="float: right;"><span><i class="fa fa-plus" style="margin-right: 10px"></i></span>Add new</a>
        </div>
      </div>

      <div class="x_content">
        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">
                <th>
                  <input type="checkbox" id="check-all" class="flat">
                </th>
                <th class="column-title">ID </th>
                <th class="column-title">ID Product</th>
                <th class="column-title">Size</th>
                <th class="column-title">Color</th>
                <th class="column-title">Quantity</th>
                <th class="column-title"></th>
                <th class="column-title no-link last"></th>
                <th class="bulk-actions" colspan="7">
                  <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                </th>
              </tr>
            </thead>

            <tbody>
              @include('admin.product.add.product_variant_item')
            </tbody>
          </table>
        </div>
  

      </div>
    </div>
  </div>
          @endif
</div>