# Phase 1 — Triage: establish measurement truth, then fix what is mechanically broken
**Timeline: days 1–30. Highest certainty, lowest risk, fastest payoff.**

---

## 1.1 First: is the decline real?

Run `06-diagnostic-playbook.md` **Step 0** before anything else.

**CONFIRMED:** two Google-side reporting artifacts sit inside the analysis window and can
manufacture an apparent collapse:

- **GSC impressions logging error** — impressions over-reported 2025-05-13 → 2026-04-27
  (disclosed 2026-04-03). The fix dropped reported impressions **30–40% overnight** on some
  properties. **Clicks were never affected.**
- **`&num=100` removal** (~2025-09-12) — ~88% of properties lost reported impressions; average
  position appeared to improve. **Clicks unaffected.**

> **Operating rule: clicks are the primary metric. Distrust impressions, CTR, and average
> position inside that window.**

**If clicks are flat and the cliff is impressions-only at ~2025-09-12 or ~2026-04-27 — stop.**
That is a reporting artifact, not a traffic problem, and the rest of this plan becomes
improvement work rather than recovery work.

## 1.2 The consolidation fixes

These are **CONFIRMED defects**. They do not depend on any diagnosis being right, they carry
almost no risk, and they are the fastest-moving items available.

### A. Collapse the duplicate money-page URLs

Three indexed URLs share the title "Mental Health Billing Services":

| URL | Action |
|---|---|
| `/mental-health-billing-services/` | **Keep as canonical** — the slug matches the head term |
| `/mental-health-billing/` | **301 →** canonical |
| `/mental-health-billing-services` *(no trailing slash)* | **301 →** canonical |

Then: enforce **one** trailing-slash convention site-wide at the server level, add a
**self-referencing canonical** to every page, and update every internal link to point at the
canonical form directly (never through a redirect).

*Before redirecting, check Search Console which variant actually holds the impressions and links —
keep that one, regardless of the recommendation above.*

### B. Collapse the duplicate resources hubs

`/resources/` and `/practice-resources` share one title. Keep one, 301 the other.

### C. Fix the duplicated article path

One article is live at two parents:
- `/mental-health-billing-services/timely-filing.../`
- `/insights-and-resources-stay-informed-1-2-3-5/timely-filing.../`

**This article ranks #1.** Handle carefully: determine which URL holds the ranking, keep it, 301
the other. Then retire the `/insights-and-resources-stay-informed-1-2-3-5/` path entirely — it is
a legacy collection slug that should never have been public.

### D. Remove the junk page

`/pdx-decal-draft/` — live, indexed, **"DRAFT" in the title**, selling vinyl stickers on a
healthcare billing domain. Delete it and return 410, or 301 it to `/portland/`. **Zero downside.**

Then sweep for siblings: any other draft, test, or staging page that is publicly indexed.

### E. Server-render the resources hub — highest-value technical fix

**CONFIRMED:** searching *"the article feed was temporarily unavailable"* returns `/resources/`
as the **#1 result**. The hub loads articles client-side, the feed fails, and Google indexed the
error state. **Every article is orphaned from its hub.**

The site's editorial content ranks well when Google can reach it — one article at #1, another
mid-page. It is performing *despite* being unreachable.

- Server-render the article list (in WordPress, a normal template query, not a JS fetch).
- Ensure every article is linked from the hub with a descriptive anchor.
- Add the hub to the primary navigation.
- Re-submit the sitemap.

### F. Sitemap and indexation hygiene

- Verify `sitemap.xml` exists, is current, and contains **only** canonical, indexable URLs.
- Confirm `robots.txt` blocks nothing that should rank.
- Confirm the pricing/packages page exists and is indexable — **it never surfaced in ~30 queries.**
  If the primary transactional page is unindexed while ~100 informational pages are indexed, the
  index profile is inverted and that alone suppresses commercial conversion.

## 1.3 Content-audit the programmatic set — decide nothing yet

Phase 2 prunes. Phase 1 only **reads**. Export every URL matching:

- `/credentialing-and-payer-enrollment-*`
- `/pmhnp-practice-requirements-*`

For each, record: word count, how much text is genuinely state-specific vs. boilerplate, whether
any regulatory claim carries a verification date, and 12-month clicks from Search Console.

**The test, which is cheap and decisive:**

> Take any state page. Swap every instance of the state name for a different state and read it.
> **If it is still accurate, it is a doorway page.** If it is now *wrong* — because Nevada uses
> Provider Type 14 specialty codes and Pennsylvania uses county BH-MCO carve-outs — the page has a
> right to exist.

**Do not delete anything in Phase 1.** The live site could not be crawled during this analysis.
Someone must read these pages before they are removed.

---

## Exit criteria

- [ ] Step 0 measurement baseline established; decline confirmed real or identified as artifact
- [ ] Duplicate URLs collapsed; one trailing-slash convention enforced; self-canonicals sitewide
- [ ] `/pdx-decal-draft/` removed; draft/staging sweep complete
- [ ] Resources hub server-rendered; all articles linked and crawlable
- [ ] Sitemap clean; pricing page confirmed indexable
- [ ] Full programmatic-page audit exported with the swap test applied to every URL
