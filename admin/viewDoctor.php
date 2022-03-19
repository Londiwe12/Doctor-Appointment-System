<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Medplus a medical bootstrap web template</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="flexslider/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<style>

		@import url('https://fonts.googleapis.com/css?family=Play');
@import url('https://fonts.googleapis.com/css?family=El+Messiri');
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,600);
@import url(http://fonts.googleapis.com/css?family=Oswald:400,700);
* {
	margin: 0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;
}
body {
	height: 100%;
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust: 100%;
	background: #fff;
	transition: all 0.3s linear;
	-webkit-transition: all 0.3s linear;
	-moz-transition: all 0.3s linear;
	-o-transition: all 0.3s linear;
}
::selection {
	color: #fff;
	background: #0D93E5;
}

::-moz-selection {
 color: #fff;
 background: #A43E89;
}
p {
	color: #3E3E3E;
	margin: 0 0 1em !important;
}
h1, h2, h3, h4, h5, h6 {
	font-family:36px 'Open Sans', sans-serif;
}
.fitImage {
	max-width: 100%;
	vertical-align: middle;
	display: inline-block;
}
.animated {
	/* -webkit-animation-duration: 1s; */
	animation-duration: 1s;
	-webkit-animation-delay: 0s;
	animation-delay: 0s;
}
.mcbook {
	opacity: 0;
}
.show {
	opacity: 1;
}
.pDark p {
	color: #6D6D6D;
}
h6{
	font-size:14px;
}
.dataTxt ul li{
	list-style:none;
	line-height:30px;
}
.listArrow li{
background: url('../images/links-arrow.png') 0px 12px no-repeat;
padding-left:15px;
}
.progress {
height: 12px;
border-radius:0px;
}
.progress .progress-bar.progress-bar-red {
background: #F76E26;
}
.progress .progress-bar.progress-bar-green {
background: #51D4B6;
}
.progress .progress-bar.progress-bar-lblue {
background: #9FDE32;
}
.feature a {
display: inline-block;
font-size: 18px;
color: #fff;
background: #27AFD3;
margin-right: 20px;
width: 220px;
text-align: center;
line-height: 41px;
/* border-radius: 10px; */
}
#services img{
	width:100%;
}
#services .circle{
width:120px;
height: 115px;
display:inline-block;
background: transparent;
overflow:hidden;
}
#services .circle:hover {
	background:#FFF;	
	transition: all 0.2s linear 0s;
	-webkit-transition: all 0.2s linear 0s;
	-moz-transition: all 0.2s linear 0s;
	-o-transition: all 0.2s linear 0s;
}
.pDark h3 {
	color: #BEBEBE;
}
.btn {
	color:#fff;
	background: #27AFD3;
}
.btn:hover {
	 color:#fff !important;
	
	 background: #1296BA;
}
 a:hover {
	
	 color: #FFFFFF !important;
 }
.btn{
display: inline-block;
padding: 9px 12px;
	}
.btn, .form-control, .team-socials i {
	border-radius: 0px !important;
}
.form-group {
	margin: 0 auto;
	margin-bottom: 15px;
	width: 75%;
}
.form-control {
	border: none;
	padding: 22px 4px;
	outline: none;
	color: #CDCDCD;
	margin: 0;
	width: 210px;
	max-width: 100%;
	display: block;
	margin-bottom: 20px;
	background: transparent;
	font-size: inherit;
	border-radius: 0px !important;
	width: 99%;
	border: 1px solid rgba(255, 255, 255, 0.43);
}
.button-outline {
	-webkit-font-smoothing: antialiased;
	display: inline-block;
	vertical-align: middle;
	zoom: 1;
	color: #fff;
	padding: 10px 25px;
	border: 2px solid #fff;
	border-radius: 0px;
	font-size: 16px;
	font-weight: 400;
	background: rgba(255,255,255,0.15);
}
.button-outline:hover {
	color: #fff;
	background: rgba(255,255,255,0.35);
}
a {
	color: #27AFD3;
	text-decoration: none;
	text-shadow: none;
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-ms-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
}
a:hover {
	color: #000;
	text-decoration: none;
}
.btn {
	border: 0px;
	border-radius: 0px;
}
.btn-primary {
	background: #A43E89;
}
.form-control {
	border-radius: 0px;
}
.mrgn30 {
	margin: 30px 0;
}
.copyright {
color: #6D6D6D;
background: #000C11;
padding: 20px 0;
border-top: 1px solid #1D1D1D;
}
#top {
	position: relative;
}
.topHome {
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 5;
}
.topHome:hover{
color:#F89F9F;	
	}
