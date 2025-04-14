new MobileMenu();

const header = document.querySelector('.header');
const cb = function (el, inview) {
  if(inview) {
      header.classList.remove('triggered');
  } else
  {
    header.classList.add('triggered');
  }
}
const so = new ScrollObserver('.nav-trigger', cb , {once: false});

const hero = new HeroSlider('.swiper');
hero.start();

const textAnimation = function (el, isIntersecting) {
  if(isIntersecting) {
      const ta = new TweenTextAnimation(el);
      ta.animate();
  }
}
const so2 = new ScrollObserver('.tween-animate-title', textAnimation);

const coverSlide = function (el, inview) {
  if(inview) {
      el.classList.add('inview');
  } else
  {
    el.classList.remove('inview');
  }
}
const so3 = new ScrollObserver('.cover-slide', coverSlide);