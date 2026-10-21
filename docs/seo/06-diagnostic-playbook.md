# Diagnostic Playbook — confirm the cause before spending money
**Owner: whoever has Search Console access. Time: one focused afternoon.**

This analysis could not crawl the live site or read Search Console. **This playbook closes that
gap.** Run it in order — each step either eliminates a cause permanently or routes you to the next.

---

## Step 0 — Establish a valid measurement baseline
**Do this first. Nothing else is valid without it.**

Two Google-side reporting artifacts sit inside the window:

| Artifact | Dates | Effect |
|---|---|---|
| GSC impressions logging error | Inflated 2025-05-13 → 2026-04-27 (disclosed 2026-04-03) | Impressions over-reported ~50 weeks; the fix cut reported impressions 30–40% overnight. **Clicks unaffected.** CTR and position distorted throughout. |
| `&num=100` removal | ~2025-09-12 | ~88% of properties lost reported impressions; position appeared to improve. **Clicks unaffected.** |

> **Operating rule for everything below: clicks are the primary metric. Distrust impressions, CTR,
> and average position inside 2025-05-13 → 2026-04-27.**

**🚩 Smoking gun for "there was never a real decline":** clicks flat or gently trending while
impressions show a cliff at ~2025-09-12 and/or ~2026-04-27. **If you see that, stop.** You have a
reporting artifact, not a traffic problem.

## Step 1 — Manual action check
**60 seconds. Binary. Free.**

Search Console → **Manual actions**. Then → **Security issues**.

- **🚩 Any entry at all is the answer.** Most plausible here: *"Thin content with little or no
  added value"*, *"Pure spam"*, or *"Hacked content"*. If it names the
  `/credentialing-and-payer-enrollment-*` pattern, that is conclusive.
- **Empty → manual action eliminated permanently. Do not revisit it.**
- Shape check: a manual action is a **vertical cliff on one day matching no published update
  window**. Algorithmic demotions decline across a rollout window instead.

**This is the only step with a fast, near-full recovery path (3–21 day review). That is why it's first.**

## Step 2 — Indexing and technical regression

Search Console → **Pages (Page indexing)**, current vs. pre-decline. Then **Crawl stats**. Then
**Sitemaps**.

Look for, in order:
- **Indexed page count falling** — click into each exclusion reason
- **`Crawled – currently not indexed` rising** — Google fetched the pages and *chose* not to index
- **`Discovered – currently not indexed`** — Google won't even spend crawl budget
- **`Duplicate without user-selected canonical` / `Alternate page with proper canonical`** — the
  classic state-page template outcome: **Google collapsed the state pages into one because it
  judged them the same page.** Given the confirmed duplicate URLs on this site, expect entries here.
- `Excluded by 'noindex'`, `Blocked by robots.txt`, `Soft 404` — deploy accidents

**🚩 Technical regression:** indexed count drops on a **specific deploy date** with a matching spike
in robots/noindex exclusions or 5xx. **Fix it and traffic returns in days-to-weeks.**
*Note: a full content revert shipped to production on 2026-04-19 per this repo's history — check
that date specifically.*

**🚩 Quality-driven deindexing:** the **programmatic URL pattern specifically** migrates into
`Crawled – currently not indexed` while `/about/`, `/contact/`, `/mental-health-billing/` stay
indexed. **That is not a bug. That is Google's quality judgment on the template.** → Phase 2.

## Step 3 — Segment the decline

Search Console → **Performance → Search results**. Use **Compare** mode, not Date range.
Compare **the same calendar period year over year** — YoY neutralizes seasonality; a
preceding-period comparison does not. Then repeat bracketing each update date in Step 4.

Slice and export each:

1. **By Search type** — Web / Image / Video, and **Discover** separately. *If the loss is
   Discover-only, the cause is the February 2026 Discover core update, it does not touch web
   Search, and the rest of this analysis changes.*
2. **By Pages**, grouped: homepage / service pages / `/about/` + `/contact/` / `/resources/` /
   `/portland/` / **the `credentialing-and-payer-enrollment-*` set** / **the `pmhnp-*` set**.
   Chart each group separately.
3. **By Queries** — **brand** (`advance a practice`, `ryan berg`, domain variants) vs **non-brand**,
   via regex filter. **Brand loss = demand/reputation problem. Non-brand loss = ranking or
   SERP-feature problem.** They get opposite treatments.
4. **By Device and Country** — the `&num=100` effect was desktop-skewed.

**🚩 Smoking gun for the programmatic hypothesis:** the state/PMHNP page groups lose **70–95% of
clicks** while homepage, service pages and `/about/` hold roughly steady. **That is a
page-class-specific demotion — a template being judged, not a site being judged.**

**🚩 Worse case:** *everything* falls proportionally, **including brand queries**. That is a
site-wide trust demotion — Mueller's "lost faith" — which is slower and harder to reverse.

## Step 4 — Date-align against the update calendar

Set daily granularity, export, overlay against:

| Update | Window |
|---|---|
| December 2025 core | 2025-12-11 → 12-29 |
| **March 2026 core** | **2026-03-27 → 04-08** ← most likely inflection |
| May 2026 core | 2026-05-21 → 06-02 |
| Spam updates | 2025-08-26→09-21 · 2026-03-24→25 · 2026-06-24→26 · 2026-08-18→21 |

| Cause | Shape | Timing |
|---|---|---|
| Core-update demotion | Progressive over 5–20 days → **new stable lower plateau** | Onset **inside** a rollout window |
| Spam-update demotion | Sharper; often a step function | Inside a spam window |
| Manual action | **Vertical cliff, one day** | Matches **no** window |
| Technical regression | Cliff or fast decay | Matches **your own deploy date** |
| AI / SERP-feature CTR loss | **Gradual erosion over months, no cliff** | No alignment with any date |

## Step 5 — Separate CTR loss from ranking loss
**The decisive test.**

Per page group, using **post-2026-04-27 data only** (or clicks-only before that):

| Impressions | Avg position | Clicks | Diagnosis |
|---|---|---|---|
| Flat / up | Flat (±1) | **Down 30%+** | **AI Overview / SERP-feature CTR loss.** You still rank; fewer people click. |
| **Down** | **Worse** | Down | **Ranking demotion.** Core update or quality reassessment → Phase 2. |
| **Down hard** | **"Improved"** | **Flat** | **Measurement artifact.** Not a real problem. |

Note: `/portland/` should be the **least** AI-exposed page — local-intent queries return a Local
Pack ~93% of the time with AI Overviews only ~15%.

## Step 6 — Rule seasonality in or out

Only the **year-over-year same-calendar-period** comparison settles this. Behavioral-health practice
purchasing has real seasonality — plan-year resets, deductible cycles, summer slowdowns. A
preceding-period comparison will mislead.

---

## Decision gate

| Finding | Route to |
|---|---|
| Impressions-only cliff, clicks flat | **No recovery needed.** Phases 1–4 become growth work. |
| Manual action present | `01-phase-0-security.md` → clean → reconsideration. **Fastest full recovery.** |
| Technical regression on a deploy date | `02-phase-1-triage.md`. Days-to-weeks. |
| Programmatic group loses 70–95%, rest holds | `03-phase-2-consolidation.md`. **The expected outcome.** 6–18 months. |
| Everything falls including brand | Site-wide trust demotion. All phases, full effort, longest timeline. |
| Impressions flat, position flat, clicks down | AI CTR loss. Pivot to `05-phase-4-content.md` L2 and geo layers. |