/*  Sliders
==================================== */
 
.flex-direction-nav .flex-prev{
left:0px; 
}
.flex-direction-nav .flex-next{ 
right:0px;
}
.flex-caption {zoom: 1;
bottom: 120px;  color: #fff; margin: 0; padding: 25px 25px 25px 30px; position: absolute; left: 0; background: transparent;margin: 0 auto;right: 0;}
.flex-caption h3 {color: #fff; letter-spacing: 1px; margin-bottom: 8px; text-transform: uppercase;font-size: 50px;font-weight: bolder;}
.flex-caption p {margin: 0 0 15px;font-size: 20px !important;}	
.flex-caption a{
    background: transparent !important;
    border: 1px solid #fff;
}
.flex-caption a:hover{
    background: #fff !important;
    border: 1px solid #fff;
	color:#000 !important;
}
/* Header 
----------------------------------------------*/
#section-top {
	background: #4E4E4E;
}
#section-top ul {
	margin: 0;
	padding: 0;
	list-style: none;
	float: right;
}
#section-top ul li {
	display: inline-block;
}
#section-top ul li a {
	border-radius: 2px;
	display: inline-block;
	height: 35px;
	line-height: 35px;
	width: 35px;
	text-align: center;
}
#section-top .region-top-first {
	float: right;
}
#home {
background: #FFFFFF;
margin-bottom: 30px;
margin-top: 101px;
}
.header {
	position: fixed;
	width: 100%; 
	z-index: 50;
	border-radius: 0;
	top: 0px; 
	background: rgba(255, 255, 255, 1); /* FF3.6+ */   /* Chrome,Safari4+ */   /* Chrome10+,Safari5.1+ */   /* Opera 11.10+ */   /* IE10+ */   /* W3C */   /* IE6-9 */;
	padding: 12px 0;
	border-top: 4px solid #1C7FBE;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.19) !important;
}
.addBg {
	background: rgba(254, 254, 254, 1);
	transition: all 0.3s linear;
	-webkit-transition: all 0.3s linear;
	-moz-transition: all 0.3s linear;
	-o-transition: all 0.3s linear;
}
.navbar-inverse {
	background: transparent;
}
.navbar-inverse .navbar-toggle {
	background-color: #A43E89;
	background: #38BEE7;  border: 0;
}
.navbar-inverse .navbar-toggle .icon-bar {
/*background-color: #A43E89;*/
;
}
.navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
	background: #38BEE7;
	border: 0;
}
.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
	color: #3ECF19;
	background: #56A6D1;
	border-radius: 0px;
}
.navbar-inverse .navbar-toggle:hover .icon-bar {
	background: #fff;
}
.navbar-toggle {
}
.hero-text {
	color: #676e73;
	width: 83%;
	text-align: center;
	margin: 23% auto 24px auto;
	font-family: 'Oswald', sans-serif;
}
.hero-text p {
	font-family: 'Oswald', sans-serif;
	padding: 0;
	margin: 12px 8% 0;
	text-shadow: 0px 1px 2px rgba(0, 0, 0, .2);
}
.b1{
    background: #FFFFFF;
    padding: 15px;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.29) !important;
    border-bottom: 4px solid #27AFD3;
    border-radius: 29px / 147px;
}
/*.carousel-inner*/
#myCarousel {
	margin-top: 50px;
	border-bottom: 4px solid #A43E89;
}
.carousel-inner > .item {
}
.carousel-caption {
	padding: 0px;
	bottom: 40%;
	display: block;
	height: 80px;
}
.carousel-caption h1 {
	font-size: 45px;
	padding: 10px 15px;
	background: rgba(128, 180, 33, 0.80);
	color: #FFFFFF;
	text-shadow: none;
	font-weight: bold;
	display: inline-block;
}
.carousel-caption h3 {
	font-size: 30px;
	color: #1C4604;
	font-weight: bold;
	text-shadow: #fff 1px 1px 1px;
}
.actionPanel {
	padding: 25px 0;
	background: #A43E89;
}
.actionPanel h3 {
	margin: 0px;
}
.circle {
	background: #fff;
	height: 90px;
	width: 90px;
	border-radius: 0px;
	line-height: 90px !important;
}
#section-strapline {
	background: #f00bfff;
	line-height: 42px;
	clear: both;
}
/*----Nav ----*/
.header .navbar-brand {
	float: left;
	padding: 22px 15px;
	line-height: 18px;
	height: 50px;/*color:#A43E89;*/
}
.navbar-brand b {
	color: #3ECF19;
	font-family: 'Oswald', sans-serif;
	font-weight: 900;
}
.navbar-brand b i {
	color: #117DAD;
	font-style: normal;
}
.logo {
	font-size: 2.2em;
	text-shadow: none;
	margin: 8px 0 0 0;
}
.logo:hover {
	color: #5A5A5A;
}
.header .navbar {
	margin: 0;
	background: transparent;
	border: 0;
}
.hero-text2{
	padding:30px 0;
	text-align:center;	
}
.hero-text2 h3{
font-size: 21px;
color: #0680BE;
line-height: 36px;
text-align: center;
}
.navbar-inverse .navbar-nav > li > a {
	color: #00577D;
	font-size: 1.2em;
	line-height: normal;
	margin: 17px;
	padding: 6px 0px !important;
	border-radius: 5px;
	font-family: 'Oswald', sans-serif;
	font-weight: 400;
}
.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
	color: #FFFFFF;
	background: #56A6D1;
	border-radius: 0px;
}
.navbar-inverse .navbar-nav > .active {
    color: #fff;
}
.navbar-nav > li:hover > a {
	color: #fff;
}
.header .navbar-nav > li > a {
	padding: 25px 18px;
}
.page-section {
	width: 100%;
	height: auto;
	padding: 35px 0;
}
.noPadd {
	padding: 0;
}
.page-section h1 {
	font-size: 3.5em;
	margin: 90px 0 30px;
	line-height: 1.2em;
}
.page-section h1 span {
	font-weight: 200;
}
.page-section h2 {
	color: #A43E89;
}
.page-section p {
	font-size: 15px;
	line-height: 1.5em;
}
.darkBg {
	background: #000;
}
.darkBg .fa {
	color: #A43E89;
}
/*--- Banner ----*/
.banner-container {
	width: 100%;
	position: relative;
	padding: 0px;
	/* box-shadow: 0px 0px 1px rgba(28, 158, 215, 1); */
	/*background: url("../images/banner-bg.jpg") no-repeat;*/
	background-size: 100% 100%;
	background-size: cover;
	position: relative;
	border-bottom: 2px #0283C0 solid;
}
.banner-container:before {
position: absolute;
width: 100%; 
z-index: 1; 
content: '';
height: inherit;
top: 75px;
bottom: 0px;
}
.banner-container:after {
content: '';
position: absolute;
width: 100%;
top: 0;
bottom: 0;
background: rgba(0, 120, 186, 0.65);
}
.banner-container > img {
	width: 100%;
}
.banner-content {
	position: absolute;
	z-index: 3;
	top: 0px;
	left: 0px;
	right: 0px;
}
.hero-text h1 {
	color: #fff;
	font-size: 6.5em;
	margin: 2% 0 30px;
	line-height: 50px;  
	font-size: 48px;
	margin: 37px 0 13px; 
}
.hero-text p {
	font-size: 1.6em;
	color: #fff;
	font-style: normal; 
	text-shadow: 1px 1px 1px #8F8F8F;
}
.arrow-link {
display: inline-block;
font-size: 32px;
height: 50px;
line-height: 38px;
overflow: hidden;
text-align: center;
vertical-align: top;
width: 50px;
border: 4px solid #fff;
border-radius: 50%;
}
a.arrow-link {
	color: #fff;
}
a.arrow-link i{
font-size:28px;
}
a.arrow-link:hover {
	color: #fff;
}
.colord {
}
.colord p {
}
.colord h3 {
	color: #281024;
}
.hero-button {
	text-align: center;
	background: rgba(255, 255, 255, 0.36);
	border: 1px solid #fff;
	padding: 20px;
	display: inline-block;
	margin: 0 auto;
	clear: left;
	width: auto;
}
.hero-img {
	text-align: center;
	margin: 124px auto 24px auto;
}
.da-slider {
	margin: 0 auto !important;
}
.heading h2 {
	color: #1E2020;
	font-size: 46px;
	font-weight: bolder;
}
#contactUs .heading h2 {
	color: #fff;
}
.sub-heading {
	padding: 15px 0;
}
.sub-heading h2 {
	font-size: 18px;
	margin: 15px 0 8px !important;
}
.sub-heading p {
	color: #5A5A5A;
}
.heading {
	padding: 3px 10px;
	padding-bottom: 15px;
	margin-bottom: 30px;
	display: block;
}
.heading p {
	font-size: 1.2em;
}
.pdingBtm30 {
	padding-bottom: 30px;
}
.da-arrows span:after {
	width: 25px;
	height: 37px;
}
.da-arrows span {
	position: absolute;
	top: 50%;
	height: 34px;
	width: 34px;
	border-radius: 60px;
	background: none;
}
.da-dots span {
	display: inline-block;
	position: relative;
	width: 16px;
	height: 16px;
	border-radius: 50%;
	background: rgba(255, 255, 255, 0.13);
	margin: 3px;
	cursor: pointer;
	box-shadow: 1px 1px 1px rgba(0,0,0,0.1) inset, 1px 1px 1px rgba(255,255,255,0.1);
	border: 2px solid #A43E89;
}
img, video, iframe, embed, object {
	max-width: 100%;
	height: auto;
}
/* Features
    -------------------------------------------------*/
