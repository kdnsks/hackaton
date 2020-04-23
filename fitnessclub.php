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

<body style="background-image: url(images/background.jpg); background-size: 100% 100%;">
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
			    </nav> 

			</div>
		</div>
    </div>
	
	<!--content-->
	<div class="col-12 pt-4">
		<div class="col-8 mx-auto">
			<!--1-->
			<div class="col-12 border border-secondary rounded bg-dark mb-3">
				<div class="row">
					<div class="col-5 mr-5">
						<div class="pt-3 mb-3">
							<img src="images/logo1.jpg" class="w-75">
						</div>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Адрес: ул. Дзержинского, 32, ТЦ "Апельсин+", 2 и 3 этажи</p>
						<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Телефон: 8 (924) 765-09-99</p>
					</div>
					<div class="col-6 pt-5">
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">FIT-STUDIO ЯКУТСК – просторная и хорошо вентилируемая фитнес-студия со всем необходимым тренажерным оборудованием, отдельной зоной кардио и большим и малым заломгрупповых тренировок.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Уникальная система тренировок, разработанная экспертами сети, развивает основные физические качества и приводит к стойким результатам.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Тренажеры от ведущих мировых брендов помогают добиться желаемых целей, будь то похудение, набор мышечной массы или поддержание тонуса.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Спектр тренировок включает форматы на основе системы Smart Fitness и много актуальных и интересных направлений.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;"></p>
					</div>
				</div>
			</div>
			<!--2-->
			<div class="col-12 border border-secondary mb-3 rounded bg-dark">
				<div class="row">
					<div class="col-5 mr-5">
						<div class="pt-3 mb-3">
							<img src="images/logo2.jpg" class="w-75">
						</div>
						<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Адрес: ул. Орджоникидзе, 28, Якутск</p>
						<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Телефон: +7‒914‒270‒51‒33</p>
					</div>
					<div class="col-6 pt-5">
						<p class="text-white" style="font-family: Ololoo; font-size: 16px;">IDOL GYM</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Это фитнес-клубы, объединяющие в себе одну идею.
						Вы сможете подобрать тренировки разной интенсивности для любых целей.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">НАШ ЗАЛ - НАША СЕМЬЯ</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Мы относимся к атлетам, тренерам и гостям точно так же, создавая место, которое
						приносит уверенность, позитивный настрой и привязанность.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">IDOL FOOD</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">- Бар</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">- Только здоровое питание</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">- Рацион на день и расчет по кбжу</p>
					</div>
				</div>
			</div>
			<!--3-->
			<div class="col-12 border border-secondary mb-3 rounded bg-dark">
				<div class="row">
					<div class="col-5 mr-5">
						<div class="pt-3 mb-3">
							<img src="images/logo3.png" class="w-75">
							</div>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Адрес: ул. Лермонтова, 94/2</p>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Телефон: +7‒914‒239‒29‒68</p>
						</div>
					<div class="col-6 pt-5">
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">BodyLine — это фитнес семья, у которой есть свои традиции и мероприятия. Каждый клиент для нас важен! Это команда единомышленников, которая всегда вас поддержит!</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">BodyLine — команда из высококвалифицированных тренеров, прошедших обучение в городах Москва и Санкт-Петербург.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">На сегодняшний день команда BodyLine Ykt это:</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">— Сеть фитнес центров по Республике Саха (Якутия)</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">— Онлайн тренировки на всей территории страны — мобильное приложение собственной разработки.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">— Салон красоты «BodyLine_Beauty»</p>
					</div>
				</div>
			</div>
			<!--4-->
			<div class="col-12 border border-secondary mb-3 rounded bg-dark">
				<div class="row">
					<div class="col-5 mr-5">
						<div class="pt-3 mb-3">
							<img src="images/logo4.png" class="w-75">
							</div>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Адрес: ул. Дзержинского, 16/1</p>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Телефон: +7‒914‒2‒744‒616</p>
						</div>
					<div class="col-6 pt-5">
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">CrossFit Ykt поможет вам всегда выглядеть на все 100%. Для вас специалисты центра подобрали различные программы тренировок и комплексные процедуры для поддержания бодрости и хорошего настроения. Вам готовы предложить много способов быть в тонусе. Специально для вас в CrossFit Ykt собрали лучшие из них, и предлагают записаться на занятия.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Первый Кроссфит клуб в Якутии! </p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Лучшая команда тренеров и атлетов!</p>
					</div>
				</div>
			</div>
			<!--5-->
			<div class="col-12 border border-secondary mb-3 rounded bg-dark">
				<div class="row">
					<div class="col-5 mr-5">
						<div class="pt-3 mb-3">
							<img src="images/logo5.jpg" class="w-75">
							</div>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Адрес: 203 мкр, 4</p>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Телефон: Телефон: 8 (914) 270-66-15</p>
					    </div>
					<div class="col-6 pt-5">
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Фитнес клуб, который создан настоящими спортсменами. Выбор оборудования, устройство залов, многообразие программ — всё сделано в соответствии с высокими стандартами качества и безопасности.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Все тренеры имеют профессиональное педагогическое образование, являются выступающими спортсменами с высокими спортивными разрядами и званиями. Здесь знают, как сбросить вес, набрать мышечную массу и сделать фигуру красивой и подтянутой.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">В распоряжении посетителей удобный тренажёрный зал, кардиозона (беговые дорожки, эллипсы, степперы, вело- и гребной тренажёр), отдельный зал единоборств, зона функционального тренинга.</p>
					</div>
				</div>
			</div>
			<!--6-->
			<div class="col-12 border border-secondary mb-3 rounded bg-dark" >
				<div class="row">
					<div class="col-5 mr-5">
						<div class="pt-3 mb-3">
							<img src="images/logo6.jpg" class="w-75">
							</div>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Адрес: ул. Лермонтова, 36</p>
							<p class="text-white" style="font-family: Ololoo; font-size: 16px;">Телефон: 8 (914) 270-10-40</p>
					    </div>
					<div class="col-6 pt-5">
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">СпортБАЗА это не просто спортивный клуб или отдельные студии, это яркий и интересный проект со своей индивидуальностью и атмосферой.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Продуманный дизайн в стиле лофт — одна из особенностей клуба. Мы объединили самые разные стили и предметы: грубую бетонную отделку, кирпичные вставки, интересные детали и уникальные световые решения. Это совершенно новый формат не только для занятий спортом, но и модное место для общения и встреч с друзьями и коллегами.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Индивидуальный, эффективный план тренировок.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Внимание тренера и корректировка техники.</p>
						<p class="text-white mb-1" style="font-family: Ololoo; font-size: 16px;">Постоянные мастер-классы профессионалов своего дела.</p>
					</div>
				</div>
			</div>
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