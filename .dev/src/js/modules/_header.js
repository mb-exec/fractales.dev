(function () {
  const hdr = document.querySelector('.hdr');
  const hdrHeight = parseInt(window.getComputedStyle(hdr).height);

  hdrScroll();
  mobileMenu(hdrHeight);

  function hdrScroll() {
    const navLinks = document.querySelectorAll('.hdr__menu .nav__link')

    let prevScrollYPosition = 0;

    window.addEventListener('scroll', scrollHandler, supportsPassive ? { passive: true } : false)

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

    function scrollHandler() {      
      const isScrollDown = window.scrollY > prevScrollYPosition;

      if (window.scrollY <= 10) {
        hdr.classList.remove('on-scroll')
      } else {
        hdr.classList.add('on-scroll')
      }

      if (isScrollDown && window.scrollY > 10) {
        hdr.classList.add('scroll-down');
      } else if (!isScrollDown) {
        hdr.classList.remove('scroll-down');
      }

      prevScrollYPosition = window.scrollY;
    }    
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
