# Organic Traffic Recovery Plan — advanceapractice.com

Prepared 2026-09-14. Research by four parallel analysis agents plus a repository forensics pass.

---

## ⚠️ Read these three things first

**1. Production credentials are public.** This repository is **public**, and its git history still
contains plaintext Hostinger FTP and WordPress admin credentials committed on 2026-05-05 and
reachable from branch `claude/fix-layout-issues-JVbx3`. **Rotate them today.** See
`01-phase-0-security.md`.

**2. This repository is not the website.** The live `advanceapractice.com` is **WordPress on
Hostinger**. This repo is a scratch area that was used to author CSS and PHP snippets pushed over
FTP. *Editing files here does not change the live site and will not affect traffic.* Every
recommendation in this plan is to be executed in WordPress.

**3. The `main` branch contains a different company's website.** It holds a "Northstar Studio"
web-design-agency template with a canonical tag pointing at `northstarstudio.com`, a fabricated
Austin TX address, a fake phone number, invented case-study results, and a fake testimonial.
GitHub Pages is off, so nothing is publicly served — but **none of that content may ever be
published under the AdvanceAPractice brand.** The real AdvanceAPractice content is stranded on the
unmerged branch `claude/fix-site-menu-issues-rOPWx`.

---

## Read in this order

| # | Document | Purpose |
|---|---|---|
| 00 | [`00-EXECUTIVE-SUMMARY.md`](00-EXECUTIVE-SUMMARY.md) | **Start here.** Diagnosis, evidence grading, strategy |
| 01 | [`01-phase-0-security.md`](01-phase-0-security.md) | **Today.** Rotate credentials, rule out compromise |
| 06 | [`06-diagnostic-playbook.md`](06-diagnostic-playbook.md) | **Week 1.** Confirm the cause in Search Console before spending money |
| 02 | [`02-phase-1-triage.md`](02-phase-1-triage.md) | Days 1–30. Measurement truth + mechanical fixes |
| 03 | [`03-phase-2-consolidation.md`](03-phase-2-consolidation.md) | Days 30–90. The programmatic prune |
| 04 | [`04-phase-3-authority.md`](04-phase-3-authority.md) | Weeks 1–24, parallel. Entity, trust, earned media |
| 05 | [`05-phase-4-content.md`](05-phase-4-content.md) | Days 30–365. The content offensive |
| 07 | [`07-measurement.md`](07-measurement.md) | KPIs, cadence, decision gates, honest targets |

`evidence/` holds the five underlying research reports, unedited.

---

## The diagnosis in four sentences

About 84% of the site's indexed pages are templated state-level pages that ranked on content
relevance alone, with essentially no independent authority beneath them. When Google recalibrated
relevance — most likely the **March 2026 core update** — those pages had no floor and fell as a
block. Underneath that sit confirmed mechanical defects: three duplicate URLs splitting the main
money page, a resources hub serving a JavaScript error state that Google indexed, and a live
indexed page with "DRAFT" in its title selling vinyl stickers. Meanwhile the firm's single
strongest asset — a founder who has actually done thousands of these enrollments — appears nowhere
Google can verify it.

**The site has an internet presence but not an internet reputation.**

---

## Before acting, know what was not verified

This environment's egress proxy blocked all outbound fetching, including `advanceapractice.com`
itself. **The live site was never crawled.** Everything about it is reconstructed from search-index
data (~30 targeted queries) and this repository's git history.

Claims are graded **CONFIRMED / INFERRED / UNVERIFIED** throughout.

> **No page should be deleted or redirected until someone has actually read it.**

To close the gap: allowlist the domain for analysis, or supply a Search Console export and a
Screaming Frog crawl.

---

## The order that matters

1. **Rotate credentials** and rule out a compromise — the only fast, full recovery path.
2. **Confirm the decline is real in clicks**, not impressions — two Google reporting artifacts in
   this window can fake a collapse.
3. **Consolidate and prune before publishing anything new** — pruning first correlates with ~3× the
   recovery rate of adding only.
4. **Build the authority floor** — otherwise the next core update repeats this.
5. **Then** compete, on what a specific payer actually does rather than on what a code means.

**Realistic horizon: 6–18 months, 30–60% partial recovery. Refuse any 90-day guarantee.**
