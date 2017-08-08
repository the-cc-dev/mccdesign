<?php 
  //from acf options page form
		//general background img
		$bg_img = get_field("background_image","options");
		// footer background image from options
		$footer_img = get_field("footer_image", "options"); 
?>
<style>
	.body-container {
		background-image: url('<?php echo $bg_img; ?>');
	}
	.footer-bottom {
		background-image: url("<?php echo $footer_img; ?>");
	}
</style>