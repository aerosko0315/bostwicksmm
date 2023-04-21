<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bostwicks_Magnolia_Manor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bostwicks_magnolia_manor' ); ?></a>

	<header class="header">
		<div class="header__inner">
			<div class="header__left-nav header__col">
				<div class="header__menu">
					<span class="header__burger-menu js-open-side-menu">
						<svg class="header__burger-menu--svg">
							<use xlink:href="#burger-menu"></use>
						</svg>					  
					</span>
					<?php $link = get_field( 'left_link_1', 'options' ); ?>
					<?php if( $link ): ?>
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="header__nav-link"><?php echo $link['title']; ?></a>
					<?php endif; ?>
					<?php $link = get_field( 'left_link_2', 'options' ); ?>
					<?php if( $link ): ?>
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="header__nav-link"><?php echo $link['title']; ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="header__logo header__col">
				<?php $logo = get_field( 'logo', 'options' ); ?>
				<?php if( $logo ): ?>
				<a href="<?php echo site_url(); ?>" class="header__logo-link">
					<?php echo wp_get_attachment_image($logo, 'full', false, array('class' => 'header__logo-image', 'alt' => get_bloginfo( 'name' ))); ?>
				</a>
				<?php endif; ?>
			</div>
			<div class="header__right-nav header__col">
				<?php $button = get_field( 'right_button', 'options' ); ?>
				<?php if( $button ): ?>
				<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--white header__button"><?php echo $button['title']; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</header>

	<div class="side-menu js-side-menu">
		<div class="side-menu__inner">
			<div class="side-menu__top">
				<span class="side-menu__close js-close-side-menu">
					<svg class="side-menu__close--svg">
						<use xlink:href="#close-menu"></use>
					</svg>
				</span>				
				<span class="side-menu__nav-title"><?php the_field( 'side_menu_title', 'options' ); ?></span>
			</div>
			<div class="side-menu__nav">				
				<?php if( have_rows( 'side_menu', 'options' ) ): ?>
				<ul class="side-menu__nav-list">
					<?php while( have_rows( 'side_menu', 'options' ) ): the_row(); ?>
					<li>
						<?php $link = get_sub_field( 'menu_link' ); ?>
						<?php if( $link ): ?>
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						<?php endif; ?>
						<?php if( have_rows( 'sub_menu' ) ): ?>
						<ul class="side-menu__nav-sublist">
							<?php while( have_rows( 'sub_menu' ) ): the_row(); ?>
							<li>
								<?php $sub_link = get_sub_field( 'sub_menu_link' ); ?>
								<?php if( $sub_link ): ?>
								<a href="<?php echo $sub_link['url']; ?>" target="<?php echo $sub_link['target']; ?>"><?php echo $sub_link['title']; ?></a>
								<?php endif; ?>
							</li>
							<?php endwhile; ?>
						</ul>
						<?php endif; ?>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
