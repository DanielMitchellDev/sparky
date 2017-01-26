<?php
	
	function sparky_customize_register($wp_customize){
		//***********************************
		//* REMOVE BUILT IN OPTIONS
		//***********************************


		// Remove the seting for the site title
		$wp_customize -> remove_control( 'blogname' );

		// Remove the setting for blog description, AKA Site Tagline.
		$wp_customize -> remove_control( 'blogdescription' );

		// Remove the section for designating a static front page.
		$wp_customize -> remove_section( 'static_front_page' );
	

		//****************************************
		//*			BANNER SECTION
		//****************************************
		$wp_customize->add_section('banner', array(
			'title'			=> __('Banner', 'sparky'),
			'description'	=> sprintf(__('Options For The Banner'), 'sparky'),
			'priority'		=> 130
		));


			//*************************************************
			//*			LANDING PAGE SETTINGS AND CONTROLS
			//*************************************************
			
			//BANNER TITLE
			$wp_customize->add_setting('banner_title', array(
				'default' 	=> _x('sparky', 'sparky'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('banner_title', array(
				'label'		=> __('Banner Title', 'sparky'),
				'section'	=> 'banner',
				'priority'	=> 1
			));

			//BANNER DESCRIPTION
			$wp_customize->add_setting('banner_description', array(
				'default' 	=> _x('Easy And Fun To Use', 'sparky'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('banner_description', array(
				'label'		=> __('Banner Description', 'sparky'),
				'section'	=> 'banner',
				'priority'	=> 2
			));			
			//BANNER BACKGROUND IMAGE
			$wp_customize->add_setting('banner_background', array(
				'default' 	=>  get_bloginfo('template_directory') . '/inc/img/banner-stock-darkened.jpg',
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_background', array(
				'label' => __('Banner Background Image', 'sparky'),
				'section' => 'banner',
				'settings' => 'banner_background',
				'priority'	=> 3
			)));
		//****************************************
		//*			BANNER SECTION
		//****************************************
		$wp_customize->add_section('sidebar', array(
			'title'			=> __('Sidebar', 'sparky'),
			'description'	=> sprintf(__('Options For The Sidebar'), 'sparky'),
			'priority'		=> 131
		));


			//*************************************************
			//*		  SIDEBAR SETTINGS AND CONTROLS
			//*************************************************
			
			//SIDEBAR NAME
			$wp_customize->add_setting('sidebar_name', array(
				'default' 	=> _x('John Doe', 'sparky'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('sidebar_name', array(
				'label'		=> __('Sidebar Name', 'sparky'),
				'section'	=> 'sidebar',
				'priority'	=> 1
			));			
			//SIDEBAR PHOTO
			$wp_customize->add_setting('sidebar_photo', array(
				'default' 	=>  get_bloginfo('template_directory') . '/inc/img/selfy.jpg',
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'sidebar_photo', array(
				'label' => __('Sidebar Photo', 'sparky'),
				'section' => 'sidebar',
				'settings' => 'sidebar_photo',
				'priority'	=> 2
			)));
			//SIDEBAR SOCIAL ICON 1
			$wp_customize->add_setting('sidebar_social_icon_1', array(
				'default' 	=>  get_bloginfo('template_directory') . '/inc/img/facebook.png',
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'sidebar_social_icon_1', array(
				'label' => __('Sidebar Social Icon Slot 1', 'sparky'),
				'section' => 'sidebar',
				'settings' => 'sidebar_social_icon_1',
				'priority'	=> 3
			)));
			//SIDEBAR SOCIAL LINK FOR SLOT 1
			$wp_customize->add_setting('sidebar_social_link_1', array(
				'default' 	=> _x('facebook.com', 'sparky'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('sidebar_social_link_1', array(
				'label'		=> __('Link For Social Media Icon 1', 'sparky'),
				'section'	=> 'sidebar',
				'priority'	=> 4
			));						
			//SIDEBAR SOCIAL ICON 2
			$wp_customize->add_setting('sidebar_social_icon_2', array(
				'default' 	=>  get_bloginfo('template_directory') . '/inc/img/instagram.png',
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'sidebar_social_icon_2', array(
				'label' => __('Sidebar Social Icon Slot 2', 'sparky'),
				'section' => 'sidebar',
				'settings' => 'sidebar_social_icon_2',
				'priority'	=> 5
			)));
			//SIDEBAR SOCIAL LINK FOR SLOT 2
			$wp_customize->add_setting('sidebar_social_link_2', array(
				'default' 	=> _x('instagram.com', 'sparky'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('sidebar_social_link_2', array(
				'label'		=> __('Link For Social Media Icon 2', 'sparky'),
				'section'	=> 'sidebar',
				'priority'	=> 6
			));
			//SIDEBAR SOCIAL ICON 3
			$wp_customize->add_setting('sidebar_social_icon_3', array(
				'default' 	=>  get_bloginfo('template_directory') . '/inc/img/twitter.png',
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'sidebar_social_icon_3', array(
				'label' => __('Sidebar Social Icon Slot 3', 'sparky'),
				'section' => 'sidebar',
				'settings' => 'sidebar_social_icon_3',
				'priority'	=> 7
			)));
			//SIDEBAR SOCIAL LINK FOR SLOT 3
			$wp_customize->add_setting('sidebar_social_link_3', array(
				'default' 	=> _x('twitter.com', 'sparky'),
				'type'		=> 'theme_mod'
			));

			$wp_customize->add_control('sidebar_social_link_3', array(
				'label'		=> __('Link For Social Media Icon 3', 'sparky'),
				'section'	=> 'sidebar',
				'priority'	=> 8
			));					




	}//end of register
	add_action('customize_register', 'sparky_customize_register');