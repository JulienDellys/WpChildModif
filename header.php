<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>

<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<style type="text/css">
	.juHeaderImg {
		display: flex;
		justify-content : center;
		align-content : center;
		align-items : center;
	}
	</style>
	<?php wp_head(); ?>
	<!--<?php add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
	function gkp_insert_css_in_head() {
		// On ajoute le css general du theme
		wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
		wp_enqueue_style( 'style' );
	}?>-->
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>
	<!--<img class="juHeaderImg" src="wp-content/uploads/2020/08/header.png"/>-->
	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php oceanwp_theme_strings( 'owp-string-header-skip-link', 'oceanwp' ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>
