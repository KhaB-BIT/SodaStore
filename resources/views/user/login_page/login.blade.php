	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-04.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			ĐĂNG NHẬP & ĐĂNG KÝ
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							ĐĂNG NHẬP
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="username" placeholder="Tên đăng nhập">
                            <img class="how-pos4 pointer-none" src="images/icons/icon-user.png" alt="ICON">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent" >
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Mật khẩu">
                            <img class="how-pos4 pointer-none" src="images/icons/icon-key.png" alt="ICON">
						</div>

					    <input type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" value="ĐĂNG NHẬP" />
                     
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                	<form>
                        <h6 class="mtext-105 cl2 txt-center" style="font-size: 20px"> 
							Nếu chưa có tài khoản thì...
						</h6>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
                        ĐĂNG KÝ
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="res_username" placeholder="Tên đăng nhập">
                            <img class="how-pos4 pointer-none" src="images/icons/icon-user.png" alt="ICON">
						</div>

                        <div class="bor8 m-b-20 how-pos4-parent" >
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Địa chỉ email">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email2.jpg" alt="ICON">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent" >
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="res_password" placeholder="Mật khẩu">
                            <img class="how-pos4 pointer-none" src="images/icons/icon-key.png" alt="ICON">
						</div>

                        <div class="bor8 m-b-20 how-pos4-parent" >
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="reres_password" placeholder="Nhập lại mật khẩu">
                            <img class="how-pos4 pointer-none" src="images/icons/icon-key.png" alt="ICON">
						</div>

					    <input type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" value="ĐĂNG KÝ" />
                     
					</form>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Banner -->"
	<div class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/login-banner.jpg'); padding-top:460px;">
	</div>	



<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
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
<!--===============================================================================================-->

	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>