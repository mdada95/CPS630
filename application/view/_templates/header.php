<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>%TITLE%</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>

    <!-- CSS -->
<link href="<?php echo URL; ?>css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- navigation -->
    <div class="container">
    	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		  <a class="navbar-brand" href="#"><i class= "fab fa-autoprefixer logo" style="font-size:60px;color:red;"></i></a>
		  <button type=button class="button navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction(this)">
		  	<div id="mbutton" style="float: left; padding-top: 8px; padding-right: 6px;">Menu</div>
		  	<div class="container1">
			  <div class="bar1"></div>
			  <div class="bar2"></div>
			  <div class="bar3"></div>
			</div>
		    <!-- <span class="navbar-toggler-icon"></span> -->
		  </button>

		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav mr-auto">
		      	<li class="nav-item active">
		        	<a class="nav-link" href="<?php echo URL; ?>">Home</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link disabled" href="#">About Us</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link disabled" href="#">Blogs</a>
		      	</li>
		      	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Maintain
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="<?php echo URL; ?>maintain/artworks">Artworks</a>
			          <a class="dropdown-item" href="<?php echo URL; ?>maintain/artists">Artists</a>
			          <a class="dropdown-item" href="<?php echo URL; ?>maintain/museums">Museums</a>
			        </div>
			    </li>
		    </ul>
		    <ul class="navbar-nav">
			    <li class=nav-item>
			    	<div class="search-container">
			    		<form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" id="searchInput" type="search" placeholder="Search..." aria-label="Search">
					      <button type="submit" id="searchButton"><i class="fa fa-search"></i></button>
				    	</form>
			    	</div>
			    </li>
			    <li class="nav-item">
			      	<button type="button" class="btn btn-default btn-sm shopcart"><i class="fas fa-shopping-cart"></i> Cart
			      	</button>
			    </li>
		    </ul>
		  </div> 
		</nav>
    </div>