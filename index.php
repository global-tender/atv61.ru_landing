<!DOCTYPE html>
<html>
<head>

<?php
	$bg = array('back-min.jpg'/*, 'back1-min.jpg'*/);
	$ibg = rand(0, count($bg)-1);
	$selectedBg = "$bg[$ibg]";
?>
	<style>
		.banner {
			background:url("../images/<?=$selectedBg?>") center center / cover !important;
		}
	</style>

	<title>Альтернатива - Бухгалтерские и юридические услуги, Ростов-на-Дону</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="favicon.ico">
	<!--fonts-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Sansita+One' rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="ООО Альтернатива, Бухгалтерские услуги, Юридические услуги, Бухгалтерский аутсорсинг в Ростов-на-Дону, бухгалтерия Ростов-на-Дону" />
		<meta name="description" content="ООО Альтернатива, Бухгалтерские услуги, Юридические услуги, Бухгалтерский аутсорсинг в Ростов-на-Дону, бухгалтерия Ростов-на-Дону" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>
		<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					
					if ( $(".navigation").hasClass('fixed') )
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					else
						$('html,body').animate({scrollTop:$(this.hash).offset().top-72},1000);

				});
			});
		</script>
	<!-- start-smoth-scrolling -->

</head>
<body>
<!-- banner -->
<div id="home" class="banner">
	<div class="container">
		<div class="banner-info">
			<h1>Альтернатива</h1>
			<p>Бухгалтерские и юридические услуги</p>
		</div>
		<div class="banner-grids">
			<div class="col-md-4 banner-grid text-center">
				<div class="banner-left">
					<div class="top-contact-info-icon"><i class="fa fa-home fa-2x"></i></div>
					<div class="top-contact-info-text top-text-left">пр. Буденовский 26/57 оф. 14</div>
					</ul>
				</div>
			</div>
			<div class="col-md-4 banner-grid text-center">
				<div class="banner-middle">
					<div class="top-contact-info-icon"><i class="fa fa-phone fa-2x"></i></div>
					<div class="top-contact-info-text top-text-middle">+7 (863) 269-46-14<br />+7 (928) 130-12-60<br />+7 (909) 429-24-32</div>
				</div>
			</div>
			<div class="col-md-4 banner-grid text-center">
				<div class="banner-right">
					<div class="top-contact-info-icon"><i class="fa fa fa-envelope-o fa-2x"></i></div>
					<div class="top-contact-info-text top-text-right"><a href="mailto:alternativa50@mail.ru" title="Напишите нам">alternativa50@mail.ru</a></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- navigation -->
<div class="navigation">
	<div class="container">
		<div class="fixed-header">
			<div class="nav-left nav-city-mention">
				Ростов-на-Дону
			</div>
			<div class="nav-right">
				<span class="menu"><img src="images/menu.png" alt="" /></span>
					<nav class="cl-effect-1">
						<ul class="nav1">
							<li><a class="scroll" href="#home"><img src="images/home1-min.png" class="home-icon" /></a></li>
							<li><a class="scroll" href="#we-are-atv">О нас</a></li>
							<li><a class="scroll" href="#atv-services">Услуги</a></li>
							<li><a class="scroll" href="#atv-feedbacks">Отзывы</a></li>
							<li><a class="scroll" href="#get-in-touch">Контакты</a></li>
						</ul>
					</nav>
					
					<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
					<!-- //script for menu -->
					<!-- script-for sticky-nav -->
						<script>
						$(document).ready(function() {
							 var navoffeset=$(".navigation").offset().top;
							 $(window).scroll(function(){
								var scrollpos=$(window).scrollTop(); 
								if(scrollpos >=navoffeset){
									$(".navigation").addClass("fixed");
									$(".nav-city-mention").html("<a href='/'>Альтернатива</a>");
								}else{
									$(".navigation").removeClass("fixed");
									$(".nav-city-mention").html("Ростов-на-Дону");
								}
							 });
							 
						});
						</script>
					<!-- /script-for sticky-nav -->

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //navigation -->