#aboutUs {
	padding-top: 35px;
	padding-bottom: 25px;
	overflow: hidden;
}
#aboutUs .feature {
	margin-top: 30px;
	margin-bottom: 54px;
}
#aboutUs .right {
	padding-left: 10px;
	float: right;
}
#aboutUs .left {
	padding-right: 32px;
	float: left;
}
#aboutUs h3 {
	font: 18px/34px;
	text-transform: uppercase;
	letter-spacing: 1px;
	color: #222;
	margin-top: 0px;
}
.fluid-video-wrapper {
	margin-top: 18px;
}
#aboutUs .left {
	padding-right: 32px;
	float: left;
}
#aboutUs .right {
	float: right;
}
.row .area1 {
	width: 65%;
}
.row .area2 {
	width: 35%;
}
/* Services
    -------------------------------------------------*/
.grid .text-content {
	padding-left: 35%;
}
.grid .text-content {
	display: block;
	padding-left: 19%;
	padding-right: 8%;
}
.grid .grid-item {
}
.grid .text-content h5 {
	font-weight: bold;
}
.grid .grid-item .item-content {
	display: block;
	outline: none;
	text-decoration: none;
	padding: 20px 0;
}
.item-content .fa {
	position: absolute;
	color: #646464;
	font-size: 4.5em;
	top: 36px;
}
/* Team
    ---------------------------------------------------*/
