<?php
/**
 * Plugin Name: AAP Mobile Menu Fix v3
 * Description: Tap-zone close — works regardless of theme class names or icon type
 */
add_action( 'wp_footer', function () { ?>
<script id="aap-menu-fix-v3">
(function () {

  /* ── Snapshot body classes at page load ─────────────────────────── */
  var startClasses = {};
  [].forEach.call(document.body.classList, function(c){ startClasses[c]=1; });

  /* ── Force-close: remove added classes + unlock scroll ──────────── */
  function closeMenu() {
    // Remove any class added to body after page load
    [].forEach.call(document.body.classList.slice ? document.body.classList :
      Array.from(document.body.classList), function(c){
      if (!startClasses[c]) document.body.classList.remove(c);
    });
    // Same for <html>
    document.documentElement.classList.remove(
      'menu-open','nav-open','mobile-open','is-menu-open',
      'mobile-menu-open','mobile-nav-open','menu-is-open'
    );
    // Strip state classes from every positioned element
    document.querySelectorAll('*').forEach(function(el){
      var s = window.getComputedStyle(el);
      if (s.position === 'static') return;
      el.classList.remove(
        'open','is-open','active','is-active','show',
        'visible','toggled','expanded','opened','in'
      );
      el.setAttribute('aria-hidden','true');
    });
    document.body.style.overflow = '';
    document.documentElement.style.overflow = '';
    document.body.style.position = '';
  }

  /* ── Find panels: visible, large, fixed/absolute ────────────────── */
  function getOpenPanels() {
    var panels = [];
    document.querySelectorAll('*').forEach(function(el){
      var s = window.getComputedStyle(el);
      if (
        (s.position === 'fixed' || s.position === 'absolute') &&
        el.offsetWidth  > window.innerWidth  * 0.25 &&
        el.offsetHeight > window.innerHeight * 0.35 &&
        s.display !== 'none' &&
        s.visibility !== 'hidden' &&
        parseFloat(s.opacity || '1') > 0.1
      ) panels.push(el);
    });
    return panels;
  }

  /* ── Attach top-zone tap handler to each open panel ─────────────── */
  var wired = [];
  function wirePanels() {
    getOpenPanels().forEach(function(panel){
      if (wired.indexOf(panel) > -1) return;
      wired.push(panel);

      panel.addEventListener('click', function(e){
        var r   = panel.getBoundingClientRect();
        var top = r.top + Math.min(160, r.height * 0.2); // top 20% or 160px

        // Tap in the top zone of the panel
        if (e.clientY <= top) {
          // Don't block nav links inside this zone
          var node = e.target;
          while (node && node !== panel) {
            if (node.tagName === 'A' && node.href &&
                node.href.replace(/#$/,'') !== window.location.href.replace(/#$/,'')) return;
            node = node.parentElement;
          }
          e.stopPropagation();
          closeMenu();
        }
      }, true);

      // Also wire any overlay/backdrop sibling
      var parent = panel.parentElement;
      if (parent) {
        [].forEach.call(parent.children, function(sib){
          if (sib === panel || wired.indexOf(sib) > -1) return;
          var ss = window.getComputedStyle(sib);
          if (
            (ss.position === 'fixed' || ss.position === 'absolute') &&
            sib.offsetWidth > window.innerWidth * 0.3
          ) {
            wired.push(sib);
            sib.addEventListener('click', function(){ closeMenu(); }, true);
          }
        });
      }
    });
  }

  /* ── Watch DOM for menu opening ──────────────────────────────────── */
  new MutationObserver(wirePanels).observe(document.documentElement, {
    subtree: true, childList: true,
    attributes: true, attributeFilter: ['class','style']
  });

  /* ── Escape key ──────────────────────────────────────────────────── */
  document.addEventListener('keydown', function(e){
    if (e.key === 'Escape') closeMenu();
  });

  /* ── Initial scan ────────────────────────────────────────────────── */
  wirePanels();

})();
</script>
<?php }, 99 );
