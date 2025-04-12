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