<div class="bottle"></div>

<!-- our services -->
<div id="we-are-atv" class="our-services">
	<div class="container">
		<div class="our-info text-center">
			<h2><span class="highlight">Наша</span> компания</h2>
			<p><i>Почему выбирают нас</i></p>
			<div class="underline">
				
			</div>
		</div>
		<div class="our-grids">
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="brand-image icon_1"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>18 лет опыта</h3>
					<!-- <p>aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis.</p> -->
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="bulb-image icon_2"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Без затрат на бух.
					программы и справочно-
					правовые системы</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="graphic-image icon_6"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Гарантированная 
					правильность ведения
					учёта и составления
					отчётности</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="mobile-image icon_7"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Фиксированный
					размер оплаты</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="illustration-image icon_4"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Мы не уходим в
					отпуск и не болеем</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="video-image icon_5"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Без затрат на
					организацию рабочего
					места</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="video-image icon_3"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Описание преимущества</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="video-image icon_8"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Описание преимущества</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //our services -->

<!-- about-bottom -->
<div class="about-bottom">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-3 bottom-grid text-center">
				<div class="like"></div>
				<h2>10</h2>
				<p>Лет опыта</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="chat"></div>
				<h2>150</h2>
				<p>Компаний уже доверяют ведение бух. учёта нам</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="smiley"></div>
				<h2>5</h2>
				<p>Квалифицированных бухгалтеров в штате</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="flag"></div>
				<h2>&#8399;</h2>
				<p>Фиксированный размер оплаты</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about-bottom -->


<!-- pricing-table -->
<div id="atv-services" class="pricing-table">
	<div class="container">
		<div class="pricing-info text-center">
			<h2><span class="highlight">Наши</span> услуги</h2>
			<h3><i>Бухгалтерское сопровождение, Аудит и многое другое для Вашего успешного бизнеса</i></h3>
			<div class="underline">
				
			</div>
		</div>
		<div class="pricing-grids">
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>Комплексное
					бухгалтерское
					обслуживание</h3>
					<p>от <label>1000</label> &#8399;</p>
				</div>
				<ul>
					<li></li>
				</ul>
				<div class="started"><a href="#">Подробнее</a></div>
				<div class="para">
					<p></p>
				</div>
			</div>
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>Бухгалтерское
					сопровождение</h3>
					<p>от <label>1000</label> &#8399;</p>
				</div>
				<ul>
					<li></li>
				</ul>
				<div class="started"><a href="#">Подробнее</a></div>
				<div class="para">
					<p></p>
				</div>
			</div>
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>Постановка
					бухгалтерского
					учёта</h3>
					<p>от <label>1000</label> &#8399;</p>
				</div>
				<ul>
					<li></li>
				</ul>
				<div class="started"><a href="#">Подробнее</a></div>
				<div class="para">
					<p></p>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<br />
		<div class="pricing-grids">
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>Восстановление
					бухгалтерского и
					налогового учёта</h3>
					<p>от <label>1000</label> &#8399;</p>
				</div>
				<ul>
					<li></li>
				</ul>
				<div class="started"><a href="#">Подробнее</a></div>
				<div class="para">
					<p></p>
				</div>
			</div>
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>Сопровождение
					судебных споров</h3>
					<p>от <label>1000</label> &#8399;</p>
				</div>
				<ul>
					<li></li>
				</ul>
				<div class="started"><a href="#">Подробнее</a></div>
				<div class="para">
					<p></p>
				</div>
			</div>
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>Регистрация
					ООО или ИП</h3>
					<p>от <label>1000</label> &#8399;</p>
				</div>
				<ul>
					<li></li>
				</ul>
				<div class="started"><a href="#">Подробнее</a></div>
				<div class="para">
					<p></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //pricing-table -->
