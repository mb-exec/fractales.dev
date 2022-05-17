(function () {
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      const tabName = e.target.dataset.tab;

      clearTabBtnsActiveClass();
      hideTabs();
      e.target.classList.add('active');
      document.querySelector(`[data-tabname="${tabName}"]`).classList.add('active');
    });
  });

  function clearTabBtnsActiveClass() {
    tabBtns.forEach((btn) => btn.classList.remove('active'));
  }

  function hideTabs() {
    tabContents.forEach((tab) => tab.classList.remove('active'));
  }
})();

(function() {
  if (window.matchMedia('(max-width: 767.98px)').matches) {
    const steps = new Swiper('.about__steps', {
      pagination: {
        el: '.about__steps-pagination',
        bulletClass: 'dot',
        bulletActiveClass: 'active',
        clickable: true,
      },
    })
  }

  const teamSlider = new Swiper('.about__team', {
    speed: 700,
    spaceBetween: 20,
    slidesPerView: 1.2,
    slideActiveClass: 'active',
    grabCursor: true,
    navigation: {      
      nextEl: '.about__team-nav .arrow-next',
      prevEl: '.about__team-nav .arrow-prev',
    },
    mousewheel: {
      forceToAxis: true,
    },
    breakpoints: {
      767.98: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      1023.98: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1279.98: {
        slidesPerView: 2,
        spaceBetween: 40,
      }
    }
  })
})();