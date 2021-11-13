<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light navigation">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="imgs/logo.png" alt="HROMNI" />
				</a>
				<button
					class="navbar-toggler border-0"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="fa fa-bars text-white"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle <?php if($pagename == "HR OMNI - Products") echo "active";?>" href="product.php" id="navbarDropdown" role="button"> Products </a>
							<ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#!">Product</a></li>
								<li><a class="dropdown-item" href="#!">Product</a></li>
								<li><hr class="dropdown-divider" /></li>
								<li><a class="dropdown-item" href="#!">Product</a></li>
							</ul>
						</li>
						<li class="nav-item ">
							<a class="nav-link <?php if($pagename == "HR OMNI - Pricing") echo "active";?>" href="#">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if($pagename == "HR OMNI - About") echo "active";?>" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if($pagename == "HR OMNI - Contact") echo "active";?>" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link login <?php if($pagename == "HR OMNI - Login") echo "active";?>" href="#">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn btn-primary btn-sm signup" href="#">Sign up</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- //Navigation -->