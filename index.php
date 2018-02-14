<?php 
     session_start(); 
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 
     $status = $_GET['status']; ?>
     
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TranSphere &copy; - Be halfway there</title>
    <link rel="icon" href="images/icon.png">
	
	

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">



	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<?php if($status=="sent") { ?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Екипът на TranSphere Ви благодари!</h5>
      </div>
      <div class="modal-body">
        <h3>Вашата кандидатура беше изпратена успешно!</h3>
      </div>
      <div class="modal-footer">
        <a href="index.php" type="button" class="btn btn-secondary">Затвори</a>
      </div>
    </div>
  </div>
</div>
	<?php } ?>
	<header role="banner" id="main-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-main-nav-toggle main-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		          	<a class="navbar-brand" href="index.html">TranSphere</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="home"><span>Начало</span></a></li>
		            <li><a href="#" data-nav-section="about"><span>За нас</span></a></li>
		            <li><a href="#" data-nav-section="services"><span>Услуги</span></a></li>
		            <li><a href="#" data-nav-section="features"><span>Функции</span></a></li>
		            <li><a href="#" data-nav-section="testimonials"><span>Стани Шофьор</span></a></li>
		            <li><a href="#" data-nav-section="press"><span><b>Кога започваме?</b></span></a></li>
		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<div id="slider" data-section="home">
		<div class="owl-carousel owl-carousel-fullwidth">
		    <div class="item" style="background-image:url(images/taxi.jpeg);">
		    	<div class="container" style="position: relative;">
		    		<div class="row">
					    <div class="col-md-7 col-sm-7">
			    			<div class="main-owl-text-wrap">
						    	<div class="main-owl-text">
						    		<h1 class="main-lead to-animate">Живота изисква движение</h1>
									<h2 class="main-sub-lead to-animate">Запознайте се с иновативните услуги, които TranSphere предлага - за първи път в България!</h3>
									<p class="to-animate-2"><a href="#" data-nav-section="about" class="btn btn-primary btn-lg">Същност на проекта</a></p>
						    	</div>
						    </div>
					    </div>
					    <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 iphone-image">
					    	<div class="hidden-xs hidden-sm iphone to-animate-2"><img src="images/iphone-2.png" alt="CreativeMultiverse"></div>
					    </div>

		    		</div>
		    	</div>
		    </div>
			<!-- You may change the background color here.  -->
		    <div class="item" style="background-image:url(images/road.jpeg);">
		    	<div class="container" style="position: relative;">
		    		<div class="row">
		    			<div class="col-md-7 col-md-push-1 col-md-push-5 col-sm-7 col-sm-push-1 col-sm-push-5">
			    			<div class="main-owl-text-wrap">
						    	<div class="main-owl-text">
						    		<h1 class="main-lead to-animate">СПЕСТЕТЕ ДО 50%</h1>
									<h2 class="main-sub-lead to-animate">Използвайки услугите на приложението TranSphere Вие спестявате до 50% от цената на редовен трансфер.</h3>
									<p class="to-animate-2"><a href="#" data-nav-section="features" class="btn btn-primary btn-lg">Как става това?</a></p>
						    	</div>
						    </div>
					    </div>
					    <div class="col-md-4 col-md-pull-7 col-sm-4 col-sm-pull-7 iphone-image">
					    	<div class="hidden-xs hidden-sm iphone to-animate-2"><img src="images/iphone-1.png" alt="CreativeMultiverse"></div>
					    </div>

		    		</div>
		    	</div>
		    </div>

		    <div class="item" style="background-image:url(images/soon.jpeg)">
		    	<div class="overlay"></div>
		    	<div class="container" style="position: relative;">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2 text-center">
		    				<div class="main-owl-text-wrap">
						    	<div class="main-owl-text">
		    						<h1 class="main-lead to-animate">Започваме много скоро!</h1>
									<h2 class="main-sub-lead to-animate">Следете нашата фейсбук страница, за да бъдете в течение с развитието на проекта.</h3>
									<p class="to-animate-2"><a href="#" data-nav-section="press" class="btn btn-primary btn-lg">Разбери кога започваме!</a></p>
								</div>
							</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>

		</div>
	</div>
	
	<div id="main-about-us" data-section="about">
		<div class="container">
			<div class="row row-bottom-padded-lg" id="about-us">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">За проекта</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 to-animate">
							<h3><b>TranSphere - "Be halfway there"</b> е българско интернет приложение за динамични транспортни услуги, обслужващо потребители, имащи нужда от достъпен, изгоден и иновативен вътрешен транспорт.</h3>
						</div>
					</div>
				</div>
				<div class="col-md-8 to-animate">
					<img src="images/travel.jpeg" class="img-responsive img-rounded" alt="Creative Multiverse">
				</div>
				<div class="col-md-4 to-animate">
					<h2>Как започна всичко?</h2>
					<p>Нарастването на броя на чуждестранните посетители в България се увеличава непрекъснато. Един от най-предпочитаните начини за транспорт от мястото на пристигане до мястото, където посетителят ще отседне е чрез т. нар. трансфери. Често се случва обаче обратният курс на шофьора да е празен и тук се появява нашето решение. </p>
					<p>Приложението TranSphere дава възможност на посетителите да се възползват от празен курс и по този начин да бъдат трансферирани на цена, равняваща се на 50% от редовната.</p>
					<p><a href="#" data-nav-section="team" class="btn btn-primary">Запознайте се с екипа</a></p>
				</div>
			</div>
			<div class="row" id="team" data-section="team">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>Кой стои зад проекта?</h2>
				</div>
				<div class="col-md-12">
					<div class="row row-bottom-padded-lg">
						<div class="col-md-6 text-center to-animate">
							<div class="person">
								<img src="images/georgi.jpg" class="img-responsive img-rounded" alt="Person">
								<h3 class="name">Георги Мутафчиев</h3>
								<div class="position">Web Entrepreneur</div>
								<p>Георги е 17-годишен уеб разработчик. Занимава се с UI, UX и програмиране на PHP. Организатор е на хакатона <a href="http://digitfest.eu" target="_blank">DIGIT Festival</a> и е основател на <a target="_blank" href="http://gimdesign.eu">GIM Design</a>.</p>
								<ul class="social social-circle">
									<li><a target="_blank" href="https://www.facebook.com/mutiwave"><i class="icon-facebook"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/in/georgi-mut/"><i class="icon-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center to-animate">
							<div class="person">
								<img src="images/asen.jpg" class="img-responsive img-rounded" alt="Person">
								<h3 class="name">Асен Георгиев</h3>
								<div class="position">Web Developer</div>
								<p>Програмист, изобретател и физик по хоби. В свободното си време обичам да разработвам софтуер и да правя дизайн на уеб приложения.</p>
								<ul class="social social-circle">
									<li><a target="_blank" href="https://www.facebook.com/asen.georgiev.3720"><i class="icon-facebook"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/in/asen-georgiev-6939b3118/"><i class="icon-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="main-our-services" data-section="services">
		<div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Нашите услуги</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 to-animate">
							<h3>Какво е уникалното, което приложението предоставя на своите посетители?</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box to-animate">
						<div class="icon colored-4"><span><i class="icon-heart"></i></span></div>
						<h3>Безплатно за използване</h3>
						<p>Приложението ще бъде достъпно за своите потребителите напълно безплатно. Единствените плащания, които ще се осъществяват, ще бъдат за резервирането на трансфери.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box to-animate">
						<div class="icon colored-5"><span><i class="icon-rocket"></i></span></div>
						<h3>Лесно за използване</h3>
						<p>Интерфейсът на приложението ще бъде максимално изчистен и разбираем. Закупуването на трансфер ще се осъществява по бърз и удобен начин. Информацията ще се достъпва само с няколко клика.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box to-animate">
						<div class="icon colored-6"><span><i class="icon-user"></i></span></div>
						<h3>Най-ниски цени</h3>
						<p>Цените за трансфери, които ще бъдат предложени в пространството на платформата, ще бъдат гарантирано най-ниски, а качеството на услугите ще бъде гарантирано.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="main-features" data-section="features">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-features-1">Функции на приложението</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 single-animate animate-features-2">
							
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-sm">
                
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 main-service to-animate">
					<div class="main-icon"><i class="icon-crop"></i></div>
					<div class="main-desc">
						<h3>Пълна приспособимост</h3>
						<p>Приложението е подходящо за използване от устройства с различна големина на екрана. </p>
					</div>
				</div>
                
				<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 main-service to-animate">
					<div class="main-icon"><i class="icon-speedometer"></i></div>
					<div class="main-desc">
						<h3>Бързо търсене</h3>
						<p>Открийте най-бързия и удобен трансфер, попълвайки формуляр с вашите изисквания. </p>
					</div>	
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 main-service to-animate">
					<div class="main-icon"><i class="icon-heart"></i></div>
					<div class="main-desc">
						<h3>Оценка и мнение</h3>
						<p>Поставете оценка на осъществен трансфер, както и да напишете мнение относно качеството на услугата. </p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 main-service to-animate">
					<div class="main-icon"><i class="icon-key"></i></div>
					<div class="main-desc">
						<h3>Сигурно плащане</h3>
						<p>Плащането в пространството на нашето приложение се извършва посредством най-съвременните технологии. </p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 single-animate animate-features-3">
					<a href="#" class="btn btn-primary btn-block">Открийте ни във facebook</a>
				</div>
			</div>
		</div>
	</div>

	<div id="main-testimonials" data-section="testimonials">		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Стани Шофьор</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Попълни формуляра и кандидатствай за присъединяване към нашата платформа.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: -5vh;">
				<form method="post" action="index.php?status=sent">
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label style="color: white;" for="inputPassword4">Име на фирма:</label>
      <input type="text" name="imefirma" class="form-control" id="inputPassword4" placeholder="Фирма ООД" required>
    </div>
    <div class="form-group col-md-6">
      <label style="color: white;" for="inputEmail4">МОЛ на фирма:</label>
      <input type="text" name="molfirma" class="form-control" id="inputEmail4" placeholder="Име Фамилия" required>
    </div>
  </div>
  <div class="form-group">
    <label style="color: white;" for="inputAddress">Адрес на фирма:</label>
    <input type="text" name="adresfirma" class="form-control" id="inputAddress" placeholder="Гр. София, ул. 'Първа' №123" required>
  </div>
                    <div class="form-row">
    <div class="form-group col-md-4">
      <label style="color: white;" for="inputEmail4">ЕИК на фирма:</label>
      <input type="text" name="eikfirma" class="form-control" id="inputEmail4" placeholder="пр. 1234567890" required>
    </div>
                        <div class="form-group col-md-4">
      <label style="color: white;" for="inputEmail4">Номер на шофьорска книжка:</label>
      <input type="text" name="nomerknijka" class="form-control" id="inputEmail4" placeholder="пр. 0011223344" required>
    </div>
    <div class="form-group col-md-4">
      <label style="color: white;" for="inputPassword4">Имейл за връзка:</label>
      <input type="email" name="sender" class="form-control" id="inputPassword4" placeholder="example@example.com" required>
    </div>
  </div>
  <div class="form-group">
    <label style="color: white;" for="inputAddress2">Мотивация за включване в проекта:</label>
      <textarea rows="5" name="motivacia" class="form-control" id="inputAddress2" placeholder="Опишете накратко каква е вашата мотивация да се включите като шофьор в проекта TranSphere..." required></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label style="color: white;" for="inputState">Начална точка:</label>
      <select id="inputState" name="nachalnat" class="form-control" required>
        <option value="Bansko" selected>Банско</option>
        <option value="Razlog">Разлог</option>
          <option value="Blagoevgrad">Благоевград</option>
          <option value="Gotse Delchev">Гоце Делчев</option>
          <option value="Sandanski">Сандански</option>
          <option value="Petrich">Петрич</option>
      </select>
    </div>
      <div class="form-group col-md-3">
      <label style="color: white;" for="inputState">Финална точка:</label>
      <select id="inputState" name="finalnat" class="form-control" required>
        <option value="Sofia" selected>София</option>
        <option value="Kyustendil">Кюстендил</option>
          <option value="Plovdiv">Пловдив</option>
          <option value="Burgas">Бургас</option>
          <option value="Varna">Варна</option>
          <option value="Yambol">Ямбол</option>
          <option value="Smolyan">Смолян</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label style="color: white;" for="inputState">Вид превозно средство:</label>
      <select id="inputState" name="prevoz" class="form-control" required>
        <option value="Autobus" selected>Автобус</option>
        <option value="Microbus">Микробус</option>
          <option value="Car">Лек автомобил</option>
          <option value="Other">Друго</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label style="color: white;" for="inputZip">Телефон за връзка:</label>
      <input type="text" name="tel" class="form-control" id="inputZip" placeholder="пр. 08888888888" required>
    </div>
  </div>
                    <hr><br><br><br>
                    <div class="form-row">
  <button style="width: 50%; margin-left: 25%; color: #ff6600; background-color: white;" name="submit" type="submit" class="btn btn-primary">Кандидатствай</button>
                    </div>
