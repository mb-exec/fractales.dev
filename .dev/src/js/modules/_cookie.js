(function () {
  const cookie_consent = getCookie("user_cookie_consent");
  const cookiePopup = document.getElementById('cookie')
  if(cookie_consent != ""){
    cookiePopup.classList.add('hidden');
  }else{
    cookiePopup.classList.remove('hidden');
  }

  const acceptCookieBtn = document.getElementById('accept-cookie')
  const closeCookieBtn = document.getElementById('close-cookie')
  acceptCookieBtn.addEventListener('click', acceptCookie)
  closeCookieBtn.addEventListener('click', closePopup)

  function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    let expires = 'expires=' + d.toUTCString();
    document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
  }

  function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + 24 * 60 * 60 * 1000);
    let expires = 'expires=' + d.toUTCString();
    document.cookie = cname + '=;' + expires + ';path=/';
  }

  // Read cookie
  function getCookie(cname) {
    let name = cname + '=';
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return '';
  }

  // Set cookie consent
  function acceptCookie() {
    deleteCookie('user_cookie_consent');
    setCookie('user_cookie_consent', 1, 30);
    closePopup()
  }

  function closePopup() {
    cookiePopup.classList.add('hidden');
  }
})();
