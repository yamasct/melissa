<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>melissa</title>
	<!-- UIkit CSS -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" /> -->

	<link rel="stylesheet" href="assets/css/uikit.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- UIkit JS -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit-icons.min.js"></script> -->
	<script src="assets/js/uikit.min.js"></script>
	<script src="assets/js/uikit-icons.min.js"></script>
</head>
<body>

	<div class="uk-background-fixed uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="./assets/images/header.jpg" uk-img>
	  <h1 class="font-special">Melissa Sunjaya</h1>
	</div>

	<div class="uk-section">
		<div class="uk-container">
			<ul class="uk-subnav uk-subnav-divider sct-nav" uk-margin>
				<li class="uk-active"><a href='#'>HOME</a></li>
				<li><a href='lates'>LATES</a></li>
				<li><a href="journal">JOURNAL</a></li>
				<li><a href="about">ABOUT</a></li>
				<li><a href="catalogue">CATALOGUE</a></li>
			</ul>
		</div>
	</div>

	<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <h2 class="uk-text-center sct-main-color">LATEST</h2>

        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-1-2@m">
								<div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./assets/images/header.jpg);">
				        </div>
            </div>
            <div class="uk-width-1-2@m">
							<article class="uk-article">
								<!-- <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1> -->
								<p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

								<div class="uk-grid-small uk-child-width-auto" uk-grid>
										<div>
												<a class="uk-button uk-button-text sct-main-color" href="#">Read more</a>
										</div>
								</div>
							</article>
            </div>
        </div>
    </div>
	</div>

	<div class="uk-section uk-section-muted">
		<div class="uk-container">
			<div class="uk-child-width-1-3@m" uk-grid>
			    <div>
			        <div class="uk-card uk-card-default">
			            <div class="uk-card-media-top">
			                <img src="./assets/images/header.jpg" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title">Media Top</h3>
			                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			            </div>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default">
			            <div class="uk-card-media-top">
			                <img src="./assets/images/header.jpg" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title">Media Top</h3>
			                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			            </div>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default">
			            <div class="uk-card-media-top">
			                <img src="./assets/images/header.jpg" alt="">
			            </div>
			            <div class="uk-card-body">
			                <h3 class="uk-card-title">Media Top</h3>
			                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>

	<div class="uk-section uk-section-muted">
		<div class="uk-container">
			<hr/>
		</div>
	</div>

	<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <h2 class="uk-text-center sct-main-color">JOURNAL</h2>

        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-1-2@m">
								<div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./assets/images/header.jpg);">
				        </div>
            </div>
            <div class="uk-width-1-2@m">
							<article class="uk-article">
								<!-- <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1> -->
								<p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

								<div class="uk-grid-small uk-child-width-auto" uk-grid>
										<div>
												<a class="uk-button uk-button-text sct-main-color" href="#">Read more</a>
										</div>
								</div>
							</article>
            </div>
        </div>
    </div>
	</div>

	<div class="uk-section uk-section-muted">
    <div class="uk-container">
			<div class="uk-child-width-1-2 uk-child-width-1-2@s uk-grid-small uk-light" uk-grid>
		    <div>
					<div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./assets/images/header.jpg);">
					</div>
				</div>
		    <div>
					<div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./assets/images/header.jpg);">
					</div>
				</div>
			</div>
			<div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid-small uk-light" uk-grid>
		    <div>
					<div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./assets/images/header.jpg);">
					</div>
				</div>
		    <div>
					<div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./assets/images/header.jpg);">
					</div>
				</div>
		    <div>
					<div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(./assets/images/header.jpg);">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="ini-mainbody">
		<div class="uk-container"> -->
			<!-- <div class="uk-child-width-expand@s uk-text-left" uk-grid>
		    <div>
					<img data-src="./assets/images/feater.png" alt="" width="auto" height="auto" uk-img>
		    </div>
		    <div>
					<dl class="uk-description-list uk-description-list-divider" id="ini-descrip">
					    <dt>Melissa appears in trio recital throughout April</dt>
					    <dd>Woodwork, painting, electrical, plumbing, and more. My services
									might be varied, but they all come with the same promise
									of quality, dedication, and durability. Licensed and insured, I’m an
									experienced contractor with knowledge... <i>read more</i></dd>
					</dl>
		    </div>
			</div> -->
			<!-- <div class="uk-child-width-expand@s" uk-grid>
		    <div class="uk-text-center">
					<img class="ini-img-custom" data-src="./assets/images/1.png" alt="" width="auto" height="auto" uk-img>
					<dl class="uk-description-list uk-description-list-divider">
						<dt class="uk-text-center">Melissa appears in trio recital throughout April</dt>
						<dd class="uk-text-justify">Woodwork, painting, electrical, plumbing, and more. My services
							might be varied, but they all come with the same promise
							of quality, dedication, and durability. Licensed and insured, I’m an
							experienced contractor with knowledge... <i>read more</i></dd>
						</dl>
		    </div>
				<div class="uk-text-center">
					<img class="ini-img-custom"  data-src="./assets/images/2.png" alt="" width="auto" height="auto" uk-img>
					<dl class="uk-description-list uk-description-list-divider">
						<dt class="uk-text-center">Melissa appears in trio recital throughout April</dt>
						<dd class="uk-text-justify">Woodwork, painting, electrical, plumbing, and more. My services
							might be varied, but they all come with the same promise
							of quality, dedication, and durability. Licensed and insured, I’m an
							experienced contractor with knowledge... <i>read more</i></dd>
						</dl>
		    </div>
				<div class="uk-text-center">
					<img class="ini-img-custom" data-src="./assets/images/3.png" alt="" width="100%"uk-img>
					<dl class="uk-description-list uk-description-list-divider">
						<dt class="uk-text-center">Melissa appears in trio recital throughout April</dt>
						<dd class="uk-text-justify">Woodwork, painting, electrical, plumbing, and more. My services
							might be varied, but they all come with the same promise
							of quality, dedication, and durability. Licensed and insured, I’m an
							experienced contractor with knowledge... <i>read more</i></dd>
						</dl>
		    </div>
			</div> -->

		<!-- <div class="uk-child-width-expand@s uk-text-left" uk-grid>
			<div>
				<img data-src="./assets/images/4.png" alt="" width="auto" height="auto" uk-img>
			</div>
			<div>
				<dl class="uk-description-list uk-description-list-divider" id="ini-descrip">
						<dt>Melissa appears in trio recital throughout April</dt>
						<dd>Woodwork, painting, electrical, plumbing, and more. My services
								might be varied, but they all come with the same promise
								of quality, dedication, and durability. Licensed and insured, I’m an
								experienced contractor with knowledge... <i>read more</i></dd>
				</dl>
			</div>
		</div> -->

			<!-- <div class="uk-child-width-expand@s uk-text-center" uk-grid>
				<div>
					<img data-src="./assets/images/header.jpg" alt="" width="400" height="200" uk-img>
				</div>
				<div>
					<img data-src="./assets/images/header.jpg" alt="" width="400" height="200" uk-img>
				</div>
			</div>
			<div class="uk-child-width-expand@s uk-text-center" uk-grid>
				<div>
					<img data-src="./assets/images/header.jpg" alt="" width="200" height="200" uk-img>
				</div>
				<div>
					<img data-src="./assets/images/header.jpg" alt="" width="200" height="200" uk-img>
				</div>
				<div>
					<img data-src="./assets/images/header.jpg" alt="" width="200" height="200" uk-img>
				</div>
			</div> -->
		<!-- </div>
	</div> -->

	<div class="uk-section uk-section-secondary">
    <div class="uk-container">
			<div class="uk-child-width-1-2 uk-child-width-1-2@s uk-grid-small uk-light" uk-grid>
		    <div>
					<form class="uk-form-horizontal uk-margin-large">
							<div class="uk-margin">
								<h3>Sign up for our mailing list.</h3>
								<label class="uk-form-label" for="form-horizontal-text">Email Address </label>
				        <div class="uk-form-controls uk-invert">
				            <input class="uk-input uk-width-1-2 uk-form-small" id="form-horizontal-text" type="text" placeholder="Some text...">
										<button class="uk-button uk-button-small uk-button-default">Join</button>
				        </div>
				    </div>
					</form>
				</div>
		    <div>
					<h3>&nbsp;</h3>
					<ul class="uk-iconnav">
					    <li><a href="#" uk-icon="icon: instagram"></a></li>
					    <li><a href="#" uk-icon="icon: twitter"></a></li>
					    <li><a href="#" uk-icon="icon: facebook"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="ini-footer">
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
	</div> -->
</body>
</html>
