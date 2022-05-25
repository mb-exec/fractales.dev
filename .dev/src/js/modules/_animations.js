(function() {
  setAnimationAttrForAllSectionTitles()

  setTimeout(() => {
    const elemsForAnimation = document.querySelectorAll('[data-animation]')
    runAnimations(elemsForAnimation)
    window.addEventListener('scroll', () => {
      runAnimations(elemsForAnimation)
    })
  }, 0);
  
  function runAnimations(elems) {
    elems.forEach(el => {
      if (isInViewport(el)) {
        el.setAttribute('data-animation-active', '')
      }
    })
  }

  function setAnimationAttrForAllSectionTitles() {
    const titles = document.querySelectorAll('.sect__title')
    titles.forEach(title => {
      title.setAttribute('data-animation', 'appear-left')
    })
  }
})();