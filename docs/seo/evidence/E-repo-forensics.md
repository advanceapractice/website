# Report E — Repository & Deployment Forensics
Analyst: primary session · Date: 2026-09-14
Scope: `advanceapractice/website` (GitHub) and its relationship to the live site.

## E1. CONFIRMED: This repo is NOT the live website

The live `advanceapractice.com` is a **WordPress site hosted on Hostinger**. Evidence, all
from this repo's own git history:

| Evidence | Source commit |
|---|---|
| GitHub Actions workflow named "Deploy Mobile Menu Fix to **Hostinger**", FTP-putting a PHP file to `public_html/wp-content/mu-plugins/` | `f2fb2bd` |
| Playwright workflow logging into `https://www.advanceapractice.com/wp-login.php` and editing `wp-admin/theme-editor.php?file=functions.php` | `1abf695` |
| "Re-inject mobile menu fix into **functions.php**" | `5a116a6` |
| `aap-menu-fix.php` with a `Plugin Name:` header (a WordPress mu-plugin) | branch `claude/fix-layout-issues-JVbx3` |
| `wordpress-additional-css.css`, `apply-css-fix.php` | same branch |

**Implication:** the static HTML/CSS/JS in this repo has never been the deployed artifact.
It is a scratch/staging area used to author CSS and PHP snippets that were then pushed into
WordPress by FTP or via the WP theme editor. **Editing files in this repo will not change
advanceapractice.com and will not affect organic traffic.**

GitHub Pages is **not** enabled on the repo (`has_pages: false`), so the placeholder content
described in E2 is not being served publicly from GitHub. It is not currently competing with
or diluting the live domain.

## E2. CONFIRMED: `main` holds the wrong company's website

`main` (commit `f455f00`, "Restore site to last known working version") contains a generic
web-design-agency template for a fictional **"Northstar Studio"**:

- `<title>Northstar Studio | Web Design & SEO Growth Partner</title>`
- `<link rel="canonical" href="https://www.northstarstudio.com/">`
- `sitemap.xml` and `robots.txt` both point at `https://www.northstarstudio.com/`
- JSON-LD `ProfessionalService` with a fabricated Austin TX address, phone `+1-555-013-0088`,
  and `sameAs` links to non-existent Northstar social profiles
- Fabricated performance claims ("+214% organic appointment requests", "58 keywords moved
  into top-3 positions") and a fabricated testimonial

This originated in PR #1 (a Codex-generated placeholder) and was restored over the real
AdvanceAPractice content on 2026-04-19.

**Risk if ever deployed:** a cross-domain canonical tag pointing at `northstarstudio.com`
instructs Google to drop the hosting domain from the index entirely. This has *not* happened
(Pages is off), but the repo is one "enable Pages" click away from that outcome. The
fabricated address, phone, testimonial and results claims must never be published under the
AdvanceAPractice brand.

## E3. CONFIRMED: real AdvanceAPractice content is stranded on an unmerged branch

Branch `claude/fix-site-menu-issues-rOPWx` (PR #3, **merged then reverted**) holds a genuine
5-page AdvanceAPractice static site: `index.html`, `mental-health-billing.html`,
`medical-billing.html`, `credentialing.html`, `solutions-by-stage.html`.

Content depth is thin by current ranking standards:

| Page | Word count |
|---|---|
| index.html | 746 |
| solutions-by-stage.html | 417 |
| mental-health-billing.html | 398 |
| medical-billing.html | 381 |
| credentialing.html | 377 |

For competitive commercial healthcare-billing queries, ~380-word service pages are well below
what ranks. This content is a useful *messaging* reference for the WordPress rebuild but is
not itself a ranking asset, and its URLs (`.html`, no trailing slash) do not match the live
site's WordPress URL scheme (`/mental-health-billing/`).

## E4. CONFIRMED — SECURITY INCIDENT: production credentials exposed in a public repo

`advanceapractice/website` is **public** (`"visibility": "public"`). Its git history contains
**literal, plaintext production credentials** — not GitHub Secrets references:

| Credential | Where | Still reachable on remote? |
|---|---|---|
| Hostinger FTP host IP, username, 20-char password | `.github/workflows/deploy-menu-fix.yml` @ `f2fb2bd`, `b411688` | **YES** — branch `claude/fix-layout-issues-JVbx3` |
| WordPress admin username + 24-char password for `advanceapractice.com/wp-login.php` | `.github/workflows/inject-via-wp-admin.yml` @ `1abf695`, `3ac6996`, `5a116a6` | **YES** — same branch |

Commit `767fdd1` ("Remove deployment workflows and credentials") deleted the *files* but git
history retains the blobs, and the branch holding them was pushed to a public repository.
These have been publicly readable since **2026-05-05 — roughly four months.**

Together these grant **full takeover** of the live site: filesystem write access via FTP and
administrator access via WP admin.

### Why this belongs in a traffic report, not just a security report

Compromised WordPress admin/FTP access is the single most common vector for **SEO spam
injection** — injected cloaked links, spam doorway pages, redirect scripts, and pharma/casino
content served only to Googlebot. That produces exactly the symptom reported here: a **major
organic traffic decrease**, and often a Google Search Console **"Hacked content" manual
action** or security notice.

This is therefore a **leading hypothesis for the traffic loss itself**, and it is cheap to
confirm or eliminate. It must be checked before spending effort on content strategy.

**Required actions, in order, before anything else:**
1. Rotate the Hostinger account password, the FTP/SFTP password, and the WordPress admin
   password. Rotate, do not just delete the branch — deletion does not invalidate a credential
   that has been public for four months.
2. Audit all WordPress users for unrecognized administrator accounts.
3. Check Search Console → **Security & Manual Actions** for a hacked-content notice.
4. Scan the WordPress install for injected content (see plan §1).
5. Only then delete branch `claude/fix-layout-issues-JVbx3` and purge the history.

Note: deleting the branch is *hygiene*, not remediation. GitHub can still serve unreachable
blobs by SHA, and anyone may already have copied them.

## E5. Repo history: a pattern worth naming

The commit log shows an April–July 2026 cycle of front-end firefighting — mobile-menu fixes,
"blank/freezing page" fixes, CSS injection scripts, and a full revert that swapped the real
company's content for a placeholder template. Two consequences matter for SEO:

- **Production was edited directly via the WP theme editor and FTP**, with no version control
  of the actual live artifact. There is no reliable record of what the live site's templates
  currently contain.
- **A full content revert shipped to production on 2026-04-19**, per commit `f455f00`'s own
  message ("The refinement work introduced freezing/blank-page regressions on production").
  Any sitewide template change of that kind is a candidate inflection point for a traffic
  drop and should be correlated against the Search Console performance timeline.

## E6. Verification gaps (important)

- **I could not fetch `advanceapractice.com`.** The organization's egress proxy returns 403
  for that host. Per environment policy I did not route around it via mirrors or caches.
  Everything stated here about the *live* site is inferred from git history and from
  search-index data, not from crawling the site.
- Therefore the live site's current HTML, templates, plugin set, Core Web Vitals, robots.txt,
  sitemap, canonical tags, and hreflang are **unverified**.
- To close this gap, either (a) allowlist `advanceapractice.com` for this session, or
  (b) supply a Search Console export, a Screaming Frog crawl, or view-source dumps.
