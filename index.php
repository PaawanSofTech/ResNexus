<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resto - The restaurant service</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">

	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#special">
                          Special Dishes
                        </a>
                    </li>
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav">

              <li class="nav-item" style="margin-left: 5%; margin-right: 5%">
                <a class="nav-link btn btn-primary btn-lg" href="reservation.php">Make a Reservation</a>
              </li>

              <li class="nav-item dropdown">

                <button class="nav-link btn btn-primary btn-lg dropdown-toggle" type="button" id="statusDropdown" data-toggle="dropdown">
                  Check Reservation Status
                </button>

                <div class="dropdown-menu" aria-labelledby="statusDropdown">
                  <form class="dropdown-item" method="post" style="text-align: center;" action="search.php">
                    
                    <div class="form-group">
                      <input type="text" name="rcode" class="form-control" style="border: none; backgrond: transparent;" placeholder="Reservation Code">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Search</button>
                  </form>
                </div>
              </li>
            </ul>

        </div>
    </div>
</nav>		

<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
		    <h1 class="display-4 mb-5">We Love <br>Delicious Foods!</h1>
		    <div class="mb-2">
		    	<a class="btn btn-primary btn-shadow btn-lg" href="#menu" role="button">Explore Menu</a>
			    <a class="btn btn-icon btn-lg" href="https://player.vimeo.com/video/33110953" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
			    	<span class="lnr lnr-film-play"></span>
			    	Play Video
			    </a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Fast Delivery
		    		</h5>
		    	</li>
		    	<li class="border-right">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
		    			Fresh Food
		    		</h5>
		    	</li>
		    	<li class="">
		    		<span class="lnr lnr-bubble"></span>
		    		<h5>
		    			24/7 Support
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
			    	<img class="img-fluid" src="img/hero-1.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/hero-2.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/hero-3.jpg" alt="">
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>		<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content" id="about">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(img/hero-2.jpg);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading">
                            About
                        </span>
                        <h2>
                            Welcome to Resto
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>Experience culinary excellence at [Your Restaurant Name]. Indulge in exquisite flavors, impeccable service, and a cozy ambiance. Discover a gastronomic journey that will leave your taste buds delighted and craving more.</p>
                        <h3 class="mt-5">Special Fast Food Combo</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9s4e1F8c72t9mF4YC8NvCGfkpbfyWlbWGWQ&usqp=CAU" />
                                    <h6>NON-VEG COMBO MEAL</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWR4euKfT5KT9Kv3Pw4UCsQ0J5ltl-VQhZYA&usqp=CAU" />
                                    <h6>VEG COMBO MEAL</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="https://img.freepik.com/premium-photo/fast-food-3d-realistic-render-vector-icon-set-pizza-taco-hamburger-fries-potatoes-ramen-noodle_933530-3718.jpg"/>
                                    <h6>FAMILY COMBO MEAL</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->		<!-- Special Dishes Section -->

<section id="special" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Special Indian Food
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span>Biryani</h3>
                        <p class="pt-3">Brought from Persia to India by the Mughals, biryani is a classic Indian dish.Rice and meat or vegetables are prepared separately, then combined and slow-cooked in the oven to create this aromatic “dry dish” (there’s no creamy gravy-like sauce).</p>
                        <h3 class="special-dishes-price">₹250.00</h3>
                        <a href="#" class="btn-primary mt-3">book a table</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="https://sandinmysuitcase.com/wp-content/uploads/2020/12/Beef-Biryani-1024x768.jpg.webp" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="https://sandinmysuitcase.com/wp-content/uploads/2013/12/chicken-makhani.jpg.webp" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span>Butter</span><br> chicken</h3>
                        <p class="pt-3">Butter chicken (or murgh makhani) is one of the most popular Indian curries.Typically a mild curry, it combines onions, butter and cream in a velvety smooth tomato sauce with chicken chunks.Butter chicken is our go-to curry. We never tire of it!</p>
                        <h3 class="special-dishes-price">₹300.00</h3>
                        <a href="#" class="btn-primary mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Special Dishes Section -->		<!-- Menu Section -->
