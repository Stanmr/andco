<?php
$eltdf_sidebar_layout  = azalea_eltdf_sidebar_layout();

get_header();
azalea_eltdf_get_title();
get_template_part('slider');
?>
<div class="eltdf-container eltdf-default-page-template">
	<?php do_action('azalea_eltdf_after_container_open'); ?>
	<div class="eltdf-container-inner clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="eltdf-grid-row">
				<div <?php echo azalea_eltdf_get_content_sidebar_class(); ?>>
					<?php
						the_content();
						do_action('azalea_eltdf_page_after_content');
					?>
				</div>
				<?php if($eltdf_sidebar_layout !== 'no-sidebar') { ?>
					<div <?php echo azalea_eltdf_get_sidebar_holder_class(); ?>>
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<?php do_action('azalea_eltdf_before_container_close'); ?>
</div>
<?php get_footer(); ?>