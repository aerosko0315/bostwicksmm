<?php
/**
 * Template Name: Home 
 */

get_header();
?>

    <main>
        <section class="hero">
            <div class="hero__inner">
                <?php echo wp_get_attachment_image(21, 'hero', false, array('class' => 'hero__image', 'alt' => 'hero')); ?>
                <div class="hero__content">
                    <h2>home away from home</h2>
                    <h4>Enjoy our luxurious commodities and make your next vacay or reunion special.</h4>
                    <a href="#" class="button button--transparent-bordered">Book your stay</a>
                </div>
            </div>
        </section>
        
        <section class="intro">
            <div class="intro__inner">
                <div class="intro__content">
                    <h1>Outer Banks <br/>Wedding & Events <br/><span>Destination</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#" class="button button--tan intro__button">Learn More</a>
                </div>
                <div class="intro__images">
                    <div class="intro__image-item">
                        <?php echo wp_get_attachment_image(23, 'intro-thumb', false, array('class' => 'intro__image intro__image1', 'alt' => 'image 1')); ?>
                    </div>
                    <div class="intro__image-item">
                        <?php echo wp_get_attachment_image(24, 'intro-thumb', false, array('class' => 'intro__image intro__image2', 'alt' => 'image 2')); ?>
                    </div>                    
                </div>
            </div>
        </section>

        <section class="properties">
            <div class="properties__inner">
                <h2 class="properties__headline headline"><span>Our Properties</span></h2>
                <div class="properties__item">
                    <div class="properties__image">
                        <?php echo wp_get_attachment_image(25, 'property', false, array('class' => 'properties__image-zoom', 'alt' => 'property 1')); ?>
                    </div>
                    <div class="properties__content">
                        <div class="properties__content-title">
                            <h3 class="properties__content-heading">Magnolia Manor</h3>
                        </div>                        
                        <div class="properties__content-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut ligula tristique, pharetra justo eget, scelerisque est. Suspendisse vestibulum pretium scelerisque. Aenean non scelerisque quam, et luctus neque. Aliquam convallis enim tellus, consectetur.</p>
                            <a href="#" class="button button--tan properties__button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="properties__item properties__item--alt">
                    <div class="properties__image">
                        <?php echo wp_get_attachment_image(26, 'property', false, array('class' => 'properties__image-zoom', 'alt' => 'property 2')); ?>
                    </div>
                    <div class="properties__content">
                        <div class="properties__content-title">
                            <h3 class="properties__content-heading">Six Sisters Lodge</h3>
                        </div>                        
                        <div class="properties__content-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut ligula tristique, pharetra justo eget, scelerisque est. Suspendisse vestibulum pretium scelerisque. Aenean non scelerisque quam, et luctus neque. Aliquam convallis enim tellus, consectetur.</p>
                            <a href="#" class="button button--tan properties__button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="properties__item properties__item--last">
                    <div class="properties__image">
                        <?php echo wp_get_attachment_image(27, 'property', false, array('class' => 'properties__image-zoom', 'alt' => 'property 3')); ?>
                    </div>
                    <div class="properties__content">
                        <div class="properties__content-title">
                            <h3 class="properties__content-heading">Elderberry Studio</h3>
                        </div>
                        <div class="properties__content-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut ligula tristique, pharetra justo eget, scelerisque est. Suspendisse vestibulum pretium scelerisque. Aenean non scelerisque quam, et luctus neque. Aliquam convallis enim tellus, consectetur.</p>
                            <a href="#" class="button button--tan properties__button">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="image-overlay">
            <?php echo wp_get_attachment_image(28, 'image-overlay', false, array('class' => 'image-overlay__image', 'alt' => 'contact')); ?>
            <div class="image-overlay__inner">
                <div class="image-overlay__content">
                    <h2>Southern Coastal Charm</h2>
                    <h4>Learn more about our stunning property in the Outer Banks.</h4>
                    <a href="#" class="button button--transparent-bordered image-overlay__button">Contact Us</a>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();