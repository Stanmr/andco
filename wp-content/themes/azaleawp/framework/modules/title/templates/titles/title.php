<?php do_action('azalea_eltdf_before_page_title'); ?>
<div class="eltdf-title <?php echo azalea_eltdf_title_classes(); ?>" style="<?php echo esc_attr($title_height); echo esc_attr($title_background_color); echo esc_attr($title_background_image); ?>" data-height="<?php echo esc_attr(intval(preg_replace('/[^0-9]+/', '', $title_height), 10));?>" <?php echo esc_attr($title_background_image_width); ?>>
    <?php if(!empty($title_background_image_src)) { ?>
        <div class="eltdf-title-image">
            <img itemprop="image" src="<?php echo esc_url($title_background_image_src); ?>" alt="<?php esc_html_e('Title Image', 'azaleawp'); ?>" />
        </div>
    <?php } ?>
    <div class="eltdf-title-holder" <?php azalea_eltdf_inline_style($title_holder_height); ?>>
        <div class="eltdf-container clearfix">
            <div class="eltdf-container-inner">
                <div class="eltdf-title-subtitle-holder" style="<?php echo esc_attr($title_subtitle_holder_padding); ?>">
                    <div class="eltdf-title-subtitle-holder-inner">
                        <?php switch ($type){
                            case 'standard': ?>
                                <?php if(azalea_eltdf_get_title_text() !== '') { ?>
                                    <<?php echo esc_attr($title_tag); ?> class="eltdf-page-title entry-title" <?php azalea_eltdf_inline_style($title_color); ?>><span><?php azalea_eltdf_title_text(); ?></span></<?php echo esc_attr($title_tag); ?>>
                                <?php } ?>
                                <?php if($has_subtitle){ ?>
                                    <span class="eltdf-subtitle" <?php azalea_eltdf_inline_style($subtitle_styles); ?>><span><?php azalea_eltdf_subtitle_text(); ?></span></span>
                                <?php } ?>
                                <?php if($enable_breadcrumbs){ ?>
                                    <div class="eltdf-breadcrumbs-holder"> <?php azalea_eltdf_custom_breadcrumbs(); ?></div>
                                <?php } ?>
                            <?php break;
                            case 'breadcrumb': ?>
                                <div class="eltdf-breadcrumbs-holder"> <?php azalea_eltdf_custom_breadcrumbs(); ?></div>
                            <?php break;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php do_action('azalea_eltdf_after_page_title'); ?>
