	<?php
        $requestUrl = $_SERVER['REQUEST_URI'];
        $parts = parse_url($requestUrl);

        $path= $parts["path"];
        $pathArr= explode("/",$path);
		
		$currentPage= isset($pathArr[3]) ? $pathArr[3] : "home";
		
	?>
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container" style="max-width:unset; margin:0 24px">
				<a class="navbar-brand" href="index.html">
					<img src="../../asset/images/logo.png" onerror="this.src='asset/images/logo.png'" alt="" />
				</a>
				<div class="navbar-search">
					<form action="" method="post">
						<input type="text" class="navbar-search__input"><input type="submit" value="Search" class="navbar-search__btn">
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php echo $currentPage == "home" ? "active" : ""  ?>"><a class="nav-link" href="/yamifood">Home</a></li>
						<li class="nav-item <?php echo $currentPage == "menu" ? "active" : ""  ?>"><a class="nav-link" href="/yamifood/app/menu">Menu</a></li>
						<li class="nav-item <?php echo $currentPage == "about" ? "active" : ""  ?>"><a class="nav-link" href="/yamifood/app/about">About</a></li>
						<li class="nav-item dropdown <?php echo $currentPage == "pages" ? "active" : ""  ?>">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="/yamifood/app/pages/reservation">Reservation</a>
								<a class="dropdown-item" href="/yamifood/app/pages/stuff">Stuff</a>
								<a class="dropdown-item" href="/yamifood/app/pages/gallery">Gallery</a>
							</div>
						</li>
						<li class="nav-item <?php echo $currentPage == "blog" ? "active" : ""  ?>"><a class="nav-link" href="/yamifood/app/blog">Blog</a></li>
						<li class="nav-item <?php echo $currentPage == "contact" ? "active" : ""  ?>"><a class="nav-link" href="/yamifood/app/contact">Contact</a></li>
					</ul>
				</div>
				<div class="navbar-action">
					<div class="navbar-cart">
						<div class="navbar-cart__btn">
							<img src="../../asset/images/icon_cart.png" onerror="this.src='asset/images/icon_cart.png'" alt="">
							<div class="cart">
								<div class="cart-list">
									<div class="cart-item">
										<div class="cart-item__thumbnail">
											<img src="../../asset/images/img-01.jpg" onerror="this.src='asset/images/img-01.jpg'" alt="">
										</div>
										<div class="cart-item__content">
											<a href="" class="cart-item__title">Special drink 1 Lorem ipsum dorlor</a>
											<div class="cart-item__price">đ29.000 x 1</div>
										</div>
									</div>
									<div class="cart-item">
										<div class="cart-item__thumbnail">
											<img src="../../asset/images/img-01.jpg" onerror="this.src='asset/images/img-01.jpg'" alt="">
										</div>
										<div class="cart-item__content">
											<a href="" class="cart-item__title">Special drink 1 Lorem ipsum dorlor</a>
											<div class="cart-item__price">đ29.000 x 1</div>
										</div>
									</div>
									<div class="cart-item">
										<div class="cart-item__thumbnail">
											<img src="../../asset/images/img-01.jpg" onerror="this.src='asset/images/img-01.jpg'" alt="">
										</div>
										<div class="cart-item__content">
											<a href="" class="cart-item__title">Special drink 1 Lorem ipsum dorlor</a>
											<div class="cart-item__price">đ29.000 x 1</div>
										</div>
									</div>
									<div class="cart-footer">
										<span>Tổng cộng: 3 sản phẩm</span>
										<a href="" class="cart-detail__btn">Xem giỏ hàng</a>
									</div>
								</div>
								<!-- <div class="cart-empty">
									Chưa có sản phẩm nào
								</div> -->
							</div>
						</div>
					</div>
					<div class="navbar-user">
						<div class="navbar-cart__btn">
							<img src="../../asset/images/icon_user.png" onerror="this.src='asset/images/icon_user.png'" alt="">
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->