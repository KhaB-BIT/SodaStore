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
            <form class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name='name' type="text" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name="desc" class="form-control" rows="3" placeholder='Description'></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="short_desc" type="text" class="form-control" placeholder="Short Description">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Image Url</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="image" type="url" class="form-control" placeholder="Image Url">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="price" type="number" class="form-control" placeholder="Price">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="category" class="form-control">
                    <option disabled>Choose option</option>
                    @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="button" class="btn btn-primary">Cancel</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
  </div>
</div>