.team-member {
	margin-bottom: 15px;
}
.member-img {
	overflow: hidden; 
	padding: 5px;
	position:relative;
}
.team-member .member-img img {
	max-width: 250px;
	margin: 0 auto;
	border-top: solid 1px #27AFD3;
	border-bottom: solid 4px #27AFD3;
}
.team-member h4 {
	font-size: 19px;
	line-height: 32px;
	margin: 10px 0 0;
	text-align: center;
}
.team-member .pos {
	display: block;
	margin: 0;
	text-align: center;
}
.team-member .contact a {
	padding: 0 8px;
}
.team-socials {
	position:absolute;
	bottom:70px;
	left:0px;
	right:0px;
}
.team-socials a {
	background: rgb(39, 175, 211);
	padding: 7px 0;
	margin: 2px;
	color: #fff;
}
#contactUs {
 background: #0A6E9A; 
}
#contactUs .btn {
	border-radius: 0px !important;
	background: #27AFD3;
}
.descrition {
	min-height: 90px;
	/*text-align: center;*/
    /*border-bottom: 1px solid #dadde2;*/
	padding: 5px 15px;
}
.team-member {
	padding-top: 5px;
}
.team-socials {
	margin: 15px 0;
	opacity: 0;
	text-align: center;
}
.team-member:hover .team-socials {
	opacity: 1;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}
