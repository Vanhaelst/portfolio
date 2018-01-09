<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="stylesheet"  href="<?php echo get_template_directory_uri() ?>/custom-style.css">
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri() ?>/assets/bootstrap-grid.min.css">
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri() ?>/assets/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/slick/slick-theme.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<div id="page" class="site">
    <div id="content" class="site-content">