/* app.js - small UX helpers (Bootstrap-compatible)
   - Active nav highlighting
   - Prefer-reduced-motion helper
*/

(function () {
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduceMotion) {
    document.documentElement.classList.add('reduce-motion');
  }

  var path = window.location.pathname || '/';
  var links = document.querySelectorAll('.navbar .nav-link');
  links.forEach(function (a) {
    var href = a.getAttribute('href');
    if (!href || href === '#') return;

    if ((href === '/' && path === '/') || (href !== '/' && path.startsWith(href))) {
      a.classList.add('is-active');
    }
  });
})();
