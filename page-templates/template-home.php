<?php
/**
 * Template Name: Template:Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

get_template_part( 'global-templates/header','hero' );
get_template_part( 'global-templates/header','about' );
get_template_part( 'global-templates/header','news' );
get_template_part( 'global-templates/header','mission-vission' );


get_footer();
