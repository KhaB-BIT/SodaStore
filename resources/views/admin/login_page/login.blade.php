<div class="right_col" role="main">
	<div class="flex-w flex-tr" style="justify-content: center; align-content:center; height: 100vh">
		<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
			<form action="/admin/login" method="POST">
				<h4 class="mtext-105 cl2 txt-center p-b-30">
					SODA STORE ADMIN LOGIN
				</h4>
				<div class="bor8 m-b-20 how-pos4-parent">
					<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Email" required>
					<img class="how-pos4 pointer-none" src="/images/icons/icon-user.png" alt="ICON">
				</div>

				<div class="bor8 m-b-20 how-pos4-parent">
					<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Password" required>
					<img class="how-pos4 pointer-none" src="/images/icons/icon-key.png" alt="ICON">
				</div>
				@csrf
				<input type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" value="LOGIN" />
			</form>
		</div>
	</div>
</div>