.team-socials i {
	width: 35px;
	height: 35px;
	position: relative;
	display: inline-block;
	text-align: center;
	font-size: 18px;
}
/* --Portfolio----- */
#work {
	background: #27AFD3;
	color: #fff;
}
#work h2 {
	color: #fff !important;
}
#work p {
	color: #fff;
}
#portfolio {
	width: 100%
}
#portfolio .filters {
	margin-bottom: 20px
}
#portfolio .filters li a {
	color: #999;
	font-weight: 600;
	text-transform: uppercase;
	border: 1px solid #fff;
	padding: 6px 10px;
}
#portfolio .filters li a, #portfolio .filters li a:hover, #portfolio .filters li a:focus {
	color: #fff
}
#portfolio .filters li a.active {
	color: #000 !important;

	border: 1px solid #000;
}
#portfolio .items {
	margin-bottom: 0
}
#portfolio .items li {
	position: relative;
	float: left;
	width: 25%;
	overflow: hidden;
}
#portfolio .items li a img {
	width: 100%;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
#portfolio .items li a .overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: #000;
	background-color: rgba(0,0,0,0.6);
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	opacity: 0;
}
#portfolio .items li a .overlay span {
	color: #FFF;
	position: absolute;
	height: 50px;
	top: 50%;
	left: 0px;
	right: 0px;
	margin-top: -25px;
	line-height: 50px;
}
#portfolio .items li a:hover .overlay {
	opacity: 1
}
#portfolio .items li a:hover img {
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	-ms-transform: scale(1.1);
	-o-transform: scale(1.1);
	transform: scale(1.1);
}
nav#filter {
	margin-bottom: 1.5em;
}
nav#filter li {
	display: inline-block;
	margin: 0 0 0 5px;
}
nav#filter a {
	padding: 4px 12px;
	line-height: 20px;
	border: 1px solid #A43E89;
	text-decoration: none;
}
.current {
	background: #A43E89;
	color: #fff;
} 
.page-section.intro {
	min-height: 600px;
}
.btn {
	font-weight: 200;
}
.btn-dark {
	background: #444;
	color: #fff;
}
.btn-dark:hover {
	background: #000;
	color: #fff;
}
.back-to-top {
	display: inline-block;
	clear: both;
	background: #fff;
	color: #333;
	padding: 0 10px 5px;
	margin: 20px 0 0;
	text-shadow: none;
}
.back-to-top:hover {
	background: #333;
	color: #fff;
	text-decoration: none;
}
hr {
	border-color: #ddd;
}
body {
	margin: 0;
	font-family: Arial, sans-serif;
	background: #DCE8EC;
}
#navigation {
	position: fixed;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	width: 200px;
	background: #ffffff;
	box-shadow: 0 10px 10px -10px #000000;
}
#navigation > li {
	margin: 0;
	padding: 0;
	list-style: none;
}
#navigation > li > a {
	margin: 1px;
	color: #000000;
	background: #cccccc;
	display: block;
	padding: 5px;
	text-decoration: none;
	transition: all 400ms;
}
#navigation > li > a.current,  #navigation > li:hover > a {
	background: #999999;
}
.pageSection {
	min-height: 600px;
	padding: 20px;
	background: #dddddd;
}
.pageSection:nth-child(odd) {
	background: #eeeeee;
}
.socialIcons li {
	list-style: none;
	display: inline;
	margin-right: 6px;
}
footer {
	border-top: 1px solid #303030;
	padding: 45px 0;
	background: #fff;
	position: fixed;
	bottom:0;
    width:100%;
}
.social a:hover {
	color: #000;
}
.social a {
	font-size: 32px;
	margin: 0 10px;
	color: #A43E89;
}
.contact ul li {
	margin-bottom: 10px;
}
.contact ul li i {
	margin-right: 15px;
}
/*Clients*/
.clients #owl-demo .item {
	background: none;
}
.clients .helper {
	display: inline-block;
	height: 100%;
	vertical-align: middle;
}
.clients .helper img {
	vertical-align: middle;
	max-height: 70px;
	max-width: 80%;
}
.clients .helper:hover {
	cursor: e-resize;
}
.clients .customNavigation > a {
	font-size: 25px;
	cursor: pointer;
	margin: 0px 5px;
}
.portfolio-item img:hover {
	width: 110%;
	height: 110%;
}
footer{
	background: #000C11;
	
}
footer h4{
font-size:24px;	
padding-bottom:12px;
}
footer .col ul {
margin: 0;
padding: 0;
list-style: none;
}
footer .col ul li, footer .col p {
font-size: 14px;
color: #696969;
}
footer .col.col-social-icons i {
width: 40px;
height: 40px;
display: inline-block;
padding: 10px;
margin-right: 10px;
margin-bottom: 10px;
text-align: center;
font-size: 18px; 
color: #838383;
border-radius: 50%;
border: 1px solid #333;
}
footer .col.col-social-icons i:hover{
color:#A43E89;
}
footer input.form-control{
	padding: 18px 10px;
} 
.area1 a{
	margin-bottom:10px;
}
#services{
padding:35px 0;
}

