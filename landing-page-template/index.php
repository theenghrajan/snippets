<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Add Following Select2 Style if you're using select2 selector; This is a basic style please use sass to add your own css for select2 -->
	<!-- <link rel="stylesheet" href="assets/css/select2.min.css"> -->
	<title>ICON - Construction [PPC]</title>
</head>

<body>


	<header id="header" class="site-header">
		<div class="site-logo">
			<img src="" alt="">
			<strong class="slogan"></strong>
		</div> <!-- / .site-logo -->

		<nav class="site-nav">

		</nav> <!-- / .site-nav -->

		<div class="phone-number">
			<a href="tel:7328085884">732-808-5884</a>
		</div> <!-- / .phone-number -->
	</header> <!-- / .site-header -->

	<main id="main" class="site-content">

		<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
			<div class="form-header">
				<h2>Form Heading</h2>
				<p>Form basic info text goes heres if available</p>
			</div>

			<div class="form-section-0">
				<div class="form-group">
					<input name="depth[]" type="checkbox" value="Option 1 [Change Me]">
					<input name="depth[]" type="checkbox" value="Option 2 [Change Me]">
					<!-- Add more checkbox input if needed -->
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Describe Your Project" name="describe-your-project" cols="50" rows="10"></textarea>
					<div class="messages"></div>
				</div>
			</div>
			<div class="form-section-1" style="display: none">
				<div class="form-group">
					<input class="form-control" placeholder="Name*" name="name" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Businesss Name" name="businesss-name" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<select class="form-control  " name="location" id="DLyP9">
						<option value="">Select Any One Option [Change Me]</option>
						<option value="Option One">Option One [Change Me]</option>
						<option value="Option Two">Option Two [Change Me]</option>
					</select>
					<!-- Add more options if needed -->
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="City" name="city" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Zip code" name="zip-code" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Phone Number*" name="phone-number" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Email*" name="email" type="email" value="">
					<div class="messages"></div>
				</div>
			</div>
			<div class="form-footer"><button type="button" class="next btn btn-primary">Next</button> <button type="submit" class="submitButton btn btn-primary" style="display: none">
					<span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
					Submit </button></div>
		</form>

	</main> <!-- / .site-content -->

	<footer id="footer" class="site-footer">
		<span class="copyright"></span>
	</footer> <!-- / .site-footer -->




	<!-- Please remove unnecessary comments -->
	<!-- Add jQuery & underscore if necessary.. NOT required for form  -->
	<!--  <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/underscore-min.js"></script> -->
	<!-- Add Following Select2 JS if you're using select2 selector; jQuery is required -->
	<!-- <script src="assets/js/select2.min.js"></script> -->
	<script src="assets/js/validate.min.js"></script>
	<script src="assets/js/builder.js"></script>
	<script src="assets/js/main.js"></script>

	<!-- Add Following Script If reCaptcha V2 is Enabled; Otherwise remove the whole block -->
	<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onReCaptchaLoadCallback&render=explicit" async defer></script> -->

	<script id="lead-answer-script" defer src="https://app.leadanswer.io/embed.js" data-id="bGVhZC1hbnN3ZXItLTI=" data-config="eyJpZCI6IjIiLCJpIjoiTEEiLCJuIjoiKDg1NSkgNTg1LTE2NTgiLCJwYyI6IiM0RkFFN0UiLCJzYyI6IiNmNmY2ZjYifQ=="></script>
</body>

</html>