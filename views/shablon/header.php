<!DOCTYPE html>
<html>
<head>
<title>AUCTION LeoPlannet</title>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<link href="/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="/template/css/bootstrap-theme.css" rel="stylesheet" type="text/css" media="screen">

<link href="/template/fonts/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="/template/js/bootstrap.js"></script>
<script type="text/javascript" src="/template/js/bootstrap.min.js"></script>

<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />


</head>
	<body>		
		 <div class="header_leoplannet">
			<div class="row header-blogleoplannet-row-width">					
					<div class="col-lg-2 col-md-2 col-md-offset-1 col-header-blogleoplannet">
						<p class="leoplannet-header-row-p">
							 <a href="#" class="leoplannet-header-row-p-a">
								 <span class="leoplannet-header-row-p-a">BlOG</span>
								 <span class="leoplannet-header-row-p-l">Leo Plannet</span>
							 </a>
						 </p>
					 </div>
					 
					 <div class="col-lg-5 col-md-4">
						 <nav class="navbar navbar-static menu-navbar-blog">
							 <div class="container-fluid">
								 <div class="collapse navbar-collapse js-navbar">
								     <ul class="nav navbar-nav menu-navbar-blogleoplannet">
										 <li class="menu-home-li-blogleoplannet">
										     <a href="/" class="menu-navbar-blogleoplannet">ГЛАВНАЯ</a>
										 </li>
										 <li class="dropdown menu-navbar-blogleoplannet">
										     <a id="drop1" href="/developer/" class="dropdown-toggle" data-toggle="dropdown">
												 РАЗРАБОТКА
												 <span class="caret"></span>
											
											 <ul class="dropdown-menu">
												 <li><a href="/developer/html/">html</a></li>
												 <li><a href="#">Текст подпункта</a></li>
												 <li class="divider"></li>
												 <li><a href="#">Текст подпункта</a></li>
											 </ul>
											  </a>
										 </li>
										 <li class="dropdown menu-navbar-blogleoplannet">
											 <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">
												 ДИЗАЙН
												 <span class="caret"></span>
											 </a>
											 <ul class="dropdown-menu">
											  	 <li><a href="#">Текст подпункта</a></li>
												 <li><a href="#">Текст подпункта</a></li>
												 <li class="divider"></li>
												 <li><a href="#">Текст подпункта</a></li>
											 </ul>
										 </li>
										 <li class="dropdown menu-navbar-blogleoplannet">
										     <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">
											     ПОЛЕЗНОЕ
											     <span class="caret"></span>
										     </a>
										     <ul class="dropdown-menu">
												 <li><a href="#">Текст подпункта</a></li>
												 <li><a href="#">Текст подпункта</a></li>
												 <li class="divider"></li>
												 <li><a href="#">Текст подпункта</a></li>
										     </ul>
										 </li>
								     </ul>
								 </div>
							 </div>
						 </nav>
					 </div>					
					<div class="col-lg-4 col-md-4 col-lg-offset-blogleoplannet">
						<?php //if (User::isGuest()): ?>
							 <button href="/registr" type="button" class="btn btn-blog-leoplannet-vhod-registr">
								 <a  href="/registr" class="footer-registration-button">РЕГИСТРАЦИЯ</a>
							 </button>
							 <button href="/login" type="button" class="btn btn-blog-leoplannet-vhod-registr">
								 <a  href="/login" class="footer-registration-button">ВХОД</a>
							 </button>
						<?php //else: ?>
							 <!--<div class="col-lg-2 col-md-2">
								<a href="/cabinet/"><p class="col-lg-2 col-md-2 header-name-user"><?php //echo $user['nickname']?></p></a>
							 </div>-->
							 <?php //if (User::isAdmin()): ?>
								 <!--<button href="/logout/" type="button" class="btn btn-blog-leoplannet-vhod-registr">
									 <a  href="/logout/" class="footer-registration-button">ВЫХОД</a>
								 </button>
								 <button href="/admin/" type="button" class="btn btn-blog-leoplannet-vhod-registr">
									 <a  href="/admin/" class="footer-registration-button">КАБИНЕТ</a>
								 </button>-->
							 <?php //else: ?>
								 <!--<button href="/logout/" type="button" class="btn btn-blog-leoplannet-vhod-registr">
									 <a  href="/logout/" class="footer-registration-button">ВЫХОД</a>
								 </button>
								 <button href="/cabinet/" type="button" class="btn btn-blog-leoplannet-vhod-registr">
									 <a  href="/cabinet/" class="footer-registration-button">КАБИНЕТ</a>
								 </button>-->
							 <?php //endif; ?>
						<?php //endif; ?>
					</div>
			 </div>
		 </div>
		 
