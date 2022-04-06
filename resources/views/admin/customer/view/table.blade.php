<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title" style="margin-bottom: 50px">
      <div class="title_left">
        <h3>Customer <small>Management</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <a class="btn btn-success" href="{{route('add_customer')}}" style="float: right;"><span><i class="fa fa-plus" style="margin-right: 10px"></i></span>Add new</a>
        </div>
      </div>
    </div>
  
      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div style="font-size: 21px;"><b>Customer</b> <span>table</span></div>            
            <div class="clearfix"></div>
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
                    <th class="column-title">Email</th>
                    <th class="column-title">Fullname</th>
                    <th class="column-title">Gender</th>
                    <th class="column-title">Address</th>
                    <th class="column-title">Phone</th>
                    <th class="column-title">Created</th>
                    <th class="column-title"></th>
                    <th class="column-title no-link last"></th>
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>

                <tbody>
                  @include('admin.customer.view.customer_item')
                </tbody>
              </table>
            </div>
      
    
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->