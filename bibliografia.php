<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <!-- <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"> -->
  <meta charset="UTF-8">
  <title><?php  $title = $_POST["title-name"];
		echo $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <style>
  	/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
	font-size: 16px;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

nav,
.footer-nav{
	background-color: #1e232c;;
}

nav .container-header,
.footer-nav{
		width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
}

.align-center{
	align-content: center;
}


.flex{
  display: flex;
}

.no-underline{
	text-decoration: none;
}

.social-links a{
	display: block;
    text-align: center;
    width: 50px;
    height: 50px;
    border: 1px solid #08c395;
    border-radius: 100%;
    margin-right: 10px;
    overflow: hidden;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

.social-links a i {
    font-size: 1.5rem;
    line-height: 50px;
    color: #08c395;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.social-links i:hover,
.navbar a:hover,
.footer-nav a:hover{
	color:#fff;
}

.nav-link, .footer-nav .menu-item a{
	font-family: 'Oswald', sans-serif;
    color: #00cf9c;
    text-transform: uppercase;
    font-size: 1.125rem;
    /*margin-left: 45px;*/
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

h1{
	font-family: "Oswald", Arial, sans-serif;
	font-weight: 900;
	font-size: 3rem;
	color: #08c395;
	text-transform: uppercase;
	position: relative;
	padding-left: 20px;
}

h1::before{
	position: absolute;
	content: "";
	display: block;
	top:50%;
	transform: translateY(-50%);
	height: 100%;
	width: 5px;
	left: -0px;
	border-radius: 5px;
	background-color: #00cf9c;
}

.navbar{
	padding:0;
}

.b-paragraph{
	margin: 25px auto;
	font-family: "Lato", Arial, sans-serif;
}

.b-paragraph span{
	font-size: 1.125rem;
	font-weight: 700;
	margin-right: 10px;
	color: #08c395;
}

main{
	color: #222;
	font-size: 1.125rem;
	margin: 13.02083333333333% auto;
}

.justify-center{
	justify-content: center;
}

.footer-nav .social-links{
	margin-top: 2%;
}

.position-ab-center{
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
}

#menu-sm{
	position: relative;
	cursor: pointer;
	display: none;
  right: 25px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 2;
}

#menu-sm span{
	display: block;
	width: 25px;
	height: 3px;
	margin-top: 5px;
	border-radius: 5px;
	background-color: #08c395;
	transition: .2s all ease-in-out;
}

#menu-sm.active span:first-of-type{
	transform: rotate(45deg);
  position: absolute;
  bottom: 0;
}

#menu-sm.active span:nth-of-type(2){
	width: 0;
}

#menu-sm.active span:last-of-type{
	transform: rotate(-45deg);
}

#menu-sm.active span{
	background-color: #fff;
}

.generator{
  border:none;
  background-color: #08c395;
  font-family: "Oswald", "Lato", Arial, sans-serif;
  font-weight: 700;
  color: #fff;
  font-size: 1.5rem;
  padding: 15px 30px;
  cursor: pointer;
  letter-spacing: 1px;
  margin-top: 30px;
  border-radius: 2.5px;
  text-decoration: none;
}

.generator:hover,
.generator:active,
.generator:visited{
	text-decoration:none;
	color:#fff;
}


.b-paragraph:last-of-type{
	margin-top: 30px;
}

.none{
	display: none;
}

@media(max-width: 1024px){
	#menu-sm{
		display: block;
	}
	#main-menu{
		/*display: none;*/
		visibility: hidden;
		opacity:0;
		transition: .3s top ease-in-out;
		position: absolute;
		right: 0;
		top: 100px;
		padding: 50px;
	}

	#menu-sm.active	~ #main-menu{
		visibility: visible;
		opacity:1 ;	
		background-color: #1e232c;
		border-radius: 0 0 0 30px;
    z-index: 1;
	}
}

@media(max-width: 767px){
	h1{
		font-size: 1.75rem;
	}
	nav .container-header, .footer-nav{
		flex-wrap: wrap;
	}
	.navbar-brand img{
		width:150px;
	}
	.social-links a{
		position: relative;
    width: 40px;
    height: 40px;
	}
	.fa{
		position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    left: 50%;
	}
	.social-links a i{
    font-size: 1.125rem;
	}
	#menu-sm.active ~ #main-menu{
		top: 100%;
		left: 0;
		border-radius: 0;
		padding:25px;
		justify-content: center;
	}
}

