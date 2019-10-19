<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<head>
	<!-- Basic need -->
	<title>Cinema In Your Home</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">
	<link rel="icon" href="images/favicon.png" type="image/png">
    <!--Google Font-->
    <!-- <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' /> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- BEGIN | CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- END CSS files -->

</head>


<body>
<!--BEGIN | preloading-->
<div id="preloader">
    <img class="logo" src="images/logo.png" alt="" width="400" height="200">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--END | preloading-->


<!--BEGIN | login form popup-->
	<?php require "login.php"?>
<!--END | login form popup-->


<!--BEGIN | signup form popup-->
	<?php require "sign-up.php"?>
<!--END |  signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
	<?php require "header.php" ?>
</header>
<!-- END | Header -->


<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> Phim Chiếu Rạp</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Trang Chủ</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Phim Chiếu Rạp</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p>Tìm thấy <span>1,608 phim</span> trong tổng số</p>
					<label>Xếp theo:</label>
					<select>
						<option value="popularity">Phổ biến:Giảm dần</option>
						<option value="popularity">Phổ biến:Tăng dần</option>
						<option value="rating">Lượt bình chọn:Giảm dần</option>
						<option value="rating">Lượt bình chọn:Tăng dần</option>
						<option value="date">Ngày phát hành:Giảm dần</option>
						<option value="date">Ngày phát hành:Tăng dần</option>
					</select>
					<a href="movielist.php" class="list"><i class="ion-ios-list-outline "></i></a>
					<a  href="cinema-film.php" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="flex-wrap-movielist">
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/adventure.jpg" alt="" style ="width:170px; height:261px !important">
							<div class="hvr-inner">
	            				<a  href="film.php"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">Adventure 2</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
							</div>
						</div>					
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv2.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">Về Với Thiên Nhiên</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.8</span> /10</p>
							</div>
						</div>
					
					
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item3.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Đối Đầu Thử Thách</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
					
					
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item4.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Bước Đi Thế Kỷ</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv3.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">Tội Phạm Nhân Bản </a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.3</span> /10</p>
							</div>
						</div>
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv4.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">Tự hào Pride</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.2</span> /10</p>
							</div>
						</div>
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv5.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">Ma cây: Evil Dead</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.0</span> /10</p>
							</div>
						</div>
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item1.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Hố Đen Tử Thần</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item2.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Bóng Ma Hiện Về</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it10.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">harry potter</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it11.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Vệ Binh Dải Ngân Hà</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it12.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Bố Già</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item6.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Nhung Xanh</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item7.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Không Trọng Lực</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item8.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Con Đường Võ Sĩ</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it9.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Công Viên Kỷ Jura</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item9.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Khu Rừng Tự Sát</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item10.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Bóng Ma</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item11.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Cậu Bé Mất Tích</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item12.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Xem Thêm <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Những Kẻ Mộng Mơ</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
				</div>		
				<div class="topbar-filter">
					<label>Số phim mỗi trang:</label>
					<select>
						<option value="range">20 phim</option>
						<option value="saab">10 phim</option>
					</select>
					
					<div class="pagination2">
						<span>Trang 1 của 79:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">...</a>
						<a href="#">78</a>
						<a href="#">79</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Tìm Kiếm Phim</h4>
						<form class="form-style-1" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Tên Phim</label>
									<input type="text" placeholder="Nhập từ khoá">
								</div>
								<div class="col-md-12 form-it">
									<label>Thể loại</label>
									<div class="group-ip">
										<select
											name="skills" multiple="" class="ui fluid dropdown">
											<option value=""> Nhập thể loại </option>
											<option value="Action1"> Phim Chiếu Rạp </option>
					                        <option value="Action2"> Phim Lẻ </option>
					                        <option value="Action3"> Phim Bộ </option>
					                        <!-- <option value="Action4">Action 4</option>
					                        <option value="Action5">Action 5</option> -->
										</select>
									</div>	
								</div>
								<div class="col-md-12 form-it">
									<label>Điểm Đánh Giá</label>
									<select>
									  <option value="range"> 5★ </option>
									  <option value="saab"> 4★ </option>
									  <option value="saab"> 3★ </option>
									  <option value="saab"> 2★ </option>
									  <option value="saab"> 1★ </option>
									</select>
								</div>
								<div class="col-md-12 form-it">
									<label>Năm Phát Hành</label>
									<div class="row">
										<div class="col-md-6">
											<select>
											  <option value="range">Từ</option>
											  <option value="number">2018</option>
											  <option value="number">2017</option>
											  <option value="number">2016</option>
											  <option value="number">2015</option>
											  <option value="number">2014</option>
											</select>
										</div>
										<div class="col-md-6">
											<select>
											  <option value="range">Đến</option>
											  <option value="number">2019</option>
											  <option value="number">2018</option>
											  <option value="number">2017</option>
											  <option value="number">2016</option>
											  <option value="number">2015</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="Tìm Kiếm">
								</div>
							</div>
						</form>
					</div>
					<div class="ads">
						<img src="images/uploads/adsdoc.png" alt="">
					</div>
					<div class="sb-facebook sb-it">
						<h4 class="sb-title">Find us on Facebook</h4>
						<iframe src="#" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhaintheme%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"  height="315" style="width:100%;border:none;overflow:hidden" ></iframe>
					</div>
					<div class="sb-twitter sb-it">
						<h4 class="sb-title">Tweet to us</h4>
						<div class="slick-tw">
							<div class="tweet item" id="599202861751410688">
							</div>
							<div class="tweet item" id="297462728598122498">
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- BEGIN | footer section-->
<?php require "footer.php"?>
<!-- END | footer section-->

<!-- BEGIN | Script -->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
<!-- END | Script -->

</body>
</html>
