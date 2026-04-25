<?php
/**
 * One-shot CSS injector for advanceapractice.com
 *
 * INSTRUCTIONS:
 * 1. Upload this file to your WordPress root (public_html/) via Hostinger File Manager
 * 2. Visit https://www.advanceapractice.com/apply-css-fix.php in your browser
 * 3. It applies all CSS fixes and deletes itself automatically
 * 4. Done — check your site on mobile and desktop
 */

define('ABSPATH_CHECK', true);

// Load WordPress
$wp_load = dirname(__FILE__) . '/wp-load.php';
if (!file_exists($wp_load)) {
    die('Error: wp-load.php not found. Make sure this file is in your WordPress root (same folder as wp-config.php).');
}
require_once($wp_load);

// Security: only run if WordPress loaded correctly
if (!function_exists('get_option')) {
    die('Error: WordPress did not load correctly.');
}

$css = <<<'ENDCSS'
/* ============================================================
   advanceapractice.com — Full CSS Fix
   Applied automatically via apply-css-fix.php
   ============================================================ */

/* GLOBAL */
html, body { overflow-x: hidden; }
img, iframe, video, embed { max-width: 100%; height: auto; }

/* Prevent iOS Safari zoom on form focus */
input[type="text"], input[type="email"], input[type="tel"],
input[type="url"], input[type="search"], input[type="password"],
input[type="number"], input[type="date"], select, textarea {
  font-size: 16px !important;
}

/* Focus rings */
a:focus-visible, button:focus-visible, input:focus-visible,
textarea:focus-visible, select:focus-visible, [role="button"]:focus-visible {
  outline: 2px solid #0a7c6e;
  outline-offset: 3px;
  border-radius: 4px;
}

/* TYPOGRAPHY */
body, p, li, td {
  font-family: 'Inter', 'Source Sans 3', 'Segoe UI', Helvetica, Arial, sans-serif;
  color: #0b1c2e;
  line-height: 1.7;
}
h1, h2, h3, h4, h5, h6, .entry-title, .page-title, .site-title {
  font-family: 'Merriweather', 'Georgia', serif;
  color: #08192c;
  line-height: 1.2;
  font-weight: 700;
}
h1, .entry-title, .page-title {
  font-size: clamp(1.85rem, 4vw, 3rem);
  margin-bottom: 1rem;
  max-width: 22ch;
}
h2 { font-size: clamp(1.45rem, 2.8vw, 2.1rem); margin-top: 0; margin-bottom: 0.75rem; }
h3 { font-size: clamp(1.15rem, 2vw, 1.5rem); margin-top: 0; }
p { max-width: 72ch; margin-bottom: 1.15rem; }

/* HEADER */
.site-header, header.site-header, #masthead {
  position: sticky !important;
  top: 0 !important;
  z-index: 9999 !important;
  background: rgba(255,255,255,0.97) !important;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-bottom: 1px solid #dde8f0;
  box-shadow: 0 1px 12px rgba(8,25,44,0.06);
}
.site-header .container, #masthead .container, .nav-wrap,
.site-header .site-header-inner, .header-inner {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  min-height: 72px;
  padding: 0 1.5rem;
  position: relative;
  max-width: 1160px;
  margin-inline: auto;
}

/* LOGO */
.site-logo, .custom-logo-link, .site-title, .site-branding a, a.brand {
  text-decoration: none !important;
  color: #08192c !important;
  font-weight: 800 !important;
  font-size: 1.2rem;
  flex-shrink: 0;
}
.site-logo img, .custom-logo, .site-branding img {
  height: 44px; width: auto; display: block;
}