<section id="menu" style="padding-top: 30px;">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Our Menu
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Breakfast</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/61/23/74/612374b37b28b6790d6fbcb2ab5e8f82.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Dosa</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">₹120</h4>
                                </div>
                            </div>
        
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/e4/94/33/e4943390d002582f663c448563f28f71.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Special Poha</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">₹70</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/fb/d7/a5/fbd7a5652fca495ce1c40ddd017402a3.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">₹90</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Lunch</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/45/3e/f9/453ef906e6e699d8fe990ac5d443a065.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Indian Veg Thali</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">₹350</h4>
                                </div>
                            </div>
                            <p>Serves One</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvgWyyCd0yI8p4b4MdXHT4f4GLigqzQrCBkQ&usqp=CAU" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Non-Veg Thali</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">₹450</h4>
                                </div>
                            </div>
                            <p>Serves One</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/2b/04/5d/2b045d361ca6d0b02bd8b10f0fc55b8f.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>South Indian Thali</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">₹400</h4>
                                </div>
                            </div>
                            <p>Serves One</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Dinner</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/43/07/bc/4307bc5c1d20654c415424adfcab3350.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Lite Meal</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">₹250</h4>
                                </div>
                            </div>
                            <p>Serves One</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/ae/55/b4/ae55b4bf0921c71fe8fb7da008cbbf50.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Non-Veg Meal</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹300</h4>
                                </div>
                            </div>
                            <p>Serves One</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSMrasboRydSJ_J1qtRf9INqbZDbGRG5eTVSxfQjnZMhYrUSHXQX_9kdaCwYlOgvv82sM&usqp=CAU" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Family Meal</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹700</h4>
                                </div>
                            </div>
                            <p>Serves Three</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="menu" style="padding-top: 30px; padding-bottom: 70px;">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialities
                        </span>
                        <h2>
                          Our Combos
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Fast Food Combo</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/45/a6/37/45a63740d6be8b6c3167e4df21ea3457.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Mega Combo</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹149</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/03/de/b7/03deb777f9c0f4c17eed760ccc66e188.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Cheese Salada</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹199</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/05/ad/e8/05ade8156c43c3396a3d3fe55544f4f1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Super Combo</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹249</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">North Indian Combo</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/cb/b6/e8/cbb6e860bb0b3b2cbf9c94be1a0abdcb.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Buy 1 Get 1 Combo</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹399</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/b0/ec/0e/b0ec0ebdcc8aaba0a867cdf1779f6172.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Paneer Combos</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹349</h4>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/a1/de/ea/a1deea2d4b75d51f13a726d60c671708.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>All In One Combo</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹499</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Resto Special Combo</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/6c/a2/de/6ca2de8bca31f9a9834eac7ce919f394.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Resto Premium Combo</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹799</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/736x/fd/99/ba/fd99ba09077a2c9ca84f206d7fae5ad5.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Resto Non-Veg Special</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹899</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="https://i.pinimg.com/236x/da/cc/e7/dacce704d27be30b480926f6ea0040e8.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Resto Zero Oil Combo</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">Starting ₹999</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of menu Section -->		<!-- Testimonial Section-->
<section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-image: url(img/testi-bg.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Testimony
                </span>
                <h2>
                    Happy Customer
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">The restaurant provided an exquisite dining experience with impeccable service and delicious, beautifully presented dishes.</p>
                        
                                           </div>
                    
                                           <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Our visit to the restaurant left us delighted, with a cozy ambiance, friendly staff, and an array of flavorful dishes that exceeded our expectations.</p>
                        
                        
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section-->		<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    <!-- Specialties -->
                </span>
                <h2>
                    <!-- Our Team -->
                </h2>
            </div>
            
        </div>
    </div>
</section>
<!-- End of Team Section -->		<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Reservation
                        </span>
                        <h2>
                            Book Now
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" placeholder="Date" />
                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" placeholder="Time" />
                                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-clock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                 
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- End of Reservation Section -->		<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4">
         		<div class="footer-widget pr-lg-5 pr-0">
         			<img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
	         		<p>Experience culinary excellence at Restro. Indulge in exquisite flavors, impeccable service, and a cozy ambiance. Discover a gastronomic journey that will leave your taste buds delighted and craving more.</p>
	         		<nav class="nav nav-mastfoot justify-content-start">
		                <a class="nav-link" href="#">
		                	<i class="fab fa-facebook-f"></i>
		                </a>
		                <a class="nav-link" href="#">
		                	<i class="fab fa-twitter"></i>
		                </a>
		                <a class="nav-link" href="#">
		                	<i class="fab fa-instagram"></i>
		                </a>
		            </nav>
         		</div>
         		
         	</div>
         	<div class="col-lg-4">
         		<div class="footer-widget px-lg-5 px-0">
         			<h4>Open Hours</h4>
	         		<ul class="list-unstyled open-hours">
		                <li class="d-flex justify-content-between"><span>Monday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Tuesday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Wednesday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Thursday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Friday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Saturday</span><span>9:00 - 24:00</span></li>
		                <li class="d-flex justify-content-between"><span>Sunday</span><span> 9:00 - 24:00</span></li>
		              </ul>
         		</div>
         		
         	</div>

         	<div class="col-lg-4">
         		<div class="footer-widget pl-lg-5 pl-0">
         			<h4>Newsletter</h4>
	         		
	         		<form id="newsletter">
						<div class="form-group">
							<input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Enter email">
						</div>
						<button type="submit" class="btn btn-primary w-100">Submit</button>
					</form>
         		</div>
         		
         	</div>
         	<div class="col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">Copyright 2019. All Right Reserved. </p>
         	</div>
            
        </div>
    </div>
</footer>	</div>
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>

			
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-xs-12 col-sm-12">
			
			
			<div class = "row">
				<div class = "col-lg-12 center">
					<p class = "center pag-title">&nbsp;</p>
				</div>
			</div>
				
	
		
<?php include 'script.php';?>
 <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
</body>
</html>



