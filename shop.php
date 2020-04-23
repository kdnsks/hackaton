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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
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
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php" style="font-family: Ololoo;">ONLINE-КЛАССЫ</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php" style="font-family: Ololoo;">ФИТНЕС КЛУБЫ</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="page-news.php" style="font-family: Ololoo;">О ВИРУСЕ</a>
			                </li>
			                <li class="nav-item active">
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
	<div class="container row mx-auto " style="margin-top: 2%; margin-bottom: 2%">
		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11 "><img src="images/whey.jpg" alt="" style="width: 12rem"></div>			
			<h5 class="text-center strong">Cybermass / Протеин Whey protein (орех-шоколад) 908г</h5>
			<h5 class="text-center strong">Цена: 978 рублей</h5>
			<h5 class="text-center strong">Поставщик: IDOL Gym</h5>
			<p>Whey Protein — сывороточный протеин от CYBERMASS. Это протеиновая смесь сывороточного концентрата и изолята. Протеин сыворотки – лучший в стимуляции мышечного роста благодаря полноценному аминокислотному профилю и большому содержанию ВСАА!</p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>

		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11"><img src="images/whey2.jpg" alt="" style="width: 12rem"></div>			
			<h5 class="text-center strong">Cybermass / Протеин Whey protein (кокос) 908г</h5>
			<h5 class="text-center strong">Цена: 978 рублей</h5>
			<h5 class="text-center strong">Поставщик: IDOL Gym</h5>
			<p >Whey Protein — сывороточный протеин от CYBERMASS. Это протеиновая смесь сывороточного концентрата и изолята. Протеин сыворотки – лучший в стимуляции мышечного роста благодаря полноценному аминокислотному профилю и большому содержанию ВСАА!</p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>

		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11"><img src="images/whey3.jpg" alt="" style="width: 12rem"></div>			
			<h5 class="text-center strong">Cybermass / Протеин Whey protein (банан-клубника) 908г</h5>
			<h5 class="text-center strong">Цена: 978 рублей</h5>
			<h5 class="text-center strong">Поставщик: IDOL Gym</h5>
			<p >Whey Protein — сывороточный протеин от CYBERMASS. Это протеиновая смесь сывороточного концентрата и изолята. Протеин сыворотки – лучший в стимуляции мышечного роста благодаря полноценному аминокислотному профилю и большому содержанию ВСАА! </p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>
	</div>

	<div class="container row mx-auto " style="margin-top: 2%; margin-bottom: 2%">
		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11 "><img src="images/gant.jpg" alt="" style="width: 12rem; margin-top: 15%"></div>			
			<h5 class="text-center strong">Гантель гексагональная обрезиненная RZR, 10 кг</h5>
			<h5 class="text-center strong">Цена: 3299 рублей</h5>
			<h5 class="text-center strong">Поставщик: Fitness Life</h5>
			<p >Гантели RZR весом 10 кг - оптимальный выбор для силовых упражнений и функциональных тренировок. Грузы имеют шестиугольную форму и покрытие из высокопрочного синтетического каучука, которые обеспечивает стабильность гантели как на ровной, так и на наклонной поверхности пола. Кроме того, каучуковое покрытие защищает поверхности при столкновении. Шестиугольная форма весов придает гантелям устойчивость, что позволяет использовать их в качестве упоров для отжиманий и планки. Гриф анатомической формы имеет хромированное покрытие с фрезерованным профилем, которое обеспечивает надежный захват. Благодаря цельной конструкции отсутствует риск падения дисков, что свойственно гантелям с наборными весами.</p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>

		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11"><img src="images/gant2.jpg" alt="" style="width: 12rem; margin-top: 15%"></div>			
			<h5 class="text-center strong">Гантель с неопреновым покрытием 5 кг Torneo</h5>
			<h5 class="text-center strong">Цена: 1449 рублей</h5>
			<h5 class="text-center strong">Поставщик: Fitness Life</h5>
			<p>Гантель эргономичной формы с скругленными краями предназначена для безопасного использования и хранения в домашних условиях. Нескользящее неопреновое покрытие обеспечивает надежный хват во время занятий и амортизацию при касании с полом. Особенности: комфортно держать в руке благодаря эргономичной ручке; неопреновые гантели не скользят и не выпадут из рук даже при интенсивных тренировках; при падении с небольшой высоты безопасны для пола и коврового покрытия.</p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>

		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11"><img src="images/gant3.jpg" alt="" style="width: 12rem; margin-top: 15%"></div>			
			<h5 class="text-center strong">Гантель Torneo, 3 кг</h5>
			<h5 class="text-center strong">Цена: 749 рублей</h5>
			<h5 class="text-center strong">Поставщик: Fitness Life</h5>
			<p >Гантель эргономичной формы с скругленными краями предназначена для безопасного использования и хранения в домашних условиях. Нескользящее неопреновое покрытие обеспечивает надежный хват во время занятий и амортизацию при касании с полом. 
<br>
<ul>Особенности: 
<li>комфортно держать в руке благодаря эргономичной ручке;</li>
<li>неопреновые гантели не скользят и не выпадут из рук даже при интенсивных тренировках;</li>
<li>при падении с небольшой высоты безопасны для пола и коврового покрытия.</li></ul> </p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>
	</div>

	<div class="container row mx-auto " style="margin-top: 2%; margin-bottom: 2%">
		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11 "><img src="images/gen.jpg" alt="" style="width: 12rem"></div>			
			<h5 class="text-center strong">GENETICLAB / Сывороточный протеин WHEY PRO "Шоколад", 900гр </h5>
			<h5 class="text-center strong">Цена: 1350 рублей</h5>
			<h5 class="text-center strong">Поставщик: FitStudio</h5>
			<p>Сывороточный протеин разработан для обеспечения полноценного питания мышц.
Концентрат сывороточного белка в его составе содержит набор аминокислот, которые отвечают за строение мышечных клеток и их защиту от разрушения во время тренировок.</p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>

		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11"><img src="images/gen2.jpg" alt="" style="width: 12rem"></div>			
			<h5 class="text-center strong">GENETICLAB / Сывороточный ротеин WHEY PRO без вкуса, 900гр</h5>
			<h5 class="text-center strong">Цена: 1350 рублей</h5>
			<h5 class="text-center strong">Поставщик: FitStudio</h5>
			<p>Сывороточный протеин разработан для обеспечения полноценного питания мышц.
Концентрат сывороточного белка в его составе содержит набор аминокислот, которые отвечают за строение мышечных клеток и их защиту от разрушения во время тренировок.</p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>

		<div class="col-3 border border-dark" style="margin-left: 7%">
			<div class="mx-auto col-11"><img src="images/gen3.jpg" alt="" style="width: 9rem; margin-left: 15%"></div>			
			<h5 class="text-center strong">GENETICLAB / Сывороточный протеин Whey Pro кофе, 900 гр</h5>
			<h5 class="text-center strong">Цена: 1350 рублей</h5>
			<h5 class="text-center strong">Поставщик: FitStudio</h5>
			<p>Сывороточный протеин разработан для обеспечения полноценного питания мышц.
Концентрат сывороточного белка в его составе содержит набор аминокислот, которые отвечают за строение мышечных клеток и их защиту от разрушения во время тренировок. </p>
			<button class="btn btn-success btn-sm " style="background: #ABC502; margin-bottom: 3%; margin-left: 20%">КУПИТЬ</button>
		</div>
	</div>
	
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