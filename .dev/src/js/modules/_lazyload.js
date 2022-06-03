(function () {
  ('use strict');
  window.lazyload = function (e) {
    function v(e, t) {
      return (t = t || document).querySelectorAll(e);
    }
    var t,
      b = window.lazyload;
    for (t in ((b.options = e || {}), (b.defaults = { selector: '.lazy', rootMargin: '250px' }), b.defaults))
      b.options[t] || (b.options[t] = b.defaults[t]);
    (b.settings = b.options),
      (b.observer = new IntersectionObserver(
        function (e) {
          for (var t = 0, s = e.length; t < s; t++)
            if (e[t].isIntersecting) {
              var a,
                r = e[t].target,
                n = r.getAttribute('data-src') || '#',
                o = r.getAttribute('data-srcset') || '#';
              switch (r.tagName) {
                case 'VIDEO':
                case 'AUDIO':
                case 'PICTURE':
                case 'IFRAME':
                case 'IMG':
                  '#' !== n && (r.src = n), '#' !== o && (r.srcset = o);
                  var i = v('source, img', r);
                  if (i)
                    for (var c = 0, d = i.length; c < d; c++) {
                      var l = i[c].getAttribute('data-src'),
                        g = i[c].getAttribute('data-srcset');
                      l && (i[c].src = l), g && (i[c].srcset = g);
                    }
                  break;
                default:
                  '#' !== n
                    ? (r.style.backgroundImage = n)
                    : '#' !== o &&
                      ((a = 'image-set(' + o + ')'),
                      (r.style.backgroundImage = a),
                      r.style.backgroundImage || (r.style.backgroundImage = '-webkit-' + a));
              }
              r.classList.add('lazyloaded');
              var u = void 0;
              'function' == typeof Event
                ? (u = new Event('lazyloaded'))
                : (u = document.createEvent('Event')).initEvent('lazyloaded', !0, !0),
                r.dispatchEvent(u),
                b.observer.unobserve(r);
            }
        },
        { rootMargin: b.options.rootMargin }
      )),
      (b.startObserve = function (e, t) {
        'init' === e && (t = b.elements = v(b.settings.selector));
        for (var s = 0, a = t.length; s < a; s++)
          'add' === e && (t[s].classList.add('lazy'), (b.elements[b.elements.length] = t[s])), b.observer.observe(t[s]);
      }),
      (b.add = function (e) {
        'string' == typeof e && (e = v(e)), e && (console.log(e), b.startObserve('add', e));
      }),
      b.startObserve('init');
  };

  lazyload()
})();
