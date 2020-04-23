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
			                    <a class="nav-link" href="#about" style="font-family: Ololoo;" >О НАС</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#classes" style="font-family: Ololoo;">ONLINE-КЛАССЫ</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="#trainers" style="font-family: Ololoo;">ФИТНЕС КЛУБЫ</a>
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
    <div id="oc-fullslider" class="banner">
    	<div class="owl-carousel owl-theme full-screen">
	    	<div class="item">
	        	<img src="images/slide1.jpg" alt="Slider">
	        	<div class="overlay-bg"></div>
	        	<div class="container d-flex align-items-center">
	            	<div class="wrap-caption">
	            		<?php  
		                echo '<h1 class="caption-heading" style="font-family: Ololoo; text-shadow: #fff -1px -1px 0, 
                 #333 1px 1px 0;">ДОБРО ПОЖАЛОВАТЬ В HEALTHYLATION! ' . $res['name'] . '</h1>'
		                ?>
	            		<p class="caption-subheading" style="font-family: Ololoo; color: #489446; font-weight: bold;">ПОДДЕРЖИВАЙ СВОЁ ЗДОРОВЬЕ НЕ ВЫХОДЯ ИЗ ДОМА</p>
		                <p style="font-family: Ololoo; text-shadow: #fff -0.5px -0.5px 0, 
                 #333 0.5px 0.5px 0;">Теперь все тренировки онлайн! Вы можете приобрести любую тренировку, которую только захотите.</p>
		                <a href="contact.php" class="btn btn-primary" style="font-family: Ololoo; color: black;">СВЯЗАТЬСЯ</a>
		            </div>   
	            </div>
	    	</div>
	    	<div class="item">
	            <img src="images/slide2.jpg" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container d-flex align-items-center">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading" style="font-family: Ololoo; text-shadow: #fff -1px -1px 0, 
                 #333 1px 1px 0;">НАЧНИ СО СВОЕГО ПИТАНИЯ</h1>
	            		<p class="caption-subheading" style="font-family: Ololoo; color: #489446; font-weight: bold;">ПОДДЕРЖИВАЙ СВОЁ ЗДОРОВЬЕ НЕ ВЫХОДЯ ИЗ ДОМА</p>
		                <p style="font-family: Ololoo;">Правильное питание - 80% вашего результата!</p>
		                <a href="pitanye.php" class="btn btn-primary" style="font-family: Ololoo; color: black;">НАЧАТЬ</a>
		            </div>  
	            </div>
	        </div> 
	    	<div class="item">
	            <img src="images/slide3.jpg" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container d-flex align-items-center">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading" style="font-family: Ololoo; text-shadow: #fff -1px -1px 0, 
                 #333 1px 1px 0;">ФИТНЕС ОНЛАЙН-КЛАССЫ</h1>
	            		<p class="caption-subheading" style="font-family: Ololoo; color: #489446; font-weight: bold;">ПОДДЕРЖИВАЙ СВОЁ ЗДОРОВЬЕ НЕ ВЫХОДЯ ИЗ ДОМА</p>
		                <p style="font-family: Ololoo;">Ты сможешь заниматься онлайн с тренерами лучших фитнес клубов. Теперь вы можете приобрести любую тренировку, которую только захотите!</p>
		                <a href="#classes" class="btn btn-primary" style="font-family: Ololoo; color: black;">НАЧАТЬ</a>
		            </div>    
	            </div>
	        </div> 
    	</div>
	    <div class="custom-nav owl-nav"></div>
    </div>

    <!--БЛОК -->
	<div class="section services">
		<div class="content-wrap pb-0">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="row no-gutters overlap">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<!-- 1 -->
								<div class="rs-feature-box-1 bg-primary" data-background="images/w.png" style="opacity: 0.75;">
									<div class="title">КУПИ ОНЛАЙН-КЛАССЫ ПРЯМО СЕЙЧАС!<br></div>
									<div class="body">
										<p style="font-family: Ololoo;">Нажми на кнопку, чтобы сразу перейти к покупке онлайн-классов!</p>
										<a href="#packages" class="btn btn-secondary" style="font-family: Ololoo;">КУПИТЬ</a>
										<div class="clearfix"></div>
									</div>
					            </div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<!-- 2 -->
								<div class="rs-feature-box-1 bg-classes">
									<div class="title">НУЖНЫ СПОРТТОВАРЫ?<br>ЗАГЛЯНИ В НАШ ОНЛАЙН-МАГАЗИН</div>
									<div class="body">
										<div class="row">
											<p style="font-family: Ololoo;">Нажми на кнопку, чтобы сразу перейти к покупке онлайн-классов!</p>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6">
											</div>
										</div>
										<div class="spacer-10"></div>
										<a href="shop.php" class="btn btn-primary">В МАГАЗИН</a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				

	<!-- О НАС -->
	<div id="about" style="padding-bottom: 240px;"></div>
	<div  class="section">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8" >
						<h2 class="section-heading mb-4" style="font-family: Ololoo;" >
							ДОБРО ПОЖАЛОВАТЬ В HEALTHYLATION
						</h2>

						<p style="font-family: Ololoo;">Мы создали проект, который поможет вести активный образ жизни в домашних условиях. Для этого мы собрали видео с тренировками из разных источников от простой разминки до силовых, функциональных тренировок, а также предоставим возможность тренироваться по уникальным программам тренеров крупных фитнес клубов, сотрудничество с которыми является одной из главных наших целей. Йога, фитнес, кардио, стретчинг, табаты, ЛФК – здесь найдется все, что вы захотите. Также в свободном доступе размещены рецепты полезных блюд и спортивные товары.</p>
						<div class="spacer-30"></div>
						<div class="row">
							<!-- 1 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-thumbs-up"></i>
									</div>
									<div class="body-content">
										<h4>Простой интерфейс</h4>
										<p>Легкий и быстрый доступ к различным видам физической активности: от простых упражнений для поддержания хорошего самочувствия до функциональных тренировок.</p>
									</div>
								</div>
							</div>
							<!-- 2 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="body-content">
										<h4 style="font-family: Ololoo;">Онлайн тренировки</h4>
										<p style="font-family: Ololoo;">Ты сможешь заниматься онлайн с тренерами лучших фитнес клубов. Теперь не нужно куда-то идти, чтобы поддерживать себя в форме!</p>
									</div>
								</div>
							</div>
							<!-- 3 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-briefcase"></i>
									</div>
									<div class="body-content">
										<h4 style="font-family: Ololoo;">Многофункциональность</h4>
										<p style="font-family: Ololoo;">Наличие доступа к полезным рецептам и возможность приобрести фирменную продукцию фитнес клубов онлайн.</p>
									</div>
								</div>
							</div>
							<!-- 4 -->
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-icon-2">
									<div class="icon">
										<i class="fa fa-users"></i>
									</div>
									<div class="body-content">
										<h4 style="font-family: Ololoo;">Коронавирус</h4>
										<p style="font-family: Ololoo;">Благодаря нашему сайту вы будете знать не только последние новости и способы профилактики от коронавируса, но и улучшать свой иммунитет, занимаясь спортом!</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-4">
						
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="images/aireem.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title">AIREEM</div>
								<div class="detail">
									<div class="col">Разбработавшие проект</div>
									<div class="col">
										<div class="sosmed-icon d-inline-flex">
											<a href="#"><i class="fa fa-facebook"></i></a> 
											<a href="#"><i class="fa fa-twitter"></i></a> 
											<a href="https://www.instagram.com/healthylation/?hl=ru"><i class="fa fa-instagram"></i></a> 
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

	<!-- ВИДЕО -->
	<div class="section bgi-cover-center" data-background="images/video.jpg" style="background-color: #000000;">
		<div class="content-wrap pt-3">
			<div class="container">
				<div class="row">
					<div class="col-6" style="height: 230px;">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/Ld7XD0QZjko?start=27" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto" style="border-radius: 15px;"></iframe>
					</div>
					<div class="col-5 ml-5">
						<h2 style="font-family: Ololoo; color: #ABC502; font-style: italic;" class="title">МОТИВАЦИОННОЕ ВИДЕО ДЛЯ ВАС!</h2>
						<h4 style="font-family: Ololoo; color: white;">Не дай вирусу стать причиной ухудшения Вашего здоровья..</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ОНЛАЙН-КЛАССЫ -->
	<div id="classes" class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center mb-4" style="font-family: Ololoo;">
							ONLINE-КЛАССЫ
						</h2>
						<p class="subheading text-center mb-5" style="font-family: Ololoo;">Выберите направление, подходящее для Вашей тренировки</p>
					</div>
				</div>

				<div class="row mt-4">
					
					<!-- 1 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="fitness.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/fitness.jpeg" alt="" class="img-fluid">
								</div>
								<div class="body-box">
									<div class="title" style="font-family: Ololoo;">КЛАССЫ ПО ФИТНЕСУ</div>
									<div class="detail">
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- 2 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="stratching.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/stretching.jpg" alt="" class="img-fluid" style="height: 262.5px;">
								</div>
								<div class="body-box">
									<div class="title" style="font-family: Ololoo;">КЛАССЫ ПО СТРЕТЧИНГУ</div>
									<div class="detail">
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- 3 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="yoga.php">	
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/yoga.jpg" alt="" class="img-fluid" style="height: 262.5px;">
								</div>
								<div class="body-box">
									<div class="title" style="font-family: Ololoo;">КЛАССЫ ПО ЙОГЕ</div>
									<div class="detail">
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- 4 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="trening.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/silovoi.jpeg" alt="" class="img-fluid" style="height: 262.5px;">
								</div>
								<div class="body-box">
									<div class="title" style="font-family: Ololoo;">СИЛОВОЙ ТРЕНИНГ</div>
									<div class="detail">
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- 5 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="aerobica.php">	
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/aerobika.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-box">
									<div class="title" style="font-family: Ololoo;">КЛАССЫ ПО АЭРОБИКЕ</div>
									<div class="detail">
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- 6 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="crossfit.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/krossfit.webp" alt="" class="img-fluid" style="height: 262.5px;">
								</div>
								<div class="body-box">
									<div class="title" style="font-family: Ololoo;">КЛАССЫ ПО КРОССФИТУ</div>
									<div class="detail">
									</div>
								</div>
							</div>
						</a>	
					</div>

				</div>

			</div>
		</div>
	</div>

	
	<!-- ФИТНЕС КЛУБЫ -->
	<div class="section bg-primary">
		<div class="content-wrap py-3">
			<div class="container">
				
				<div class="row">
					<div class="col-6 col-sm-4 col-md-2">
						<div class="client-img">
							<a href="#">
								<img src="images/logo1.jpg" alt="" class="img-fluid" style="border-radius: 15px;">
							</a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-2">
						<div class="client-img">
							<a href="#"><img src="images/logo2.jpg" alt="" class="img-fluid" style="height: 160px;border-radius: 15px;"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-2">
						<div class="client-img">
							<a href="#"><img src="images/logo3.png" alt="" class="img-fluid" style="height: 160px; border-radius: 15px;"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-2">
						<div class="client-img">
							<a href="#"><img src="images/logo4.png" alt="" class="img-fluid" style="height: 160px;border-radius: 15px;"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-2">
						<div class="client-img">
							<a href="#"><img src="images/logo5.jpg" alt="" class="img-fluid" style="height: 160px;border-radius: 15px;"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-2">
						<div class="client-img">
							<a href="#"><img src="images/logo6.jpg" alt="" class="img-fluid" style="height: 160px;border-radius: 15px;"></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- АБОНЕМЕНТЫ -->
	<div class="section" id="packages">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center">
							АБОНЕМЕНТЫ
						</h2>
						<p class="subheading text-center">Приобретите абонемент, чтобы получить доступ к онлайн-классам.</p>
					</div>

				</div>

				<div class="row mt-5">
						
					<!-- 1 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-pricing-1 bg-primary-1 mb-5">
						  <img src="images/price1.jpg" alt="" class="img-fluid">
						  <div class="blok-title">
				              <h3 class="title">ФИТНЕС</h3>
				              <div class="price"> 1499 руб<span>/мес.</span> </div> 
						  </div>
			              <div class="features">
			                <ul>
			                  <li>Укрепление здоровья</li>
			                  <li>Тренировка 3 раза в неделю</li>
			                  <li>Средняя нагрузка</li>
			                  <li>Улучшение выносливости</li>
			                  <li>Похудение, стройная фигура</li>
			                </ul>
			              </div>
			              <div class="action">
			                <a href="#" class="btn btn-secondary">ПРИОБРЕСТИ</a>
			              </div>
			            </div>
					</div>

					<!-- 2 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-pricing-1 bg-primary-1 mb-5">
						  <img src="images/price2.jpg" alt="" class="img-fluid">
						  <div class="blok-title">
				              <h3 class="title">ЙОГА</h3>
				              <div class="price"> 1599 руб<span>/мес.</span> </div> 
						  </div>
			              <div class="features">
			                <ul>
			                  <li>Занятие 4 раза в неделю</li>
			                  <li>Умеренная нагрузка</li>
			                  <li>Развитие гибкости</li>
			                  <li>Помогает познать себя</li>
			                  <li>Снимает стресс</li>
			                </ul>
			              </div>
			              <div class="action">
			                <a href="#" class="btn btn-secondary">ПРИОБРЕСТИ</a>
			              </div>
			            </div>
					</div>

					<!-- 3 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-pricing-1 bg-primary-1 mb-5">
						  <img src="images/price3.jpg" alt="" class="img-fluid">
						  <div class="blok-title p m-0 text-left">
				              <h3 class="ml-3 title" style="font-size: 19px;">СИЛОВОЙ ТРЕНИНГ</h3>
				              <div class="price"> 2199руб<span>/мес.</span> </div> 
						  </div>
			              <div class="features">
			                <ul>
			                  <li>Тренировка 3 раза в неделю</li>
			                  <li>Высокая нагрузка</li>
			                  <li>Развитие силы</li>
			                  <li>Укрепление мышц, сухожилий, связок</li>
			                  <li>Ускорение обмена веществ</li>
			                </ul>
			              </div>
			              <div class="action">
			                <a href="#" class="btn btn-secondary">ПРИОБРЕСТИ</a>
			              </div>
			            </div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div id="trainers" class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center mb-4" style="font-family: Ololoo;">
							ФИТНЕС КЛУБЫ
						</h2>
						<p class="subheading text-center mb-5">Фитнес клубы, предоставляющие возможность  заниматься дома.</p>
					</div>
				</div>

				<div class="row mt-4">
					
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="fitnessclub.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/fitstudio.jpg" alt="" class="img-fluid w-100" style="height: 250px;">
								</div>
								<div class="body-box">
										<div class="title">FIT STUDIO</div>
										<div class="detail">
											<div class="col">Personal Trainers</div>
											<div class="col">
												<div class="sosmed-icon d-inline-flex">
													<a href="#"><i class="fa fa-facebook"></i></a> 
													<a href="#"><i class="fa fa-twitter"></i></a> 
													<a href="https://www.instagram.com/fitstudio_ykt/"><i class="fa fa-instagram"></i></a> 
												</div>
											</div>
										</div>
								</div>
							</div>
						</a>
					</div>

					<!-- Item 2 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="fitnessclub.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/idolgym.jpg" alt="" class="img-fluid w-100" style="height: 250px;">
								</div>
								<div class="body-box">
									
										<div class="title">IDOL GYM</div>
										<div class="detail">
											<div class="col">Personal Trainers</div>
											<div class="col">
												<div class="sosmed-icon d-inline-flex">
													<a href="#"><i class="fa fa-facebook"></i></a> 
													<a href="#"><i class="fa fa-twitter"></i></a> 
													<a href="https://www.instagram.com/idolgym_ykt/"><i class="fa fa-instagram"></i></a> 
												</div>
											</div>
										</div>
								</div>
							</div>
						</a>
					</div>

					<!-- Item 3 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="fitnessclub.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/bodyline.jpg" alt="" class="img-fluid w-100" style="height: 250px;">
								</div>
								<div class="body-box">
									<div class="title">BODYLINE</div>
									<div class="detail">
										<div class="col">Personal Trainers</div>
										<div class="col">
											<div class="sosmed-icon d-inline-flex">
												<a href="#"><i class="fa fa-facebook"></i></a> 
												<a href="#"><i class="fa fa-twitter"></i></a> 
												<a href="https://www.instagram.com/bodylineykt/?hl=ru"><i class="fa fa-instagram"></i></a> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- Item 4 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="fitnessclub.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/crossfit.jpg" alt="" class="img-fluid w-100" style="height: 250px;">
								</div>
								<div class="body-box">
									<div class="title">CROSSFIT YKT</div>
									<div class="detail">
										<div class="col">Personal Trainers</div>
										<div class="col">
											<div class="sosmed-icon d-inline-flex">
												<a href="#"><i class="fa fa-facebook"></i></a> 
												<a href="#"><i class="fa fa-twitter"></i></a> 
												<a href="https://www.instagram.com/crossfit_ykt/?hl=ru"><i class="fa fa-instagram"></i></a> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- 5 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="fitnessclub.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/maxfitness.jpg" alt="" class="img-fluid w-100" style="height: 250px;">
								</div>
								<div class="body-box">
									<div class="title">MAX FITNESS</div>
									<div class="detail">
										<div class="col">Personal Trainers</div>
										<div class="col">
											<div class="sosmed-icon d-inline-flex">
												<a href="#"><i class="fa fa-facebook"></i></a> 
												<a href="#"><i class="fa fa-twitter"></i></a> 
												<a href="https://www.instagram.com/maxfitness_ykt/?hl=ru"><i class="fa fa-instagram"></i></a> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<!-- 6 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<a href="fitnessclub.php">
							<div class="rs-class-box mb-5">
								<div class="media-box">
									<img src="images/sportbaza.jpg" alt="" class="img-fluid w-100" style="height: 250px;">
								</div>
								<div class="body-box">
									<div class="title">SPORTBAZA</div>
									<div class="detail">
										<div class="col">Personal Trainers</div>
										<div class="col">
											<div class="sosmed-icon d-inline-flex">
												<a href="#"><i class="fa fa-facebook"></i></a> 
												<a href="#"><i class="fa fa-twitter"></i></a> 
												<a href="https://www.instagram.com/sportbazateam/?hl=ru"><i class="fa fa-instagram"></i></a> 
											</div>
										</div>
									</div>
								</div>
							</div>
					</a>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- БЛОК -->
	<div class="section bgi-cover-center" data-background="images/gym.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
						<div class="text-center">
							<h2 class="text-primary"><em>БУДЬ В ФОРМЕ, НЕ ВЫХОДЯ ИЗ ДОМА!</em></h2>
							<p class="mb-5">Во время самоизяции нужно прежде всего думать о своём здоровье - приобрети онлайн-классы для поддержания формы.</p>
							<a href="contact.php" class="btn btn-primary">СВЯЗАТЬСЯ</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- НОВОСТИ -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8">
						<h2 class="section-heading mb-4">
							НОВОСТИ ПРО КОРОНАВИРУС
						</h2>
						<div class="rs-news-1 mb-3">
							<div class="media-box">
								<div class="meta-date"><span>22</span>Апр.</div>
								<a href="https://ria.ru/20200422/1570398434.html">
									<img src="images/ria.webp" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body-box">
								
								<div class="title"><a href="https://ria.ru/20200422/1570398434.html">Ученые назвали вакцинацию единственным способом побороть пандемию</a></div>
								<p>Ученые назвали вакцинацию единственным способом побороть пандемию COVID-19. Выводы исследователей опубликованы на портале Science Alert.</p>
								<a href="https://ria.ru/20200422/1570398434.html" class="btn btn-primary">ПОДРОБНЕЕ</a>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="widget widget-text">
							
							<div class="latest-post-item">
								<div class="meta-date"><span>22</span>Апр.</div>
								<div class="title"><a href="https://ria.ru/20200422/1570392117.html">Назван самый вероятный путь заражения коронавирусом</a></div>
								<p class="meta-hour">07:00</p>
								<p>Ученые из немецкого Института вирусологии и исследований в области ВИЧ..</p>
								<a href="https://ria.ru/20200422/1570392117.html" class="more-detail">ПОДРОБНЕЕ</a>
							</div>
							<div class="latest-post-item">
								<div class="meta-date"><span>22</span>Апр.</div>
								<div class="title"><a href="https://ria.ru/20200422/1570376111.html">Удастся ли Трампу наказать Китай за коронавирус</a></div>
								<p class="meta-hour">11:00</p>
								<p>Инфицированных коронавирусом американцев все больше, люди теряют здоровье..</p>
								<a href="https://ria.ru/20200422/1570376111.html" class="more-detail">ПОДРОБНЕЕ</a>
							</div>
							<div class="latest-post-item">
								<div class="meta-date"><span>22</span>Апр.</div>
								<div class="title"><a href="https://ria.ru/20200422/1570409880.html">В Минздраве призвали продлить ограничительные меры на майские праздники</a></div>
								<p class="meta-hour">10:30</p>
								<p>Ограничительные меры, которые ввели для борьбы с распространением коронавируса..</p>
								<a href="https://ria.ru/20200422/1570409880.html" class="more-detail">ПОДРОБНЕЕ</a>
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