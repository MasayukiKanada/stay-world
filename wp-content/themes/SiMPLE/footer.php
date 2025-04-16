      
      <footer class="footer">
        <div class="footer__inner appear up">
          <div class="footer__item item">
            <div class="logo">
                <h1 class="logo__item">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php /* bloginfo( 'name' ); */ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="SiMPLE" class="logo__img"><span>Stay</span><span class="purple">World</span>
                  </a>
                </h1>
              </div>
              <nav class="footer-nav">

                  <?php
                    $args = array(
                      'theme_location' => 'footer_nav',
                      'menu_class' => 'footer-nav__inner',
                      'container' => false,
                      'items_wrap' => '<ul class="footer-nav__ul">%3$s</ul>',
                    );
                    wp_nav_menu($args);
                  ?>

              </nav>
            </div>
            <div class="footer__item item">
              <p class="footer__item-txt">&copy; <?php bloginfo( 'name' ); ?></p>
            </div>
        </div>
        
        <div id="page_top"><a href="#"></a></div>

      </footer>

    </div>
    <!---container---->

    <nav class="mobile-menu">
      <div class="logo">
        <div class="logo__item">
          <?php /* bloginfo( 'name' ); */ ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Stay World" class="logo__img"><span>Stay</span><span class="purple">World</span>
        </div>
      </div>
      <ul class="mobile-menu__main">
          <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="#">
                  <span class="main-title">Our Service</span>
                  <span class="sub-title">サービスについて</span>
              </a>
          </li>
          <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="#">
                  <span class="main-title">About Us</span>
                  <span class="sub-title">私たちについて</span>
              </a>
          </li>
          <li class="mobile-menu__item">
              <a class="mobile-menu__link" href="#">
                  <span class="main-title">Contact Us</span>
                  <span class="sub-title">コンタクト方法</span>
              </a>
          </li>
      </ul>
    </nav>

	<?php wp_footer(); ?>
</div>
<!---global container---->

</body>
</html>