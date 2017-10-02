<div class="contact-us">
	<div class="contact-item phone">
		<a class="contact-link" href="tel:<?php the_field('phone_number','options'); ?>">
			<i class="contact-icon fa fa-phone"></i>
			<span class="contact-text">Call Us</span>
			<span class="the-info"><?php the_field('phone_number','options'); ?></span>
		</a>
	</div>
	<div class="contact-item email">
		<a class="contact-link" href="mailto:<?php the_field('email_address','options'); ?>">
			<i class="contact-icon fa fa-envelope"></i>
			<span class="contact-text">Email Us</span>
		<span class="the-info"><?php the_field('email_address','options'); ?></span>
		</a>
	</div>
</div>
