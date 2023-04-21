<?php 
    $id = 'image-overlay-' . $block['id'];
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
<section id="<?php echo esc_attr($id); ?>" class="image-overlay<?php echo esc_attr($classes); ?>">
    <?php echo wp_get_attachment_image(get_field( 'image' ), 'image-overlay-large', false, array('class' => 'image-overlay__image', 'alt' => get_field( 'title' ))); ?>
    <div class="image-overlay__inner">
        <div class="image-overlay__content">
            <h2><?php the_field( 'title' ); ?></h2>
            <h4><?php the_field( 'subtext' ); ?></h4>
            <?php $button = get_field( 'button' ); ?>
            <?php if( $button ): ?>
            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--transparent-bordered image-overlay__button"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>