<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>Homepage</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/linecons.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

	<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

	<script type="text/javascript" src="{{URL::asset('js/jquery.1.8.3.min.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery-scrolltofixed.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.isotope.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/wow.js') }}"></script>
	<script type="text/javascript" src="{{URL::asset('js/classie.js') }}"></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->

    <script type="text/javascript">
    	$(document).ready(function(e) {
    		$('.res-nav_click').click(function(){
    			$('ul.toggle').slideToggle(600)	
    		});	

    		$(document).ready(function() {
    			$(window).bind('scroll', function() {
    				if ($(window).scrollTop() > 0) {
    					$('#header_outer').addClass('fixed');
    				}
    				else {
    					$('#header_outer').removeClass('fixed');
    				}
    			});

    		});


    	});	
    	function resizeText() {
    		var preferredWidth = 767;
    		var displayWidth = window.innerWidth;
    		var percentage = displayWidth / preferredWidth;
    		var fontsizetitle = 25;
    		var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
    		$(".divclass").css("font-size", newFontSizeTitle)
    	}
    </script>
    
    <style>


    	body {
    		background-color:white;
    		color: #000;
    		font: 14px Arial;
    		margin: 0 auto;
    		padding: 0;
    		position: relative;
    	}
    	h1{ font-size:28px;}
    	h2{ font-size:26px;}
    	h3{ font-size:18px;}
    	h4{ font-size:16px;}
    	h5{ font-size:14px;}
    	h6{ font-size:12px;}
    	h1,h2,h3,h4,h5,h6{ color:#563D64;}
    	small{ font-size:10px;}
    	b, strong{ font-weight:bold;}
    	a{ text-decoration: none; }
    	a:hover{ text-decoration: underline; }
    	.left { float:left; }
    	.right { float:right; }
    	.alignleft { float: left; margin-right: 15px; }
    	.alignright { float: right; margin-left: 15px; }
    	.clearfix:after,
    	form:after {
    		content: ".";
    		display: block;
    		height: 0;
    		clear: both;
    		visibility: hidden;
    	}
    	.container { margin: 25px auto; position: relative; width: 900px; }
    	#content {
    		background: #f9f9f9;
    		background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
    		background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
    		-webkit-box-shadow: 0 1px 0 #fff inset;
    		-moz-box-shadow: 0 1px 0 #fff inset;
    		-ms-box-shadow: 0 1px 0 #fff inset;
    		-o-box-shadow: 0 1px 0 #fff inset;
    		box-shadow: 0 1px 0 #fff inset;
    		border: 1px solid #c4c6ca;
    		margin: 0 auto;
    		padding: 25px 0 0;
    		position: relative;
    		text-align: center;
    		text-shadow: 0 1px 0 #fff;
    		width: 400px;
    	}
    	#content h1 {
    		color: #7E7E7E;
    		font: bold 25px Helvetica, Arial, sans-serif;
    		letter-spacing: -0.05em;
    		line-height: 20px;
    		margin: 10px 0 30px;
    	}
    	#content h1:before,
    	#content h1:after {
    		content: "";
    		height: 1px;
    		position: absolute;
    		top: 10px;
    		width: 27%;
    	}
    	#content h1:after {
    		background: rgb(126,126,126);
    		background: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
    		background: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		background: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		background: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		background: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		right: 0;
    	}
    	#content h1:before {
    		background: rgb(126,126,126);
    		background: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
    		background: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		background: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		background: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		background: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    		left: 0;
    	}
    	#content:after,
    	#content:before {
    		background: #f9f9f9;
    		background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
    		background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
    		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
    		border: 1px solid #c4c6ca;
    		content: "";
    		display: block;
    		height: 100%;
    		left: -1px;
    		position: absolute;
    		width: 100%;
    	}
    	#content:after {
    		-webkit-transform: rotate(2deg);
    		-moz-transform: rotate(2deg);
    		-ms-transform: rotate(2deg);
    		-o-transform: rotate(2deg);
    		transform: rotate(2deg);
    		top: 0;
    		z-index: -1;
    	}
    	#content:before {
    		-webkit-transform: rotate(-3deg);
    		-moz-transform: rotate(-3deg);
    		-ms-transform: rotate(-3deg);
    		-o-transform: rotate(-3deg);
    		transform: rotate(-3deg);
    		top: 0;
    		z-index: -2;
    	}
    	#content form { margin: 0 20px; position: relative }
    	#content form input[type="text"],
    	#content form input[type="password"],
    	#content form input[type="number"],
    	#content form input[type="tel"],
    	#content form input[type="email"]{

    		-webkit-border-radius: 3px;
    		-moz-border-radius: 3px;
    		-ms-border-radius: 3px;
    		-o-border-radius: 3px;
    		border-radius: 3px;
    		-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    		-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    		-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    		-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    		box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
    		-webkit-transition: all 0.5s ease;
    		-moz-transition: all 0.5s ease;
    		-ms-transition: all 0.5s ease;
    		-o-transition: all 0.5s ease;
    		transition: all 0.5s ease;
    		border: 1px solid #c8c8c8;
    		color: #777;
    		font: 13px Helvetica, Arial, sans-serif;
    		margin: 0 0 10px;
    		padding: 15px 10px 15px 40px;
    		width: 80%;
    	}
    	#content form input[type="text"]:focus,
    	#content form input[type="email"]:focus,
    	#content form input[type="number"]:focus,
    	#content form input[type="tel"]:focus,
    	#content form input[type="password"]:focus {
    		-webkit-box-shadow: 0 0 2px #ed1c24 inset;
    		-moz-box-shadow: 0 0 2px #ed1c24 inset;
    		-ms-box-shadow: 0 0 2px #ed1c24 inset;
    		-o-box-shadow: 0 0 2px #ed1c24 inset;
    		box-shadow: 0 0 2px #ed1c24 inset;
    		background-color: #fff;
    		border: 1px solid #ed1c24;
    		outline: none;
    	}
    	#username { background-position: 10px 10px !important }
    	#password { background-position: 10px -53px !important }
    	#content form input[type="submit"] {
    		background: rgb(254,231,154);
    		background: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
    		background: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    		background: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    		background: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    		background: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
    		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
    		-webkit-border-radius: 30px;
    		-moz-border-radius: 30px;
    		-ms-border-radius: 30px;
    		-o-border-radius: 30px;
    		border-radius: 30px;
    		-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    		-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    		-ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    		-o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    		box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
    		border: 1px solid #D69E31;
    		color: #85592e;
    		cursor: pointer;
    		float: left;
    		font: bold 15px Helvetica, Arial, sans-serif;
    		height: 35px;
    		margin: 20px 0 35px 15px;
    		position: relative;
    		text-shadow: 0 1px 0 rgba(255,255,255,0.5);
    		width: 120px;
    	}
    	#content form input[type="submit"]:hover {
    		background: rgb(254,193,81);
    		background: -moz-linear-gradient(top,  rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
    		background: -webkit-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    		background: -o-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    		background: -ms-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    		background: linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
    		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
    	}
    	#content form div a {
    		color: #004a80;
    		float: right;
    		font-size: 12px;
    		margin: 30px 15px 0 0;
    		text-decoration: underline;
    	}
    	.button {
    		background: rgb(247,249,250);
    		background: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
    		background: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    		background: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    		background: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    		background: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
    		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 );
    		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    		-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    		-ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    		-o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    		box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
    		-webkit-border-radius: 0 0 5px 5px;
    		-moz-border-radius: 0 0 5px 5px;
    		-o-border-radius: 0 0 5px 5px;
    		-ms-border-radius: 0 0 5px 5px;
    		border-radius: 0 0 5px 5px;
    		border-top: 1px solid #CFD5D9;
    		padding: 15px 0;
    	}
    	.button a {
    		color: #7E7E7E;
    		font-size: 17px;
    		padding: 2px 0 2px 40px;
    		text-decoration: none;
    		-webkit-transition: all 0.3s ease;
    		-moz-transition: all 0.3s ease;
    		-ms-transition: all 0.3s ease;
    		-o-transition: all 0.3s ease;
    		transition: all 0.3s ease;
    	}
    	.button a:hover {
    		background-position: 0 -135px;
    		color: #00aeef;
    	}

    </style>

    
    <style>





    	input[type=submit] {


    		width: 100px;
    		height: 50px;
    		border-radius: 10px;
    		margin-bottom: 8px;
    		color: black;
    		margin-left: 50px;

    	}



    	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);	

    	html {
    		border-top: 5px solid #fff;
    		background: #58DDAF;
    		color: #2a2a2a;
    	}

    	html, body {
    		margin: 0;
    		padding: 0;
    		font-family: 'Open Sans';
    	}

    	h1 {
    		color: #fff;
    		text-align: center;
    		font-weight: 300;
    	}

    	#slider {
    		position: relative;
    		overflow: hidden;
    		margin: 20px auto 0 auto;
    		border-radius: 4px;
    	}

    	#slider ul {
    		position: relative;
    		margin: 0;
    		padding: 0;
    		height: 200px;
    		list-style: none;
    	}

    	#slider ul li {
    		position: relative;
    		display: block;
    		float: left;
    		margin: 0;
    		padding: 0;
    		width: 1000px;
    		height: 350px;
    		background: #ccc;
    		text-align: center;
    		line-height: 300px;
    	}

    	a.control_prev, a.control_next {
    		position: absolute;
    		top: 40%;
    		z-index: 999;
    		display: block;
    		padding: 4% 3%;
    		width: auto;
    		height: auto;
    		background: #2a2a2a;
    		color: #fff;
    		text-decoration: none;
    		font-weight: 600;
    		font-size: 18px;
    		opacity: 0.8;
    		cursor: pointer;
    	}

    	a.control_prev:hover, a.control_next:hover {
    		opacity: 1;
    		-webkit-transition: all 0.2s ease;
    	}

    	a.control_prev {
    		border-radius: 0 2px 2px 0;
    	}

    	a.control_next {
    		right: 0;
    		border-radius: 2px 0 0 2px;
    	}

    	.slider_option {
    		position: relative;
    		margin: 10px auto;
    		width: 160px;
    		font-size: 18px;
    	}




    </style>
    
    <script>

    	jQuery(document).ready(function ($) {

    		$('#checkbox').change(function(){
    			setInterval(function () {
    				moveRight();
    			}, 3000);
    		});

    		var slideCount = $('#slider ul li').length;
    		var slideWidth = $('#slider ul li').width();
    		var slideHeight = $('#slider ul li').height();
    		var sliderUlWidth = slideCount * slideWidth;

    		$('#slider').css({ width: slideWidth, height: slideHeight });

    		$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    		$('#slider ul li:last-child').prependTo('#slider ul');

    		function moveLeft() {
    			$('#slider ul').animate({
    				left: + slideWidth
    			}, 200, function () {
    				$('#slider ul li:last-child').prependTo('#slider ul');
    				$('#slider ul').css('left', '');
    			});
    		};

    		function moveRight() {
    			$('#slider ul').animate({
    				left: - slideWidth
    			}, 200, function () {
    				$('#slider ul li:first-child').appendTo('#slider ul');
    				$('#slider ul').css('left', '');
    			});
    		};

    		$('a.control_prev').click(function () {
    			moveLeft();
    		});

    		$('a.control_next').click(function () {
    			moveRight();
    		});

    	});    


    </script>   
    
    
