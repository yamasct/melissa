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
	<link rel="stylesheet" href="assets/css/main0.css">

	<!-- UIkit JS -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit-icons.min.js"></script> -->
	<script src="assets/js/uikit.min.js"></script>
	<script src="assets/js/uikit-icons.min.js"></script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<div class="uk-offcanvas-content sct-frame ">
		<div class="sct-background">
		</div>
		<div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>
	    <div class="uk-position-center">
				<div class="uk-card uk-card-default uk-card-body ">
					<form>
						<div class="uk-margin">
            	<input class="uk-input" type="email" placeholder="Email" name="user">
        		</div>
						<div class="uk-margin">
            	<input class="uk-input" type="password" placeholder="Password" name="pass">
        		</div>
					</form>
					<div class="uk-margin">
							<button name="masuk" class="uk-button uk-button-default"><span uk-icon="icon: sign-in"></span></button>
					</div>

				</div>
			</div>
		</div>
	</div>

</body>
</html>
<script>
$( document ).ready(function() {
	login();
});
function login(){
	$("[name=masuk]").on('click', function(){
		var user = $('[name="user"]').val();
		var pass = $('[name="pass"]').val();

		$.ajax({
				 type: "POST",
				 url: '/melissa/admin/login',
				 data: {
					 user : user,
					 pass : pass
				 },
				 dataType: "json",
				 success: function (result) {
					window.location.href = "http://127.0.0.1/melissa/admin/journal";
				 },
				 error: function(XMLHttpRequest, textStatus, errorThrown) {
						 console.log(XMLHttpRequest);
					}
		 });

	});
}
</script>
