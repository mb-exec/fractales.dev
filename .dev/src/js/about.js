(function () {
  const counterList = document.querySelector('.about-us__list');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        startCounter();
        observer.unobserve(entry.target);
      }
    });
  });

  observer.observe(counterList);

  function startCounter() {
    const counters = document.querySelectorAll('.js-num-grow');

    counters.forEach((counter) => {
      growNumber(counter);
    });
  }

  function growNumber(el, speed = 50) {
    const endNumber = +el.getAttribute('number');

    const interval = setInterval(() => {
      const currNumber = +el.innerText;

      if (currNumber < endNumber) {
        el.innerText = currNumber + 1;
      } else {
        clearInterval(interval);
      }
    }, speed);
  }
})();