.nav.nav-justified > li > a { position: relative; }
.nav.nav-justified > li > a:hover,
.nav.nav-justified > li > a:focus { background-color: transparent; }
.nav.nav-justified > li > a > .quote {
    position: absolute;
    left: 0px;
    top: 0;
    opacity: 0;
    width: 30px;
    height: 30px;
    padding: 5px;
    background-color: #13c0ba;
    border-radius: 15px;
    color: #fff;  
}
.nav.nav-justified > li.active > a > .quote { opacity: 1; }
.nav.nav-justified > li > a > img { box-shadow: 0 0 0 5px #13c0ba; }
.nav.nav-justified > li > a > img { 
    max-width: 100%; 
    opacity: .3; 
    -webkit-transform: scale(.8,.8);
            transform: scale(.8,.8);
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.nav.nav-justified > li.active > a > img,
.nav.nav-justified > li:hover > a > img,
.nav.nav-justified > li:focus > a > img { 
    opacity: 1; 
    -webkit-transform: none;
            transform: none;
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.tab-pane .tab-inner { padding: 30px 0 20px; }

@media (min-width: 768px) {
    .nav.nav-justified > li > a > .quote {
        left: auto;
        top: auto;
        right: 20px;
        bottom: 0px;
    }  
}
@media (min-width: 768px) {
.header .navbar-brand {
	padding-left: 0;
}
.navbar-nav {
	float: right;
}
.navbar-inverse .navbar-nav > li > a {
	color: #52A8CF;
	font-size: 1.1em;
	padding: 6px 14px !important;
	border-radius: 5px;
	margin: 19px 0px;
	border: 1px solid transparent;
}

}

@media (max-width: 768px) {
.banner-container {
	background-size: contain;
}
.row .six {
	width: auto;
}
.da-slide h2 {
	font-size: 28px;
}
.banner-content p {
	font-size: 1.2em;
	text-shadow: none;
}
.hero-img {
	display: none;
}
.da-slide p {
	width: 67%;
	top: 122px;
}
.team-member .member-img img {
	max-width: 100%;
}
.da-slider {
	height: 380px;
	width: 100%;
	min-width: initial;
	margin: 0px !important;
}
.header .navbar-nav > li > a {
	padding: 25px 12px;
}
.portfolio-item img {
	text-decoration: none;
	display: block;
	width: 330px;
	height: 228px;
	float: left;
	margin: 0 3px 3px 0;
	opacity: 1;
	-webkit-transform: scale(1, 1);
	-webkit-transition-timing-function: ease-out;
	-webkit-transition-duration: 250ms;
	-moz-transform: scale(1, 1);
	-moz-transition-timing-function: ease-out;
	-moz-transition-duration: 250ms;
}
.portfolio-item:hover .folio-info {
	top: 0px;
}
.portfolio-item .portfolio-desc .folio-info {
	padding: 0px;
}
.portfolio-item .portfolio-desc .folio-info h5 {
	font-size: 1em;
} 
}

@media (max-width:760px) {
.header .navbar-nav > li > a {
	padding: 7px 12px;
	font-size: 14px;
}
.header .navbar-brand {
  float: left;
  padding: 10px;
  }
  #home { 
  margin-top: 86px;
}
.header { 
  z-index: 999;
  }
.b1 { 
  border-radius: 3% / 50%;
  margin-bottom: 15px;
}
.navbar-inverse .navbar-nav > li > a { 
  padding: 6px 10px !important; 
  margin: 0px;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
	border-color: #A8A8A8;
}
.row .area1, .row .area2 { 
display: block;
width: 100%;
}
.flex-caption{
bottom:0px;
}
.flex-caption h3{
font-size:30px;
}
.flex-caption p{

}
}

@media (max-width: 480px) {
.header{
    padding: 10px 0 0px;
}
.banner-container {
	background-size: contain;
	margin-top: 69px;
}
.banner-container > img {
	width: 100%;
	height: 240px;
}
.flex-caption{
display:none;
}
.responsive-headline {
	font-size: 16px !important;
	margin-left: auto;
	margin-right: auto
}
.hero-text {
margin-top: 22%;
}
.hero-text h1 { 
line-height: 35px; 
}
.flex-caption h3{
font-size:20px;
}
.responsive-headline {
font-size: 21px !important;
}
.navbar {
	min-height: 69px;
}
.arrow-link {
	display: none;
}
.da-slide h2 {
	font-size: 22px;
	top: 7px;
	text-shadow: none;
}
.da-slide p {
	width: 65%;
	top: 42px;
	height: 50px;
}
#section-top ul li a {
	height: 28px;
	line-height: 28px;
	width: 26px;
}
.team-socials a {
	background: white;
	padding: 1px 0;
	margin: 2px;
}
.team-socials i {
	width: 19px;
	height: 19px;
	position: relative;
	display: inline-block;
	text-align: center;
	font-size: 16px;
}
.page-section {
	padding: 0px;
}
.page-section h1 {
	font-size: 3em;
}
.page-section h2 {
	font-size: 2em;
}
.page-section p {
	font-size: 1em;
	margin: 0 0 20px;
}
.portfolio-item .portfolio-desc .folio-info h5 {
	font-size: 11px;
}
.navbar-inverse .navbar-nav > li > a{
padding: 6pxpx !important;
}
.header .navbar-brand {
float: left;
padding: 12px 0px;
line-height: 18px; 
}
.navbar-toggle {
position: relative;
float: right;
padding: 9px 10px;
margin-top: 11px;
margin-right: 0px;
margin-bottom: 9px;
background-color: transparent;
border: 1px solid transparent;
border-radius: 4px;
}
#portfolio .items li {
position: relative;
float: left;
width: 50%;
overflow: hidden;
}
}

