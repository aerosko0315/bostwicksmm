<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bostwicks_Magnolia_Manor
 */

?>
	<div class="back-to-top">
		<span class="back-to-top__button js-back-to-top">
			<svg class="back-to-top__button--svg">
				<use xlink:href="#back-to-top"></use>
			</svg>
		</span>
	</div>

	<footer class="footer">
		<div class="footer__inner footer__inner-top">
			<div class="footer__container-top">
				<div class="footer__columns">
					<div class="footer__col footer__col-logo">
						<?php $footer_logo = get_field( 'footer_logo', 'options' ); ?>
						<?php if( $footer_logo ): ?>
						<a href="<?php echo site_url(); ?>" class="footer__logo-link">
							<?php echo wp_get_attachment_image($footer_logo, 'full', false, array('class' => 'footer__logo-image', 'alt' => get_bloginfo( 'name' ))); ?>
						</a>
						<?php endif; ?>
					</div>
					<?php if( have_rows( 'navigation_column', 'options' ) ): ?>
					<div class="footer__col footer__col-menu">
						<?php while( have_rows( 'navigation_column', 'options' ) ): the_row(); ?>
						<div class="footer__col-title">
							<h5>
								<span><?php echo get_sub_field( 'column_title' ); ?></span><br/>
								<?php echo get_sub_field( 'column_subtitle' ); ?>
							</h5>
						</div>
						<div class="fotoer__nav">							
							<?php if( have_rows( 'menu' ) ): ?>
							<ul class="footer__nav-list">
								<?php while( have_rows( 'menu' ) ): the_row(); ?>
								<?php $link = get_sub_field( 'menu_link' ); ?>
								<li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></li>
								<?php endwhile; ?>
							</ul>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
					<?php if( have_rows( 'contact_column', 'options' ) ): ?>
					<div class="footer__col footer__col-contact">
						<?php while( have_rows( 'contact_column', 'options' ) ): the_row(); ?>
						<div class="footer__col-title">
							<h5>
								<span><?php echo get_sub_field( 'column_title' ); ?></span><br/>
								<?php echo get_sub_field( 'column_subtitle' ); ?>
							</h5>
						</div>
						<div class="footer__contact">
							<p class="footer__address">
								<?php echo get_sub_field( 'address' ); ?>
							</p>
							<p class="footer__phone">
								<a href="tel:<?php echo get_sub_field( 'phone' ); ?>" class="footer__phone-link"><?php echo get_sub_field( 'phone' ); ?></a>
							</p>
							<p class="footer__email">
								<a href="mailto:<?php echo get_sub_field( 'email_address' ); ?>" class="footer__email-link"><?php echo get_sub_field( 'email_address' ); ?></a>
							</p>
						</div>		
						<?php endwhile; ?>				
					</div>
					<?php endif; ?>
					<?php if( have_rows( 'social_media_column', 'options' ) ): ?>
					<div class="footer__col footer__col-social">
						<?php while( have_rows( 'social_media_column', 'options' ) ): the_row(); ?>
						<div class="footer__col-title">
							<h5>
								<span><?php echo get_sub_field( 'column_title' ); ?></span><br/>
								<?php echo get_sub_field( 'column_subtitle' ); ?>
							</h5>
						</div>
						<div class="footer__social">
							<?php $facebook = get_sub_field( 'facebook_url' ); ?>
							<?php $instagram = get_sub_field( 'instagram_url' ); ?>
							<?php if( $instagram ): ?>
							<a href="<?php echo $instagram; ?>" class="footer__social-link">
								<svg class="footer__social--svg">
									<use xlink:href="#instagram"></use>
								</svg>
							</a>
							<?php endif; ?>
							<?php if( $facebook ): ?>
							<a href="<?php echo $facebook; ?>" class="footer__social-link">
								<svg class="footer__social--svg">
									<use xlink:href="#facebook"></use>
								</svg>
							</a>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="footer__inner footer__inner-bottom">
			<div class="footer__container-bottom">
				<div class="footer__copy">
					<div class="footer__copy-col">
						<?php $link = get_field( 'copyright_link', 'options' ); ?>
						<?php $link_html = $link ? '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>' : ''; ?>
						<p class="footer__copy-text footer__copy-right"><?php the_field( 'copyright', 'options' ); ?> <br/><?php echo $link_html; ?></p>
					</div>
					<div class="footer__copy-col">
						<p class="footer__copy-text footer__copy-site">
							<span class="footer__site-title">Website</span>
							<?php $link = get_field( 'website', 'options' ); ?>
							<?php if( $link ): ?>
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="footer__site-link"><?php echo $link['title']; ?></a>
							<?php endif; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<svg width="0" height="0" style="display: none;">
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 21" id="burger-menu">
		<g id="Hamburger_Menu" data-name="Hamburger Menu" transform="translate(0 0.5)">
			<line id="Line_1" data-name="Line 1" x2="32" fill="none" stroke="#fff" stroke-width="1"/>
			<line id="Line_2" data-name="Line 2" x2="32" transform="translate(0 10)" fill="none" stroke="#fff" stroke-width="1"/>
			<line id="Line_3" data-name="Line 3" x2="32" transform="translate(0 20)" fill="none" stroke="#fff" stroke-width="1"/>
		</g>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.527 32.527" id="close-menu">
		<g id="X_Menu" data-name="X Menu" transform="translate(0.354 0.354)">
			<line id="Line_2" data-name="Line 2" x2="45" transform="rotate(45)" fill="none" stroke="#fff" stroke-width="1"/>
			<line id="Line_7" data-name="Line 7" x2="45" transform="translate(31.82 0) rotate(135)" fill="none" stroke="#fff" stroke-width="1"/>
		</g>
	</symbol>
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.473 21.421" id="instagram">
		<path id="Path_50" data-name="Path 50" d="M148.662,15.992h9.891a5.818,5.818,0,0,1,5.791,5.791v9.84a5.818,5.818,0,0,1-5.791,5.791h-9.891a5.818,5.818,0,0,1-5.791-5.791v-9.84a5.818,5.818,0,0,1,5.791-5.791m10.711,3.741h0a1.23,1.23,0,1,1,0,2.46,1.23,1.23,0,1,1,0-2.46m-5.791,1.127h.052a5.842,5.842,0,0,1,0,11.685h-.052a5.843,5.843,0,0,1,0-11.685m0,2h.052a3.869,3.869,0,0,1,0,7.738h-.052a3.869,3.869,0,0,1,0-7.738m-4.868-5.022H158.5a4,4,0,0,1,4,4v9.737a4,4,0,0,1-4,4h-9.788a4,4,0,0,1-4-4V21.834a4,4,0,0,1,4-4" transform="translate(-142.871 -15.992)" fill-rule="evenodd"/>
	</symbol>	 
	<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.488 21.473" id="facebook">
		<path id="Path_48" data-name="Path 48" d="M29.187,36.736h4.16v-9.6H36.42l.615-3.877H33.348V20.331a1.868,1.868,0,0,1,2.033-1.7h1.8V15.415l-3.215-.142c-3.073-.189-4.775,2.222-4.775,5.105v2.884h-3.5v3.877h3.5Z" transform="translate(-25.689 -15.263)" fill-rule="evenodd"/>
	</symbol>	   
	<symbol data-name="Back to Top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="back-to-top">
		<g id="Back_to_Top-2" data-name="Back to Top" opacity="0.9">
			<g id="Ellipse_1" data-name="Ellipse 1" fill="#fff" stroke="#404a3a" stroke-width="0.5">
				<circle cx="20" cy="20" r="20" stroke="none"/>
				<circle cx="20" cy="20" r="19.75" fill="none"/>
			</g>
			<path id="Path_2946" data-name="Path 2946" d="M.456,0,0,.456,7.408,7.864.045,15.227l.456.456L8.32,7.864Z" transform="translate(12 24.32) rotate(-90)" fill="#545d4e"/>
		</g>
	</symbol>	  
</svg>
</body>
</html>
