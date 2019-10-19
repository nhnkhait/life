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

<div class="hero hero3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<!-- celebrity single section-->

<div class="page-single movie-single cebleb-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="mv-ceb">
					<img src="images/uploads/cebsingle2.png" alt="">
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct">
					<h1 class="bd-hd">Hugh Jackman</h1>
					<p class="ceb-single">Diễn Viên  |  Đạo Diễn</p>
					<div class="social-link cebsingle-socail">
						<a href="#"><i class="ion-social-facebook"></i></a>
						<a href="#"><i class="ion-social-twitter"></i></a>
						<a href="#"><i class="ion-social-googleplus"></i></a>
						<a href="#"><i class="ion-social-linkedin"></i></a>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overviewceb">Tổng Quan</a></li>
								<li><a href="#biography"> Tiểu Sử</a></li>
								<li><a href="#mediaceb"> Truyền Thông</a></li> 
								<li><a href="#filmography">Phim đã đóng</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overviewceb" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p>Jackman được sinh ra ở Sydney, New South Wales, đến Grace McNeil (Greenwood) và Christopher John Jackman, một kế toán viên. Anh là con út trong năm người con. Bố mẹ anh đều biết tiếng Anh, chuyển đến Úc ngay trước khi sinh. Ông cũng có tổ tiên là người Hy Lạp (từ ông cố) và người Scotland (từ bà ngoại).</p>
											<p>Hugh Michael Jackman là một diễn viên, ca sĩ, nghệ sĩ đa nhạc cụ, vũ công và nhà sản xuất người Úc. Jackman đã giành được sự công nhận quốc tế cho vai diễn của mình trong các bộ phim lớn, đáng chú ý là các nhân vật siêu anh hùng, thời kỳ và lãng mạn. </p>
											<!-- <p class="time"><a href="#">See full bio <i class="ion-ios-arrow-right"></i></a></p> -->
						            		<div class="title-hd-sm">
												<h4>Videos & Hình ảnh</h4>
												<a href="#" class="time">Tất cả 5 Videos & 245 Hình ảnh <i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="mvsingle-item ov-item">
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image11.jpg" ><img src="images/uploads/image1.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image21.jpg" ><img src="images/uploads/image2.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image31.jpg" ><img src="images/uploads/image3.jpg" alt=""></a>
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/image4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
											</div>
											<div class="title-hd-sm">
												<h4>Phim đã đóng</h4>
												<a href="#" class="time">Tất cả<i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">											
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film1.jpg" alt="">
														<div>
															<a href="#">X-Men: Apocalypse </a>
															<p class="time">Logan</p>
														</div>
														
													</div>
													<p>...  2016</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film2.jpg" alt="">
														<div>
															<a href="#">Eddie the Eagle </a>
															<p class="time">Bronson Peary</p>
														</div>
													</div>
													<p>...  2015</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film3.jpg" alt="">
														<div>
															<a href="#">Me and Earl and the Dying Girl </a>
															<p class="time">Hugh Jackman</p>
														</div>
													</div>
													<p>...  2015</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film4.jpg" alt="">
														<div>
															<a href="#">Night at the Museum 3 </a>
															<p class="time">Blackbeard</p>
														</div>
													</div>
													<p>...  2014</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film5.jpg" alt="">
														<div>
															<a href="#">X-Men: Days of Future Past </a>
															<p class="time">Wolverine</p>
														</div>
													</div>
													<p>...  2012</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film6.jpg" alt="">
														<div>
															<a href="#">The Wolverine </a>
															<p class="time">Logan</p>
														</div>
													</div>
													<p>...  2011</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film7.jpg" alt="">
														<div>
															<a href="#">Rise of the Guardians </a>
															<p class="time">Bunny</p>
														</div>
													</div>
													<p>...  2011</p>
												</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="images/uploads/film8.jpg" alt="">
														<div>
															<a href="#">The Prestige </a>
															<p class="time">Robert Angier</p>
														</div>
													</div>
													<p>...  2010</p>
												</div>
											</div>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Tên Đầy Đủ:  </h6>
						            			<p><a href="#">Hugh Jackman</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Ngày Sinh: </h6>
						            			<p>June 24, 1982</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Quốc Gia:  </h6>
						            			<p>Australian</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Chiều Cao:</h6>
						            			<p>186 cm</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Từ Khoá:</h6>
						            			<p class="tags">
						            				<span class="time"><a href="#">jackman</a></span>
													<span class="time"><a href="#">wolverine</a></span>
													<span class="time"><a href="#">logan</a></span>
													<span class="time"><a href="#">blockbuster</a></span>
													<span class="time"><a href="#">final battle</a></span>
						            			</p>
						            		</div>
						            		<div class="ads">
												<img src="images/uploads/adsdoc.png" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						        <div id="biography" class="tab">
						           <div class="row">
						            	<div class="rv-hd">
											<div>
												<h3>Tiểu Sử Của</h3>
						       	 				<h2>Hugh Jackman</h2>
											</div>							            						
						            	</div>
						            	<p>Hugh Michael Jackman là một diễn viên, ca sĩ, nghệ sĩ đa nhạc cụ, vũ công và nhà sản xuất người Úc. Jackman đã giành được sự công nhận quốc tế cho vai diễn của mình trong các bộ phim lớn, đáng chú ý là các nhân vật siêu anh hùng, thời kỳ và lãng mạn. Anh được biết đến nhiều nhất với vai diễn Wolverine trong loạt phim X-Men, cũng như vai chính trong bộ phim giả tưởng lãng mạn Kate & Leopold (2001), bộ phim hành động kinh dị Van Helsing (2004) , bộ phim truyền hình The Uy tín và Đài phun nước (2006), bộ phim lãng mạn lịch sử sử thi Úc (2008), phiên bản phim của Les Misérables (2012), và phim kinh dị Tù nhân (2013). Tác phẩm của anh trong Les Misérable đã mang lại cho anh đề cử giải Oscar đầu tiên cho Nam diễn viên xuất sắc nhất và Giải Quả cầu vàng đầu tiên cho Nam diễn viên xuất sắc nhất - Phim điện ảnh hay hài kịch năm 2013. Trong nhà hát Broadway, Jackman đã giành giải Tony cho vai diễn trong The Boy from Oz . Là người dẫn chương trình bốn lần của Giải thưởng Tony, anh đã giành được một giải thưởng Emmy cho một trong những lần xuất hiện này. Jackman cũng đã tổ chức Giải thưởng Học viện lần thứ 81 vào ngày 22 tháng 2 năm 2009.</p>

										<p>Jackman được sinh ra ở Sydney, New South Wales, đến Grace McNeil (Greenwood) và Christopher John Jackman, một kế toán viên. Anh là con út trong năm người con. Cha mẹ anh, cả tiếng Anh, đã chuyển đến Úc ngay trước khi anh sinh ra. Ông cũng có tổ tiên là người Hy Lạp (từ ông cố) và người Scotland (từ bà ngoại).</p>
										<p>Jackman có bằng truyền thông với chuyên ngành báo chí của Đại học Công nghệ Sydney. Sau khi tốt nghiệp, anh theo đuổi bộ phim truyền hình tại Học viện Nghệ thuật biểu diễn Tây Úc, ngay sau đó anh được mời đóng vai chính trong bộ phim truyền hình nhà tù ABC-TV Correlli (1995), đối diện với người vợ tương lai Deborra-Lee Furness. Một số vai trò khách mời truyền hình theo sau, như một diễn viên và nhiều người đồng hành. Một ca sĩ thành đạt, Jackman đã đóng vai chính Gaston trong sản phẩm "Người đẹp và quái vật" của Úc. Anh xuất hiện với vai Joe Gillis trong sản phẩm "Sunset Boulevard" của Úc. Năm 1998, anh được chọn vào vai xoăn trong sản phẩm Trevor Nunn's Oklahoma của Nhà hát Quốc gia Hoàng gia. Jackman đã thực hiện hai bộ phim truyện, trong đó phần thứ hai, Er skineville Kings (1999), đã mang về cho ông một đề cử của Viện phim Úc cho Nam diễn viên xuất sắc nhất năm 1999. Gần đây, ông đã giành được một phần của Logan / Wolverine trong truyện tranh do Bryan Singer đạo diễn phim X-Men (2000). Trong thời gian rảnh rỗi, Jackman chơi piano, golf và guitar và thích lướt ván.</p>
										<p>Khi từ chối cơ hội đóng vai nhân vật của Richard Gere trong bộ phim do Harvey Weinstein sản xuất Chicago (2002): Tôi nghĩ rằng tôi còn quá trẻ cho vai diễn này. Bạn có một anh chàng 34 tuổi chống lại Catherine Zeta-Jones và Renée Zellweger và nó trở thành một bộ phim khác. Tại một thời điểm, Harvey đang nói với tôi rằng họ đang nghĩ về Kevin Spacey và Ivtold anh ta, 'Điều đó hoàn toàn chính xác. Bạn nên thuê anh ta. ' Sau đó tôi ở New York khi bộ phim mở ra và hàng đợi ở xung quanh. Tôi ngồi xuống và nghĩ rằng có lẽ tôi đã phạm sai lầm lớn nhất. Nhưng tôi vẫn thành thật nghĩ rằng đó là điều đúng đắn. Tôi vẫn nghĩ rằng tôi còn quá trẻ cho phần đó.
										</p>
						            </div>
						        </div>
						        <div id="mediaceb" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Video nổi bật Của</h3>
					       	 					<h2>Hugh Jackman</h2>
						            		</div>
						            	</div>
						            	<div class="title-hd-sm">
											<h4>Videos <span>(8)</span></h4>
										</div>
										<div class="mvsingle-item media-item">
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item1.jpg" alt="">
													<a class="fancybox-media hvr-grow"  href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Trailer:  Watch New Scenes</a></h6>
													<p class="time"> 1: 31</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item2.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Featurette: “Avengers Re-Assembled</a></h6>
													<p class="time"> 1: 03</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item3.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Robert Downey Jr</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Scarlett Johansson</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item1.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Featurette: Meet Quicksilver & The Scarlet Witch</a></h6>
													<p class="time"> 1: 31</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item2.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Director Joss Whedon</a></h6>
													<p class="time"> 1: 03</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item3.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Mark Ruffalo</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Official Trailer #2</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
										</div>
										<div class="title-hd-sm">
											<h4>Hình Ảnh <span> (21)</span></h4>
										</div>
										<div class="mvsingle-item">
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image11.jpg" ><img src="images/uploads/image1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery"  href="images/uploads/image21.jpg" ><img src="images/uploads/image2.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image31.jpg" ><img src="images/uploads/image3.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image41.jpg" ><img src="images/uploads/image4.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image51.jpg" ><img src="images/uploads/image5.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image61.jpg" ><img src="images/uploads/image6.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image71.jpg" ><img src="images/uploads/image7.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image81.jpg" ><img src="images/uploads/image8.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image91.jpg" ><img src="images/uploads/image9.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image101.jpg" ><img src="images/uploads/image10.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image111.jpg" ><img src="images/uploads/image1-1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image121.jpg" ><img src="images/uploads/image12.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image131.jpg" ><img src="images/uploads/image13.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image141.jpg" ><img src="images/uploads/image14.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image151.jpg" ><img src="images/uploads/image15.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image161.jpg" ><img src="images/uploads/image16.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image171.jpg" ><img src="images/uploads/image17.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image181.jpg" ><img src="images/uploads/image18.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image191.jpg" ><img src="images/uploads/image19.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image201.jpg" ><img src="images/uploads/image20.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image211.jpg" ><img src="images/uploads/image2-1.jpg" alt=""></a>
										</div>
						        	</div>
					       	 	</div>
					       	 	<div id="filmography" class="tab">
						        	<div class="row">
						            	<div class="rv-hd">
						            		<div>
						            			<h3>Phim đã đóng của</h3>
					       	 					<h2>Hugh Jackman</h2>
						            		</div>
										
						            	</div>
						            	<div class="topbar-filter">
											<p>Tìm thấy <span>8 phim</span> trong tổng số</p>
											<label>Xếp theo:</label>
											<select>
												<option value="popularity">Phổ biến:Giảm dần</option>
												<option value="popularity">Phổ biến:Tăng dần</option>
												<option value="rating">Lượt bình chọn:Giảm dần</option>
												<option value="rating">Lượt bình chọn:Tăng dần</option>
												<option value="date">Ngày phát hành:Giảm dần</option>
												<option value="date">Ngày phát hành:Tăng dần</option>
											</select>
										</div>
										<!-- movie cast -->
										<div class="mvcast-item">											
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film1.jpg" alt="">
													<div>
														<a href="#">X-Men: Apocalypse </a>
														<p class="time">Logan</p>
													</div>
													
												</div>
												<p>...  2016</p>
											</div>
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film2.jpg" alt="">
													<div>
														<a href="#">Eddie the Eagle </a>
														<p class="time">Bronson Peary</p>
													</div>
												</div>
												<p>...  2015</p>
											</div>
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film3.jpg" alt="">
													<div>
														<a href="#">Me and Earl and the Dying Girl </a>
														<p class="time">Hugh Jackman</p>
													</div>
												</div>
												<p>...  2015</p>
											</div>
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film4.jpg" alt="">
													<div>
														<a href="#">Night at the Museum 3 </a>
														<p class="time">Blackbeard</p>
													</div>
												</div>
												<p>...  2014</p>
											</div>
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film5.jpg" alt="">
													<div>
														<a href="#">X-Men: Days of Future Past </a>
														<p class="time">Wolverine</p>
													</div>
												</div>
												<p>...  2012</p>
											</div>
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film6.jpg" alt="">
													<div>
														<a href="#">The Wolverine </a>
														<p class="time">Logan</p>
													</div>
												</div>
												<p>...  2011</p>
											</div>
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film7.jpg" alt="">
													<div>
														<a href="#">Rise of the Guardians </a>
														<p class="time">Bunny</p>
													</div>
												</div>
												<p>...  2011</p>
											</div>
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="images/uploads/film8.jpg" alt="">
													<div>
														<a href="#">The Prestige </a>
														<p class="time">Robert Angier</p>
													</div>
												</div>
												<p>...  2010</p>
											</div>
										</div>
						            </div>
					       	 	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- celebrity single section-->

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