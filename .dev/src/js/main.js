if (!NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
}

var supportsPassive = false;
try {
  var opts = Object.defineProperty({}, 'passive', {
    get: function() {
      supportsPassive = true;
    }
  });
  window.addEventListener("testPassive", null, opts);
  window.removeEventListener("testPassive", null, opts);
} catch (e) {}

//=require /modules/_header.js
//=require /modules/_cookie.js
//=require /modules/_lazyload.js
//=require /modules/_animations.js

//=require /modules/_contacts-form.js