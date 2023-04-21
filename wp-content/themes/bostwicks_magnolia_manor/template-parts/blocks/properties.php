<?php 
    $id = 'properties-' . $block['id'];
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
<section id="<?php echo esc_attr($id); ?>" class="properties<?php echo esc_attr($classes); ?>">
    <div class="properties__inner">
        <h2 class="properties__headline headline"><span><?php the_field( 'heading' ); ?></span></h2>
        <?php $len = count(get_field( 'properties' )); ?>
        <?php if( have_rows( 'properties' ) ): ?>
            <?php while( have_rows( 'properties' ) ): the_row(); ?>
            <?php $alt = get_row_index() % 2 === 0 ? ' properties__item--alt' : ''; ?>
            <?php $last = get_row_index() === $len ? ' properties__item--last' : ''; ?>
            <div class="properties__item<?php echo $alt; ?><?php echo $last; ?>">
                <div class="properties__image">
                    <?php echo wp_get_attachment_image(get_sub_field( 'image' ), 'property', false, array('class' => 'properties__image-zoom', 'alt' => get_sub_field( 'title' ))); ?>
                </div>
                <div class="properties__content">
                    <div class="properties__content-title">
                        <h3 class="properties__content-heading"><?php echo get_sub_field( 'title' ); ?></h3>
                    </div>                        
                    <div class="properties__content-text">
                        <p><?php echo get_sub_field( 'content' ); ?></p>
                        <?php $button = get_sub_field( 'button' ); ?>
                        <?php if( $button ): ?>
                        <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--tan properties__button"><?php echo $button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>