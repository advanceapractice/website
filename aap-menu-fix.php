<?php
/**
 * Plugin Name: AAP Mobile Menu Fix
 * Description: Fixes mobile menu close button on advanceapractice.com
 * Version: 1.1
 *
 * INSTALL — no activation needed:
 * Upload to: public_html/wp-content/mu-plugins/aap-menu-fix.php
 * WordPress auto-loads every file in mu-plugins/ on every page.
 */

add_action('wp_footer', function () { ?>
<script id="aap-menu-fix">
(function () {
  'use strict';

  /* ── 1. Track which body/html classes get added when the menu opens ────── */
  var baseBodyClasses  = new Set(document.body.classList);
  var baseHtmlClasses  = new Set(document.documentElement.classList);
  var addedBodyClasses = [];
  var addedHtmlClasses = [];

  new MutationObserver(function (mutations) {
    mutations.forEach(function (m) {
      if (m.type !== 'attributes' || m.attributeName !== 'class') return;
      var target = m.target;
      if (target === document.body) {
        document.body.classList.forEach(function (c) {
          if (!baseBodyClasses.has(c) && addedBodyClasses.indexOf(c) === -1)
            addedBodyClasses.push(c);
        });
      }
      if (target === document.documentElement) {
        document.documentElement.classList.forEach(function (c) {
          if (!baseHtmlClasses.has(c) && addedHtmlClasses.indexOf(c) === -1)
            addedHtmlClasses.push(c);
        });
      }
    });
  }).observe(document.documentElement, {
    subtree: true,
    attributes: true,
    attributeFilter: ['class']
  });

  /* ── 2. Known selector lists (belt + suspenders) ─────────────────────── */
  var CLOSE_SELECTORS = [
    '.menu-close', '.close-menu', '.mobile-menu-close', '.mobile-close',
    '.nav-close',  '.close-nav',  '.close-button',      '.close-btn',
    '.ast-mobile-popup-close', '.mobile-menu__close', '.off-canvas-close',
    '.menu-panel-close', '.site-close-handle', '.drawer-close',
    '[data-menu-close]', '[data-close-menu]', '[data-dismiss="menu"]',
    '[aria-label="Close menu"]', '[aria-label="Close navigation"]',
    '[aria-label="Close"]', '[aria-label="close"]',
  ].join(',');

  var PANEL_SELECTORS = [
    '#ast-mobile-popup', '.ast-mobile-popup-drawer',
    '.mobile-menu',   '.mobile-nav',   '.mobile-navigation',
    '.off-canvas-menu', '.off-canvas-nav', '.menu-modal',
    '.mobile-menu-wrapper', '.mobile-menu-container',
    '.nav-drawer', '.site-header__drawer', '.header-menu-modal',
    '#mobile-menu', '#mobile-nav', '#mobile-navigation', '#offcanvas-menu',
  ].join(',');

  var OVERLAY_SELECTORS = [
    '.mobile-overlay', '.nav-overlay', '.menu-overlay',
    '.off-canvas-overlay', '.mobile-menu-overlay',
    '.ast-mobile-popup-overlay', '.overlay--menu',
    '#mobile-overlay', '#nav-overlay', '.backdrop', '.drawer-backdrop',
  ].join(',');

  /* ── 3. Close function ───────────────────────────────────────────────── */
  function closeMenu() {
    // a) Remove any body/html classes that were added when menu opened
    addedBodyClasses.forEach(function (c) { document.body.classList.remove(c); });
    addedHtmlClasses.forEach(function (c) { document.documentElement.classList.remove(c); });
    addedBodyClasses = [];
    addedHtmlClasses = [];

    // b) Hide panels via known selectors
    document.querySelectorAll(PANEL_SELECTORS).forEach(function (el) {
      el.classList.remove('open','is-open','active','is-active','visible','show','toggled','expanded');
      el.setAttribute('aria-hidden', 'true');
    });

    // c) Hide overlays
    document.querySelectorAll(OVERLAY_SELECTORS).forEach(function (el) {
      el.classList.remove('open','is-open','active','visible','show');
    });

    // d) Reset hamburger aria-expanded
    document.querySelectorAll(
      '.menu-toggle,.hamburger,.mobile-toggle,[aria-expanded="true"]'
    ).forEach(function (el) {
      el.setAttribute('aria-expanded', 'false');
      el.classList.remove('is-active','open','active','toggled');
    });

    // e) Unlock body scroll
    document.body.style.overflow    = '';
    document.documentElement.style.overflow = '';
    document.body.style.height      = '';
    document.body.style.position    = '';
  }

  /* ── 4. Is this element a close button? ─────────────────────────────── */
  function looksLikeCloseButton(el) {
    if (!el || el === document.body) return false;

    // By class / attribute (matches known selectors)
    try {
      if (el.matches && el.matches(CLOSE_SELECTORS)) return true;
    } catch(e) {}

    // By visible text — handles × ✕ ✖ X close Close etc.
    var txt = (el.textContent || '').trim();
    if (/^[×✕✖Xx]$/.test(txt)) return true;
    if (/^close$/i.test(txt) && el.tagName !== 'A') return true;

    // By aria-label
    var label = (el.getAttribute && el.getAttribute('aria-label') || '').toLowerCase();
    if (label.indexOf('close') !== -1) return true;

    // By class name containing "close"
    var cls = (el.className || '').toLowerCase();
    if (cls.indexOf('close') !== -1 && cls.indexOf('disclosure') === -1) return true;

    return false;
  }

  /* ── 5. Event delegation — capture phase fires before theme JS ───────── */
  document.addEventListener('click', function (e) {
    var el = e.target;

    // Walk up 5 levels from the clicked element
    for (var i = 0; i < 5 && el && el !== document.body; i++) {
      if (looksLikeCloseButton(el)) {
        e.preventDefault();
        e.stopImmediatePropagation();
        closeMenu();
        return;
      }
      // Overlay/backdrop click
      try {
        if (el.matches && el.matches(OVERLAY_SELECTORS)) {
          closeMenu();
          return;
        }
      } catch(e) {}

      el = el.parentElement;
    }
  }, true); // <-- capture phase

  /* ── 6. Escape key ───────────────────────────────────────────────────── */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

  /* ── 7. MutationObserver — wire dynamically injected close buttons ────── */
  new MutationObserver(function (mutations) {
    mutations.forEach(function (m) {
      m.addedNodes.forEach(function (node) {
        if (node.nodeType !== 1) return;
        var candidates = [];
        if (looksLikeCloseButton(node)) candidates.push(node);
        node.querySelectorAll && node.querySelectorAll('button,a,[role="button"]').forEach(function (el) {
          if (looksLikeCloseButton(el)) candidates.push(el);
        });
        candidates.forEach(function (btn) {
          btn.addEventListener('click', function (ev) {
            ev.preventDefault();
            closeMenu();
          });
        });
      });
    });
  }).observe(document.body, { childList: true, subtree: true });

})();
</script>
<?php }, 99);