<!-- our-team -->
<div id="atv-feedbacks" class="our-team">
	<div class="container">
		<div class="team-info text-center">
			<h2><span>Отзывы</span> наших клиентов</h2>
			<h3></h3>
			<div class="underline">
				
			</div>
		</div>
		<br />

		<div class="feedback-container">
			<a href="#" class="jcarousel-control-prev inactive" data-jcarouselcontrol="true"><img src="images/left-arrow.png" /></a>
			<a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true"><img src="images/left-arrow.png" /></a>
			
			<div class="feedback-carousel">

				<div class="team-grids">
					<div class="col-md-3 team-grid">
						<div class="team-grid-image">
							<img src="images/88.jpg" alt=" "/>
							Фото
						</div>
						<div class="team-grid-info">
							<h3>Фамилия Имя</h3>
							<p><span class="highlight">Компания</span></p>
							<p class="team-grid-feedback">Текст отзыва</p>
						</div>
					</div>
					<div class="col-md-3 team-grid">
						<div class="team-grid-image">
							<img src="images/88.jpg" alt=" "/>
							Фото
						</div>
						<div class="team-grid-info">
							<h3>Фамилия Имя</h3>
							<p><span class="highlight">Компания</span></p>
							<p class="team-grid-feedback">Текст отзыва</p>
						</div>
					</div>
					<div class="col-md-3 team-grid">
						<div class="team-grid-image">
							<img src="images/88.jpg" alt=" "/>
							Фото
						</div>
						<div class="team-grid-info">
							<h3>Фамилия Имя</h3>
							<p><span class="highlight">Компания</span></p>
							<p class="team-grid-feedback">Текст отзыва</p>
						</div>
					</div>
					<div class="col-md-3 team-grid">
						<div class="team-grid-image">
							<img src="images/88.jpg" alt=" "/>
							Фото
						</div>
						<div class="team-grid-info">
							<h3>Фамилия Имя</h3>
							<p><span class="highlight">Компания</span></p>
							<p class="team-grid-feedback">Текст отзыва</p>
						</div>
					</div>
					<!-- <div class="clearfix"></div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //our-team -->

<!-- get-in -->
<div id="get-in-touch" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h2><span class="highlight">Как</span> нас найти</h2>
			<p></p>
		</div>
	</div>

		<div id="map" style="width: 100%; height: 400px"></div>
		<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				ymaps.ready(init);
				var myMap, 
					myPlacemark;

				function init(){ 
					myMap = new ymaps.Map("map", {
						center: [47.219214, 39.708392],
						zoom: 16
					}); 

					myMap.behaviors.disable("scrollZoom");
					
					myPlacemark = new ymaps.Placemark([47.219214, 39.708392], {
						hintContent: 'Альтернатива',
						balloonContent: 'Альтернатива: пр. Буденовский 26/57 оф. 14, г Ростов-на-Дону'
					}, {
						preset: 'islands#blueDotIcon'
					});

					myMap.balloon.open([47.219214, 39.708392], "<div class='mapAdress'>Ростов-на-Дону,<br/>пр. Буденовский 26/57<br/> офис 14</div>", {
						closeButton: true
					});
					
					myMap.geoObjects.add(myPlacemark);
				}
			});
			
		</script>

</div>
<!-- //get-in -->
<!-- contact-us -->
<div class="contact-us">
	<div class="container">
		<div class="contact-grids">
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"></div>
				<p class="cnt-text">г. Ростов-на-Дону<br />пр. Буденовский 26/57<br />офис 14<br />Пн - Пт: 9:00 – 17:00</p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="mail-icon"></div>
				<p class="cnt-text cnt-email"><a href="mailto:alternativa50@mail.ru" title="Напишите нам">alternativa50@mail.ru</a></p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="phone-icon"></div>
				<p class="cnt-text cnt-phone">+7 (863) 269-46-14<br />+7 (928) 130-12-60<br />+7 (909) 429-24-32</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="contact-info">

			<div class="message_sent_popup"><span class="message_sent_popup_text">Сообщение отправлено</span><div class="closePopup"><label class="x"></label></div></div>

			<form name="feedback_form" id="feedback_form">
				<input name="atv_name" type="text" placeholder="Ваше имя" required>
				<input name="atv_email" type="email" placeholder="Ваш E-Mail" required>
				<input name="atv_phone" type="text" placeholder="Номер телефона" required class="atv_phone" title="Номер телефона">
				<textarea name="atv_message" placeholder="Ваше сообщение" required></textarea>
				<input type="submit" name="submit_message" value="Отправить сообщение">
			</form>
		</div>
	</div>
