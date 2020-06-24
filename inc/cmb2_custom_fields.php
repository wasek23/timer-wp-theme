<?php
/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';

function custom_fields(){
	// Latest Work Custom Fields
	$latest_work_metabox = new_cmb2_box( array(
		'id'            => 'latest_work_metaboxID',
		'title'         => __('Latest Work Metabox', 'Timer'),
		'object_types'  => 'latest_work', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
		$latest_work_metabox->add_field( array(
			'name'		 => __('Demo Label', 'cmb2'),
			'desc'		 => __('Input Latest Work Demo Label (ex: Demo)', 'Timer'),
			'default'	 => 'Demo',
			'id'		 => 'lw_demo_field',
			'type'		 => 'text_medium',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$latest_work_metabox->add_field( array(
			'name'       => __('Details Label', 'cmb2'),
			'desc'       => __('Input Latest Work Details Label (ex: Details)', 'Timer'),
			'default'	 => 'Details',
			'id'         => 'lw_details_field',
			'type'       => 'text_medium',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$latest_work_metabox->add_field( array(
			'name'       => __('Data Wow Delay', 'cmb2'),
			'desc'       => __('Input Data Wow Delay (ex: 300ms)', 'Timer'),
			'default'	 => '300ms',
			'id'         => 'lw_data_wow_delay',
			'type'       => 'text_small',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
	
	// Feature Offer Custom Fields
	$feature_offer_metabox = new_cmb2_box( array(
		'id'            => 'feature_offer_metaboxID',
		'title'         => __('Feature Offer Metabox', 'Timer'),
		'object_types'  => 'feature_offer', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
		$feature_offer_metabox->add_field( array(
			'name'		 => __('Offer Content', 'cmb2'),
			'desc'		 => __('Input Offer Content', 'Timer'),
			'id'		 => 'offer_content',
			'type'		 => 'textarea_small',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$feature_offer_metabox->add_field( array(
			'name'		 => __('Ion Ios Icon', 'cmb2'),
			'desc'		 => __('Input Ion Ios Icon Short Class Name (ex: americanfootball-outline)', 'Timer'),
			'default'	 => 'americanfootball-outline',
			'id'		 => 'offer_icon',
			'type'		 => 'text',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$feature_offer_metabox->add_field( array(
			'name'       => __('Data Wow Delay', 'cmb2'),
			'desc'       => __('Input Data Wow Delay (ex: 300ms)', 'Timer'),
			'default'	 => '300ms',
			'id'         => 'offer_data_wow_delay',
			'type'       => 'text_small',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
	
	// Team Members Custom Fields
	$teamMembers_metabox = new_cmb2_box( array(
		'id'            => 'teamMembers_metaboxID',
		'title'         => __('Team Members Metabox', 'Timer'),
		'object_types'  => 'teamMembers', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
		$teamMembers_metabox->add_field( array(
			'name'       => __('Team Member Designation', 'cmb2'),
			'desc'       => __('Add Your Team Member Designation', 'Timer'),
			'id'         => 'teamMembers_designation',
			'type'       => 'text',
			'show_on_cb' => 'cmb2_hide_if_no_cats',
			'repeatable' => true
		));
		$teamMembers_metabox->add_field( array(
			'name'       => __('Facebook Link', 'cmb2'),
			'desc'       => __('Input Facebook Profile Link (If has)', 'Timer'),
			'default'	 => 'facebook.com',
			'id'         => 'teamMembers_facebook',
			'type'       => 'text_url',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$teamMembers_metabox->add_field( array(
			'name'       => __('Instagram Link', 'cmb2'),
			'desc'       => __('Input Instagram Profile Link (If has)', 'Timer'),
			'default'	 => 'instagram.com',
			'id'         => 'teamMembers_instagram',
			'type'       => 'text_url',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$teamMembers_metabox->add_field( array(
			'name'       => __('Twitter Link', 'cmb2'),
			'desc'       => __('Input Twitter Profile Link (If has)', 'Timer'),
			'default'	 => 'twitter.com',
			'id'         => 'teamMembers_twitter',
			'type'       => 'text_url',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$teamMembers_metabox->add_field( array(
			'name'       => __('Linkedin Link', 'cmb2'),
			'desc'       => __('Input Linkedin Profile Link (If has)', 'Timer'),
			'default'	 => 'linkedin.com',
			'id'         => 'teamMembers_linkedin',
			'type'       => 'text_url',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$teamMembers_metabox->add_field( array(
			'name'       => __('Googleplus Link', 'cmb2'),
			'desc'       => __('Input Googleplus Profile Link (If has)', 'Timer'),
			'default'	 => 'plus.google.com',
			'id'         => 'teamMembers_googleplus',
			'type'       => 'text_url',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
		$teamMembers_metabox->add_field( array(
			'name'       => __('Data Wow Delay', 'cmb2'),
			'desc'       => __('Input Data Wow Delay (ex: 300ms)', 'Timer'),
			'default'	 => '300ms',
			'id'         => 'teamMembers_data_wow_delay',
			'type'       => 'text_small',
			'show_on_cb' => 'cmb2_hide_if_no_cats'
		));
}
add_action('cmb2_admin_init', 'custom_fields');