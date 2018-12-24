<!DOCTYPE php>
<html lang="en">

<head>
	<title>Product</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/product.css">
	<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo"><a href="#">您好 盧浩鈞老師.</a></div>
								<nav class="main_nav">
									<ul>
										<li class="hassubs active">
											<a href="index.php">Home</a>
											<ul>
												<li><a href="categories.php">Categories</a></li>
												<li><a href="product.php">Product</a></li>
												<li><a href="cart.php">Cart</a></li>
												<li><a href="checkout.php">Check out</a></li>
												<li><a href="contact.php">註冊</a></li>
											</ul>
										</li>
										<li><a href="contact.php">登出</a></li>
									</ul>
								</nav>
								<div class="header_extra ml-auto">
									<div class="shopping_cart">
										<a href="cart.php">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
												<g>
													<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z" />
												</g>
											</svg>
											<div>Cart <span>(0)</span></div>
										</a>
									</div>
									<div class="search">
										<div class="search_icon">
											<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
											 x="0px" y="0px" viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;" xml:space="preserve">
												<g>
													<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												 M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												" />
												</g>
											</svg>
										</div>
									</div>
									<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Search Panel -->
			<div class="search_panel trans_300">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
								<form action="#">
									<input type="text" class="search_input" placeholder="Search" required="required">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Social -->
			<div class="header_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu menu_mm trans_300">
			<div class="menu_container menu_mm">
				<div class="page_menu_content">

					<div class="page_menu_search menu_mm">
						<form action="#">
							<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
						</form>
					</div>
					<ul class="page_menu_nav menu_mm">
						<li class="page_menu_item has-children menu_mm">
							<a href="index.php">Home<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<li class="page_menu_item menu_mm"><a href="categories.php">Categories<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="product.php">Product<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="cart.php">Cart<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="checkout.php">Checkout<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="contact.php">Contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item has-children menu_mm">
							<a href="categories.php">Categories<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.php">Category<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item menu_mm"><a href="index.php">Accessories<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="contact.php">Contact<i class="fa fa-angle-down"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="home_container">
				<div class="home_background" style="background-image:url(images/categories.jpg)"></div>
				<div class="home_content_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content">
									<div class="home_title">線上評分<span>.</span></div>
									<div class="home_text">
										<p>請各位評審老師於9月27日(四)前將評審表交給黃助教。</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Product Details -->

		<div class="product_details">
			<div class="container">
				<div class="row details_row">

					<!-- Product Content -->
					<div class="col-lg-12">
						<div class="details_content">
							<div class="details_price">系統名稱</div>
							<div class="details_name">YOLO x 憂樂日記</div>


							<!-- In Stock -->
							<div class="in_stock_container">
								<div class="availability">評分狀態:</div>
								<span>未評分</span>
							</div>
							<div class="details_text">
								<div class="details_name">組員</div>
								<div class="details_price">劉馨柔 黃渝婷 劉皓佳 王翊威 施柏再 </div>
							</div>


							<!-- Product Quantity -->
							<div class="product_quantity_container">
								<div class="details_name">文件初稿30%</div>
								<div class="product_quantity clearfix">
									<span>系統描述</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="product_quantity clearfix">
									<span>需求規格</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="product_quantity clearfix">
									<span>設計規格</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>

								<div>&nbsp;</div>

								<div class="details_name">系統功能30%</div>
								<div class="product_quantity clearfix">
									<span>功能創新性</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="product_quantity clearfix">
									<span>功能實用性</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="product_quantity clearfix">
									<span>介面親和性</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="product_quantity clearfix">
									<span>系統技術性</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="product_quantity clearfix">
									<span>內容豐富性</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="0">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>

								<div>&nbsp;</div>

								<div class="details_name">是否需要補繳？</div>
								<div>
									<form action="#" id="contact_form" class="contact_form">
										<input type="radio" name="word" id="y" checked required>是&nbsp
										<input type="radio" name="word" id="n">否&nbsp
								</div>
								<div>&nbsp;</div>

								<div class="details_name">評語：</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">1、本專題組的強項與優點	2、待改善項目：</label>
									<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
								</div>
								<div class="button cart_button"><a href="#">確定</a></div>
							</div>

							<!-- Share -->
							<div class="details_share">
								<span>Share:</span>
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>


					<div class="row description_row">

						<div class="col">
							<div class="description_title_container">
								<div class="description_title">評分標準</div>
							</div>
							<div class="description_text">
								<ul>
									<p>文件初稿30%</p>
									<li>▪文件內容的系統描述是否流暢，是否使人容易了解；需求規格與設計規格是否正確、是否與系統功能一致。</li>
									<li>▪文件內容應包含系上所訂文件格式第一至四章中的項目。</li>
									<p>系統功能30%</p>
									<li>▪是否具有
										<ul>
											<li>
												<p>創新性</p>&nbsp;&nbsp;&nbsp;系統在功能及技術方面是否具有創意
											</li>
											<li>
												<p>實用性</p>&nbsp;&nbsp;&nbsp;市場、使用者是否接受
											</li>
											<li>
												<p>技術性</p>&nbsp;&nbsp;&nbsp;技術的難易程度
											</li>
											<li>
												<p>親和性</p>&nbsp;&nbsp;&nbsp;人機介面之親和性及互動性
											</li>
											<li>
												<P>豐富性</P>&nbsp;&nbsp;&nbsp;資料內容的正確性充實程度
											</li>
										</ul>
									</li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- Products -->

			<div class="products">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="products_title">Related Products</div>
						</div>
					</div>
					<div class="row">
						<div class="col">

							<div class="product_grid">

								<!-- Product -->
								<div class="product">
									<div class="product_image"><img src="images/product_1.jpg" alt=""></div>
									<div class="product_extra product_new"><a href="categories.php">New</a></div>
									<div class="product_content">
										<div class="product_title"><a href="product.php">Smart Phone</a></div>
										<div class="product_price">$670</div>
									</div>
								</div>

								<!-- Product -->
								<div class="product">
									<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
									<div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
									<div class="product_content">
										<div class="product_title"><a href="product.php">Smart Phone</a></div>
										<div class="product_price">$520</div>
									</div>
								</div>

								<!-- Product -->
								<div class="product">
									<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
									<div class="product_content">
										<div class="product_title"><a href="product.php">Smart Phone</a></div>
										<div class="product_price">$710</div>
									</div>
								</div>

								<!-- Product -->
								<div class="product">
									<div class="product_image"><img src="images/product_4.jpg" alt=""></div>
									<div class="product_content">
										<div class="product_title"><a href="product.php">Smart Phone</a></div>
										<div class="product_price">$330</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>



			<!-- Footer -->

			<div class="footer_overlay"></div>
			<footer class="footer">
				<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
								<div class="footer_logo"><a href="#">Sublime.</a></div>
								<div class="copyright ml-auto mr-auto">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;
									<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
									 class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</div>
								<div class="footer_social ml-lg-auto">
									<ul>
										<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/greensock/TweenMax.min.js"></script>
		<script src="plugins/greensock/TimelineMax.min.js"></script>
		<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
		<script src="plugins/greensock/animation.gsap.min.js"></script>
		<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="plugins/parallax-js-master/parallax.min.js"></script>
		<script src="js/product.js"></script>
</body>

</html>