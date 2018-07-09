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
							<a href=''>HOME</a>
						</li>
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
		<h2 class="uk-text-center"><span>JOURNAL</span></h2>
		<h5 class="uk-heading-line uk-text-center"><span>New animated series: Max & Maestro</span></h5>
	</div>
	<div class="ini-mainbody">
		<div class="uk-container">
			<div class="uk-panel uk-text-justify ini-para">
			    <img class="uk-align-left uk-text-justify uk-margin-remove-adjacent" src="./assets/images/header.jpg" width="400" height"400" alt="Example image">
					<p>
						Woodwork, painting, electrical, plumbing, and more. My services
						might be varied, but they all come with the same promise
						of quality, dedication, and durability. Licensed and insured, I’m an
						experienced contractor with knowledge. Woodwork, painting,
						electrical, plumbing, and more. My services might be varied, but
						they all come with the same promise of quality, dedication, and
						durability. Licensed and insured, I’m an experienced contractor
						with knowledge.
						Woodwork, painting, electrical, plumbing, and more. My services
						might be varied, but they all come with the same promise of quali-
						ty, dedication, and durability. Licensed and insured, I’m an experi-
						enced contractor with knowledge.
						Woodwork, painting, electrical, plumbing, and more. My services might be varied, but they all come with the same promise of quality, dedication, and durability.
						Licensed and insured, I’m an experienced contractor with knowledge. Woodwork, painting, electrical, plumbing, and more. My services might be varied, bu they all
						come with the same promise of quality, dedication, and durability. Licensed and insured, I’m an experienced contractor with knowledge.
						Woodwork, painting, electrical, plumbing, and more. My services might be varied, but they all come with the same promise of quality, dedication, and durability.
						Licensed and insured, I’m an experienced contractor with knowledge. Woodwork, painting, electrical, plumbing, and more. My services might be varied, but they all
						come with the same promise of quality, dedication, and durability. Licensed and insured, I’m an experienced contractor with knowledge.
						Woodwork, painting, electrical, plumbing, and more. My services might be varied, but they all come with the same promise of quality, dedication, and durability.
						Licensed and insured, I’m an experienced contractor with knowledge.
					</p>
			</div>
		<hr />
		<div class="uk-panel">
			<div class="uk-align-left">
				<dl>
						<a href='#'><dt><span uk-icon="icon: chevron-left"></span> Previous News</dt></a>
				    <dd>Melissa appears in trio recital throughout April</dd>
				</dl>
			</div>
			<div class="uk-align-right uk-text-right">
				<dl>
				    <a href='#'><dt>Next News <span uk-icon="icon: chevron-right"></span></dt></a>
				    <dd>May with the Staatskapelle Berlin</dd>
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
