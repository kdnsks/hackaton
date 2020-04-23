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
    <!-- БАННЕР-->
	<div class="section banner-page" data-background="images/eda.jpeg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page text-light" style="text-shadow: #fff -1px -1px 0, 
                 #333 1px 1px 0;"><span style="color: #ABC502; text-shadow: #fff -1px -1px 0, #333 1px 1px 0;">ЗДОРОВОЕ </span> ПИТАНИЕ</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Здоровое питание</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
	<h2 class="font-italic text-dark text-center mt-4">СОВЕТЫ ПО <span style="color: #ABC502;">ЗДОРОВОМУ</span> ПИТАНИЮ</h2>
	<h5 class="text-center col-6 mx-auto">Соблюдение принципов здорового питания под силу каждому. Прочитайте приведенные ниже правила и возьмите их за основу при планировании своего питания – и первый шаг к здоровому питанию и образу жизни будет сделан.</h5>
	<div class="col-11 mx-auto pl-5">
		<div class="row p-4 col-12">
			<div class="col-6">
				<h1 class="font-italic text-dark">1</h1>
				<h3 class="text-dark">Будьте активны – двигайтесь больше, сидите меньше.</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Поступление и расход энергии должны быть сбалансированы. Для поддержания нормального обмена веществ и хорошего состояния здоровья обязательно нужно двигаться и сокращать время, проведенное в течение дня в сидячем положении, особенно за различными экранами.</p>
			</div>
			<div class="col-6">
				<img src="images/sport.jpg" style="border-radius: 18px;" class="w-75 ml-5">
			</div>
		</div>
		<div class="row p-4 col-12">
			<div class="col-6">
				<img src="images/eda1.jpg" style="border-radius: 18px;" class="w-75 ml-5">
			</div>
			<div class="col-6">
				<h1 class="font-italic text-dark">2</h1>
				<h3 class="text-dark">Питайтесь регулярно.</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Распланируйте свой день таким образом, чтобы было время для приема пищи как минимум три раза в день, по возможности регулярно, чтобы избежать переедания, вызванного длительным перерывом между приемами пищи. При необходимости между основными приемами пищи можно перекусывать фруктами и овощами, орехами и семечками, йогуртом. С точки зрения здоровья зубов нельзя есть чаще пяти раз в день.</p>
			</div>
		</div>
		<div class="row p-4 col-12">
			<div class="col-6">
				<h1 class="font-italic text-dark">3</h1>
				<h3 class="text-dark">Утоляйте жажду водой.</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Вода необходима для транспортировки питательных веществ и их остатков, нормального функционирования пищеварительных соков и многого другого. В общей сложности взрослому человеку нужно 28–35 мл воды на килограмм веса тела, т.е. ок. 2–3 литров. Если человек нормально питается, он получает большую часть жидкости с пищей, например, из фруктов и овощей, супов и напитков.</p>
			</div>
			<div class="col-6">
				<img src="images/eda2.jpg" style="border-radius: 18px;" class="w-75 ml-5">
			</div>
		</div>
		<div class="row p-4 col-12">
			<div class="col-6">
				<img src="images/eda4.jpg" style="border-radius: 18px;" class="w-75 ml-5">
			</div>
			<div class="col-6">
				<h1 class="font-italic text-dark">4</h1>
				<h3 class="text-dark">Больше продуктов, богатых пищевыми волокнами.</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Чтобы в вашем меню было достаточно клетчатки, необходимой для нормального пищеварения, нужно есть как зерновые продукты, так и фрукты, овощи и ягоды. Сократите потребление продуктов из белой муки и ешьте больше цельнозерновых продуктов, богатых пищевыми волокнами и более полноценных. </p>
			</div>
			
		</div>
		<div class="row p-4 col-12">
			<div class="col-6">
				<h1 class="font-italic text-dark">5</h1>
				<h3 class="text-dark">Потребляйте жиры разумно.</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Наш организм обязательно нуждается в жирах, но в незначительных количествах. Поэтому при приготовлении пищи следует отдавать предпочтение приготовлению на пару, варке, тушению или запеканию в духовке, а не обжарке в большом количестве жира. Чтобы уменьшить содержание насыщенных жирных кислот в самой пище, перед приготовлением снимите с продукта шкурку (в том числе с курицы), удалите видимый глазу жир и сало.</p>
			</div>
			<div class="col-6">
				<img src="images/eda5.png" style="border-radius: 18px;" class="w-75 ml-5">
			</div>
		</div>
	</div>
	<h2 class="font-italic text-dark text-center mt-4">РЕЦЕПТЫ <span style="color: #ABC502;">ПОЛЕЗНЫХ</span> БЛЮД</h2>
	<h5 class="text-center col-6 mx-auto">Польза от здорового питания будет только если его применять регулярно. Удобней будет составлять меню заранее на несколько дней вперёд. На нашем сайте много рецептов приготовления полезных и здоровых вторых блюд. Вы обязательно подберете себе рецепт, подходящий к вашему меню.</h5>
	<div class="col-11 mx-auto pl-5">
		<div class="row p-4 col-12">
			<div class="col-6">
				<h1 class="font-italic text-dark">1</h1>
				<h3 class="text-dark">САЛАТ "ВЕЧЕРНИЙ"</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Планируешь похудеть к лету? Этот вечерний салат поможет тебе сжигать жир быстрее!</p>
				<p style="font-size: 20px; font-family: Ololoo;">Для рецепта салата для похудения надо взять:</p>
				<li style="font-size: 20px; font-family: Ololoo;">Консервированный тунец;</li>
				<li style="font-size: 20px; font-family: Ololoo;">1 Грейпфрут;</li>
				<li style="font-size: 20px; font-family: Ololoo;">1 Огурец;</li>
				<li style="font-size: 20px; font-family: Ololoo;">Половину красного лука;</li>
				<li style="font-size: 20px; font-family: Ololoo;">Зеленый салат.</li>
				<p style="font-size: 20px; font-family: Ololoo;">Тунец надо брать в собственном соку. Сливаем с него лишний маринад и разминаем вилкой в салатнице. Огурец и лук нарезаем в салат. Грейпфрут разрезаем пополам, ножом проходимся между долек, чтобы избавиться от горьких перегородок, и ложкой достаем мякоть. Листья салата промываем и рвём луками. 
				Всего в таком салате будет содержаться примерно 30 грамм белка и минимальное количество жиров с углеводами.</p>
			</div>
			<div class="col-6">
				<iframe width="560" height="415" src="https://www.youtube.com/embed/3LiWyRJLH20" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 18px; margin-top: 110px;"></iframe>
			</div>
		</div>
		<div class="row p-4 col-12">
			<div class="col-6">
				<iframe width="560" height="415" src="https://www.youtube.com/embed/7haPHFIMgww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 18px; margin-top: 110px;"></iframe>
			</div>
			<div class="col-6">
				<h1 class="font-italic text-dark">2</h1>
				<h3 class="text-dark">Бризоли</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Умопомрачительно Вкусные Бризоли с двумя Великолепными Начинками! Вкусно, что Можно Проглотить Язык! Советую сегодня же приготовить!</p> 
				<li style="font-size: 20px; font-family: Ololoo;">400 грамм любого мясного фарша;</li>
				<li style="font-size: 20px; font-family: Ololoo;">6 куриных яиц;</li>
				<li style="font-size: 20px; font-family: Ololoo;">6 ст.ложек молока;</li>
				<li style="font-size: 20px; font-family: Ololoo;">60 грамм сыра моцарелла;</li>
				<li style="font-size: 20px; font-family: Ololoo;">150-200 грамм маринованных или соленых огурцов;</li>
				<li style="font-size: 20px; font-family: Ololoo;">150-200 грамм свежих томатов;</li>
				<li style="font-size: 20px; font-family: Ololoo;">репчатый лук;</li>
				<li style="font-size: 20px; font-family: Ololoo;">чеснок;</li>
				<li style="font-size: 20px; font-family: Ololoo;">соль, перец, зелень по вкусу.</li>

			</div>
		</div>
		<div class="row p-4 col-12">
			<div class="col-6">
				<h1 class="font-italic text-dark">3</h1>
				<h3 class="text-dark">Творожный пирог.</h3>
				<p style="font-size: 20px; font-family: Ololoo;">Гениальный пирог из творога, лаваша и сыра! Вкуснее чем хачапури, а калорий меньше! Обязательно попробуйте - это очень вкусно!</p> 
				<li style="font-size: 20px; font-family: Ololoo;">400 грамм творога 5%</li>
				<li style="font-size: 20px; font-family: Ololoo;">1 куриное яйцо;</li>
				<li style="font-size: 20px; font-family: Ololoo;">50 грамм сыра;</li>
				<li style="font-size: 20px; font-family: Ololoo;">тонкий лаваш 150 грамм 1 лист;</li>
				<li style="font-size: 20px; font-family: Ololoo;">укроп 10 грамм;</li>
				<li style="font-size: 20px; font-family: Ololoo;">соль по вкусу.</li>
			</div>
			<div class="col-6">
				<iframe width="560" height="415" src="https://www.youtube.com/embed/pMT4sO7svGM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 18px; margin-top: 80px;"></iframe>
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