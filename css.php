<?php
// css:
?>
        <!--Latest compiled and minified CSS-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!--Font Awesome CSS-->
        <link rel="stylesheet" href="https://www.servmill.com/css/font-awesome.min.css" type="text/css" media="screen">

        <!--Ajax style-->
        <script type="text/javascript"  src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!-- jquery CSS-->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

        <!--Material designe-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/css/bootstrap-material-design.css">

        <!--Material designe ripples-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.8/css/ripples.min.css">

<style>
/* loading style */
.loader {

	position: fixed;

	left: 0px;

	top: 0px;

	width: 100%;

	height: 100%;

	z-index: 9999;

	background: url('https://www.servmill.com/loadingtech.gif') 50% 50% no-repeat rgb(255,255,255);

}

/* login and register css */
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #207fc2;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
  clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}
.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
/* login and register css END */


/* footer style  */

 .icon-ul { list-style-type:none !important; margin:0px; padding:0px;}

 .icon-ul li { line-height:75px; width:100%; float:left;}

 .icon { float:left; margin-right:5px;}

 .copyright { min-height:40px; background-color:#5a5a5a;}

 .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0px;}

 .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}

 .post p { font-size:12px; color:#FFF; line-height:20px;}

 .post p span { display:block; color:#8f8f8f;}

 .bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}

 .bottom_ul li { float:left; line-height:40px;}

 .bottom_ul li:after { content:"/"; color:#FFF; margin-right:8px; margin-left:8px;}

 .bottom_ul li a { color:#FFF;  font-size:12px;}
/* footer style ends */

/*style for search box*/
.input-group .form-control {

    position: relative;

    z-index: 2;

    float: left;

    width: 100%;

    margin-bottom: -5px;

        }

					#custom-search-input{

					    padding: 3px;

					    border: solid 1px #E4E4E4;

					    border-radius: 2px;

					    background-color: #fff;

					}



					#custom-search-input input{

					    border: 0;

					    box-shadow: none;

					}



					#custom-search-input button{

					    margin: 2px 0 0 0;

					    background: none;

					    box-shadow: none;

					    border: 0;

					    color: #666666;

					    padding: 0 8px 0 10px;

					    border-left: solid 1px #ccc;

					}



					#custom-search-input button:hover{

					    border: 0;

					    box-shadow: none;

					    border-left: solid 1px #ccc;

					}



					#custom-search-input .glyphicon-search{

					    font-size: 23px;

					}

#header {
  position: fixed !important;
  width: 100%;
  z-index: 10000;
}
#site { padding-top: 500px; }


.alert {
    margin-bottom: 0px;
}

.row {
    margin-right: 0px;
    margin-left: 0px;
}

.navbar {
    margin-bottom: 0px;
}
/*
*  Basic Reset
*/

*,
*:after,
*:before {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

a {
	text-decoration: none;
	color: #3498db;
}
	a:hover {
		color: #2980b9;
	}

h2 {
	line-height: 1.2;
	margin-bottom: 1.6rem;
}

.wrapper {
	max-width: 400px;
	margin: 15px auto;
	padding-left: 1em;
	padding-right: 1em;
}

/**
 * Helpers
 */
.border-tlr-radius {
	border-top-left-radius: 2px;
	border-top-right-radius: 2px;
}

.text-center { text-align: center; }

.radius { border-radius: 2px; }

.padding-tb { padding-top: 1.6rem; padding-bottom: 1.6rem;}

.shadowDepth0 { box-shadow: 0 1px 3px rgba(0,0,0, 0.12); }

.shadowDepth1 {
   box-shadow:
  		0 1px 3px rgba(0,0,0, 0.12),
    	0 1px 2px rgba(0,0,0, 0.24);
}


/**
 * Card Styles
 */
.card {
	background-color: #fff;
	margin-bottom: 1.6rem;
}

.card__padding {
	padding: 1.6rem;
}

.card__image {
	min-height: 100px;
	background-color: #eee;
}
	.card__image img {
		width: 100%;
		max-width: 100%;
		display: block;
	}

.card__content {
	position: relative;
}

/* card meta */
.card__meta time {
	font-size: 1.5rem;
	color: #bbb;
	margin-left: 0.8rem;
}

/* card article */
.card__article a {
	text-decoration: none;
	color: #444;
	transition: all 0.5s ease;
}
	.card__article a:hover {
		color: #2980b9;
	}

/* card action */
.card__action {
	overflow: hidden;
	padding-right: 1.6rem;
	padding-left: 1.6rem;
	padding-bottom: 1.6rem;
}
.card__author {}
.card__author img,
.card__author-content {
		display: inline-block;
		vertical-align: middle;
	}
.card__author img{
		border-radius: 50%;
		margin-right: 0.6em;
	}

.rating-block{
  	background-color:#FAFAFA;
  	border:1px solid #EFEFEF;
  	padding:15px 15px 20px 15px;
  	border-radius:3px;
  }
.bold{
  	font-weight:700;
  }
.padding-bottom-7{
  	padding-bottom:7px;
  }
.review-block{
  	background-color:#FAFAFA;
  	border:1px solid #EFEFEF;
  	padding:15px;
  	border-radius:3px;
  	margin-bottom:15px;
  }
.review-block-name{
  	font-size:12px;
  	margin:10px 0;
  }
.review-block-date{
  	font-size:12px;
  }
.review-block-rate{
  	font-size:13px;
  	margin-bottom:15px;
  }
.review-block-title{
  	font-size:15px;
  	font-weight:700;
  	margin-bottom:10px;
  }
.review-block-description{
  	font-size:13px;
  }

/* thumblin panel*/
.panel{
  border-radius: 8px;
}
.label {
border-radius: 10px;
}

.navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
    line-height: 20px;
}

