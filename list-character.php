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
					<h1>Diễn Viên Xuất Sắc</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Trang Chủ</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Diễn Viên Xuất Sắc</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- celebrity grid v1 section-->
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p>Tìm thấy <span>1,68 Diễn Viên</span> trong tổng số</p>
					<label>Xếp theo:</label>
					<select>
						<option value="popularity">Phổ biến:Giảm dần</option>
						<option value="popularity">Phổ biến:Tăng dần</option>
						<option value="rating">Lượt bình chọn:Giảm dần</option>
						<option value="rating">Lượt bình chọn:Tăng dần</option>
						<option value="date">Ngày phát hành:Giảm dần</option>
						<option value="date">Ngày phát hành:Tăng dần</option>
					</select>
					<a href="celebritylist.html" class="list"><i class="ion-ios-list-outline "></i></a>
					<a  href="celebritygrid01.html" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="celebrity-items">
					<div class="ceb-item">
						<a href="single-character.php"><img src="images/uploads/hugh-jackman.jpg" alt="" style="width:270px; height:400px"></a>
						<div class="ceb-infor">
							<h2><a href="single-character.php">Hugh Jackman</a></h2>
							<span>Diễn Viên, Australia</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritylist.html"><img src="images/uploads/ceb2.jpg" alt=""></a>						
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">Leonardo DiCaprio</a></h2>
							<span>Diễn Viên, mexico</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritysingle.html"><img src="images/uploads/ceb3.jpg" alt=""></a>
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">Emma Stone</a></h2>
							<span>Diễn Viên, usa</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritysingle.html"> <img src="images/uploads/ceb4.jpg" alt=""></a>
						
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">Olga Kurylenko</a></h2>
							<span>Diễn Viên, sweden</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritysingle.html"><img src="images/uploads/ceb5.jpg" alt=""></a>
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">Micheal Bay</a></h2>
							<span>Nhà Sản Xuất, france</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritysingle.html"><img src="images/uploads/ceb6.jpg" alt=""></a>
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">Martin Scorsese</a></h2>
							<span>Nhà Sản Xuất, italy</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritysingle.html"><img src="images/uploads/ceb7.jpg" alt=""></a>
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">TJohnson Staham</a></h2>
							<span>Diễn Viên, uk</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritysingle.html"><img src="images/uploads/ceb8.jpg" alt=""></a>
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">Haley Bennett</a></h2>
							<span>Diễn Viên, france</span>
						</div>
					</div>
					<div class="ceb-item">
						<a href="celebritysingle.html"><img src="images/uploads/ceb9.jpg" alt=""></a>
						<div class="ceb-infor">
							<h2><a href="celebritylist.html">Teresa Palmer</a></h2>
							<span>Diễn Viên, uk</span>
						</div>
					</div>
				</div>
				<div class="topbar-filter">
					<label>Diễn viên mỗi trang</label>
					<select>
						<option value="range">9 Diễn Viên</option>
						<option value="saab">12 Diễn Viên</option>
					</select>
					
					<div class="pagination2">
						<span>Trang 1 của 19:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">...</a>
						<a href="#">18</a>
						<a href="#">19</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="sidebar">
						<div class="searh-form">
						<h4 class="sb-title">Tìm Kiếm Diễn Viên</h4>
						<form class="form-style-1 celebrity-form" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Tên Diễn Viên</label>
									<input type="text" placeholder="Nhập từ khoá">
								</div>
								<div class="col-md-12 form-it">
									<label>Diễn Viên Hạng</label>
									<select>
									  <option value="range">A</option>
									  <option value="saab">B</option>
									</select>
								</div>
								<div class="col-md-12 form-it">
									<label>Giới Tính</label>
									<select>
									  <option value="range">Nam Diễn Viên</option>
									  <option value="saab">Nữ Diễn Viên</option>
									</select>
								</div>
								<div class="col-md-12 form-it">
									<label>Năm Sinh</label>
									<div class="row">
										<div class="col-md-6">
											<select>
											  <option value="range">Từ</option>
											  <option value="number">1950</option>
											  <option value="number">1960</option>
											  <option value="number">1970</option>
											</select>
										</div>
										<div class="col-md-6">
											<select>
											  <option value="range">Đến</option>
											  <option value="number">2020</option>
											  <option value="number">2000</option>
											  <option value="number">1980</option>
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
					<div class="celebrities">
						<h4 class="sb-title">Người Nổi Tiếng</h4>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava1.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Diễn Viên</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava2.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Diễn Viên</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava3.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Diễn Viên</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava4.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Diễn Viên</span>
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