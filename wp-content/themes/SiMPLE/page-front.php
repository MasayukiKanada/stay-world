<?php
/**
* Template Name: フロント
 */
get_header(); ?>

    <div id="main">
        <div class="hero">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero__title">Enjoy Rich</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image-1.jpg" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__title">Fantastic</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image-2.jpg" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <div class="hero__title">Experience</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image-3.jpg" alt="" />
                    </div>
                </div>
                <div class="hero__footer">
                    <img class="hero__downarrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg">
                    <span class="hero__scrolltext">scroll</span>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>