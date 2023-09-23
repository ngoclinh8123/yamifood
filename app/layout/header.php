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
			<div class="container">
				<a class="navbar-brand" href="/yamifood">
					<img src= "/yamifood/asset/images/logo.png" alt="" />
				</a>
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
			</div>
		</nav>
	</header>
	<!-- End header -->