.top-bar {
    background-color: #fff;
    width: 100%;
    height: 50px;
    webkit-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
    -moz-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
    box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
}

.menu-item {
    line-height: 20px;

    font-weight: bold;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 13px;
}

.menu-item-flexible {
    max-width: 230px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}

.web-logo {
    color: #3f729b;
    font-size: 18px;
    font-weight: 200;
    line-height: 1;
    padding-left: 0px;
}

@media (max-width: 768px) {
    .web-logo {
        padding-left: 15px;
    }
}

.header-profile {
    color: #3f729b;
    font-weight: bold;
    line-height: 1;
    max-width: 100px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

.navbar-nav>li>a.header-profile {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 30px;
}

.user-name-box {
    margin-left: 5px;
    display: none;
}

@media (min-width:768px) {
    .navbar-nav>li>a.header-profile {
        padding-right: 5px;
    }
    .web-logo {
        padding-left: 15px;
    }
}

#bs-navbar {
    background-color: #fff;
}

@media (max-width:767px) {
    .navbar-nav>li>a.header-profile {
        max-width: none;
        white-space: inherit;
        overflow: inherit;
        padding-top: 5px;
        padding-bottom: 5px;
        line-height: 25px;
    }
    .menu-item {
        font-size: 14px;
    }
    .menu-item-flexible {
        max-width: none;
        text-overflow: inherit;
        overflow: inherit;
        white-space: inherit;
    }
    .user-name-box {
        font-size: 14px;
        display: inline-block;
    }
    .navbar-nav>li {
        background-color: #eee;
    }
    #bs-navbar {
        background-color: #eee;
        font-size: 15px;
        webkit-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
        -moz-box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
        box-shadow: rgba(0, 0, 0, 0.14902) 0px 2px 4px 0px;
    }
}

.navbar-toggle .icon-bar {
    background-color: #3f729b;
}

.navbar-toggle {
    padding-right: 0px;
}

@media (max-width: 768px) {
    .top-bar {
        padding-left: 0px;
    }
    .navbar-brand {}
}
.container>.navbar-header,
.container-fluid>.navbar-header,
.container>.navbar-collapse,
.container-fluid>.navbar-collapse {
    margin-left: 0px;
    margin-right: 0px;
}
.navbar {
    min-height: 60px;
  }
.navbar .navbar-nav > li > a {
        color: skyblue;
  }
  .navbar, .navbar.navbar-default {
      color: #03a9f4;
  }


.intro-header {
background-color: #777777;
background: no-repeat center center;
background-attachment: scroll;
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
margin-bottom: 50px;
}
.intro-header .site-heading,
.intro-header .post-heading,
.intro-header .page-heading {
padding: 100px 0 50px;
color: white;
}
@media only screen and (min-width: 768px) {
.intro-header .site-heading,
.intro-header .post-heading,
.intro-header .page-heading {
padding: 150px 0;
}
}
.intro-header .site-heading,
.intro-header .page-heading {
text-align: center;
}
.intro-header .site-heading h1,
.intro-header .page-heading h1 {
margin-top: 0;
font-size: 50px;
}
.intro-header .site-heading .subheading,
.intro-header .page-heading .subheading {
font-size: 24px;
line-height: 1.1;
display: block;
font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-weight: 300;
margin: 10px 0 0;
}
@media only screen and (min-width: 768px) {
.intro-header .site-heading h1,
.intro-header .page-heading h1 {
font-size: 80px;
}
}
.intro-header .post-heading h1 {
font-size: 35px;
}
.intro-header .post-heading .subheading,
.intro-header .post-heading .meta {
line-height: 1.1;
display: block;
}
.intro-header .post-heading .subheading {
font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 24px;
margin: 10px 0 30px;
font-weight: 600;
}
.intro-header .post-heading .meta {
font-family: 'Lora', 'Times New Roman', serif;
font-style: italic;
font-weight: 300;
font-size: 20px;
}
.intro-header .post-heading .meta a {
color: white;
}
@media only screen and (min-width: 768px) {
.intro-header .post-heading h1 {
font-size: 55px;
}
.intro-header .post-heading .subheading {
font-size: 30px;
}
}

/* chatbox css msgnotifications */
.refresh
  {               color: green;
                  font-size: 12px;
                  height: 300px;
                  overflow: auto;
                  width: 550px;
                  padding: 10px;
                  background-color: #FFFFFF;
   }

/* Recent post image hover*/
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.item {
    position: relative;
    border: 0px solid #333;
    margin: 0%;
    overflow: hidden;
    width: 354px;
}
.item img {
  max-width: 100%;

  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>
