<?php
/**
* Template Name: フロント
 */
get_header(); ?>

    <div id="main">
        <section class="hero">
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
        </section>
        <section class="travel">
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
                            <a href="#" class="btn filled">もっと詳しく</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="house">
            <div class="house__inner">
                <div class="house__header">
                    <h2 class="house__title main-title tween-animate-title">Find Your House</h2>
                    <div class="house__sub-title sub-title tween-animate-title">お気に入りの宿泊先を見つけましょう</div>
                </div>
                <div class="house__items">
                    <div class="house__item">
                        <div class="cover-slide hover-darken">
                            <div class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/villa-1.jpg);"></div>
                        </div>
                        <div class="house__name">House 1</div>
                    </div>
                    <div class="house__item">
                        <div class="cover-slide hover-darken">
                            <div class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/villa-2.jpg);"></div>
                        </div>
                        <div class="house__name">House 2</div>
                    </div>
                    <div class="house__item">
                        <div class="cover-slide hover-darken">
                            <div class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/villa-3.jpg);"></div>
                        </div>
                        <div class="house__name">House 3</div>
                    </div>
                    <div class="house__item">
                        <div class="cover-slide hover-darken">
                            <div class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/villa-4.jpg);"></div>
                        </div>
                        <div class="house__name">House 4</div>
                    </div>
                    <div class="house__item">
                        <div class="cover-slide hover-darken">
                            <div class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/villa-5.jpg);"></div>
                        </div>
                        <div class="house__name">House 5</div>
                    </div>
                    <div class="house__item">
                        <div class="cover-slide hover-darken">
                            <div class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/villa-6.jpg);"></div>
                        </div>
                        <div class="house__name">House 6</div>
                    </div>
                </div>
                <div class="house__btn">
                    <a href="#" class="btn slide-bg">もっと詳しく</a>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>