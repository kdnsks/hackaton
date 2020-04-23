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
			                <li class="nav-item active">
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
	<div class="section banner-page" data-background="images/coronavirus1.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page text-light" style="text-shadow: #fff -1px -1px 0, 
                 #333 1px 1px 0;">ВСЁ О ВИРУСЕ</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Вирус</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

	<!--КОНТЕНТ-->
	<div class="col-8 mx-auto">
		<div class="row">
		    <div class="col-8 pl-5 pt-4">
		    	<h2 class="font-italic text-dark mb-0">ЧТО ТАКОЕ <span style="color:#ABC502; ">КОРОНАВИРУС?</span></h2>
		    	<h4>КОРОНАВИРУС или COVID-19 – это возбудитель ОРВИ,</h4> 
		    	<h4 class="mt-0">при котором отмечается выраженная интоксикация организма и проблемы с дыхательной и пищеварительной системами.</h4>
		    </div>
		    <div class="col-4 pt-4">
		    	<img src="images/coronaviruss.png" class="w-50">
		    </div>
		</div>
	</div>
	<div class="row">
        <div class="col-2 p-3 text-center">
            <h1 style="color: #ABC502;">2,25 млн</h1>
            <h4>Проведено тестов</h4>
        </div>
        <div class="col-2 p-3 text-center">
            <h1 style="color: #ABC502;">57 999</h1>
            <h4>Общее число случаев</h4>
        </div>
        <div class="col-2 p-3 text-center">
            <h1 style="color: #ABC502;">5 236</h1>
            <h4>Случаев заболевания за последние сутки</h4>
        </div>
        <div class="col-2 p-3 text-center">
            <h1 style="color: #ABC502;">4 420</h1>
            <h4>Человек выздоровело</h4>
        </div>
        <div class="col-2 p-3 text-center">
            <h1 style="color: #ABC502;">513</h1>
            <h4>Человека умерло</h4>
        </div>
        <div class="col-2 p-3 text-center">
            <h1 style="color: #ABC502;">0,85%</h1>
            <h4>Процент смертности</h4>
        </div>
    </div>
    <div class="col-8 mx-auto">
    	<div class="col-8 pl-5 pt-4 mt-5"><h2 class="font-italic text-dark">ПУТИ ПЕРЕДАЧИ:</h2></div>	
	</div>
	<div class="row">
		<div class="col-7 ml-5 mt-5">
	    		<h3><li>Воздушно-капельным путем (при кашле или чихании);</li></h3>
	    		<h3><li>Контактным путем (поручни в транспорте, дверные ручки и другие загрязненные поверхности и предметы).</li></h3>
	    </div>
	    <img src="images/puti.png" class="col-3 w-25">
	</div>
    <div class="col-8 mx-auto">

    	<div class="col-8 pl-5 pt-4"><h2 class="font-italic text-dark">ОСНОВНЫЕ <span style="color:#ABC502;" >СИМПТОМЫ:</span> </h2></div>	
	</div>
	<div class="mx-auto col-10">
		<div class="ml-5 mt-4 row">
    		<h3>Высокая температура</h3>
    		<h3 style="margin-left: 90px;">Головная боль</h3>
    		<h3 style="margin-left: 90px;">Утомляемость</h3>
    		<h3 style="margin-left: 120px;">Кашель</h3>
    		<h3 style="margin-left: 120px;">Боль в горле</h3>
    		
    	</div>
    	<div class="ml-5 mt-4 row">
    		<img src="images/viruss.png" class="ml-3">
    		<img src="images/headache.png" style="margin-left: 150px; width: 150px;" >
    		<img src="images/bolen.png" style="margin-left: 110px; width: 180px;">
    		<img src="images/bolen1.png" style="margin-left: 110px; width: 180px;">
    		<img src="images/bolen2.png" style="margin-left: 110px; width: 180px;">
    	</div>
    </div>
    <div class="col-8 mx-auto mt-5">

    	<div class="col-8 pl-5 pt-4"><h2 class="font-italic text-dark">ПРОФИЛАКТИКА:</h2></div>	
	</div>
	<div class="row mt-5">
		<div class="col-7 ml-5">
	    		<h3>1) <span style="color:#ABC502;">НЕ ВЫХОДИ</span> из дома без необходимости;</h3>
				<h3>2) <span style="color:#ABC502;">СОБЛЮДАЙ</span> безопасную дистанцию;</h3>
				<h3>3) <span style="color:#ABC502;">МОЙ</span> руки как можно чаще;</h3>
				<h3>4) <span style="color:#ABC502;">ПРИКРЫВАЙ</span> рот при кашле;</h3>
				<h3>5) <span style="color:#ABC502;">БОЛЕЕШЬ? </span>вызывай врача по телефону.</h3>
	    </div>
	    <img src="images/profilakt.png">
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