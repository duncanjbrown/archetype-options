<div>
	<h1><?php echo $this->page_title; ?></h1>

	<form action="options.php" method="post">
		<?php settings_fields( $this->get_settings_slug() ); ?>
		<?php do_settings_sections( $this->slug ); ?>

		<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
	</form>
</div>