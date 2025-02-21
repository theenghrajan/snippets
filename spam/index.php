<?php
include 'header.php';
?>

<section>
	<div class="container">
		<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
			<div class="form-header lg:mb-8">
				<h2>Form Header</h2>
			</div>
			<div class="form-section-0">
				<div class="form-group">
					<input class="form-control" placeholder="Name" name="full-name" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Phone" name="phone" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Email" name="email" type="email" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Zip Code" name="zip-code" type="text" value="">
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Message" name="message" cols="50" rows="10"></textarea>
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<div class="g-recaptcha-v2-visible" id="g-recaptcha-1"></div>
					<div class="messages"></div>
				</div>
				<div class="form-group">
					<!-- You can enter a value here manually during local testing, That will bypass the validation -->
					<input type="hidden" class="form-control" name="google-recaptcha" value="" id="input-g-recaptcha-1">
					<div class="messages"></div>
				</div>
				<!-- Hidden honepot fields for spam detection validation : Added by FED(GS) on 6th Feb 2025 -->
				<div class="form-group" style="display:none;">
					<input type="text" name="honeypot" style="display:none;" value="">
					<div class="messages"></div>
				</div>
				<!-- Hidden CSRF Token validation using Session : Added by FED(GS) on 6th Feb 2025 -->
				<div class="form-group" style="display:none;">
					<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
					<div class="messages"></div>
				</div>
			</div>
			<div class="form-footer">
				<button type="submit" class="submitButton btn btn-primary">
					<svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
						<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
						<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
					</svg>
					Send Message
				</button>
			</div>
		</form>
	</div>
</section>
<!-- /Contact Us -->
<?php
include 'footer.php';
