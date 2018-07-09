<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>melissa</title>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit-icons.min.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<div class="ini-header" id="ini-header-id">
			<!-- <div class="uk-container"> -->
			<!-- <img data-src="./assets/images/header.jpg" alt="" uk-img> -->
			<div class="uk-background-cover uk-background-muted uk-height-medium uk-panel uk-flex uk-flex-bottom uk-flex-right" style="background-image: url(./assets/images/header.jpg);">
				<div id="ini-search-header">
					<!-- <a href="" uk-icon="icon: search; ratio: 2"></a> -->
		        <div>
		            <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
		            <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
		                <form class="uk-search uk-search-navbar uk-width-1-1">
		                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
		                </form>
		            </div>
		        </div>

				</div>
			<!-- </div> -->
		</div>
	</div>
	<div class="uk-container ini-navmenu" id="ini-navmen-id">
		<nav class="uk-navbar-container" uk-navbar>
	    <div class="uk-navbar-center">

				<ul class="uk-navbar-nav">
						<li>
							<a href='lates'>LATES</a>
						</li>
						<li>
								<a href="journal">JOURNAL</a>
						</li>
						<li>
							<a href="about">ABOUT</a>
						</li>
						<li>
							<a href="catalogue">CATALOGUE</a>
						</li>
				</ul>
	    </div>
		</nav>
		<h2 class="uk-text-center"><span>CATALOGUE</span></h2>
		<nav class="uk-navbar-container  ini-navbar-little" uk-navbar>
	    <div class="uk-navbar-center">
	        <ul class="uk-navbar-nav">
	            <li class="uk-active">
								<a href="#">All</a>
							</li>
	            <li>
	                <a href="#">Art Works</a>
	            </li>
	            <li>
								<a href="#">Books</a>
							</li>
	            <li>
								<a href="#">Exhibitions</a>
							</li>
	        </ul>
	    </div>
		</nav>
	</div>
	<div class="ini-mainbody">
		<div class="uk-container">
			<div class="uk-grid-medium uk-child-width-expand@s uk-text-center" uk-grid>
				<div class="uk-width-1-3@m">
						<img class="uk-align-center" src="./assets/images/header.jpg" width="auto" height"auto" alt="Example image">
						<dl class="uk-description-list">
						    <dt class="uk-text-center">Donate equipment</dt>
						    <dd class="uk-text-justify">Woodwork, painting, electrical, plumbing, and more.
										My services might be varied, but they all come with
										the same promise
										of quality, dedication, and durability. Licensed and
										insured, I’m an experienced... read more</dd>
						</dl>
				</div>
				<div class="uk-width-1-3@m">
						<img class="uk-align-center" src="./assets/images/header.jpg" width="auto" height"auto" alt="Example image">
						<dl class="uk-description-list">
						    <dt class="uk-text-center">Donate foods</dt>
						    <dd class="uk-text-justify">Woodwork, painting, electrical, plumbing, and more.
										My services might be varied, but they all come with
										the same promise
										of quality, dedication, and durability. Licensed and
										insured, I’m an experienced... read more</dd>
						</dl>
				</div>
				<div class="uk-width-1-3@m">
						<img class="uk-align-center" src="./assets/images/header.jpg" width="auto" height"auto" alt="Example image">
						<dl class="uk-description-list">
						    <dt class="uk-text-center">Donate medicine</dt>
						    <dd class="uk-text-justify">Woodwork, painting, electrical, plumbing, and more.
										My services might be varied, but they all come with
										the same promise
										of quality, dedication, and durability. Licensed and
										insured, I’m an experienced... read more</dd>
						</dl>
				</div>
				<div class="uk-width-1-3@m">
						<img class="uk-align-center" src="./assets/images/header.jpg" width="auto" height"auto" alt="Example image">
						<dl class="uk-description-list">
						    <dt class="uk-text-center">Donate equipment</dt>
						    <dd class="uk-text-justify">Woodwork, painting, electrical, plumbing, and more.
										My services might be varied, but they all come with
										the same promise
										of quality, dedication, and durability. Licensed and
										insured, I’m an experienced... read more</dd>
						</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="ini-footer">
		<div class="uk-container">
			<form class="uk-form-horizontal uk-margin-large">
				<span>Sign up for our mailing list.</span>
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-horizontal-text">Email Address </label>
			        <div class="uk-form-controls">
			            <input class="uk-input uk-width-1-3 uk-form-small" id="form-horizontal-text" type="text" placeholder="Some text...">
									    <button class="uk-button uk-button-small uk-button-default">Join</button>
							</div>
			    </div>
			</form>
		</div>
	</div>
</body>
</html>
