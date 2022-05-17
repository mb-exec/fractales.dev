var isInViewport = function(el) {
  const elPosition = {
      top: window.pageYOffset + el.getBoundingClientRect().top,
      left: window.pageXOffset + el.getBoundingClientRect().left,
      right: window.pageXOffset + el.getBoundingClientRect().right,
      bottom: window.pageYOffset + el.getBoundingClientRect().bottom,
  }
  const windowPosition = {
      top: window.pageYOffset,
      left: window.pageXOffset,
      right: window.pageXOffset + document.documentElement.clientWidth,
      bottom: window.pageYOffset + document.documentElement.clientHeight,
  };

  if (
  elPosition.bottom > windowPosition.top &&
  elPosition.top < windowPosition.bottom &&
  elPosition.right > windowPosition.left &&
  elPosition.left < windowPosition.right
  ) {
  return true;
  } else {
  return false;
  }
};

window.addEventListener('load', function() {
  console.log('asd');
  (function () {
    const hdr = document.querySelector('.hdr');
    const hdrHeight = parseInt(window.getComputedStyle(hdr).height);
  
    mobileMenu(hdrHeight);
    hdrScroll(hdrHeight);
  
    function hdrScroll(hdrHeight) {
      const main = document.querySelector('.main');
      const navLinks = document.querySelectorAll('.hdr__menu .nav__link')
  
      main.style.paddingTop = hdrHeight + 'px';
  
      let prevScrollYPosition = 0;
  
      window.addEventListener('scroll', e => {
        const isScrollDown = window.scrollY > prevScrollYPosition;
  
        if (window.scrollY <= hdrHeight) {
          hdr.classList.remove('on-scroll')
        } else {
          hdr.classList.add('on-scroll')
        }
  
        if (isScrollDown && window.scrollY > hdrHeight) {
          hdr.classList.add('scroll-down');
        } else if (!isScrollDown) {
          hdr.classList.remove('scroll-down');
        }
  
        prevScrollYPosition = window.scrollY;
      });
  
      navLinks.forEach(link => {
        link.addEventListener('click', e => {
          const href = e.target.getAttribute('href')
          if (href.match(/^#[a-zA-Z]+/) && !hdr.classList.contains('scroll-down')) {
            setTimeout(() => {
              hdr.classList.add('scroll-down')
            }, 100);
          }
        })
      })
    }
  
    function mobileMenu(hdrHeight) {
      if (!window.matchMedia('(max-width: 767.98px)').matches) return;
  
      const menu = document.querySelector('.hdr__menu');
      const toggleBtn = document.querySelector('.burger');
  
      menu.style.top = hdrHeight + 'px'
  
      toggleBtn.addEventListener('click', toggleMenu);
  
      function toggleMenu() {
        toggleBtn.classList.toggle('open');
        menu.classList.toggle('open');
        document.body.classList.toggle('no-scroll');
  
        if (toggleBtn.classList.contains('open')) {
          toggleBtn.setAttribute('aria-label', 'close menu');
        } else {
          toggleBtn.setAttribute('aria-label', 'open menu');
        }
      }
    }
  })();
  
  (function() {
    setAnimationAttrForAllSectionTitles()
  
    setTimeout(() => {
      const elemsForAnimation = document.querySelectorAll('[animation]')
      runAnimations(elemsForAnimation)
      window.addEventListener('scroll', () => {
        runAnimations(elemsForAnimation)
      })
    }, 0);
    
    function runAnimations(elems) {
      elems.forEach(el => {
        if (isInViewport(el)) {
          el.setAttribute('animation-active', '')
        }
      })
    }
  
    function setAnimationAttrForAllSectionTitles() {
      const titles = document.querySelectorAll('.sect__title')
      titles.forEach(title => {
        title.setAttribute('animation', 'appear-left')
      })
    }
  })();
});

//=require /modules/_contacts-form.js