</div>
<!-- //contact-us -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-left">
			<span class="white">«Альтернатива» 2015, Бухгалтерские и юридические услуги, г. Ростов-на-Дону</span>
		</div>
		<div class="footer-right">
			
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});

		$(document).ready(function(){
			$('#toTop').hover(function(){
				$('#toTop').animate({"margin-bottom":"7px"}, 'fast');
			},
			function(){
				$('#toTop').animate({"margin-bottom":"0px"}, 'fast');
			});
		});

	</script>
	<a href="#" id="toTop" style="display: block;" title="Вверх"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	<div class="overlay"></div>
</body>
</html>

<script>
	$(document).ready(function(){

		$("#feedback_form").submit(function() {

			var url = "feedback.php";

			$.ajax({
				type: "POST",
				url: url,
				data: $("#feedback_form").serialize(),
				success: function(data)
				{
					var json_data = JSON.parse(data);
					if (json_data['result'] == 'success')
					{
						$('.overlay').show();
						$('.message_sent_popup').show();
					}
					else
					{
						$('.message_sent_popup_text').empty();
						$('.message_sent_popup_text').html('Ошибка отправки сообщения!');
						
						$('.overlay').show();
						$('.message_sent_popup').show();

						console.log(json_data);
					}
				}
			});

			return false; // avoid to execute the actual submit of the form.
		});

		$(".overlay").on("click", function() {
			$(this).hide();
			$(".message_sent_popup").hide();

			$('#feedback_form').find("input[type=text], textarea").val("");
		})
		$(".closePopup").on("click", function() {
			$(".overlay").hide();
			$(".message_sent_popup").hide();

			$('#feedback_form').find("input[type=text], textarea").val("");
		})

		$('.atv_phone').mask('+0 (000) 000-00-00');
		$('.atv_phone').on('click', function() {
			if ( $('.atv_phone').val() == "" )
				$('.atv_phone').val('+7 ');
		});
	

		/* jcarousel */
			$('.feedback-carousel').jcarousel({
				animation: 'slow',
				wrap: 'both',
			});

			/*
			 Prev control initialization
			 */
			$('.jcarousel-control-prev')
				.on('jcarouselcontrol:active', function() {
					$(this).removeClass('inactive');
				})
				.on('jcarouselcontrol:inactive', function() {
					$(this).addClass('inactive');
				})
				.jcarouselControl({
					// Options go here
					target: '-=1'
				});

			/*
			 Next control initialization
			 */
			$('.jcarousel-control-next')
				.on('jcarouselcontrol:active', function() {
					$(this).removeClass('inactive');
				})
				.on('jcarouselcontrol:inactive', function() {
					$(this).addClass('inactive');
				})
				.jcarouselControl({
					// Options go here
					target: '+=1'
				});

			$('.jcarousel-control-prev').hover(function(){
				$('.jcarousel-control-prev').animate({"margin-left":"-107px"}, 'fast');
			},
			function(){
				$('.jcarousel-control-prev').animate({"margin-left":"-100px"}, 'fast');
			});

			$('.jcarousel-control-next').hover(function(){
				$('.jcarousel-control-next').animate({"margin-left":"7px"}, 'fast');
			},
			function(){
				$('.jcarousel-control-next').animate({"margin-left":"0px"}, 'fast');
			});
		/* end jcarousel */

	});

</script>
