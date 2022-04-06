<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Category <small>Item</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md- col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" method="POST" action="{{isset($data)?route('update_category',$data->id):route('addfunc_category')}}">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='id' type="text" class="form-control" placeholder="ID" value="{{isset($data)?$data->id:""}}" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='name' type="text" class="form-control" placeholder="Name" value="{{isset($data)?$data->name:""}}">
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