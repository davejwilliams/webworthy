<div class="row">
	<div class="large-6 columns">
		<p>Name <span class="required">*</span><br />
			[text* your-name]</p>
	</div>
	<div class="large-6 columns">
		<p>Email <span class="required">*</span><br />
			[email* your-email] </p>
	</div>
</div>

<div class="row">
	<div class="large-6 columns">
		<p>Phone<br />
			[tel tel-number]</p>
	</div>
	<div class="large-6 columns">
		<p>Current web address (if applicable)<br />
			[url url-current placeholder "http://www.example.com"]</p>
	</div>
</div>

<div class="row">
	<div class="large-6 columns">
		<p>What is your estimated budget for this project? <span class="required">*</span><br />
			[select* menu-budget include_blank "$1000-2000" "$2000-3000" "$3000-$5000" "$5000-$10,000" "$10,000+"]
		</p>
	</div>
	<div class="large-6 columns"></div>
</div>

<div class="row">
	<div class="interests large-12 columns">
		<p class="large-12 columns">What services are you interested in? (check all that apply)</p>

		<div class="large-7 columns">
			[checkbox checkbox-services use_label_element "Web/WordPress Design" "E-commerce Integration" "SEO/Social Media" "Graphic Design (Business Cards, Flyers, Brochures, etc)"]
		</div>

		<div class="large-5 columns">
			[checkbox checkbox-services use_label_element "Branding & Identity (Logo Design)" "Photo Manipulation" "Video/Audio Editing" "Other"]
		</div>
	</div>
</div>

<div class="row">
	<div class="large-12 columns">
		<p>Please describe your project. The more details you can include the better. <span class="required">*</span><br />
			[textarea* your-message] </p>
	</div>
</div>

<div class="row">
	<div class="small-7 medium-6 large-3 columns">
		<p>Are you human? [captchac captcha-human-test bg:#E9E9E9 size:m]
			<span style="font-size: 11px;">(Please enter the 4 digit code below)</span>
			[captchar captcha-human-test 300/4 class:captcha]
		</p>
	</div>

	<div class="small-5 medium-6 large-9 columns"></div>
</div>

<div class="row">
	<div class="large-4 columns"><p>[submit "Send"]</p></div>
	<div class="large-8 columns"></div>
</div>