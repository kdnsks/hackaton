<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <title>Healthylation</title>
	
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script src="js/vendor/modernizr.min.js"></script>
    <link rel="shortcut icon" href="images/icon.png">
	<link rel="apple-touch-icon" href="images/icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icon.png">

</head>

<body>
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'healthylation');
	$check = mysqli_query($connect, "SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
	$res = $check->fetch_assoc();
?>
	<!-- АНИМАЦИЯ ЗАГРУЗКИ ЭКРАНА -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- ЯКОРЬ -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Вверх</a>

	<!-- НАЧАЛО ШАПКИ -->
    <div class="header header-1">

		<!-- ШАПКА С КАРУСЕЛЬ -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
						<img src="images/logog.jpg" alt="" class="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown" >
			            <ul class="navbar-nav ml-auto">
			            	<li class="nav-item dropdown dmenu">
			                    <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: Ololoo;">
						          ГЛАВНАЯ
						        </a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php" style="font-family: Ololoo;" >О НАС</a>
			                </li>
			                <li class="nav-item active">
			                    <a class="nav-link" href="index.php" style="font-family: Ololoo;">ONLINE-КЛАССЫ</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php" style="font-family: Ololoo;">ФИТНЕС КЛУБЫ</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="page-news.php" style="font-family: Ololoo;">О ВИРУСЕ</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="shop.php" style="font-family: Ololoo;">МАГАЗИН</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="contact.php" style="font-family: Ololoo;">КОНТАКТЫ</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="login.php" style="font-family: Ololoo;">РЕГИСТРАЦИЯ</a>
			                </li>

			            </ul>
			            <div class="float-right d-inline-flex">
							<a href="https://www.instagram.com/healthylation/?hl=ru"><i class="fa fa-instagram" style="color: #ABC502;"></i></a> 
						</div>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>
	<!-- БАННЕР -->
	<div class="section banner-page" data-background="images/courses.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page ">КЛАССЫ ПО ЙОГЕ</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Классы по йоге</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

    <!-- КЛАССЫ -->
	<div id="trainers" class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					
					<!-- 1 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<iframe width="360" height="315" src="https://www.youtube.com/embed/D5TvAnW-l3M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="body-box">
								<div class="title">ЗАНЯТИЕ №1</div>
								<div class="detail">
									<div class="col">Домашняя тренировка!</div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 2 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<iframe width="360" height="315" src="https://www.youtube.com/embed/-gUiaImki1s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="body-box">
								<div class="title">ЗАНЯТИЕ №2</div>
								<div class="detail">
									<div class="col">Домашняя тренировка!</div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 3 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<iframe width="360" height="315" src="https://www.youtube.com/embed/hjklQnYRz_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="body-box">
								<div class="title">ЗАНЯТИЕ №3</div>
								<div class="detail">
									<div class="col">Домашняя тренировка!</div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 4 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<iframe width="360" height="315" src="https://www.youtube.com/embed/uF_L0MppAHU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="body-box">
								<div class="title">ЗАНЯТИЕ №4</div>
								<div class="detail">
									<div class="col">Домашняя тренировка!</div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 5 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<iframe width="360" height="315" src="https://www.youtube.com/embed/IWEI01lxPR0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="body-box">
								<div class="title">ЗАНЯТИЕ №5</div>
								<div class="detail">
									<div class="col">Домашняя тренировка!</div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 6 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<iframe width="360" height="315" src="https://www.youtube.com/embed/E5i4rDc_GA8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="body-box">
								<div class="title">ЗАНЯТИЕ №6</div>
								<div class="detail">
									<div class="col">Домашняя тренировка!</div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
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

	<!-- ИНФА -->
	<div class="section bg-primary">
		<div class="content-wrap py-3">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">EMAIL</h3>
							<p class="mb-0" style="font-family: Ololoo; font-weight: bold;"><a href="mailto:aytalina170303@gmail.com">aytalina170303@gmail.com</a></p>
							<p style="font-family: Ololoo; font-weight: bold;"><a href="mailto:lyglaevartem2003@gmail.com">lyglaevartem2003@gmail.com</a></p>
							<p style="font-family: Ololoo; font-weight: bold;"><a href="mailto:karinokey1335@gmail.com">karinokey1335@gmail.com</a></p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info bordered">
							<h3 class="title">ЗВОНИ СЕЙЧАС!</h3>
							<h3>8 (914) 110-56-85</h3>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<div class="cta-info">
							<h3 class="title">АДРЕС</h3>
							<p style="font-family: Ololoo; font-weight: bold;">пр. Ленина, 1 <br>677000, Якутск</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ФУТЕР -->
	<div class="footer"  data-background="images/footer.jpg">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 p-0">
						<div class="text-center">
							<img src="images/icon.png" alt="" class="mb-2 rounded-circle" style="width: 100px;"><br>
							<div class="sosmed-icon d-inline-flex">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="https://www.instagram.com/healthylation/?hl=ru"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-pinterest"></i></a> 
								<a href="#"><i class="fa fa-linkedin"></i></a> 
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2020 &copy; <span class="color-primary">Healthylation - be healthy</span>. Designed by AIREEM</p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- JS -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<script src="js/script.js"></script>

</body>
</html>