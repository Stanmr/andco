<?php

if ( ! function_exists('azalea_eltdf_search_options_map') ) {

	function azalea_eltdf_search_options_map() {

		azalea_eltdf_add_admin_page(
			array(
				'slug' => '_search_page',
				'title' => esc_html__('Search', 'azaleawp'),
				'icon' => 'fa fa-search'
			)
		);

		$search_page_panel = azalea_eltdf_add_admin_panel(
			array(
				'title' => esc_html__('Search Page', 'azaleawp'),
				'name' => 'search_template',
				'page' => '_search_page'
			)
		);

		azalea_eltdf_add_admin_field(array(
			'name'        => 'search_page_sidebar_layout',
			'type'        => 'select',
			'label'       => esc_html__('Sidebar Layout', 'azaleawp'),
            'description' 	=> esc_html__("Choose a sidebar layout for search page", 'azaleawp'),
            'default_value' => 'no-sidebar',
            'options'       => array(
                'no-sidebar'        => esc_html__('No Sidebar', 'azaleawp'),
                'sidebar-33-right'	=> esc_html__('Sidebar 1/3 Right', 'azaleawp'),
                'sidebar-25-right' 	=> esc_html__('Sidebar 1/4 Right', 'azaleawp'),
                'sidebar-33-left' 	=> esc_html__('Sidebar 1/3 Left', 'azaleawp'),
                'sidebar-25-left' 	=> esc_html__('Sidebar 1/4 Left', 'azaleawp')
            ),
			'parent'      => $search_page_panel
		));

        $azalea_custom_sidebars = azalea_eltdf_get_custom_sidebars();
        if(count($azalea_custom_sidebars) > 0) {
            azalea_eltdf_add_admin_field(array(
                'name' => 'search_custom_sidebar_area',
                'type' => 'selectblank',
                'label' => esc_html__('Sidebar to Display', 'azaleawp'),
                'description' => esc_html__('Choose a sidebar to display on search page. Default sidebar is "Sidebar"', 'azaleawp'),
                'parent' => $search_page_panel,
                'options' => $azalea_custom_sidebars,
				'args' => array(
					'select2' => true
				)
            ));
        }

		$search_panel = azalea_eltdf_add_admin_panel(
			array(
				'title' => esc_html__('Search', 'azaleawp'),
				'name' => 'search',
				'page' => '_search_page'
			)
		);

		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $search_panel,
				'type'			=> 'select',
				'name'			=> 'search_type',
				'default_value'	=> 'fullscreen',
				'label' 		=> esc_html__('Select Search Type', 'azaleawp'),
				'description' 	=> esc_html__("Choose a type of Select search bar (Note: Slide From Header Bottom search type doesn't work with Vertical Header)", 'azaleawp'),
				'options' 		=> array(
					'fullscreen' => esc_html__('Fullscreen Search', 'azaleawp'),
					'slide-from-header-bottom' => esc_html__('Slide From Header Bottom', 'azaleawp'),
                    'covers-header' => esc_html__('Search Covers Header', 'azaleawp'),
                    'slide-from-window-top' => esc_html__('Slide from Window Top' , 'azaleawp')
				)
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $search_panel,
				'type'			=> 'select',
				'name'			=> 'search_icon_pack',
				'default_value'	=> 'font_elegant',
				'label'			=> esc_html__('Search Icon Pack', 'azaleawp'),
				'description'	=> esc_html__('Choose icon pack for search icon', 'azaleawp'),
				'options'		=> azalea_eltdf_icon_collections()->getIconCollectionsExclude(array('linea_icons'))
			)
		);

		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $search_panel,
				'type'			=> 'image',
				'name'			=> 'search_image',
				'default_value'	=> ELATED_ASSETS_ROOT . "/img/search.png",
				'label'			=> esc_html__('Search Custom Image', 'azaleawp'),
				'description'	=> esc_html__('Upload custom search Image', 'azaleawp'),
			)
		);

		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $search_panel,
				'type'			=> 'image',
				'name'			=> 'light_search_image',
				'default_value'	=> ELATED_ASSETS_ROOT . "/img/search-light.png",
				'label'			=> esc_html__('Search Custom Image', 'azaleawp'),
				'description'	=> esc_html__('Upload custom search Image for light header skin', 'azaleawp'),
			)
		);

        azalea_eltdf_add_admin_field(
            array(
                'parent'		=> $search_panel,
                'type'			=> 'yesno',
                'name'			=> 'search_in_grid',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Enable Grid Layout', 'azaleawp'),
                'description'	=> esc_html__('Set search area to be in grid. (Applied for Search covers header and Slide from Window Top types.', 'azaleawp'),
            )
        );
		
		azalea_eltdf_add_admin_section_title(
			array(
				'parent' 	=> $search_panel,
				'name'		=> 'initial_header_icon_title',
				'title'		=> esc_html__('Initial Search Icon in Header', 'azaleawp')
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $search_panel,
				'type'			=> 'text',
				'name'			=> 'header_search_icon_size',
				'default_value'	=> '',
				'label'			=> esc_html__('Icon Size', 'azaleawp'),
				'description'	=> esc_html__('Set size for icon', 'azaleawp'),
				'args'			=> array(
					'col_width' => 3,
					'suffix'	=> 'px'
				)
			)
		);
		
		$search_icon_color_group = azalea_eltdf_add_admin_group(
			array(
				'parent'	=> $search_panel,
				'title'		=> esc_html__('Icon Colors', 'azaleawp'),
				'description' => esc_html__('Define color style for icon', 'azaleawp'),
				'name'		=> 'search_icon_color_group'
			)
		);
		
		$search_icon_color_row = azalea_eltdf_add_admin_row(
			array(
				'parent'	=> $search_icon_color_group,
				'name'		=> 'search_icon_color_row'
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'	=> $search_icon_color_row,
				'type'		=> 'colorsimple',
				'name'		=> 'header_search_icon_color',
				'label'		=> esc_html__('Color', 'azaleawp')
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent' => $search_icon_color_row,
				'type'		=> 'colorsimple',
				'name'		=> 'header_search_icon_hover_color',
				'label'		=> esc_html__('Hover Color', 'azaleawp')
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $search_panel,
				'type'			=> 'yesno',
				'name'			=> 'enable_search_icon_text',
				'default_value'	=> 'no',
				'label'			=> esc_html__('Enable Search Icon Text', 'azaleawp'),
				'description'	=> esc_html__("Enable this option to show 'Search' text next to search icon in header", 'azaleawp'),
				'args'			=> array(
					'dependence' => true,
					'dependence_hide_on_yes' => '',
					'dependence_show_on_yes' => '#eltdf_enable_search_icon_text_container'
				)
			)
		);
		
		$enable_search_icon_text_container = azalea_eltdf_add_admin_container(
			array(
				'parent'			=> $search_panel,
				'name'				=> 'enable_search_icon_text_container',
				'hidden_property'	=> 'enable_search_icon_text',
				'hidden_value'		=> 'no'
			)
		);
		
		$enable_search_icon_text_group = azalea_eltdf_add_admin_group(
			array(
				'parent'	=> $enable_search_icon_text_container,
				'title'		=> esc_html__('Search Icon Text', 'azaleawp'),
				'name'		=> 'enable_search_icon_text_group',
				'description'	=> esc_html__('Define style for search icon text', 'azaleawp')
			)
		);
		
		$enable_search_icon_text_row = azalea_eltdf_add_admin_row(
			array(
				'parent'	=> $enable_search_icon_text_group,
				'name'		=> 'enable_search_icon_text_row'
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row,
				'type'			=> 'colorsimple',
				'name'			=> 'search_icon_text_color',
				'label'			=> esc_html__('Text Color', 'azaleawp')
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row,
				'type'			=> 'colorsimple',
				'name'			=> 'search_icon_text_color_hover',
				'label'			=> esc_html__('Text Hover Color', 'azaleawp')
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row,
				'type'			=> 'textsimple',
				'name'			=> 'search_icon_text_font_size',
				'label'			=> esc_html__('Font Size', 'azaleawp'),
				'default_value'	=> '',
				'args'			=> array(
					'suffix'	=> 'px'
				)
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row,
				'type'			=> 'textsimple',
				'name'			=> 'search_icon_text_line_height',
				'label'			=> esc_html__('Line Height', 'azaleawp'),
				'default_value'	=> '',
				'args'			=> array(
					'suffix'	=> 'px'
				)
			)
		);
		
		$enable_search_icon_text_row2 = azalea_eltdf_add_admin_row(
			array(
				'parent'	=> $enable_search_icon_text_group,
				'name'		=> 'enable_search_icon_text_row2',
				'next'		=> true
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row2,
				'type'			=> 'selectblanksimple',
				'name'			=> 'search_icon_text_text_transform',
				'label'			=> esc_html__('Text Transform', 'azaleawp'),
				'default_value'	=> '',
				'options'		=> azalea_eltdf_get_text_transform_array()
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row2,
				'type'			=> 'fontsimple',
				'name'			=> 'search_icon_text_google_fonts',
				'label'			=> esc_html__('Font Family', 'azaleawp'),
				'default_value'	=> '-1',
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row2,
				'type'			=> 'selectblanksimple',
				'name'			=> 'search_icon_text_font_style',
				'label'			=> esc_html__('Font Style', 'azaleawp'),
				'default_value'	=> '',
				'options'		=> azalea_eltdf_get_font_style_array(),
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row2,
				'type'			=> 'selectblanksimple',
				'name'			=> 'search_icon_text_font_weight',
				'label'			=> esc_html__('Font Weight', 'azaleawp'),
				'default_value'	=> '',
				'options'		=> azalea_eltdf_get_font_weight_array(),
			)
		);
		
		$enable_search_icon_text_row3 = azalea_eltdf_add_admin_row(
			array(
				'parent'	=> $enable_search_icon_text_group,
				'name'		=> 'enable_search_icon_text_row3',
				'next'		=> true
			)
		);
		
		azalea_eltdf_add_admin_field(
			array(
				'parent'		=> $enable_search_icon_text_row3,
				'type'			=> 'textsimple',
				'name'			=> 'search_icon_text_letter_spacing',
				'label'			=> esc_html__('Letter Spacing', 'azaleawp'),
				'default_value'	=> '',
				'args'			=> array(
					'suffix'	=> 'px'
				)
			)
		);
	}

	add_action('azalea_eltdf_options_map', 'azalea_eltdf_search_options_map', 11);
}