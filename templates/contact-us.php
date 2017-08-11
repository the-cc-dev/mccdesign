<div class="contact-us">
  <div class="contact-item phone">
    <a class="contact-link" href="tel:<?php the_field("phone_number"); ?>">
      <i class="contact-icon fa fa-phone"></i>
      <span class="contact-text">Call Us</span>
      <span class="contact-text"><?php the_field("phone_number"); ?></span>
    </a>
  </div>
  <div class="contact-item email">
    <a class="contact-link" href="mailto:<?php the_field("email_address"); ?>?Subject=<?php the_field("default_email_subject"); ?>">
      <i class="contact-icon fa fa-envelope"></i>
      <span class="contact-text">Email Us</span>
    <span class="contact-text"><?php the_field("email_address"); ?></span>
    </a>
  </div>
</div>