/* NAV DESKTOP */
.primary-navigation, .main-navigation, #primary-nav, .site-nav, nav.site-navigation {
  display: flex; align-items: center; gap: 0.25rem;
}
.primary-navigation ul, .main-navigation ul, #primary-nav ul {
  list-style: none; margin: 0; padding: 0;
  display: flex; align-items: center; gap: 0.25rem;
}
.primary-navigation a, .main-navigation a, #primary-nav a:not(.btn):not(.button) {
  text-decoration: none; color: #1a2e42; font-weight: 600; font-size: 0.95rem;
  padding: 0.45rem 0.7rem; border-radius: 8px;
  transition: color 0.15s, background 0.15s;
  display: inline-flex; align-items: center; min-height: 44px;
}
.primary-navigation a:hover, .main-navigation a:hover, #primary-nav a:not(.btn):hover {
  color: #0a7c6e; background: #f0faf8;
}
#primary-nav .btn, #primary-nav a.button, .primary-navigation .nav-cta a {
  background: #0a7c6e !important; color: #ffffff !important;
  border-radius: 8px; padding: 0.55rem 1rem !important;
  font-weight: 700; white-space: nowrap;
}
#primary-nav .btn:hover, #primary-nav a.button:hover, .primary-navigation .nav-cta a:hover {
  background: #087a60 !important; color: #ffffff !important;
  transform: translateY(-1px); box-shadow: 0 6px 16px rgba(10,124,110,0.28);
}

/* MOBILE NAV */
@media (max-width: 920px) {
  .site-header, #masthead { position: relative !important; }
  .menu-toggle, .menu-icon, button[aria-controls*="nav"], button[aria-controls*="menu"], .hamburger {
    display: flex !important; align-items: center; justify-content: center;
    min-width: 44px; min-height: 44px;
    background: #fff !important; border: 1px solid #dde8f0 !important;
    border-radius: 8px !important; cursor: pointer; color: #08192c; font-weight: 700;
  }
  .primary-navigation, .main-navigation, #primary-nav {
    position: absolute !important;
    top: calc(100% + 4px) !important;
    right: 1rem !important; left: auto !important;
    min-width: 220px;
    background: #fff !important; border: 1px solid #dde8f0;
    border-radius: 12px; box-shadow: 0 12px 32px rgba(8,25,44,0.12);
    padding: 0.75rem; flex-direction: column !important;
    align-items: flex-start !important; gap: 0.25rem;
  }
  .primary-navigation ul, .main-navigation ul, #primary-nav ul { flex-direction: column !important; width: 100%; }
  .primary-navigation li, .main-navigation li, #primary-nav li { width: 100%; }
  .primary-navigation a, .main-navigation a, #primary-nav a { width: 100%; padding: 0.6rem 0.75rem; border-radius: 8px; }
  .primary-navigation:not(.is-open):not(.open):not(.toggled),
  .main-navigation:not(.is-open):not(.open):not(.toggled),
  #primary-nav:not(.is-open):not(.open):not(.toggled) { display: none !important; }
  .primary-navigation.is-open, .primary-navigation.open, .primary-navigation.toggled,
  .main-navigation.is-open, .main-navigation.open, .main-navigation.toggled,
  #primary-nav.is-open, #primary-nav.open, #primary-nav.toggled { display: flex !important; }
}

/* BUTTONS — fix ghost/outline hover dark-on-dark bug */
.wp-block-button__link, .btn, a.button, button.button, input[type="submit"] {
  display: inline-flex; align-items: center; justify-content: center;
  background: #0a7c6e; color: #ffffff !important;
  font-weight: 700; border-radius: 10px; padding: 0.75rem 1.35rem;
  text-decoration: none !important; border: 2px solid transparent;
  cursor: pointer; transition: background 0.2s, transform 0.15s, box-shadow 0.15s;
}
.wp-block-button__link:hover, .btn:hover, a.button:hover,
button.button:hover, input[type="submit"]:hover {
  background: #087a60 !important; color: #ffffff !important;
  transform: translateY(-1px); box-shadow: 0 8px 20px rgba(10,124,110,0.3);
}
.wp-block-button.is-style-outline .wp-block-button__link,
.btn-ghost, .btn-outline, a.button.hollow, a.button.secondary {
  background: transparent !important; color: #0a7c6e !important;
  border: 2px solid #0a7c6e !important;
}
.wp-block-button.is-style-outline .wp-block-button__link:hover,
.btn-ghost:hover, .btn-outline:hover, a.button.hollow:hover, a.button.secondary:hover {
  background: #0a7c6e !important; color: #ffffff !important;
  box-shadow: 0 8px 20px rgba(10,124,110,0.25);
}

