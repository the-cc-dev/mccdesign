<?php get_template_part('templates/head'); ?>
<header id="theHeader" class="the-header">
	<nav class="navbar navbar-fixed-top the-navbar">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#theNavbar">
					<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="<?php esc_url(home_url('/')); ?>">
					<?php bloginfo('name'); ?>
			</a>
		</div>   
		<div class="collapse navbar-collapse navbar-body" id="theNavbar">
			<div class="nav navbar-nav">
				<div class="contact-us">
					<div class="contact-item contact-phone">
						<a class="contact-link" href="tel:<?php the_field("phone_number"); ?>">
							<i class="contact-icon fa fa-phone"></i>
							<br>
							<span class="contact-text">Call Us</span>
							<br>
							<span class="contact-text"><?php the_field("phone_number"); ?></span>
						</a>
					</div>
					<div class="contact-item contact-email">
						<a class="contact-link" href="mailto:<?php the_field("email_address"); ?>?Subject=<?php the_field("default_email_subject"); ?>">
							<i class="contact-icon fa fa-envelope"></i>
							<br>
							<span class="contact-text">Email Us</span>
							<br>
							<span class="contact-text"><?php the_field("email_address"); ?></span>
						</a>
					</div>
				</div>
				<?php dynamic_sidebar('primary'); ?>
			</div>
		</div>
		<div class="search-toggle">
			<button class="btn">
				<i class="fa fa-search"></i>
			</button>
		</div>
		<div class="header-bottom">
			<img class="header-img left-header-img" src="<?php the_field("header_image_left", "options") ?>">
			<img class="header-img right-header-img" src="<?php the_field("header_image_right", "options") ?>">
	</div>
	</nav>
</header>