</form>
                <?php 
if(isset($_POST['submit'])){
                 $imefirma = $_POST['imefirma'];
                 $adresfirma = $_POST['adresfirma'];
                 $eikfirma = $_POST['eikfirma'];
                 $nomerknijka = $_POST['nomerknijka'];
                 $molfirma = $_POST['molfirma'];
                 $nachalnat = $_POST['nachalnat'];
                 $finalnat = $_POST['finalnat'];
                 $motivacia = $_POST['motivacia'];
                 $prevoz = $_POST['prevoz'];
                 $tel = $_POST['tel'];
                 $sender = $_POST['sender'];
                 
                 $to = "georgi.bansko@gmail.com";
                 
$subject = "TranSphere: Кандидатстване за шофьор";
$txt = "<b>Информация за фирмата:</b> <br><br>
<b>Име на фирмата:</b> " . $imefirma . " <br>
<b>ЕИК на фирмата:</b> " . $eikfirma . " <br>
<b>МОЛ на фирмата:</b> " . $molfirma . " <br>
<b>Адрес на фирмата:</b> " . $adresfirma . " <br>
<b>Номер на шофьорка книжка:</b> " . $nomerknijka . " <br><br>
<b>Мотивация:</b> " . $motivacia . " <br><br>
<b>Начална точка:</b> " . $nachalnat . " <br>
<b>Финална точка:</b> " . $finalnat . " <br>
<b>Вид превоз:</b> " . $prevoz . " <br>
<b>Тел. за връзка:</b> " . $tel . " <br>
<b>Имейл за връзка:</b> " . $sender . " <br>";
 

 $mail_from = "From: $sender" .
                    "\r\n" . "Reply-To: $sender" . "\r\n";
                    $mail_from.="Content-type: text/html; charset = utf-8 \r\n";
        
mail($to,$subject,$txt,$mail_from);
header('Location: index.php?status=send');
                }?>
                
                
                
			</div>
		</div>
	</div>

	<div id="main-press" data-section="press">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-press-1">Кога започваме?</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2">
							<h1 style="font-size: 45px;"><b>Бета-версия на приложението ще бъде публикувана през месец март 2018-та година!</b></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row row-bottom-padded-sm">
				<div class="col-md-12">
					<p class="copyright text-center">&copy; 2018 Georgi & Asen. Всички права са запазени. | Посетете нашата facebook страница: <a href="#" target="_blank">ТУК</a></p>
				</div>
			</div>
		</div>
	</footer>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

	</body>
</html>