</head>
<body>

	<!--Header_section-->
	<header id="header_outer" class="wow fadeInUp">
		<div class="container">
			<div class="header_section wow fadeInUp">
				<div class="logo"><a href="javascript:void(0)"><img src="img/logob.png" alt=""></a></div>
				<nav class="nav" id="nav">
					<ul class="toggle">
						<li><a href="/home">Home</a></li>
						<li><a href="/home#About_Us">About Us</a></li>
						<li><a href="/home#service">Services</a></li>
						<li><a href="/home#Membership">Membership</a></li>
						<li><a href="/home#Portfolio">Events</a></li>
						<li><a href="/home#client_outer">Clients</a></li>
						<li><a href="/home#team">Team</a></li>
						<li><a href="/home#contact">Contact</a></li>
						<li><a href="/SignUp">Join Us Bitch!</a></li>
						<li>
							<div >
								<span class="caret dropdown dropdown-toggle" data-toggle="dropdown"></span>

							</div>
						</li>
					</ul>
					<ul class="">
						<li><a href="/home">Home</a></li>
						<li><a href="/home#About_Us">About Us</a></li>
						<li><a href="/home#service">Services</a></li>
						<li><a href="/home#Membership">Membership</a></li>
						<li><a href="/home#Portfolio">Events</a></li>
						<li><a href="/home#client_outer">Clients</a></li>
						<li><a href="/home#team">Team</a></li>
						<li><a href="/home#contact">Contact</a></li>
						<li><a href="/SignUp">Join Us Bitch!</a></li>
						<li>
							<a href="#" class="dropdown-toggle"type="button" data-toggle="dropdown"><span class="caret"></span></a>
							<ul class="dropdown-menu ">
								<div><li><a href="/SignIn">SignIn</a></li></div>  
								<div><li><a href="/SignUp">Edit Account</a></li></div>
							</ul>


						</li>
					</ul>
				</nav>
				<a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> 


			</div>
		</div>
	</header>
	<!--Header_section--> 



	<div id="slider">
		<a href="#" class="control_next">>></a>
		<a href="#" class="control_prev"><</a>
		<ul>
			<li>SLIDE 1</li>
			<li style="background: #aaa;"><img src="img/5-small.jpg"/></li>
			<li>SLIDE 3</li>
			<li style="background: #aaa;">SLIDE 4</li>
		</ul>  
	</div>

	<div class="slider_option">
		<input type="checkbox" id="checkbox">
		<label for="checkbox">Autoplay Slider</label>
	</div> 






	<div class="data">

		<form action="AgencySignupController" method="POST" >

			<table align="center" cellpadding = "10">

				<!-----Reservation Date ---------------------------------------------------------->
				<tr>
					<td>Reservation Date</td>
					<td><input type="date" name="Rdate" maxlength="30" placeholder="First Name"  required />
					</td>
				</tr>

				<!----- User Name ---------------------------------------------------------->
				<tr>
					<td>From</td>
					<td><input type="time" name="Ftime"  required/>

					</td>
					<td>To</td>
					<td><input type="time" name="Ttime"  required/>

					</td>
				</tr>

				<tr>
					<td>Number of people</td>
					<td><input type="number" name="peopleNo"  required/>

					</td>

				</tr>






				<!----- Password ---------------------------------------------------------->
				<tr>
					<td>Do you need a projector ?</td>
					<td>
						<input type="radio" name="proj" value="yes" checked> YES<br>
					</td>
					<td>
						<input type="radio" name="proj" value="NO" checked> NO<br>
					</td>
				</tr>




            <!----- Submit and Reset ------------------------------------------------->
            <tr>
                <td  align="center" colspan="2">
                    <input type="submit" value="Submit" >
                </td>
            
        </table>


    </form>

    </div>



