<?php 
    $id = 'intro-' . $block['id'];
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
<section id="<?php echo esc_attr($id); ?>" class="intro<?php echo esc_attr($classes); ?>">
    <div class="intro__inner">
        <div class="intro__content">
            <h1><?php the_field( 'title' ); ?></h1>
            <p><?php the_field( 'content' ); ?></p>
            <?php $button = get_field( 'button' ); ?>
            <?php if( $button ): ?>
            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--tan intro__button"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
        <?php if( have_rows( 'images' ) ): ?>
        <div class="intro__images">
            <?php while( have_rows( 'images' ) ): the_row(); ?>
            <div class="intro__image-item">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php echo wp_get_attachment_image($image, 'intro-thumb', false, array('class' => 'intro__image intro__image'. get_row_index(), 'alt' => '')); ?>
            </div>
            <?php endwhile; ?>                  
        </div>
        <?php endif; ?>
    </div>
</section>