@media (max-width: 320px) {
.banner-container {
	background-size: contain;
}
.da-slider {
	height: 300px;
}
.da-slider {
	width: 100%;
	min-width: initial;
	position: relative;
	margin: 0 auto;
}
.da-dots {
	bottom: 2px;
}
.grid .text-content {
	padding-left: 29%;
	padding-right: 2%;
}
.portfolio-item:hover .folio-info {
	top: 0px;
}
.portfolio-item .portfolio-desc .folio-info h5 {
	text-transform: uppercase;
	text-align: center;
	font-weight: normal;
	font-size: 10px;
	margin: 10px 0 0 0;
}
nav#filter li {
	display: inline-block;
	margin: 0 0 23px 5px;
}
;
}
#owl-demo .item {
	background: #3fbf79;
	padding: 30px 0px;
	margin: 10px;
	color: #FFF;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	text-align: center;
}
.customNavigation {
	text-align: center;
}
.customNavigation a {
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.contact-parlex {
	padding-top: 0px;  
	background:#161616;
}
.parlex-back {
	padding: 30px 0;
	background-color: rgba(0, 0, 0, 0.37);
	color: #FDFDFD !important;
}
.parlex-back .heading p {
	color: #FDFDFD;
}
#clients {
	background: rgb(254, 254, 254);
}
/*Price table*/
.flat .plan {
	border-radius: 0px;
	list-style: none;
	padding: 0 0 20px;
	margin: 0 0 15px;
	background: #fff;
	text-align: center;
	box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.29) !important;
}
.flat .plan li {
	padding: 10px 15px;
	color: #ccc;
	border-top: 1px solid #f5f5f5;
	-webkit-transition: 300ms;
	transition: 300ms;
}
.flat .plan li.plan-price {
	border-top: 0;
}
.flat .plan li.plan-name {
	border-radius: 0;
	padding: 15px;
	font-size: 24px;
	line-height: 24px;
	color: #FFFFFF;
	background: #3ECF19 !important;
	margin-bottom: 30px;
	border-top: 0;
	border-radius: 50px;
	margin: 40px;
	float: left;
	width: 70%;
}
.flat .plan li > strong {
	color: #6B6B6B;
	font-weight: normal;
}
.flat .plan li.plan-action {
	margin-top: 10px;
	border-top: 0;
}
.flat .plan.featured {
	-webkit-transform: scale(1.1);
	-ms-transform: scale(1.1);
	transform: scale(1.1);
}
.flat .plan.featured:hover li.plan-name, .flat .plan:hover li.plan-name, .flat .plan.featured.plan-name {
	background: #898989 !important;
}
.customNavigation {
	display: none;
}
#clients .heading {
	margin: 0px;
}
.isotope-item {
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
	opacity: 1;
}
.isotopeWrapper article {
	margin: 0px;
}

