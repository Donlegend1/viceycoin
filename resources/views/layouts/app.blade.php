<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keyword" content="">

	<!-- favicon icon -->
	<link rel="icon" href="#">

	<title>Vicey Coin: token sale</title>
<link rel="shortcut icon" href="/logo.jpeg" type="image/x-icon">
@viteReactRefresh
@vite(['resources/css/app.css', 'resources/js/app.jsx'])
	<!-- Main style css -->
	<link rel="stylesheet" href="/css/style.css">
    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>

</head>

<body>

	<!-- Preloader Part Start -->
	<div id="prelaoder">
		<div class="cssload-loader">
    	<div class="cssload-flipper">
        	<div class="cssload-front"></div>
        	<div class="cssload-back"></div>
    	</div>
		</div>
	</div>
	<!-- Preloader Part End -->
	
	<!-- Header Part Start -->
    <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="linear-gradient(45deg, rgba(144, 62, 255, 1) 0%, rgba(62, 25, 255, 1) 100%)" font-color="#fff" locale="en" style="color:white;border: none;"></coingecko-coin-price-marquee-widget>

	<header>


		<!-- Price Chart Part Start -->
		<div class="section-p chart-popup-content mfp-hide" style="background:#fff">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-6">
						<div class="treading">
							<h2>Treding <span class="brand-color">Fee 0%</span></h2>
							<h5 class="brand-color semi-bold">On the UK's no.1 Bitcoin exchange</h5>
							<p>Your gateway to a secure and innovative cryptocurrency experience. Don't miss the opportunity to be an early investor!</p>
							<a href="/register" class="btn-5 mt-3 mt-lg-4">Join Us</a>
						</div>
					</div>
					<div class="col-md-6 text-center mt-3 mt-md-0">
						<div class="price-chart">
							<div class="btcwdgt-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Price Chart Part End -->

		<!-- Navigation -->

		<nav id="navigation" class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="main-logo" href="/"><img src="/logo.jpeg" height="70" alt="LOGO"></a>

				<div class="out-link ml-auto d-none d-sm-inline d-lg-none"><a href="#" class="btn-1">Free Consultation</a></div>

				<button class="navbar-toggler mobile-toggle ml-auto ml-sm-0" type="button" data-toggle="collapse" data-target="#nav-list">
 					<i class="fa fa-bars"></i>
  				</button>

				<div id="nav-list" class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown-box">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">about</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="/#tokenomics">Tokenomics</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/#roadmap">Road Map</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/#roadmap">How To Buy</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/#FAQ">FAQ</a>
						</li>
                        <li class="nav-link">
                        
                        </li>
                        
					</ul>
				</div>

				<div class="out-link d-none d-lg-inline"><a href="#token-part" class="btn-1">Purchase Token</a></div>

			</div>
		</nav>

		<!-- mobile manu -->
		<div id="mobile-manu">
			<div class="mobile-manu-box">
				<div class="mobile-manu-top d-flex align-items-center">
					<a href="/"><img src="/logo.jpeg" height="50" alt=""></a>
					<button class="close-mobile-manu ml-auto"><i class="fa fa-close"></i></button>
				</div>
				<ul class="mobile-list">
					<li class="nav-item">
						<a class="nav-link active" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">about</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="/#tokenomics">Tokenomics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/#roadmap">Road Map</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/#roadmap">How To Buy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/#FAQ">FAQ</a>
					</li>
                    <li class="nav-link">
                    
                    </li>
                    
				</ul>

				<div class="out-link pl-0 mt-3"><a href="#token-part" class="btn-1">Purchase Coin</a></div>
			</div>

		</div>
	</header>
    
            @yield('content')
    
       <!-- Footer Part Start -->
	   <footer id="footer-part">
		<div id="footer-widget" class="section-p">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-4">
						<div class="footer-widget-item">
							<h4>Contact</h4>
							<div class="contact">
								<ul>
									<li><a href="mailto:sales@wditsolution.com"><i class="fa fa-envelope"></i> admin@viceycoin.com</a></li>
								</ul>
							</div>
							<div class="footer-widget-item">
								<h4 class="mb-1">Connect with us:</h4>
								<ul class="flat-list social-icon">
									<li><a href="https://t.me/ViceyNetworkAnnouncement" target ="blank"><i class="fa fa-telegram"></i></a></li>
									<li><a href="https://x.com/ViceyNetwork?t=ftaR4Ca0_o4BLi0aJXuD6Q&s=09" target ="blank"><i class="fa fa-twitter"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<!-- <div class="col-12 col-sm-6 col-lg-4">
						<div class="footer-widget-item mt-4 mt-sm-0">
							<h4>Festival Deals</h4>
							<ul class="regular-list">
								<li><a href="#">Bitcoin Investments: Invest in Bitcoin with confidence and grow your wealth.</a></li>
								<li><a href="#">Exchange Bitcoin: Simple and secure exchange services for your Bitcoin.</a></li>
								<li><a href="#">Bitcoin Analytics: Access in-depth Bitcoin market analysis and trends.</a></li>
								<li><a href="#">Insights on Bitcoin: Get expert insights and updates on Bitcoin movements.</a></li>
								<li><a href="#">Bitcoin Shopping: Use Bitcoin for seamless and secure online shopping.</a></li>
								<li><a href="#">Escrow Services: Protect your transactions with our secure Bitcoin escrow services.</a></li>
							</ul>
						</div>
					</div> -->
					<div class="col-12 col-sm-4 col-lg-2">
						<div class="footer-widget-item mt-4 mt-lg-0">
							<h4>Need Help?</h4>
							<ul class="regular-list">
								<li><a href="#">Getting Started: Learn the basics and start your journey with Vicey Coin.</a></li>
								<li><a href="#">Contact Us: Have questions? Reach out to our support team for assistance.</a></li>
								<li><a href="#">FAQ's: Find answers to the most common questions about our platform.</a></li>
								<li><a href="#">Press: Stay updated with the latest press releases and news about Vicey Coin.</a></li>
								
							</ul>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="copyright-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>Copyright © {{ date('Y') }} <a href="#">{{ config('app.name') }}</a>. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	
	
	<!-- Footer Part End -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

	<!-- Plug In Js -->
	<script src="/js/plugins.js"></script>

	<!-- Custom js -->
	<script src="/js/custom.js"></script>

<script>
    function googleTranslateElementInit() {
            
        new google.translate.TranslateElement({
        
        pageLanguage: 'en'
        
        }, 'google_translate_element');
        
        }
        
        </script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
