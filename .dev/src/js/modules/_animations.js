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