(function() {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.setAttribute('data-animation-active', '')
        observer.unobserve(entry.target)
      }
    })
  })
  
  setAnimationAttrForAllSectionTitles()

  function setAnimationAttrForAllSectionTitles() {
    const titles = document.querySelectorAll('.sect__title')
    titles.forEach(title => {
      title.setAttribute('data-animation', 'appear-left')
    })
  }

  setTimeout(() => {
    const elemsForAnimation = document.querySelectorAll('[data-animation]')
    
    elemsForAnimation.forEach(el => {
      observer.observe(el)
    })
  }, 0);
})();