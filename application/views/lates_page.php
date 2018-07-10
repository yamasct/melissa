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
	<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
</head>
<body>
	<div class="uk-background-fixed uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="./assets/images/header.jpg" uk-img>
	  <h1 class="font-special">Melissa Sunjaya</h1>
	</div>

	<div class="uk-section">
		<div class="uk-container">
			<ul class="uk-subnav uk-subnav-divider sct-nav" uk-margin>
				<li class="uk-active"><a href='lates'>LATES</a></li>
				<li><a href="journal">JOURNAL</a></li>
				<li><a href="about">ABOUT</a></li>
				<li><a href="catalogue">CATALOGUE</a></li>
			</ul>
		</div>
	</div>
	<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <h2 class="uk-text-center sct-main-color">LATEST</h2>
				<div id="contena">

				</div>
    </div>
	</div>
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
</body>
</html>

<!-- js area -->
<script>
$( document ).ready(function() {
get_data();
});

function get_data(){

title = 'Melissa appears in trio recital throughout April';
desc = ''
	html = '<div class="uk-child-width-1-1@m" uk-grid>'+
			'<div>'+
					'<div class="uk-card uk-card-default">'+
							'<div class="uk-card-media-top">'+
									'<img src="./assets/images/header.jpg" alt="">'+
							'</div>'+
							'<div class="uk-card-body">'+
									'<h3 class="uk-card-title">Media Top</h3>'+
									'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>'+
							'</div>'+
					'</div>'+
			'</div>'+
	'</div>';

	$('#contena').html(html);
}

</script>
