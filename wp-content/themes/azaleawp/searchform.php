<form role="search" method="get" class="searchform" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text"><?php esc_html_e('Search for:', 'azaleawp'); ?></label>
    <div class="input-holder clearfix">
        <input type="search" class="search-field" placeholder="<?php esc_html_e('Search...', 'azaleawp'); ?>" value="" title="<?php esc_html_e('Search for:', 'azaleawp'); ?>"/>
        <button type="submit" id="searchsubmit"><span class="icon_search"></span></button>
    </div>
</form>