const menuToggle = document.querySelector('.menu-toggle');
const primaryNav = document.querySelector('#primary-nav');
const yearNode = document.querySelector('#year');
const dropdowns = document.querySelectorAll('[data-dropdown]');

function closeAllDropdowns(except) {
  dropdowns.forEach((d) => {
    if (d === except) return;
    d.classList.remove('open');
    const btn = d.querySelector('button');
    if (btn) btn.setAttribute('aria-expanded', 'false');
  });
}

dropdowns.forEach((dropdown) => {
  const btn = dropdown.querySelector('button');
  if (!btn) return;
  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = dropdown.classList.contains('open');
    closeAllDropdowns(dropdown);
    dropdown.classList.toggle('open', !isOpen);
    btn.setAttribute('aria-expanded', String(!isOpen));
  });
});

if (menuToggle && primaryNav) {
  function closeMenu() {
    primaryNav.classList.remove('open');
    menuToggle.setAttribute('aria-expanded', 'false');
    closeAllDropdowns();
  }

  function openMenu() {
    primaryNav.classList.add('open');
    menuToggle.setAttribute('aria-expanded', 'true');
  }

  menuToggle.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = primaryNav.classList.contains('open');
    isOpen ? closeMenu() : openMenu();
  });

  primaryNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', closeMenu);
  });

  document.addEventListener('click', (e) => {
    if (!primaryNav.contains(e.target) && !menuToggle.contains(e.target)) {
      if (primaryNav.classList.contains('open')) closeMenu();
      closeAllDropdowns();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      if (primaryNav.classList.contains('open')) {
        closeMenu();
        menuToggle.focus();
      } else {
        closeAllDropdowns();
      }
    }
  });
}

if (yearNode) {
  yearNode.textContent = String(new Date().getFullYear());
}

document.querySelectorAll('#year').forEach((el) => {
  el.textContent = String(new Date().getFullYear());
});
