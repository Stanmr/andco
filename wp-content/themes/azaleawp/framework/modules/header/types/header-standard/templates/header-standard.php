<?php do_action('azalea_eltdf_before_page_header'); ?>

<header class="eltdf-page-header">
	<?php do_action('azalea_eltdf_after_page_header_html_open'); ?>
	
	<?php if($show_fixed_wrapper) : ?>
		<div class="eltdf-fixed-wrapper">
	<?php endif; ?>
			
	<div class="eltdf-menu-area">
		<?php do_action('azalea_eltdf_after_header_menu_area_html_open') ?>
		
		<?php if($menu_area_in_grid) : ?>
			<div class="eltdf-grid">
		<?php endif; ?>
		
			<div class="eltdf-vertical-align-containers">
				<div class="eltdf-position-left">
					<div class="eltdf-position-left-inner">
						<?php if(!$hide_logo) {
							azalea_eltdf_get_logo();
						} ?>
					</div>
				</div>
				<div class="eltdf-position-right">
					<div class="eltdf-position-right-inner">
						<?php azalea_eltdf_get_main_menu(); ?>
						<?php azalea_eltdf_get_header_widget_menu_area(); ?>
					</div>
				</div>
			</div>
			
		<?php if($menu_area_in_grid) : ?>
			</div>
		<?php endif; ?>
	</div>
			
	<?php if($show_fixed_wrapper) { ?>
		</div>
	<?php } ?>
	
	<?php if($show_sticky) {
		azalea_eltdf_get_sticky_header();
	} ?>
	
	<?php do_action('azalea_eltdf_before_page_header_html_close'); ?>
</header>

<?php do_action('azalea_eltdf_after_page_header'); ?>