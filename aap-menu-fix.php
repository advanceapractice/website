<?php
/**
 * Plugin Name: AAP Mobile Menu Fix
 * Description: Fixes mobile menu close button, overlay click, and Escape key on advanceapractice.com
 * Version: 1.0
 *
 * INSTALL (no activation needed):
 * Upload this file to: public_html/wp-content/mu-plugins/aap-menu-fix.php
 * WordPress auto-loads everything in mu-plugins/ on every page.
 */

add_action('wp_footer', function () {
    ?>
    <script id="aap-menu-fix">
    (function () {
      'use strict';

      /* ─── Selectors ────────────────────────────────────────────────────── */

      // Close-button candidates (× button inside the panel)
      var CLOSE_BTN = [
        '.menu-close',
        '.close-menu',
        '.mobile-menu-close',
        '.mobile-close',
        '.nav-close',
        '.close-nav',
        '.close-button',
        '.ast-mobile-popup-close',
        '.mobile-menu__close',
        '.off-canvas-close',
        '.menu-panel-close',
        '[data-menu-close]',
        '[data-close-menu]',
        '[aria-label="Close menu"]',
        '[aria-label="Close navigation"]',
        '[aria-label="Close"]',
      ].join(',');

      // Menu panel candidates
      var PANELS = [
        '#ast-mobile-popup',
        '.ast-mobile-popup-drawer',
        '.mobile-menu',
        '.mobile-nav',
        '.mobile-navigation',
        '.off-canvas-menu',
        '.off-canvas-nav',
        '.menu-modal',
        '.mobile-menu-wrapper',
        '.mobile-menu-container',
        '.nav-drawer',
        '.nav-menu-wrapper',
        '.site-header__drawer',
        '#mobile-menu',
        '#mobile-nav',
        '#mobile-navigation',
        '#offcanvas-menu',
      ].join(',');

      // Overlay / backdrop candidates
      var OVERLAYS = [
        '.mobile-overlay',
        '.nav-overlay',
        '.menu-overlay',
        '.off-canvas-overlay',
        '.mobile-menu-overlay',
        '.ast-mobile-popup-overlay',
        '.overlay--menu',
        '#mobile-overlay',
        '#nav-overlay',
      ].join(',');

      // Classes that signal "menu is open" on <body> or <html>
      var OPEN_CLASSES = [
        'menu-open',
        'mobile-menu-open',
        'mobile-nav-open',
        'nav-open',
        'mobile-menu-active',
        'ast-mobile-popup-active',
        'off-canvas-open',
        'menu-is-open',
        'mobile-open',
        'nav-is-open',
      ];

      /* ─── Close function ───────────────────────────────────────────────── */

      function closeMenu() {
        // 1. Strip open classes from <body> and <html>
        OPEN_CLASSES.forEach(function (cls) {
          document.body.classList.remove(cls);
          document.documentElement.classList.remove(cls);
        });

        // 2. Hide panels
        var panels = document.querySelectorAll(PANELS);
        panels.forEach(function (el) {
          el.classList.remove('open', 'is-open', 'active', 'is-active', 'visible', 'show', 'toggled');
          el.setAttribute('aria-hidden', 'true');
          el.removeAttribute('style'); // clear any inline display:block etc.
        });

        // 3. Hide overlays
        var overlays = document.querySelectorAll(OVERLAYS);
        overlays.forEach(function (el) {
          el.classList.remove('open', 'is-open', 'active', 'visible', 'show');
        });

        // 4. Reset hamburger toggle buttons
        var toggles = document.querySelectorAll(
          '.menu-toggle, .hamburger, .mobile-toggle, ' +
          '[aria-controls*="menu"], [aria-controls*="nav"], ' +
          '[aria-expanded="true"]'
        );
        toggles.forEach(function (el) {
          el.setAttribute('aria-expanded', 'false');
          el.classList.remove('is-active', 'open', 'active', 'toggled');
        });

        // 5. Restore body scroll (some themes lock scroll when menu opens)
        document.body.style.overflow = '';
        document.documentElement.style.overflow = '';
      }

      /* ─── Event delegation ─────────────────────────────────────────────── */

      document.addEventListener('click', function (e) {
        var target = e.target;

        // Walk up the DOM from the click target
        while (target && target !== document.body) {
          // Click on a close button
          if (target.matches && target.matches(CLOSE_BTN)) {
            e.preventDefault();
            e.stopPropagation();
            closeMenu();
            return;
          }
          // Click on the backdrop/overlay
          if (target.matches && target.matches(OVERLAYS)) {
            closeMenu();
            return;
          }
          target = target.parentElement;
        }
      }, true); // capture phase so it fires before theme JS can stopPropagation

      // Escape key
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
          closeMenu();
        }
      });

      /* ─── Auto-wire after menu opens ───────────────────────────────────── */
      // Some themes add the close button to the DOM dynamically.
      // MutationObserver watches for it so we can attach a direct listener too.

      if ('MutationObserver' in window) {
        var observer = new MutationObserver(function (mutations) {
          mutations.forEach(function (m) {
            m.addedNodes.forEach(function (node) {
              if (node.nodeType !== 1) return;
              var btn = node.matches && node.matches(CLOSE_BTN)
                ? node
                : node.querySelector && node.querySelector(CLOSE_BTN);
              if (btn) {
                btn.addEventListener('click', function (e) {
                  e.preventDefault();
                  closeMenu();
                });
              }
            });
          });
        });
        observer.observe(document.body, { childList: true, subtree: true });
      }

    })();
    </script>
    <?php
}, 99);
