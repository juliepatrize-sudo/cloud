<?php
/* Theme Customizer */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function seos_football_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	

/***********************************************************************************
 * Sanitize Functions
***********************************************************************************/
					
		function seos_football_sanitize_checkbox( $input ) {
			if ( $input ) {
				return 1;
			}
			return 0;
		}
/***********************************************************************************/
		
		function seos_football_sanitize_social( $input ) {
			$valid = array(
				'' => esc_attr__( ' ', 'seos-football' ),
				'_self' => esc_attr__( '_self', 'seos-football' ),
				'_blank' => esc_attr__( '_blank', 'seos-football' ),
			);

			if ( array_key_exists( $input, $valid ) ) {
				return $input;
			} else {
				return '';
			}
		}
		
/***********************************************************************************
 * Contacts Panel
***********************************************************************************/

		$wp_customize->add_panel( 'seos_football_contacts' , array(
			'title'       => __( 'Contacts Section', 'seos-football' ),
			'description' => __( 'Social media and Contacts', 'seos-football' ),
			'priority'   => 64,
		) );

		/************ General ***************/

		$wp_customize->add_section( 'seos_football_social_section_general' , array(
			'title'       => __( 'General', 'seos-football' ),
			'panel'       => 'seos_football_contacts',
			'priority'   => 64,
		) );
		
		$wp_customize->add_setting( 'social_media_activate_header', array (
			'sanitize_callback' => 'seos_football_sanitize_checkbox',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_media_activate_header', array(
			'label'    => __( 'Activate Contacts Section in Header:', 'seos-football' ),
			'section'  => 'seos_football_social_section_general',
			'settings' => 'social_media_activate_header',
			'type' => 'checkbox',
		) ) );
		
		$wp_customize->add_setting( 'social_media_activate', array (
			'sanitize_callback' => 'seos_football_sanitize_checkbox',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_media_activate', array(
			'label'    => __( 'Activate Contacts Section in Footer:', 'seos-football' ),
			'section'  => 'seos_football_social_section_general',
			'settings' => 'social_media_activate',
			'type' => 'checkbox',
		) ) );
				
		$wp_customize->add_setting( 'social_media_activate_posts', array (
			'sanitize_callback' => 'seos_football_sanitize_checkbox',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_media_activate_posts', array(
			'label'    => __( 'Activate Contacts Section in Posts:', 'seos-football' ),
			'section'  => 'seos_football_social_section_general',
			'settings' => 'social_media_activate_posts',
			'type' => 'checkbox',
		) ) );
						
		$wp_customize->add_setting( 'social_media_activate_pages', array (
			'sanitize_callback' => 'seos_football_sanitize_checkbox',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_media_activate_pages', array(
			'label'    => __( 'Activate Contacts Section in Pages:', 'seos-football' ),
			'section'  => 'seos_football_social_section_general',
			'settings' => 'social_media_activate_pages',
			'type' => 'checkbox',
		) ) );
		
