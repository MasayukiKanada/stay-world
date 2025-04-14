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
        <div class="travel">
            <div class="travel__inner">
                <div class="travel__item">
                    <div class="travel__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image-travel.jpg" alt="Travel the World">
                    </div>
                    <div class="travel__texts">
                        <h2 class="travel__title main-title"><span class="purple">Travel</span> the World</h2>
                        <div class="travel__sub-title sub-title">世界中を旅しよう</div>
                        <div class="travel__txt">
                            <p>世界１５０ヶ国で<br>利用できる民泊サービスです。</p><p>あなたの望む宿がきっと見つかります。</p>
                        </div>
                        <div class="travel__btn">
                            <button class="btn filled">もっと詳しく</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>