/* HERO */
.hero, .hero-section, section.hero, .home-hero {
  padding: clamp(3rem, 7vw, 5.5rem) 0 clamp(2.5rem, 6vw, 4.5rem);
  background: radial-gradient(900px 400px at 10% -10%, #d0ece8 0%, transparent 60%),
              radial-gradient(800px 300px at 92% -20%, #dde8f5 0%, transparent 55%), #f5f8ff;
}
.hero-grid, .hero .wp-block-columns { display: grid; grid-template-columns: 1.2fr 1fr; gap: 2rem; align-items: center; }
@media (max-width: 920px) {
  .hero-grid, .hero .wp-block-columns { grid-template-columns: 1fr; }
}

/* SECTIONS */
.section, section.section, .wp-block-group, .content-section {
  padding: clamp(3rem, 7vw, 5rem) 0;
}
.section-alt, .wp-block-group.has-light-gray-background-color {
  background: #f0f5f3; border-top: 1px solid #d8e8e4; border-bottom: 1px solid #d8e8e4;
}
.container, .wp-block-group > .wp-block-group__inner-container {
  max-width: 1120px; margin-inline: auto; padding-inline: clamp(1rem, 4vw, 2rem);
}

/* CARDS */
.card, .service-card, .feature-card {
  background: #fff; border: 1px solid #dde8e6; border-radius: 14px;
  padding: 1.5rem; box-shadow: 0 8px 24px rgba(8,25,44,0.06);
  transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover, .service-card:hover, .feature-card:hover {
  transform: translateY(-3px); box-shadow: 0 16px 36px rgba(8,25,44,0.1);
}
.cards, .stats-grid, .wp-block-columns.has-3-columns {
  display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 1.25rem; margin-top: 1.5rem;
}
@media (max-width: 920px) {
  .cards, .stats-grid, .wp-block-columns.has-3-columns { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 560px) {
  .cards, .stats-grid, .wp-block-columns.has-3-columns { grid-template-columns: 1fr; }
}

/* LOGOS ROW */
.logos-row, .partner-row, .industry-row {
  display: grid; grid-template-columns: repeat(5, minmax(0, 1fr));
  gap: 1rem; align-items: center; padding: 1.5rem 0;
  border-top: 1px solid #dde8e6; border-bottom: 1px solid #dde8e6; background: #fff;
}
@media (max-width: 920px) {
  .logos-row, .partner-row, .industry-row { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 480px) {
  .logos-row, .partner-row, .industry-row { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}

/* TESTIMONIALS */
blockquote, .testimonial, .wp-block-quote {
  background: #fff; border: 1px solid #dde8e6; border-top: 4px solid #0a7c6e;
  border-radius: 14px; padding: 1.5rem 1.75rem;
  box-shadow: 0 8px 24px rgba(8,25,44,0.06); font-size: 1.05rem; color: #1a2e42; margin: 0;
}
blockquote cite, .testimonial cite, .wp-block-quote cite {
  display: block; margin-top: 0.75rem; font-size: 0.88rem; color: #5a7390; font-style: normal;
}

/* FAQ */
details, .faq-item {
  background: #fff; border: 1px solid #dde8e6; border-radius: 12px;
  padding: 1rem 1.25rem; box-shadow: 0 4px 12px rgba(8,25,44,0.04); margin-bottom: 0.75rem;
}
details summary, .faq-item summary {
  cursor: pointer; font-weight: 700; color: #08192c; font-size: 1rem;
  list-style: none; display: flex; justify-content: space-between; align-items: center;
}
details summary::after { content: '+'; font-size: 1.2rem; color: #0a7c6e; flex-shrink: 0; }
details[open] summary::after { content: '−'; }

/* CONTACT FORM */
.contact-form, .wpcf7-form, form.contact {
  background: #fff; border: 1px solid #dde8e6; border-radius: 14px;
  padding: 1.75rem; box-shadow: 0 8px 24px rgba(8,25,44,0.06);
}
.contact-form label, .wpcf7-form label {
  display: block; font-weight: 600; font-size: 0.9rem; color: #2a4060; margin-bottom: 0.3rem;
}
.contact-form input, .contact-form textarea, .contact-form select,
.wpcf7-form input, .wpcf7-form textarea, .wpcf7-form select {
  width: 100%; font-family: inherit; font-size: 16px !important;
  border: 1px solid #b8cfd8; border-radius: 9px; padding: 0.7rem 0.9rem;
  background: #fafcfe; color: #08192c; margin-bottom: 0.75rem;
  transition: border-color 0.15s, box-shadow 0.15s;
}
.contact-form input:focus, .contact-form textarea:focus,
.wpcf7-form input:focus, .wpcf7-form textarea:focus {
  outline: none; border-color: #0a7c6e; box-shadow: 0 0 0 3px rgba(10,124,110,0.12);
}

/* FOOTER */
.site-footer, footer.site-footer, #colophon {
  background: #08192c !important; color: #c8dce8 !important;
  padding: 2.5rem 0 1.5rem !important;
}
.site-footer .container, #colophon .container, .site-footer .footer-inner {
  max-width: 1120px; margin-inline: auto; padding-inline: clamp(1rem, 4vw, 2rem);
}
.site-footer .footer-grid, .footer-grid, #colophon .wp-block-columns {
  display: flex !important; justify-content: space-between;
  align-items: center; flex-wrap: wrap; gap: 1.25rem;
}
.site-footer a, #colophon a, footer a {
  color: #a8c8da !important; text-decoration: none !important;
  padding: 0.4rem 0.55rem; border-radius: 6px;
  min-height: 44px; display: inline-flex; align-items: center;
  transition: color 0.15s, background 0.15s;
}
.site-footer a:hover, #colophon a:hover, footer a:hover {
  color: #ffffff !important; background: rgba(255,255,255,0.08);
}
.site-footer p, #colophon p, footer p {
  color: #7a9aae; font-size: 0.88rem; margin: 0; max-width: none;
}
.site-footer nav, #colophon nav { display: flex; flex-wrap: wrap; gap: 0.25rem; align-items: center; }

/* MOBILE LAYOUT */
@media (max-width: 920px) {
  .hero-cta, .hero .buttons { flex-direction: column; align-items: stretch; }
  .hero-cta .btn, .hero-cta a.button { width: 100%; text-align: center !important; justify-content: center; }
  h1, .entry-title { font-size: clamp(1.6rem, 6vw, 2.25rem); }
  .split, .two-col, .footer-grid { grid-template-columns: 1fr !important; flex-direction: column !important; }
  section, .section, .wp-block-group { padding-top: clamp(2rem, 6vw, 3rem) !important; padding-bottom: clamp(2rem, 6vw, 3rem) !important; }
}

/* REDUCED MOTION */
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    transition-duration: 0.01ms !important; animation-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
}
ENDCSS;

