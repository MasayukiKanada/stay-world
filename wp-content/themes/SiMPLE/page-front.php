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
        <div id="main">
            <section class="travel">
                <div class="travel__inner">
                    <div class="travel__item">
                        <div class="travel__img cover-slide">
                            <img class="img-zoom" src="<?php echo get_template_directory_uri(); ?>/images/image-travel.jpg" alt="Travel the World">
                        </div>
                        <div class="travel__texts appear left">
                            <h2 class="travel__title main-title item"><span class="purple">Travel</span> the World</h2>
                            <div class="travel__sub-title sub-title item">世界中を旅しよう</div>
                            <div class="travel__txt item">
                                <p>世界１５０ヶ国で<br>利用できる民泊サービスです。</p><p>あなたの望む宿がきっと見つかります。</p>
                            </div>
                            <div class="travel__btn item">
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
            <section class="popular">
                <div class="popular__inner">
                    <div class="popular__header">
                        <h2 class="popular__title main-title tween-animate-title">Popular Place</h2>
                        <div class="popular__sub-title sub-title tween-animate-title">人気の観光地で宿泊先を見つけましょう</div>
                    </div>
                    <div class="popular__items appear up">
                        <div class="popular__item item">
                            <div class="popular__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p1.jpg" alt="パリ">
                            </div>
                            <p class="popular__name">パリ</p>
                        </div>
                        <div class="popular__item item">
                            <div class="popular__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p2.jpg" alt="ニューヨーク">
                            </div>
                            <p class="popular__name">ニューヨーク</p>
                        </div>
                        <div class="popular__item item">
                            <div class="popular__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p3.jpg" alt="香港">
                            </div>
                            <p class="popular__name">香港</p>
                        </div>
                        <div class="popular__item item">
                            <div class="popular__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/image-p4.jpg" alt="パリ">
                            </div>
                            <p class="popular__name">大阪</p>
                        </div>
                    </div>
                    <div class="popular__btn">
                        <a href="#" class="btn cover-3d"><span>一覧から探す</span></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="sidebar">
        <div class="sidebar__inner">
            <div class="sidebar__left">
                <div class="icon twitter"><a class="tween-animate-title" href="#">Twitter</a></div>
                <div class="icon fb"><a class="tween-animate-title" href="#">Facebook</a></div>
            </div>
            <div class="sidebar__right">
                <div class="copy-right tween-animate-title">&copy; <?php bloginfo( 'name' ); ?></div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>