

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title" style="margin-bottom: 50px">
        <div class="title_left">
          <h3>Cart <small>Payment</small></h3>
        </div>
  
        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <a class="btn btn-danger" href="{{route('clear_checkout')}}" style="float: right;"><span><i class="fa-solid fa-trash m-r-10"></i></span>Clear Cart</a>
          </div>
        </div>
      </div>
    
        <div class="clearfix"></div>

			<!-- Shoping Cart -->
			<form class="">
				<div class="row" style="display: flex">
					<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50" >
						<div class="m-l-25 m-r--38 m-lr-0-xl">
							<div class="wrap-table-shopping-cart">
								<table class="table-shopping-cart">
									<tr class="table_head">
										<th class="column-1">Product</th>
										<th class="column-2"></th>
										<th class="column-3">Price</th>
										<th class="column-4" style="text-align: center">Quantity</th>
										<th class="column-5">Total</th>
										<th class="column-6"></th>
									</tr>

									{{-- items of your card --}}
									@include('admin.checkout.checkout_page-item')
								</table>
							</div>
						</div>
					</div>

					@include('admin.checkout.checkout_page-infoCard')
				</div>
		</form>
  
      </div>
  </div>
  <!-- /page content -->
		
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
