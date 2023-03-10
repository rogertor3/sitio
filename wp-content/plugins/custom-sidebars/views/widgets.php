<?php
/**
 * Updates the default widgets page of the admin area.
 * There are some HTML to be added for having all the functionality, so we
 * include it at the begining of the page, and it's placed later via js.
 */
?>

<div id="cs-widgets-extra">

	<?php /*
	============================================================================
	===== WIDGET head
	============================================================================
	*/ ?>
	<div id="cs-title-options">
		<h2><?php esc_html_e( 'Sidebars', 'custom-sidebars' ); ?></h2>
		<div id="cs-options" class="csb cs-options">
			<button type="button" class="button button-primary cs-action btn-create-sidebar">
				<i class="dashicons dashicons-plus-alt"></i>
				<?php esc_html_e( 'Create a new sidebar', 'custom-sidebars' ); ?>
			</button>
			<?php
			/**
			 * Show additional functions in the widget header.
			 */
			do_action( 'cs_widget_header' );
			?>
		</div>
	</div>


	<?php /*
	============================================================================
	===== LANGUAGE
	============================================================================
	*/ ?>
	<script>
	csSidebarsData = {
		'title_edit': "<?php esc_html_e( 'Edit [Sidebar]', 'custom-sidebars' ); ?>",
		'title_new': "<?php esc_html_e( 'New Custom Sidebar', 'custom-sidebars' ); ?>",
		'btn_edit': "<?php esc_html_e( 'Save Changes', 'custom-sidebars' ); ?>",
		'btn_new': "<?php esc_html_e( 'Create Sidebar', 'custom-sidebars' ); ?>",
		'title_delete': "<?php esc_html_e( 'Delete Sidebar', 'custom-sidebars' ); ?>",
		'title_location': "<?php esc_html_e( 'Define where you want this sidebar to appear.', 'custom-sidebars' ); ?>",
		'title_export': "<?php esc_html_e( 'Import / Export Sidebars', 'custom-sidebars' ); ?>",
		'custom_sidebars': "<?php esc_html_e( 'Custom Sidebars', 'custom-sidebars' ); ?>",
		'theme_sidebars': "<?php esc_html_e( 'Theme Sidebars', 'custom-sidebars' ); ?>",
		'ajax_error': "<?php esc_html_e( 'Couldn\'t load data from WordPress...', 'custom-sidebars' ); ?>",
		'lbl_replaceable': "<?php esc_html_e( 'This sidebar can be replaced on certain pages', 'custom-sidebars' ); ?>",
		'replace_tip': "<?php esc_html_e( 'Activate this option to replace the sidebar with one of your custom sidebars.', 'custom-sidebars' ); ?>",
		'filter': "<?php esc_html_e( 'Filter...', 'custom-sidebars' ); ?>",
		'replaceable': <?php echo json_encode( (object) CustomSidebars::get_options( 'modifiable' ) ); ?>,
		'_wpnonce_get': "<?php echo esc_attr( wp_create_nonce( 'custom-sidebars-get' ) ); ?>"
	};
	</script>


	<?php /*
	============================================================================
	===== TOOLBAR for custom sidebars
	============================================================================
	*/ ?>
	<div class="cs-custom-sidebar cs-toolbar">
		<a
			class="cs-tool delete-sidebar"
			data-action="delete"
			href="#"
			title="<?php esc_html_e( 'Delete this sidebar.', 'custom-sidebars' ); ?>"
			>
			<i class="dashicons dashicons-trash"></i>
		</a>
		<span class="cs-separator">|</span>
		<a
			class="cs-tool"
			data-action="edit"
			href="#"
			title="<?php esc_html_e( 'Edit this sidebar.', 'custom-sidebars' ); ?>"
			>
			<?php esc_html_e( 'Edit', 'custom-sidebars' ); ?>
		</a>
		<span class="cs-separator">|</span>
		<a
			class="cs-tool"
			data-action="location"
			href="#"
			title="<?php esc_html_e( 'Where do you want to show the sidebar?', 'custom-sidebars' ); ?>"
			>
			<?php esc_html_e( 'Sidebar Location', 'custom-sidebars' ); ?>
		</a>
		<span class="cs-separator">|</span>
	</div>


	<?php /*
	============================================================================
	===== TOOLBAR for theme sidebars
	============================================================================
	*/ ?>
	<div class="cs-theme-sidebar cs-toolbar">
		<label
			for="cs-replaceable"
			class="cs-tool btn-replaceable"
			data-action="replaceable"
			data-on="<?php esc_html_e( 'This sidebar can be replaced on certain pages', 'custom-sidebars' ); ?>"
			data-off="<?php esc_html_e( 'This sidebar will always be same on all pages', 'custom-sidebars' ); ?>"
			>
			<span class="icon"></span>
			<input
				type="checkbox"
				id=""
				class="has-label chk-replaceable"
				/>
			<span class="is-label">
				<?php esc_html_e( 'Allow this sidebar to be replaced', 'custom-sidebars' ); ?>
			</span>
		</label>
	</div>


	<?php /*
	============================================================================
	===== DELETE SIDEBAR confirmation
	============================================================================
	*/ ?>
	<div class="cs-delete">
	<?php include CSB_VIEWS_DIR . 'widgets-delete.php'; ?>
	</div>


	<?php /*
	============================================================================
	===== ADD/EDIT SIDEBAR
	============================================================================
	*/ ?>
	<div class="cs-editor">
	<?php include CSB_VIEWS_DIR . 'widgets-editor.php'; ?>
	</div>


	<?php /*
	============================================================================
	===== EXPORT
	============================================================================
	*/ ?>
	<div class="cs-export">
	<?php include CSB_VIEWS_DIR . 'widgets-export.php'; ?>
	</div>

	<?php /*
	============================================================================
	===== LOCATION popup.
	============================================================================
	*/ ?>
	<div class="cs-location">
	<?php include CSB_VIEWS_DIR . 'widgets-location.php'; ?>
	</div>

 </div>