.table_responsive {
    max-width: 900px;
    border: 1px solid #00bcd4;
    background-color: #efefef33;
    padding: 15px;
    overflow: auto;
    margin: auto;
    border-radius: 4px;
}
table{  width: 100%;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
    display: inline-block;
	position: absolute;
	margin-left:50%;
	margin-right: 50%;
}
table,th,td{
    border: 1px solid #00000017;
    padding: 10px 15px;}
 th{
 background-color: rgb(20, 221, 211);color: white;
 padding:12px;
}
td{
	padding: 5px 20px;
	text-align: center;
    color: white;
    background-color:black;
}




		</style>
</head>



<body>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>About Us</h2>
      
      <div class="area2 columns feature-media left"> <img src="images/feature-img-1.png" alt="" width="100%"> </div>
    </div>
	
    </div>
	
</section>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>MED<i>PLUS</i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
		  <li class="active" id="firstLink"><a href="addDoctor2.php" class="scroll-link">Add Doctor</a></li>
          <li  id="firstLink"><a href="search_doctor.php" class="scroll-link">Search Doctors</a></li>
          <li><a href="viewDoctor.phpphp" class="scroll-link">View Doctor</a></li>
          <li><a href="viewCustomer.php" class="scroll-link">View Patient</a></li>
          <li><a href="viewAppoinment.php" class="scroll-link">	View Appointment</a></li>
		  <li><a href="viewFeedback.php" class="scroll-link">View Feedback</a></li>
		  <li><a href="logout.php" class="scroll-link">Logout</a></li>
      
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">All registered Doctor List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table class='table_responsive' border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>Name</th>
								
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expert in</th>

								<th>Fee</th>
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								// echo "<td>".$row['doctor_id']."</td>";
								echo "<td>".$row['name']."</td>";
								
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['expertise']."</td>";
								
								echo "<td>".$row['fee']."</td>";
								
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			
	<footer class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2015 | All Rights Reserved -- Template by <a href="http://webThemez.com">WebThemez.com</a> </div>
    </div>
    <!-- / .row --> 
  </div>
</footer>
<a href="" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>