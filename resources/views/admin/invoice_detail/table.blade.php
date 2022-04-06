<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title" style="margin-bottom: 50px">
      <div class="title_left">
        <h3>Invoice Detail <small>Management</small></h3>
      </div>
    </div>
  
      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div style="font-size: 21px;"><b>Item</b> <span>of Invoice {{$id}}</span></div>
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
                    <th class="column-title">Invoice ID</th>
                    <th class="column-title">Product Variant ID</th>
                    <th class="column-title">Price ID</th>
                    <th class="column-title">Quantity</th>
                  </tr>
                </thead>

                <tbody>
                  @include('admin.invoice_detail.invoice_item')
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