class Main {

  constructor() {
    this.header = document.querySelector('.header');
    this.hero = new HeroSlider('.swiper');
    this.sidebar = document.querySelectorAll('.sidebar');
    this._observers = [];
    this._init();
  }

  _init() {
    new MobileMenu();
    Pace.on('done',this._scrollInit.bind(this));
  }


  _scrollInit() {
    this._observers.push(
      new ScrollObserver('.nav-trigger', this._trigger.bind(this), {once: false}), new ScrollObserver('.swiper', this._slideAnimation.bind(this), {once: false}), new ScrollObserver('.tween-animate-title', this._textAnimation), new ScrollObserver('.cover-slide', this._coverSlide), new ScrollObserver('#main', this._sidebarAnimation.bind(this), {once: false, rootMargin: "-400px 0px"}, new ScrollObserver('.appear', this._inviewAnimation))
    );
  }

  _trigger(el, inview) {
    if(inview) {
      this.header.classList.remove('triggered');
    } else {
        this.header.classList.add('triggered');
    }
  }

  _slideAnimation(el, inview) {
    if(inview) {
      this.hero.start();
    } else {
      this.hero.stop();
    }
  }

  _textAnimation(el, inview) {
    if(inview) {
        const ta = new TweenTextAnimation(el);
        ta.animate();
    }
  }

  _coverSlide (el, inview) {
    if(inview) {
        el.classList.add('inview');
    } else {
      el.classList.remove('inview');
    }
  }

  _sidebarAnimation (el, inview) {
    if(inview) {
      this.sidebar.forEach(el=>el.classList.add('inview'));
    } else {
      this.sidebar.forEach(el=>el.classList.remove('inview'));
    }
  }

  _inviewAnimation (el, inview) {
    if(inview) {
      el.classList.add('inview');
  } else {
    el.classList.remove('inview');
  }
  }
}

new Main();