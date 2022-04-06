<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Customer <small>Item</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md- col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" method="POST" action="{{isset($data)?route('update_customer',$data->id):route('addfunc_customer')}}">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='email' type="text" class="form-control" placeholder="Email" value="{{isset($data)?$data->email:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='name' type="text" class="form-control" placeholder="Name" value="{{isset($data)?$data->name:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="gender" class="form-control">
                    <option disabled>Choose option</option>
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="address" type="text" class="form-control" placeholder="Address" value="{{isset($data)?$data->address:""}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="phone" type="tel" class="form-control" placeholder="Phone number" value="{{isset($data)?"0".$data->phone:""}}">
                </div>
              </div>
              @if (isset($data))
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Created</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input name="" type="text" class="form-control" placeholder="Price" value="{{$data->created_at}}">
                  </div>
                </div>
              @endif
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