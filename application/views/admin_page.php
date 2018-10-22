<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<!--
	<div class="uk-background-fixed uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="./assets/images/header.jpg" uk-img>
	  <h1 class="font-special">Melissa Sunjaya</h1>
	</div> -->
	<div class='' uk-grid>
		<div class="uk-width-1-5@m">
			<div class="uk-card uk-card-default uk-card-body sct-left-menu" >
	    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
	        <li class="uk-active"><a href="#">Active</a></li>
	        <li class="uk-parent">
	            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span>Content</a>
	            <ul class="uk-nav-sub">
	                <li><a href="#">Journal</a></li>
	                <li><a href="#">Catalogue</a></li>
	                <li><a href="#">About</a></li>
	            </ul>
	        </li>
	    </ul>
			</div>
		</div>
		<div class="uk-width-expand@m">
			<section class='uk-section '>
				<!-- <div class='uk-container'> -->
				<p class="uk-align-left" uk-margin>
				    <button class="uk-button sct-main-button">new</button>
				</p>
				<table class="uk-table uk-table-hover uk-table-divider uk-width-1-1">
						<thead>
								<tr>
										<th>Date</th>
										<th>Title</th>
										<th>Content</th>
										<th>Image</th>
										<th>opt</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<td>Table Data</td>
										<td>Table Data</td>
										<td>Table Data</td>
										<td>Table Data</td>
										<td>Table Data</td>
								</tr>
						</tbody>
				</table>
				<!-- </div> -->
			</section>
				<section class='uk-section '>
					<!-- <div class='uk-container'> -->
					<form class="uk-form-horizontal">
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Title</label>
				        <div class="uk-form-controls">
				            <input class="uk-input uk-form-width-large" id="form-stacked-text" type="text">
				        </div>
				    </div>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-text">Content</label>
				        <div class="uk-form-controls">
				            <textarea class="uk-textarea  uk-form-width-large" rows="5"></textarea>
				        </div>
				    </div>
						<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Picture</label>
		        	<div uk-form-custom="target: true">
								<div class="uk-form-controls">
								 <input type="file">
		             <input class="uk-input	 uk-form-width-medium" type="text" placeholder="Select file" disabled>
							 </div>
		        	</div>
		     		</div>
				</form>

				<p class="uk-align-center" uk-margin>
				    <button class="uk-button sct-main-button">Save</button>
				    <button class="uk-button uk-button-danger">Cancel</button>
				</p>
					<!-- </div> -->
				</section>
		</div>
	</div>
	<!-- <div class="uk-section uk-section-secondary">
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
	</div> -->

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
