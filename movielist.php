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
						<li> <span class="ion-ios-arrow-right"></span> Phim Chiếu Rạp</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
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
					<a href="movielist.php" class="list"><i class="ion-ios-list-outline active"></i></a>
					<a  href="cinema-film.php" class="grid"><i class="ion-grid"></i></a>
				</div>
				<div class="movie-item-style-2">
					<img src="images/uploads/mv1.jpg" alt="">
					<div class="mv-item-infor">
						<h6><a href="moviesingle.html">Trái Đất Diệt Vong <span>(2012)</span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
						<p class="describe">Những anh hùng mạnh nhất Trái đất phải đến với nhau và học cách chiến đấu như một đội nếu họ muốn ngăn chặn Loki tinh quái và đội quân ngoài hành tinh của anh ta khỏi nô lệ nhân loại ...</p>
						<p class="run-time"> Thời Lượng: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Ngày phát hành: 1 tháng 3 2015</span></p>
						<p>Đạo Diễn: <a href="#">Joss Whedon</a></p>
						<p>Ngôi sao: <a href="#">Robert Downey Jr.,</a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
					</div>
				</div>
				<div class="movie-item-style-2">
					<img src="images/uploads/mv2.jpg" alt="">
					<div class="mv-item-infor">
						<h6><a href="moviesingle.html">Về Với Thiên Nhiên <span>(2014)</span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>7.8</span> /10</p>
						<p class="describe">Khi Steve Rogers đấu tranh để nắm lấy vai trò của mình trong thế giới hiện đại, anh ta hợp tác với một đặc vụ Avenger và S.H.I.E.L.D, Black Widow, để chiến đấu với một mối đe dọa mới ...</p>
						<p class="run-time"> Thời Lượng: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Ngày phát hành: 1 tháng 3 2015</span></p>
						<p>Đạo Diễn: <a href="#">Anthony Russo,</a><a href="#">Joe Russo</a></p>
						<p>Ngôi sao: <a href="#">Chris Evans,</a> <a href="#">Samuel L. Jackson,</a> <a href="#">  Scarlett Johansson</a></p>
					</div>
				</div>
				<div class="movie-item-style-2">
					<img src="images/uploads/mv3.jpg" alt="">
					<div class="mv-item-infor">
						<h6><a href="moviesingle.html">Tội Phạm Nhân Bản <span>(2015)</span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>7.3</span> /10</p>
						<p class="describe">Được trang bị một bộ đồ siêu phàm với khả năng thu nhỏ đáng kinh ngạc nhưng tăng sức mạnh, chú mèo trộm Scott Lang phải ôm lấy anh hùng bên trong của mình và giúp ...</p>
						<p class="run-time"> Thời Lượng: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Ngày phát hành: 1 tháng 3 2015</span></p>
						<p>Đạo Diễn: <a href="#">Peyton Reed</a></p>
						<p>Ngôi sao: <a href="#">Paul Rudd,</a> <a href="#"> Michael Douglas</a></p>
					</div>
				</div>
				<div class="movie-item-style-2">
					<img src="images/uploads/mv4.jpg" alt="">
					<div class="mv-item-infor">
						<h6><a href="moviesingle.html">Tự hào Pride<span> (2013)  </span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>7.2</span> /10</p>
						<p class="describe">Khi thế giới của Tony Stark bị xé nát bởi một tên khủng bố đáng gờm tên là Quan thoại, anh ta bắt đầu một cuộc phiêu lưu xây dựng lại và quả báo.</p>
						<p class="run-time"> Thời Lượng: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Ngày phát hành: 1 tháng 3 2015</span></p>
						<p>Đạo Diễn: <a href="#">Shane Black</a></p>
						<p>Ngôi sao: <a href="#">Robert Downey Jr., </a> <a href="#">  Guy Pearce,</a><a href="#">Don Cheadle</a></p>
					</div>
				</div>
				<div class="movie-item-style-2">
					<img src="images/uploads/mv5.jpg" alt="">
					<div class="mv-item-infor">
						<h6><a href="moviesingle.html">Ma cây: Evil Dead<span> (2013)  </span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>7.0</span> /10</p>
						<p class="describe">Khi thế giới của Tony Stark bị xé nát bởi một tên khủng bố đáng gờm tên là Quan thoại, anh ta bắt đầu một cuộc phiêu lưu xây dựng lại và quả báo.</p>
						<p class="run-time"> Thời Lượng: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Ngày phát hành: 1 tháng 3 2015</span></p>
						<p>Đạo Diễn: <a href="#">Alan Taylor</a></p>
						<p>Ngôi sao: <a href="#">Chris Hemsworth,  </a> <a href="#">  Natalie Portman,</a><a href="#">Tom Hiddleston</a></p>
					</div>
				</div>
				<div class="topbar-filter">
					<label>Số phim mỗi trang:</label>
					<select>
						<option value="range">5 phim</option>
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