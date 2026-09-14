# Measurement, cadence, and decision gates

## Primary KPI

**Non-brand organic clicks**, segmented by page group. Not impressions. Not average position.
Not "keywords ranked."

**Why:** the GSC impressions logging error (2025-05-13 → 2026-04-27) and the `&num=100` removal
(~2025-09-12) both corrupted impressions, CTR, and position while leaving **clicks untouched.**
Any dashboard built on impressions in that window is reporting noise as signal.

## Page groups to track separately

Track each as its own line. The whole diagnosis depends on seeing them apart, not aggregated:

1. Homepage
2. Money pages (`/mental-health-billing-services/`, `/medical/`, `/revenue-cycle-management/`, …)
3. Bridge pages (`/guides/*`) — *new in Phase 4*
4. `/about/` + `/contact/` + `/about/ryan-berg/`
5. `/resources/` and articles
6. `/portland/` and Oregon geo
7. **`/credentialing-and-payer-enrollment-*`** — the prune cohort
8. **`/pmhnp-*`** — the prune cohort
9. **The 8–12 surviving deep state pages** — *the control group*

Group 9 versus groups 7–8 is the experiment. If the survivors hold or grow while the consolidated
set's equity flows to the pillar, the thesis is confirmed.

## Cadence

| Interval | Review |
|---|---|
| **Weekly** | Non-brand clicks by page group; indexation errors; redirect/404 check |
| **Monthly** | Group-level clicks vs. prior month and YoY; new pages published vs. plan; prune batches completed |
| **Quarterly** | **Re-verify every regulatory claim on every surviving state page.** Non-negotiable — a stale page is a trust liability. Plus authority audit: new independent mentions gained |
| **Per core update** | Date-align clicks against the rollout window; record the delta by group |

## Leading indicators — what moves before traffic does

Traffic is a lagging indicator. These move first:

- `Crawled – currently not indexed` **falling** for the surviving pages
- `Duplicate without user-selected canonical` **falling** after the URL consolidation
- Articles appearing in the index with the hub as referring page (resources-hub fix working)
- Brand-query impressions rising (entity consolidating)
- Independent off-site mentions accruing — from **7** today

## Decision gates

| Gate | Timing | If met | If not met |
|---|---|---|---|
| **G0** — Security clear | Day 1 | Proceed | Stop; remediate compromise first |
| **G1** — Decline confirmed real in clicks | Week 1 | Proceed to full plan | Re-scope as growth, not recovery |
| **G2** — Consolidation shipped, no ranking loss on the #1 article | Week 4 | Begin the prune | Roll back; re-audit the redirect map |
| **G3** — Prune batch 1 (10–15 URLs), control group stable | Week 8 | Continue in batches | Pause; re-read the pages before further removal |
| **G4** — Money-page clicks up vs. prior quarter | Month 6 | Scale content | Re-diagnose — check for a second cause |

## Honest targets

| Horizon | Realistic outcome |
|---|---|
| **30 days** | Mechanical fixes live. Duplicate consolidation may show early movement. **No meaningful traffic recovery yet.** |
| **90 days** | Prune substantially complete. Bridge pages converting *existing* traffic — **revenue may improve before rankings do.** |
| **6 months** | First credible read on whether the demotion is lifting. Gate G4. |
| **12–18 months** | **Realistic ceiling: 30–60% partial recovery.** |

**The published base rates, stated plainly:** Lily Ray found 129 of 130 of the hardest-hit sites
only declined further. Glenn Gabe found ~22% of ~400 tracked sites recovered 20% or more.
HouseFresh — the well-known full recovery — took **2 years, 1 month.**

**Refuse any 90-day recovery guarantee, from anyone.** The two causes that *do* recover fast —
a manual action and a technical regression — are both ruled in or out for free in the first hour
of `06-diagnostic-playbook.md`.
