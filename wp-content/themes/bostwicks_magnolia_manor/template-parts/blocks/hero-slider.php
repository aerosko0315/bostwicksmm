<?php 
    $id = 'hero-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $classes = '';
    if( !empty($block['className']) ) {
        $classes .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $classes .= ' align-' . $block['align'];
    }
?>
<section id="<?php echo esc_attr($id); ?>" class="hero<?php echo esc_attr($classes); ?>">
    <div class="hero__inner">
        <?php if( have_rows( 'hero_images' ) ): ?>
        <div class="hero__images js-hero-slider" data-slider-speed="<?php the_field( 'slider_speed' ); ?>">
            <?php while( have_rows( 'hero_images' ) ): the_row(); ?>
            <?php $active = get_row_index() === 1 ? ' active' : ''; ?>
            <?php $image = get_sub_field( 'image' ); ?>
            <?php echo wp_get_attachment_image($image, 'hero-large', false, array('class' => 'hero__image js-hero-slider-image'. $active, 'alt' => 'hero')); ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="hero__content">
            <h2><?php the_field( 'title' ); ?></h2>
            <h4><?php the_field( 'subtext' ); ?></h4>
            <?php $button = get_field( 'button' ); ?>
            <?php if( $button ): ?>
            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--transparent-bordered"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>