/************ Social media option ***************/
 
		$wp_customize->add_section( 'seos_football_social_section' , array(
			'title'       => __( 'Social Media', 'seos-football' ),
			'panel'       => 'seos_football_contacts',
			'description' => __( 'Social media buttons', 'seos-football' ),
			'priority'   => 64,
		) );
		

		
		$wp_customize->add_setting( 'seos_football_social_link_type', array (
			'sanitize_callback' => 'seos_football_sanitize_social',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_social_link_type', array(
			'label'    => __( 'Link Type', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_social_link_type',
			'type'     =>  'select',
            'choices'  => array(
				'' => esc_attr__( ' ', 'seos-football' ),
				'_self' => esc_attr__( '_self', 'seos-football' ),
				'_blank' => esc_attr__( '_blank', 'seos-football' ),
            ),			
		) ) );
		
		$wp_customize->add_setting( 'social_media_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
				
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_media_color', array(
			'label'    => __( 'Social Icons Color:', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'social_media_color',
		) ) );
				
		$wp_customize->add_setting( 'social_media_hover_color', array (
			'sanitize_callback' => 'sanitize_hex_color',
		) );
				
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_media_hover_color', array(
			'label'    => __( 'Social Hover Icons Color:', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'social_media_hover_color',
		) ) );
		
		$wp_customize->add_setting( 'seos_football_facebook', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_facebook', array(
			'label'    => __( 'Enter Facebook url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_facebook',
		) ) );
	
		$wp_customize->add_setting( 'seos_football_twitter', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_twitter', array(
			'label'    => __( 'Enter Twitter url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_twitter',
		) ) );

		$wp_customize->add_setting( 'seos_football_google', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_google', array(
			'label'    => __( 'Enter Google+ url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_google',
		) ) );
		
		$wp_customize->add_setting( 'seos_football_linkedin', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_linkedin', array(
			'label'    => __( 'Enter Linkedin url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_linkedin',
		) ) );


		$wp_customize->add_setting( 'seos_football_rss', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_rss', array(
			'label'    => __( 'Enter RSS url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_rss',
		) ) );
		
		$wp_customize->add_setting( 'seos_football_pinterest', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_pinterest', array(
			'label'    => __( 'Enter Pinterest url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_pinterest',
		) ) );
		
		$wp_customize->add_setting( 'seos_football_youtube', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_youtube', array(
			'label'    => __( 'Enter Youtube url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_youtube',
		) ) );
					
		$wp_customize->add_setting( 'seos_football_vimeo', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_vimeo', array(
			'label'    => __( 'Enter Vimeo url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_vimeo',
		) ) );
		
							
		$wp_customize->add_setting( 'seos_football_instagram', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_instagram', array(
			'label'    => __( 'Enter Ynstagram url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_instagram',
		) ) );
			
		$wp_customize->add_setting( 'seos_football_stumbleupon', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_stumbleupon', array(
			'label'    => __( 'Enter Stumbleupon url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_stumbleupon',
		) ) );
											
		$wp_customize->add_setting( 'seos_football_flickr', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_flickr', array(
			'label'    => __( 'Enter Flickr url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_flickr',
		) ) );
		
													
		$wp_customize->add_setting( 'seos_football_dribbble', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_dribbble', array(
			'label'    => __( 'Enter Dribbble url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_dribbble',
		) ) );
															
		$wp_customize->add_setting( 'seos_football_digg', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_digg', array(
			'label'    => __( 'Enter Digg url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_digg',
		) ) );
																	
		$wp_customize->add_setting( 'seos_football_skype', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_skype', array(
			'label'    => __( 'Enter Skype url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_skype',
		) ) );
																			
		$wp_customize->add_setting( 'seos_football_deviantart', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_deviantart', array(
			'label'    => __( 'Enter Deviantart url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_deviantart',
		) ) );
																					
		$wp_customize->add_setting( 'seos_football_yahoo', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_yahoo', array(
			'label'    => __( 'Enter Yahoo url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_yahoo',
		) ) );
																							
		$wp_customize->add_setting( 'seos_football_reddit_alien', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_reddit_alien', array(
			'label'    => __( 'Enter Reddit Alien url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_reddit_alien',
		) ) );
		
																									
		$wp_customize->add_setting( 'seos_football_paypal', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_paypal', array(
			'label'    => __( 'Enter Paypal url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_paypal',
		) ) );
																											
		$wp_customize->add_setting( 'seos_football_dropbox', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_dropbox', array(
			'label'    => __( 'Enter Dropbox url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_dropbox',
		) ) );
																													
		$wp_customize->add_setting( 'seos_football_soundcloud', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_soundcloud', array(
			'label'    => __( 'Enter Soundcloud url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_soundcloud',
		) ) );
		
																															
		$wp_customize->add_setting( 'seos_football_vk', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_vk', array(
			'label'    => __( 'Enter VK url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_vk',
		) ) );
																																	
		$wp_customize->add_setting( 'seos_football_envelope', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_envelope', array(
			'label'    => __( 'Enter Envelope url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_envelope',
		) ) );
																																			
		$wp_customize->add_setting( 'seos_football_address_book', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_book', array(
			'label'    => __( 'Enter Address Book url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_book',
		) ) );
																																					
		$wp_customize->add_setting( 'seos_football_address_apple', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_apple', array(
			'label'    => __( 'Enter Apple url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_apple',
		) ) );
																																							
		$wp_customize->add_setting( 'seos_football_address_apple', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_amazon', array(
			'label'    => __( 'Enter Amazon url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_amazon',
		) ) );
																																									
		$wp_customize->add_setting( 'seos_football_address_slack', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_slack', array(
			'label'    => __( 'Enter Slack url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_slack',
		) ) );
																																											
		$wp_customize->add_setting( 'seos_football_address_slideshare', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_slideshare', array(
			'label'    => __( 'Enter Slideshare url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_slideshare',
		) ) );
																																													
		$wp_customize->add_setting( 'seos_football_address_wikipedia', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_wikipedia', array(
			'label'    => __( 'Enter Wikipedia url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_wikipedia',
		) ) );
																																															
		$wp_customize->add_setting( 'seos_football_address_wordpress', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_wordpress', array(
			'label'    => __( 'Enter WordPress url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_wordpress',
		) ) );
																																																	
		$wp_customize->add_setting( 'seos_football_address_odnoklassniki', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_odnoklassniki', array(
			'label'    => __( 'Enter Odnoklassniki url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_odnoklassniki',
		) ) );
																																																			
		$wp_customize->add_setting( 'seos_football_address_tumblr', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_address_tumblr', array(
			'label'    => __( 'Enter Tumblr url', 'seos-football' ),
			'section'  => 'seos_football_social_section',
			'settings' => 'seos_football_address_tumblr',
		) ) );
			
	