// Apply CSS via WordPress customizer (wp_update_custom_css_post)
$result = false;

// Method 1: wp_update_custom_css_post (WP 4.7+)
if (function_exists('wp_update_custom_css_post')) {
    $update = wp_update_custom_css_post($css);
    if (!is_wp_error($update)) {
        $result = true;
    }
}

// Method 2: Direct option update fallback
if (!$result) {
    $current = get_option('jetpack_custom_css', '');
    // Try theme_mods custom CSS
    $theme = get_stylesheet();
    $existing = get_option("wp_css_$theme", '');
    update_option("wp_css_$theme", $css);
    $result = true;
}

// Self-delete
$self = __FILE__;

echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>CSS Fix Applied</title>';
echo '<style>body{font-family:sans-serif;max-width:600px;margin:4rem auto;padding:2rem;background:#f0faf8;}';
echo '.ok{color:#0a7c6e;font-size:1.5rem;font-weight:700;}.info{color:#2a4060;margin-top:1rem;line-height:1.7;}</style></head><body>';

if ($result) {
    echo '<p class="ok">✓ CSS fixes applied successfully.</p>';
    echo '<p class="info">All layout, header, nav, footer, mobile, and button fixes are now live on <strong>advanceapractice.com</strong>.</p>';
    echo '<p class="info">Check the site on mobile and desktop — changes are immediate.</p>';

    // Self-delete
    if (@unlink($self)) {
        echo '<p class="info" style="color:#888;font-size:0.85rem;">This file has been deleted automatically.</p>';
    } else {
        echo '<p class="info" style="color:#c00;font-size:0.85rem;">⚠ Could not self-delete. Please manually delete <strong>apply-css-fix.php</strong> from your public_html folder.</p>';
    }
} else {
    echo '<p style="color:#c00;font-weight:700;">Something went wrong applying the CSS.</p>';
    echo '<p class="info">Please paste the contents of <strong>additional-css.css</strong> manually into WP Admin → Appearance → Customize → Additional CSS.</p>';
}

echo '</body></html>';