<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script> 
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> 
<script type="text/javascript">
	$(window).load(function(){
		
		$('a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91co
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">


	jQuery(document).ready(function($){     
// Portfolio Isotope
var container = $('#portfolio-wrap');	


container.isotope({
	animationEngine : 'best-available',
	animationOptions: {
		duration: 200,
		queue: false
	},
	layoutMode: 'fitRows'
});	

$('#filters a').click(function(){
	$('#filters a').removeClass('active');
	$(this).addClass('active');
	var selector = $(this).attr('data-filter');
	container.isotope({ filter: selector });
	setProjects();		
	return false;
});


function splitColumns() { 
	var winWidth = $(window).width(), 
	columnNumb = 1;


	if (winWidth > 1024) {
		columnNumb = 4;
	} else if (winWidth > 900) {
		columnNumb = 2;
	} else if (winWidth > 479) {
		columnNumb = 2;
	} else if (winWidth < 479) {
		columnNumb = 1;
	}

	return columnNumb;
}		

function setColumns() { 
	var winWidth = $(window).width(), 
	columnNumb = splitColumns(), 
	postWidth = Math.floor(winWidth / columnNumb);

	container.find('.portfolio-item').each(function () { 
		$(this).css( { 
			width : postWidth + 'px' 
		});
	});
}		

function setProjects() { 
	setColumns();
	container.isotope('reLayout');
}		

container.imagesLoaded(function () { 
	setColumns();
});


$(window).bind('resize', function () { 
	setProjects();			
});

});
	$( window ).load(function() {
		jQuery('#all').click();
		return false;
	});
</script>
</body>
</html>