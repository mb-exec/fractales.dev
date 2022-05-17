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
  //=require /modules/_header.js
  //=require /modules/_animations.js
});

//=require /modules/_contacts-form.js