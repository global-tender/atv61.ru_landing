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
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
<!-- about-us -->
<div id="about-us" class="about-us">
	<div class="container">
		<div class="about-info text-center">
			<h2><span class="highlight">ABOUT</span> US</h2>
			<h3><i>What We Do</i></h3>
			<div class="underline">
				<img src="images/underline2.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
			porttitor bibendum facilisi suspendisse</p>
		</div>
	</div>
	<div class="about-grids">
		<div class="col-md-6 about-left">
			<div class="about-image">
				<img src="images/3.jpg" alt=" "/>
			</div>
		</div>
		<div class="col-md-6 about-right">
			<p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.</p>
			<div class="about-right-list">
						<div class="tab1 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li><span> </span></li>
								<li class="text">DESIGN WITH LOVE</li>
							</ul>
							<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
								porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
						</div>
						<div class="tab2 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li><span class="circle"> </span></li>
								<li class="text">CLEAN STRATEGY</li>
							
							</ul>
							<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
								porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
						</div>
						<div class="tab3 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li><span class="tv"> </span></li>
								<li class="text">CREATIVE FEATURES</li>
								
							</ul>
							<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
								porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
						</div>
						<div class="tab4 wow bounceIn" data-wow-delay="0.4s">
							<ul>
								<li><span class="bulb"> </span></li>
								<li class="text">AWESOME SUPPORT</li>
							</ul>
							<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, 
								porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis.</p>
						</div>
			</div>
					<!-- script for tabs -->
						<script>
							$(document).ready(function(){
								$(".tab1 p").hide();
								$(".tab2 p").hide();
								$(".tab3 p").hide();
								$(".tab4 p").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 p").slideToggle(300);
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 p").slideToggle(300);
									$(".tab1 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 p").slideToggle(300);
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();	
								})								
							});
						</script>
					<!-- script for tabs -->
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="our-skills">
		<div class="container">
			<div class="skill-info">
				<h2>OUR SKILL</h2>
			</div>
			<div class="skill-grids">
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-1"></div>
						<p>Web Design</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-2"></div>
						<p>HTML/CSS</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-3"></div>
						<p>Graphic Design</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-4"></div>
						<p>UI/UX</p>
					</div>
					<div class="clearfix"> </div>
				 <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#000000', '#99cc33'], ['#000000', '#99cc33'], ['#000000', '#99cc33'], ['#000000', '#99cc33']
									];
								for (var i = 1; i <= 5; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 40 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 10,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
			</div>
		</div>	
	</div>
</div>
<!-- //about-us -->
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
<!-- our-works -->
<div id="our-works" class="our-works">
	<div class="container">
		<div class="our-work-info text-center wow bounceIn" data-wow-delay="0.4s">
			<h2><span class="highlight">OUR</span> WORKS</h2>
			<h3><i>What We Have Done</i></h3>
			<div class="underline">
				<img src="images/underline.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
		</div>	
		<div class="portfolio-grid">
					<ul id="filters">
						<li class="active"><span class="filter " data-filter="app card icon set web">All</span> </li>
						<li><span class="filter" data-filter="app"> Website</span></li>
						<li><span class="filter" data-filter="card"> Graphic</span></li>
						<li><span class="filter" data-filter="icon">Identity</span></li>
						<li><span class="filter" data-filter="set">Mobile Apps</span></li>

					</ul>
			<div id="portfoliolist">
						<div class="port-grid">
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
										<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
											<img class="img-responsive" src="images/a.jpg" alt=""  />
											<div class="simple-in">
											
													<ul class="social img-one">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
														<div class="clearfix"> </div>
													</ul>
											</div>
										</a>
										<div class="simple-out">
											<h4>FLAT MOCKUP</h4>
											<p>Identity</p>
										</div>							
								</div>
							</div>				
							<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
									<div class="portfolio-wrapper">		
										<a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
											<img class="img-responsive" src="images/g.jpg" alt=""/>
											<div class="simple-in one">
												
													<ul class="social img-two">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
														<div class="clearfix"> </div>
													</ul>
											</div>
										</a>
											<div class="simple-out">
													<h4>FLAT ICON</h4>
													<p>Graphic</p>
											</div>							
									</div>
							</div>		
							<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
										<img class="img-responsive" src="images/d.jpg"  alt="" />
										<div class="simple-in two">
												
												<ul class="social img-three">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
													
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
									<div class="simple-out">
										<h4>FREE ICON</h4>
										<p>Mobile Apps</p>
									
									</div>							
								</div>
							</div>
						</div>	
						<div class="port-grid">
							<div class="portfolio set mix_all" data-cat="set" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
									<a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img class="img-responsive" src="images/m.jpg" alt=""  />
									<div class="simple-in three">
												<ul class="social img-two">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
													
													<div class="clearfix"> </div>
												</ul>
									</div>	
									</a>
									<div class="simple-out">
										<h4>ATOM WEBSITE</h4>
										<p>Website</p>
										
									</div>							
								</div>
							</div>	
							<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
									<a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
										<img class="img-responsive" src="images/f.jpg" alt=""  />
										<div class="simple-in four">
												
												<ul class="social img-two">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
												
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
										<div class="simple-out">
											<h4>30 ICON MODERN</h4>
											<p>Graphic</p>
										</div>							
								</div>
							</div>			
							<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
										<img class="img-responsive" src="images/c.jpg" alt=""  />
											<div class="simple-in five">
											
													<ul class="social img-three">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
													
														<div class="clearfix"> </div>
													</ul>
											</div>
									</a>
									<div class="simple-out">
										<h4>FREE LOGOTYPE</h4>
										<p>Identity</p>
									</div>
								</div>
							</div>
						</div>
						<div class="port-grid">
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog6" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

										<img class="img-responsive" src="images/l.jpg" alt=""  />
										<div class="simple-in six">
											
												<ul class="social img-one">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
												
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
									<div class="simple-out">
										<h4>BRONZE APPS</h4>
										<p>Mobile Apps</p>
									</div>							
								</div>
							</div>
							<div class="portfolio set mix_all" data-cat="set" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="#small-dialog7" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

										<img class="img-responsive" src="images/e.jpg" alt=""  />						    
											<div class="simple-in seven">
												
													<ul class="social img-one">
														<li><span> </span></li>
														<li><span class="text"> </span></li>
													
														<div class="clearfix"> </div>
													</ul>
											</div>
									</a>
									<div class="simple-out">
										<h4>DIGITAL BRANDING WEBSITE</h4>
										<p>Website</p>
								
									</div>							
								</div>
							</div>
							<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper ">		
									<a href="#small-dialog8" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">

										<img class="img-responsive" src="images/b.jpg" alt=""  />
										<div class="simple-in eight">
												<ul class="social img-two">
													<li><span> </span></li>
													<li><span class="text"> </span></li>
													<div class="clearfix"> </div>
												</ul>
										</div>	
									</a>
									<div class="simple-out">
										<h4>WEDDING INVITATION</h4>
										<p>Identity</p>
									</div>							
								</div>
							</div>	
						</div>	
			</div>	
			
			<!-- pop-up-box -->
					<!-- script for pop-up-box -->
					<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!-- //script for pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<div class="image-top">
							<img src="images/a.jpg" alt="" />
								<h4>FLAT MOCKUP</h4>
								<p>Identity</p>
						</div>
					</div>
					<div id="small-dialog1" class="mfp-hide">
						<div class="image-top">
							<img src="images/g.jpg" alt="" />
							<h4>FLAT ICON</h4>
							<p>Graphic</p>
						</div>
					</div>
					<div id="small-dialog2" class="mfp-hide">
						<div class="image-top">
							<img src="images/d.jpg" alt="" />
							<h4>FREE ICON</h4>
							<p>Mobile Apps</p>
						</div>
					</div>
					<div id="small-dialog3" class="mfp-hide">
						<div class="image-top">
							<img src="images/m.jpg" alt="" />
							<h4>ATOM WEBSITE</h4>
							<p>Website</p>
						</div>
					</div>
					<div id="small-dialog4" class="mfp-hide">
						<div class="image-top">
							<img src="images/f.jpg" alt="" />
							<h4>30 ICON MODERN</h4>
							<p>Graphic</p>
						</div>
					</div>
					<div id="small-dialog5" class="mfp-hide">
						<div class="image-top">
							<img src="images/c.jpg" alt="" />
							<h4>FREE LOGOTYPE</h4>
							<p>Identity</p>
						</div>
					</div>
					<div id="small-dialog6" class="mfp-hide">
						<div class="image-top">
							<img src="images/l.jpg" alt="" />
							<h4>BRONZE APPS</h4>
							<p>Mobile Apps</p>
						</div>
					</div>
					<div id="small-dialog7" class="mfp-hide">
						<div class="image-top">
							<img src="images/e.jpg" alt="" />
							<h4>DIGITAL BRANDING WEBSITE</h4>
							<p>Website</p>
						</div>
					</div>
					<div id="small-dialog8" class="mfp-hide">
						<div class="image-top">
							<img src="images/b.jpg" alt="" />
							<h4>WEDDING INVITATION</h4>
							<p>Identity</p>
						</div>
					</div>
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
			</script>
		<!-- //pop-up-box -->			
			<!-- Script for gallery Here -->
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
							$(function () {
								var filterList = {
									init: function () {
										// MixItUp plugin
										// http://mixitup.io
										$('#portfoliolist').mixitup({
											targetSelector: '.portfolio',
											filterSelector: '.filter',
											effects: ['fade'],
											easing: 'snap',
											// call the hover effect
											onMixEnd: filterList.hoverEffect()
										});				
									},
									hoverEffect: function () {
									
										// Simple parallax effect
										$('#portfoliolist .portfolio').hover(
											function () {
												$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
												$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
											},
											function () {
												$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
												$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
											}		
										);				
									}
								};
								// Run the show!
								filterList.init();
							});	
					</script>
				<!-- Gallery Script Ends -->
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //our-works -->
<!-- slider -->
	<div class="slider">
		<div class="container">
				<!-- responsiveslides -->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
					</script>
				<!-- responsiveslides -->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info">
								<div class="col-md-3 slider-left text-center">
									<img src="images/12.png" alt=" " />
								</div>
								<div class="col-md-9 slider-right">
									<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in 
										volutpat amet sodales, porttitor bibendum facilisi suspendisse </p>	
									<p><i><span class="highlight">John Doe</span><span class="yellow"> - Managing Director of Samsung</span></i></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<div class="col-md-3 slider-left text-center">
									<img src="images/22.png" alt=" " />
								</div>
								<div class="col-md-9 slider-right">
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in 
									a piece of classical Latin literature from 45 BC, making years old</p>
									<p><i><span class="highlight">Kimberly Thompson</span><span class="yellow"> - Managing Director of Nokia</span></i></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<div class="col-md-3 slider-left text-center">
									<img src="images/23.png" alt=" " />
								</div>
								<div class="col-md-9 slider-right">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
									laudantium, totam architecto beatae vitae dicta sunt explicabo</p>
									<p><i><span class="highlight">Rico Massimo</span><span class="yellow"> - Managing Director of LG</span></i></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<div class="col-md-3 slider-left text-center">
									<img src="images/24.png" alt=" " />
								</div>
								<div class="col-md-9 slider-right">
									<p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
									sed quia consequuntur magni dolores eos qui ratione volnesciunt.</p>
									<p><i><span class="highlight">Uku Mason</span><span class="yellow"> - Managing Director of Micromax</span></i></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>
				</div>
		</div>
	</div>
<!-- //slider -->
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
<!-- our-blog -->
<div class="our-blog">
	<div class="container">
		<div class="our-blog-info text-center">
			<h2><span class="highlight">OUR</span> BLOG</h2>
			<h3><i>Latest From The Blog</i></h3>
			<div class="underline">
				<img src="images/underline.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet 
			sodales, porttitor bibendum facilisi suspendisse</p>
			<div class="august">August 2014</div>
		</div>
		<div class="blog-grids">
			<div class="blog-left">
				<div class="blog-img">
					<img src="images/16.jpg" alt=" "/>
					<div class="desc">
						<div class="desc-left">
							<h4>Image Post</h4>
							<p>August 24, 2014</p>
						</div>
						<div class="desc-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="blog-txt">
					<h4>Tempor vestibulum turpis</h4>
					<p>Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam 
					dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum archu praesent, pede etiam. Tempor
					vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
					<div class="caption-text">
						<div class="caption-left">
							<p>August 24, 2014</p>
						</div>
						<div class="caption-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="blog-right">
				<div class="blog-txt">
					<h4>Tempor vestibulum turpis</h4>
					<p>Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam 
					dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum archu praesent, pede etiam. Tempor
					vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
					<div class="caption-text">
						<div class="caption-left">
							<p>August 24, 2014</p>
						</div>
						<div class="caption-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="blog-img">
					<img src="images/17.jpg" alt=" "/>
					<div class="desc">
						<div class="desc-left">
							<h4>Image Post</h4>
							<p>August 24, 2014</p>
						</div>
						<div class="desc-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="dot-top"><p></p></div>
			<div class="dot-mid"><p></p></div>
			<div class="dot-bottom"><p></p></div>
			<div class="dot-gray"><p></p></div>
			<div class="top"><img src="images/left.png" alt=" "/></div>
			<div class="bottom"><img src="images/right.png" alt=" "/></div>
			<div class="mid"><img src="images/left.png" alt=" "/></div>
			<div class="arr-left"><img src="images/left.png" alt=" "/></div>
			<div class="arr-right"><img src="images/right.png" alt=" "/></div>
			<div class="arr-mid"><img src="images/right.png" alt=" "/></div>
		</div>
		<div class="august">September 2014</div>
		<div class="blog-grids">
			<div class="blog-left">
				<div class="blog-img">
					<img src="images/18.jpg" alt=" "/>
					<div class="desc">
						<div class="desc-left">
							<h4>Image Post</h4>
							<p>August 24, 2014</p>
						</div>
						<div class="desc-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="blog-right">
				<div class="blog-txt">
					<h4>Tempor vestibulum turpis</h4>
					<p>Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam 
					dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum archu praesent, pede etiam. Tempor
					vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
					<div class="caption-text">
						<div class="caption-left">
							<p>August 24, 2014</p>
						</div>
						<div class="caption-right">
							<label>40</label>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="button"><a href="#">Load More</a></div>
	</div>
</div>
<!-- //our-blog -->
<!-- twitt-slider -->
<div class="twitt-slider">
	<div class="container">
		<!-- responsiveslides -->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider4").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
					</script>
		<!-- responsiveslides -->
			<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="twitt-info">
								<img src="images/14.png" alt=" "/>
								<p>Premium Template- orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat 
								vestibulum sit feugiat, voluptates dui eros libero...</p>
								<h3>Follow us on Twitter : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
						<li>
							<div class="twitt-info">
								<img src="images/dribble.png" alt=" "/>
								<p>Porttitor bibendum facilisi suspendisse Lorem ipsum dolor amet, libero turpis non 
								cras ligula, id commodo, aenean est in volutpat amet sodales </p>	
								<h3>Follow us on Dribble : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
						<li>
							<div class="twitt-info">
								<img src="images/google.png" alt=" "/>
								<p>Libero turpis non cras ligula,Lorem ipsum dolor amet,  id commodo, aenean est in 
									volutpat amet sodales, porttitor bibendum facilisi suspendisse </p>	
								<h3>Follow us on Google : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
						<li>
							<div class="twitt-info">
								<img src="images/facebook.png" alt=" "/>
								<p>Aenean est in volutpat amet sodalesLibero turpis non cras ligula,Lorem ipsum dolor 
								amet,  id commodo, porttitor bibendum facilisi suspendisse </p>	
								<h3>Follow us on Facebook : <span class="highlight">@rudhisasmito</span></h3>
							</div>
						</li>
					</ul>
			</div>
		
				
	
	</div>
</div>
<!-- //twitt-slider -->
<!-- get-in -->
<div id="get-in-touch" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h2><span class="highlight">GET IN</span> TOUCH</h2>
			<h3><i>Feel Free To Contact Us</i></h3>
			<div class="underline">
				<img src="images/underline.png" alt=" "/>
			</div>
			<p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
		</div>
	</div>
	<div class="map">
		<div class="nav-icon">
			<img src="images/9.png" alt=" "/>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
	</div>
</div>
<!-- //get-in -->
<!-- contact-us -->
<div class="contact-us">
	<div class="container">
		<div class="contact-grids">
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"></div>
				<p>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="mail-icon"></div>
				<p><a href="mail-to:sample@example.com">rudhisasmito@gmail.com</a></p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="phone-icon"></div>
				<p>+613 0000 0000</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="contact-info">
			<form>
				<input type="text" placeholder="Your Name" required>
				<input type="text" placeholder="Your E-Mail" required>
				<input type="text" placeholder="Subject" required>
				<textarea placeholder="Your Message" required></textarea>
				<input type="submit" value="SEND MESSAGE">
			</form>
		</div>
	</div>
</div>
<!-- //contact-us -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-left">
			<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<div class="footer-right">
			<ul>
				<li><a class="facebook" href="#"></a></li>
				<li><a class="twitter" href="#"></a></li>
				<li><a class="linkedin" href="#"></a></li>
				<li><a class="pininterest" href="#"></a></li>
				<li><a class="google" href="#"></a></li>
				<li><a class="dribble" href="#"></a></li>
				<li><a class="linkedin" href="#"></a></li>
			</ul>
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
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>
