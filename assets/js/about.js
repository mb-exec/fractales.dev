(function() {
  let isCounterStarted = false
  const counterList = document.querySelector('.about-us__list')
  const counters = document.querySelectorAll('.js-num-grow')

  window.addEventListener('scroll', () => {
    if (isCounterStarted) return
    if (isInViewport(counterList)) {
      isCounterStarted = true
      startCounter()
    }
  })

  function startCounter() {
    counters.forEach(counter => {
      growNumber(counter)
    })
  }

  function growNumber(el, speed = 50) {
    const endNumber = +el.getAttribute('number')

    const interval = setInterval(() => {
      const currNumber = +el.innerText

      if (currNumber < endNumber) {
        el.innerText = currNumber + 1       
      } else {
        clearInterval(interval)
      }
    }, speed);
  }
})();