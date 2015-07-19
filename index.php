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
			background:url("../images/<?=$selectedBg?>") no-repeat 0px 0px !important;
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
							<li><a class="scroll" href="#about-us">О нас</a></li>
							<li><a class="scroll" href="#pricing-table">Услуги</a></li>
							<li><a class="scroll" href="#our-team">Преимущества</a></li>
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
<!-- our services -->
<div class="our-services">
	<div class="container">
		<div class="our-info text-center">
			<h2><span class="highlight">OUR</span> SERVICES</h2>
			<p><i>What We Do With Love</i></p>
			<div class="underline">
				<img src="images/underline.png" alt=" "/>
			</div>
		</div>
		<div class="our-grids">
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="brand-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Brand Identity</h3>
					<p>aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="bulb-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>UI/UX Design</h3>
					<p>aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="graphic-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Graphic Design</h3>
					<p>aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="mobile-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Mobile Application</h3>
					<p>aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="illustration-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Illustration</h3>
					<p>aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 our-grid">
				<div class="col-md-3 our-grid-left">
					<div class="video-image"></div>
				</div>
				<div class="col-md-9 our-grid-right">
					<h3>Videography</h3>
					<p>aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis.</p>
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
				<h2>2006</h2>
				<p>Satisfied Client</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="chat"></div>
				<h2>240</h2>
				<p>Clients Served</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="smiley"></div>
				<h2>120</h2>
				<p>Projects Delivered</p>
			</div>
			<div class="col-md-3 bottom-grid text-center">
				<div class="flag"></div>
				<h2>10</h2>
				<p>Awards Won</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about-bottom -->


<!-- pricing-table -->
<div id="pricing-table" class="pricing-table">
	<div class="container">
		<div class="pricing-info text-center">
			<h2><span class="highlight">PRICING</span> TABLE</h2>
			<h3><i>Choose The Best For You</i></h3>
			<div class="underline">
				<img src="images/underline3.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
		</div>
		<div class="pricing-grids">
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>BASIC PLAN</h3>
					<p><label>$</label> <span>25 </span>/ mo</p>
				</div>
				<ul>
					<li>60 Users</li>
					<li>Unlimited Forums</li>
					<li>Unlimited Reports</li>
					<li>3,000 Entries per Month</li>
					<li>200 MB Storage</li>
				</ul>
				<div class="started"><a href="#">GET STARTED NOW</a></div>
				<div class="para">
					<p>30 DAYS FREE TRIAL</p>
				</div>
			</div>
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>BASIC PLAN</h3>
					<p><label>$</label> <span>25 </span>/ mo</p>
				</div>
				<ul>
					<li>60 Users</li>
					<li>Unlimited Forums</li>
					<li>Unlimited Reports</li>
					<li>3,000 Entries per Month</li>
					<li>200 MB Storage</li>
				</ul>
				<div class="started"><a href="#">GET STARTED NOW</a></div>
				<div class="para">
					<p>30 DAYS FREE TRIAL</p>
				</div>
			</div>
			<div class="pricing-grid">
				<div class="basic-plan">
					<h3>BASIC PLAN</h3>
					<p><label>$</label> <span>25 </span>/ mo</p>
				</div>
				<ul>
					<li>60 Users</li>
					<li>Unlimited Forums</li>
					<li>Unlimited Reports</li>
					<li>3,000 Entries per Month</li>
					<li>200 MB Storage</li>
				</ul>
				<div class="started"><a href="#">GET STARTED NOW</a></div>
				<div class="para">
					<p>30 DAYS FREE TRIAL</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //pricing-table -->
<!-- our-team -->
<div id="our-team" class="our-team">
	<div class="container">
		<div class="team-info text-center">
			<h2><span>OUR</span> TEAM</h2>
			<h3><i>talented Folks</i></h3>
			<div class="underline">
				<img src="images/k.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
		</div>
		<div class="team-grids">
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-grid-image">
					<img src="images/8.jpg" alt=" "/>
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twit" href="#"></a></li>
						<li><a class="linkin" href="#"></a></li>
						<li><a class="be" href="#"></a></li>
					</ul>
				</div>
				<div class="team-grid-info">
					<h3>PATRICIA MEDINA</h3>
					<p><span class="highlight">Senior Designer</span></p>
					<p>Imperdiet nulla sem fringilla, purus enim amet, nascetur faucibus, adipiscing neque ut bibendum, 
					at felis nec in.</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //our-team -->

<!-- get-in -->
<div id="get-in-touch" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h2><span class="highlight">Как нас найти</span></h2>
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
				<input name="atv_email" type="text" placeholder="Ваш E-Mail" required>
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
			$('.atv_phone').val('+7 ');
		});
	});

</script>
