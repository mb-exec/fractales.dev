(function () {
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      const tabName = e.target.dataset.tab;

      clearTabBtnsActiveClass();
      hideTabs();
      e.target.classList.add('active');
      document.querySelector(`[data-tabname="${tabName}"]`).classList.add('active');
    });
  });

  function clearTabBtnsActiveClass() {
    tabBtns.forEach((btn) => btn.classList.remove('active'));
  }

  function hideTabs() {
    tabContents.forEach((tab) => tab.classList.remove('active'));
  }
})();
