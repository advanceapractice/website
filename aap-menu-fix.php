<?php
/**
 * Plugin Name: AAP Mobile Menu Fix v2
 * Description: Position-based close button detection — works regardless of theme class names
 */
add_action( 'wp_footer', function () {
    ?>
    <script id="aap-menu-fix-v2">
    (function () {
        var bodyClassAtStart = document.body.className;

        /* ── Force-close everything ───────────────────────────────── */
        function closeAll() {
            // Remove any body/html classes added after page load
            var was = (bodyClassAtStart || '').split(/\s+/);
            document.body.className.split(/\s+/).forEach(function (c) {
                if (c && was.indexOf(c) < 0) document.body.classList.remove(c);
            });
            document.documentElement.className.split(/\s+/).forEach(function (c) {
                if (c && was.indexOf(c) < 0) document.documentElement.classList.remove(c);
            });

            // Strip open/active/show classes from any positioned menu-like panel
            document.querySelectorAll(
                'nav, [class*="mobile"], [class*="menu"], [class*="drawer"], ' +
                '[id*="menu"], [id*="nav"], [id*="popup"]'
            ).forEach(function (el) {
                var s = window.getComputedStyle(el);
                if (s.position !== 'static' && el.offsetWidth > 80) {
                    el.classList.remove(
                        'open','is-open','active','is-active',
                        'show','visible','toggled','expanded','opened'
                    );
                    el.setAttribute('aria-hidden', 'true');
                }
            });

            // Unlock scroll
            document.body.style.overflow = '';
            document.documentElement.style.overflow = '';
            document.body.style.height = '';
        }

        /* ── Wire close buttons by position, not class name ────────── */
        var wired = new WeakSet ? new WeakSet() : { has: function(){return false;}, add: function(){} };

        function wirePanelCloseButtons(panel) {
            var pr = panel.getBoundingClientRect();
            // Target small elements in the top 140px of the panel
            panel.querySelectorAll('button, a, span, i, svg, div, [role="button"]')
                .forEach(function (el) {
                    try { if (wired.has(el)) return; } catch(e) {}
                    var er = el.getBoundingClientRect();
                    var inTopZone   = er.top  < pr.top  + 140;
                    var isSmall     = el.offsetWidth < 160 && el.offsetHeight < 100;
                    var notMainLink = (el.tagName !== 'A') || !el.href || el.href === '#';
                    if (inTopZone && isSmall && notMainLink) {
                        try { wired.add(el); } catch(e) {}
                        el.addEventListener('click', function (e) {
                            e.stopPropagation();
                            closeAll();
                        }, true);
                    }
                });
        }

        /* ── Scan for visible panels whenever DOM changes ───────────── */
        function scanPanels() {
            document.querySelectorAll(
                'nav, [class*="mobile"], [class*="menu"], [class*="drawer"], ' +
                '[class*="popup"], [id*="menu"], [id*="nav"]'
            ).forEach(function (el) {
                var s = window.getComputedStyle(el);
                if (
                    (s.position === 'fixed' || s.position === 'absolute') &&
                    el.offsetWidth  > 100 &&
                    el.offsetHeight > 150 &&
                    s.display !== 'none' &&
                    s.visibility !== 'hidden' &&
                    parseFloat(s.opacity) > 0.1
                ) {
                    wirePanelCloseButtons(el);
                }
            });
        }

        new MutationObserver(function () { scanPanels(); })
            .observe(document.documentElement, {
                subtree: true,
                childList: true,
                attributes: true,
                attributeFilter: ['class', 'style', 'aria-hidden']
            });

        /* ── Overlay / backdrop tap closes menu ─────────────────────── */
        document.addEventListener('click', function (e) {
            var el = e.target;
            var s  = window.getComputedStyle(el);
            // Large full-screen overlay behind the panel
            if (
                (s.position === 'fixed' || s.position === 'absolute') &&
                el.offsetWidth  > window.innerWidth  * 0.4 &&
                el.offsetHeight > window.innerHeight * 0.5
            ) {
                closeAll();
            }
        }, false);

        /* ── Escape key ──────────────────────────────────────────────── */
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeAll();
        });

        // Initial scan after page ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', scanPanels);
        } else {
            scanPanels();
        }
    })();
    </script>
    <?php
}, 99 );