/************ Contacts option ***************/
 
		$wp_customize->add_section( 'seos_football_contacts_section' , array(
			'title'       => __( 'Contacts', 'seos-football' ),
			'panel'       => 'seos_football_contacts',
			'priority'   => 64,
		) );
		
		$wp_customize->add_setting( 'social_media_contacts_address', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_media_contacts_address', array(
			'label'    => __( 'Add content and activate address:', 'seos-football' ),
			'section'  => 'seos_football_contacts_section',
			'settings' => 'social_media_contacts_address',
			'type' => 'text'
		) ) );
				
		$wp_customize->add_setting( 'social_media_contacts_phone', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_media_contacts_phone', array(
			'label'    => __( 'Add content and activate phone:', 'seos-football' ),
			'section'  => 'seos_football_contacts_section',
			'settings' => 'social_media_contacts_phone',
			'type' => 'text'
		) ) );
		
/***********************************************************************************
 * Search Options
***********************************************************************************/

		$wp_customize->add_section( 'seos_football_search_section' , array(
			'title'       => __( 'Search Options', 'seos-football' ),
			'description' => __( 'Search field in header', 'seos-football' ),
			'priority'   => 64,
		) );
		
		$wp_customize->add_setting( 'search_activate_header', array (
			'sanitize_callback' => 'seos_football_sanitize_checkbox',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search_activate_header', array(
			'label'    => __( 'Activate search field in header:', 'seos-football' ),
			'section'  => 'seos_football_search_section',
			'settings' => 'search_activate_header',
			'type' => 'checkbox',
		) ) );
		
/***********************************************************************************
 * Sidebar Options
***********************************************************************************/
 
		$wp_customize->add_section( 'seos_football_sidebar' , array(
			'title'       => __( 'Sidebar Options', 'seos-football' ),
			'priority'   => 64,
		) );
		
		$wp_customize->add_setting( 'seos_football_sidebar_width', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_sidebar_width', array(
			'label'    => __( 'Sidebar Width:', 'seos-football' ),
			'section'  => 'seos_football_sidebar',		
			'settings' => 'seos_football_sidebar_width',
			'type'     =>  'range',		
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),			
		) ) );
		
		$wp_customize->add_setting( 'seos_football_sidebar_position', array (
			'sanitize_callback' => 'sanitize_text_field',
		) );
				
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_football_sidebar_position', array(
			'label'    => __( 'Sidebar Position', 'seos-football' ),
			'section'  => 'seos_football_sidebar',
			'settings' => 'seos_football_sidebar_position',
			'type' => 'radio',
			'choices' => array(
				'1' => __( 'Left', 'seos-football' ),
				'2' => __( 'Right', 'seos-football' ),
				'3' => __( 'No Sidebar', 'seos-football' ),
				),			
			
		) ) );
		
/********************************************
* Sidebar Title Background
*********************************************/ 
	
		$wp_customize->add_setting('seos_football_aside_background_color', array(         
		'default'     => '',
		'sanitize_callback' => 'sanitize_hex_color'
		)); 	

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'seos_football_aside_background_color', array(
		'label' => __('Sidebar Title Background Color', 'seos-football'),        
		'section' => 'seos_football_sidebar',
		'settings' => 'seos_football_aside_background_color'
		)));
		
/********************************************
* Sidebar Title Color
*********************************************/ 
	
		$wp_customize->add_setting('seos_football_aside_title_color', array(         
		'default'     => '',
		'sanitize_callback' => 'sanitize_hex_color'
		)); 	

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'seos_football_aside_title_color', array(
		'label' => __('Sidebar Title Color', 'seos-football'),        
		'section' => 'seos_football_sidebar',
		'settings' => 'seos_football_aside_title_color'
		)));

