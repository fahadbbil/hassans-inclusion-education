<!-- Contact Us -->
	<section class="content_section">
		<div class="title_banner t_b_color3 upper centered">
			<div class="content">
				<h2>Contact Us</h2>
			</div>
		</div>
		<div class="content row_spacer no_padding">
			<div class="rows_container clearfix">
				<div class="col-md-12">
					<h2 class="title1 upper">Get On Touch</h2>
					<span class="spacer20"></span>

					<form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="http://www.enar.ideal-theme.com/html5/php/phpmailer/sendemail.php" method="post">
						<div class="form_row clearfix">
							<label for="contact-us-name">
								<span class="hm_field_name">Name</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-mail">
								<span class="hm_field_name">Email</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="mail@sitename.com" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-subject">
								<span class="hm_field_name">Subject</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" id="contact-us-subject">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-message">
								<span class="hm_field_name">Message</span>
								<span class="hm_requires_star">*</span>
							</label>
							<textarea class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required></textarea>
						</div>
						<div class="form_row clearfix">
							<button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
								<i class="ico-check3"></i>
								<span>Send Your Message</span>
							</button>
						</div>
						<div class="form_row clearfix">
							<div id="form-messages"></div>
						</div>
						<div class="form_loader"></div>
					</form>
				</div><!-- Grid -->
			</div>
		</div>
	</section>
	<!-- End Contact Us -->