@media(max-width: 480px){
	main{
		font-size: 0.875rem;
	}
	h1{
		font-size: 1.25rem;
	}
	.social-links{
		margin-right: 15px;
	}
	#menu-sm{
		left: 0;
	}
	#menu-sm.active ~ #main-menu{
		display: block;
	}
}
  </style>
</head>



<body class="outer">

	<header>
		<nav class="navbar">
				<div class="container-header">
					<a class="navbar-brand" rel="home" href="https://perfectbodyelite.com/" title="Perfect Body Elite" itemprop="url"><img src="https://perfectbodyelite.com/wp-content/themes/pbe/img/logo.png" alt="Perfect Body Elite logo"></a>
						<ul class="social-links flex align-center">
							<li><a href="https://facebook.com/PerfectBodyElite" class="flex align-center justify-center line-1"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://instagram.com/perfect_body_elite" class="flex align-center justify-center line-1"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://instagram.com/perfect_body_elite" class="flex align-center justify-center line-1"><i class="fa fa-instagram"></i></a></li>
						</ul>
					<div class="flex align-center">
						<div class="flex align-center">
							<div id="menu-sm">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<ul id="main-menu" class="flex align-center"><li class="flex align-center"><a title="Redakcja no-underline" href="https://perfectbodyelite.com/redakcja/" class="nav-link no-underline">Redakcja</a></li>
<li class="flex align-center"><a title="Zakup/Prenumerata" href="https://perfectbodyelite.com/zakup-prenumerata/" class="nav-link no-underline">Zakup/Prenumerata</a></li>
<li class="flex align-center"><a title="Kontakt" href="https://perfectbodyelite.com/kontakt/" class="nav-link no-underline">Kontakt</a></li>
</ul>						
						</div>
					</div>
				</div>
			</nav>
	</header>

	<main class="inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Bibliografia/Bibliography:</h1>
					<?php 

					$arr_length = count($_POST);


					// checking if input is not empty
					 for($j=1; $j <= $arr_length; $j++){
					 	if(empty($_POST["input-".$j])){
								'p class="none"' . $_POST["input-".$j] . '</p>';
							}
							else if(!empty($_POST["input-".$j])){
								echo 	'<p class="b-paragraph">' . "<span>" . "[$j]" . "</span>" . $_POST["input-".$j] . '</p>';
						}
							else if(!empty($_POST["input-".$j])){
								for ($i=1; $i <= $arr_length; $i++) { 
									echo 	'<p class="b-paragraph">' . "<span>" . "[$i]" . "</span>" . $_POST["input-".$i] . '</p>';
								}
							}
						}
					?>
				</div>
			</div>
			<div class="row">
<!-- 			    <a href="<?php header("Content-disposition: attachment; filename = bibliografia.html");
			    	header("Content-type: application/html");
			     ;?>" id="download_button" class="generator">Zgeneruj plik</a> -->
			</div>
		</div>
	</main>

	<footer>
		<div class="footer-nav">
			<div class="container">
				<ul id="main-menu" class="flex align-center justify-center"><li class="flex align-center"><a title="Redakcja no-underline" href="https://perfectbodyelite.com/redakcja/" class="nav-link no-underline">Redakcja</a></li>
					<li class="flex align-center"><a title="Zakup/Prenumerata" href="https://perfectbodyelite.com/zakup-prenumerata/" class="nav-link no-underline">Zakup/Prenumerata</a></li>
					<li class="flex align-center"><a title="Kontakt" href="https://perfectbodyelite.com/kontakt/" class="nav-link no-underline">Kontakt</a></li>
				</ul>
				<ul class="social-links flex align-center justify-center">
								<li><a href="https://facebook.com/PerfectBodyElite"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://instagram.com/perfect_body_elite"><i class="fa fa-youtube"></i></a></li>
								<li><a href="https://instagram.com/perfect_body_elite"><i class="fa fa-instagram"></i></a></li>
						</ul>				
			</div>
		</div>
	</footer>

<script>
	
	var menuSm = document.getElementById("menu-sm");
	menuSm.onclick = function (){
		menuSm.classList.toggle("active");
	}

</script>

</body>

</html>
		 <?php 

		 $file = $_POST["file-name"];

		 $title = $_POST["title-name"];

		 if(!empty($file)){
		 		file_put_contents("$file.html", ob_get_contents()); 
		 }

			
			?> 