/********************************************
* Sidebar Background
*********************************************/ 
	
		$wp_customize->add_setting('seos_football_aside_background_color1', array(         
		'default'     => '',
		'sanitize_callback' => 'sanitize_hex_color'
		)); 	

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'seos_football_aside_background_color1', array(
		'label' => __('Sidebar Background Color', 'seos-football'),        
		'section' => 'seos_football_sidebar',
		'settings' => 'seos_football_aside_background_color1'
		)));
		
/********************************************
* Sidebar Link Color
*********************************************/ 
	
		$wp_customize->add_setting('seos_football_aside_link_color', array(         
		'default'     => '',
		'sanitize_callback' => 'sanitize_hex_color'
		)); 	

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'seos_football_aside_link_color', array(
		'label' => __('Sidebar Link Color', 'seos-football'),        
		'section' => 'seos_football_sidebar',
		'settings' => 'seos_football_aside_link_color'
		)));
						
/********************************************
* Sidebar Link Hover Color
*********************************************/ 
	
		$wp_customize->add_setting('seos_football_aside_link_hover_color', array(         
		'default'     => '',
		'sanitize_callback' => 'sanitize_hex_color'
		)); 	

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'seos_football_aside_link_hover_color', array(
		'label' => __('Sidebar Link Hover Color', 'seos-football'),        
		'section' => 'seos_football_sidebar',
		'settings' => 'seos_football_aside_link_hover_color'
		)));
			
	
}
add_action( 'customize_register', 'seos_football_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function seos_football_customize_preview_js() {
	wp_enqueue_script( 'seos_football_customizer', get_template_directory_uri() . '/framework/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'seos_football_customize_preview_js' );


		function seos_football_customize_all_css() {
    ?>
		<style type="text/css">
			<?php if ( (!is_front_page() or !is_home()) and get_theme_mod('custom_header_position') == "home") { ?> .site-header { display: none;} <?php } ?> 
			<?php if ( get_theme_mod('custom_header_position') == "deactivate") { ?> .site-header { display: none;} <?php } ?> 
			<?php if(get_theme_mod('seos_football_aside_background_color')) { ?>#content aside h2 {background:<?php echo esc_attr (get_theme_mod('seos_football_aside_background_color')); ?>;} <?php } ?> 
			<?php if(get_theme_mod('seos_football_aside_background_color1')) { ?>#content aside ul, #content .widget {background:<?php echo esc_attr (get_theme_mod('seos_football_aside_background_color1')); ?>;} <?php } ?> 
			<?php if(get_theme_mod('seos_football_aside_title_color')) { ?>#content aside h2 {color:<?php echo esc_attr (get_theme_mod('seos_football_aside_title_color')); ?>;} <?php } ?> 
			<?php if(get_theme_mod('seos_football_aside_link_color')) { ?>#content aside a {color:<?php echo esc_attr (get_theme_mod('seos_football_aside_link_color')); ?>;} <?php } ?> 
			<?php if(get_theme_mod('seos_football_aside_link_hover_color')) { ?>#content aside a:hover {color:<?php echo esc_attr (get_theme_mod('seos_football_aside_link_hover_color')); ?>;} <?php } ?> 
			
			<?php if(get_theme_mod('social_media_color')) { ?> .social .fa-icons i {color:<?php echo esc_attr (get_theme_mod('social_media_color')); ?> !important;} <?php } ?> 
			<?php if(get_theme_mod('social_media_hover_color')) { ?> .social .fa-icons i:hover {color:<?php echo esc_attr (get_theme_mod('social_media_hover_color')); ?> !important;} <?php } ?>

			<?php if(get_theme_mod('seos_football_titles_setting_1')) { ?> .single-title, .sr-no-sidebar .entry-title, .full-p .entry-title { display: none !important;} <?php } ?>

		</style>
		
    <?php	
}
		add_action('wp_head', 'seos_football_customize_all_css');
		
/**************************************
Sidebar Options
**************************************/


	function seos_football_sidebar_width () {
		if(get_theme_mod('seos_football_sidebar_width')) {
	
	$seos_football_content_width = 96;
	$seos_football_sidebar_width = esc_attr(get_theme_mod('seos_football_sidebar_width'));
	$seos_football_sidebar_sum = $seos_football_content_width - $seos_football_sidebar_width;

	?>
		<style>
			#content aside {width: <?php echo esc_attr(get_theme_mod('seos_football_sidebar_width')); ?>% !important;}
			#content main {width: <?php echo esc_attr($seos_football_sidebar_sum); ?>%  !important;}
		</style>
		
	<?php }
}
	add_action('wp_head','seos_football_sidebar_width');
	
/*********************************************************************************************************
* Sidebar Position
**********************************************************************************************************/

	function seos_football_sidebar(){
	$option_sidebar = get_theme_mod( 'seos_football_sidebar_position');		
	if($option_sidebar == '2') { 
			wp_enqueue_style( 'seos-right-sidebar', get_template_directory_uri() . '/css/right-sidebar.css');
		}

	$option_sidebar = get_theme_mod( 'seos_football_sidebar_position');			
		if($option_sidebar == '3') { 
			wp_enqueue_style( 'seos-no-sidebar', get_template_directory_uri() . '/css/no-sidebar.css');
		}
	}
	add_action( 'wp_enqueue_scripts', 'seos_football_sidebar' );
	
		
	
/***********************************************************************************
 * Single Pro link at the top of the Customizer
***********************************************************************************/

	if ( class_exists( 'WP_Customize_Section' ) && ! class_exists( 'Seos_Football_Customize_Pro_Section' ) ) :
		/**
		 * Section that only shows a link (no settings, no locked options).
		 */
		class Seos_Football_Customize_Pro_Section extends WP_Customize_Section {

			public $type = 'seos-football-pro';

			public $pro_text = '';

			public $pro_url = '';

			public function json() {
				$json             = parent::json();
				$json['pro_text'] = $this->pro_text;
				$json['pro_url']  = esc_url( $this->pro_url );
				return $json;
			}

			protected function render_template() { ?>
				<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
					<h3 class="accordion-section-title">
						{{ data.title }}
						<# if ( data.pro_text && data.pro_url ) { #>
							<a href="{{ data.pro_url }}" class="seos-football-pro-btn" target="_blank" rel="noopener noreferrer">{{ data.pro_text }}</a>
						<# } #>
					</h3>
				</li>
			<?php }
		}
	endif;

	function seos_football_pro_link_register( $wp_customize ) {
		$wp_customize->register_section_type( 'Seos_Football_Customize_Pro_Section' );

		$wp_customize->add_section( new Seos_Football_Customize_Pro_Section( $wp_customize, 'seos_football_pro_link', array(
			'title'    => esc_html__( 'Seos Football', 'seos-football' ),
			'pro_text' => esc_html__( 'Upgrade to Pro', 'seos-football' ),
			'pro_url'  => 'https://seosthemes.com/wordpress-football-theme',
			'priority' => 1,
		) ) );
	}
	add_action( 'customize_register', 'seos_football_pro_link_register' );

	function seos_football_pro_link_scripts() {
		wp_enqueue_script( 'seos-football-customize-controls', get_template_directory_uri() . '/framework/js/customize-controls.js', array( 'customize-controls' ), '1.2.3', true );
		wp_add_inline_style( 'customize-controls', '#accordion-section-seos_football_pro_link .accordion-section-title{display:flex;align-items:center;justify-content:space-between;gap:10px;cursor:default;background:linear-gradient(135deg,#0b3d1f 0%,#14692f 100%);color:#fff;border-left:4px solid #ffc107;}#accordion-section-seos_football_pro_link .accordion-section-title:after{display:none;}#accordion-section-seos_football_pro_link .seos-football-pro-btn{display:inline-block;padding:7px 14px;border-radius:20px;background:linear-gradient(135deg,#ff9800 0%,#ff5722 100%);color:#fff;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.5px;text-decoration:none;white-space:nowrap;box-shadow:0 2px 6px rgba(255,87,34,.45);transition:transform .2s ease,box-shadow .2s ease;animation:seosFootballPulse 2.5s ease-in-out infinite;}#accordion-section-seos_football_pro_link .seos-football-pro-btn:hover,#accordion-section-seos_football_pro_link .seos-football-pro-btn:focus{color:#fff;transform:translateY(-1px) scale(1.04);box-shadow:0 4px 12px rgba(255,87,34,.6);outline:none;}#accordion-section-seos_football_pro_link .seos-football-pro-btn:before{content:"\\2605";margin-right:6px;color:#fff59d;}@keyframes seosFootballPulse{0%,100%{box-shadow:0 2px 6px rgba(255,87,34,.45);}50%{box-shadow:0 2px 14px rgba(255,152,0,.85);}}@media (prefers-reduced-motion:reduce){#accordion-section-seos_football_pro_link .seos-football-pro-btn{animation:none;transition:none;}}' );
	}
	add_action( 'customize_controls_enqueue_scripts', 'seos_football_pro_link_scripts' );
