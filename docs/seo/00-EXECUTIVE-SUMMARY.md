# AdvanceAPractice — Organic Traffic Recovery
## Executive Summary & Diagnosis

**Prepared:** 2026-09-14
**Subject:** advanceapractice.com — major organic traffic decline
**Status:** Diagnosis complete. Plan ready for execution. Several findings require action today.

---

## The one-paragraph answer

The traffic did not disappear because of one broken thing. Roughly 84% of the site's indexed
pages are templated state-level pages that ranked on content relevance alone, with essentially
**no independent authority underneath them**. When Google recalibrated relevance, those pages
had no floor and fell as a block. Underneath that, the money pages are split across duplicate
URLs, the resources hub is serving a JavaScript error state to Google, and the informational
content the site does own well is stranded where neither users nor crawlers can reach it.
Meanwhile the single most valuable thing this business has — a founder who has actually done
thousands of these enrollments — appears nowhere Google can verify it.

**The site has an internet presence but not an internet reputation.** That is the root cause,
and it is fixable.

---

## Evidence base and its limits — read this first

This diagnosis was assembled by four parallel research agents plus a repository forensics pass.
**One limitation is material and stated up front:**

> This environment's egress proxy blocks outbound fetching — including `advanceapractice.com`
> itself and every third-party reference domain tested. Per policy, no attempt was made to
> route around it. **The live site was never crawled.**

Everything about the live site is therefore reconstructed from **search-index data** (~30 targeted
queries) and from **this repository's git history**. Findings are graded throughout:

| Grade | Meaning |
|---|---|
| **CONFIRMED** | Directly observed in search results or in git history |
| **INFERRED** | Reasoned from confirmed evidence; confidence stated |
| **UNVERIFIED** | Could not be checked with available access |

**Nothing here should be acted on destructively without the on-site audit described in Phase 1.**
Specifically: no page should be deleted or redirected until someone has actually read it.

To close the gap, either allowlist `advanceapractice.com` for the analysis session, or supply a
Search Console export and a Screaming Frog crawl. Two charts would settle most open questions —
see `05-diagnostic-playbook.md`.

---

## ⚠️ Before anything else: confirm the decline is real

**CONFIRMED — and this is the single biggest forensic trap in the whole analysis.**

Two Google-side *reporting* artifacts sit inside the window in question. Either can manufacture
the appearance of a collapse that never happened:

| Artifact | Dates | Effect |
|---|---|---|
| **GSC impressions logging error** | Inflated 2025-05-13 → 2026-04-27; disclosed by Google 2026-04-03 | Impressions were **over-reported for ~50 weeks**. The fix dropped reported impressions **30–40% overnight** on some properties. **Clicks were never affected**; CTR and average position were distorted for the entire period. |
| **`&num=100` parameter removal** | ~2025-09-10 to 09-14 | ~88% of properties lost reported impressions; average position appeared to "improve." **Clicks unaffected.** |

### The operating rule for this entire engagement

> **Use CLICKS as the primary metric. Distrust impressions, CTR, and average position anywhere in
> the 2025-05-13 → 2026-04-27 window.**

If the decline Ryan is seeing is an **impressions** chart, a meaningful share of it may be
measurement, not ranking. If **clicks** fell, the loss is real. **Check this first — it takes
ten minutes and determines whether the rest of the plan is urgent or merely useful.**

This does not contradict the diagnosis below. Absence from three national head terms is a
click-independent, directly observed fact. But it does change the *magnitude* of the problem,
and magnitude drives how aggressively to prune.

---

## What Google actually did, and when

**CONFIRMED updates inside the window:**

| Update | Dates | Relevance here |
|---|---|---|
| **March 2026 core update** | 2026-03-27 → 04-08 | Independent analyses converge that **"keyword-swapped template" sites were hit hardest**. This is the most likely inflection point. |
| **May 2026 core update** | 2026-05-21 → 06-02 | Reinforced the same pattern. |
| June & August 2026 spam updates | — | Google explicitly confirmed these targeted **neither** site-reputation abuse **nor** link spam. |

**Two corrections to widely circulated misinformation:**

1. **There was no "November 2025 helpful content refresh."** No standalone HCU has run since
   March 2024, when Google folded the helpful-content system into the core algorithm and retired
   the label. Any analysis citing one is unreliable. *The silver lining:* with no separate
   classifier to escape, re-rating chances now arrive every 2–4 months with ordinary core updates.
2. **"Site reputation abuse" does not apply.** That policy targets third-party content hosted on a
   domain — parasite SEO. It is not this. **Drop it from the hypothesis set, and do not spend
   effort on disavow work** — Google confirmed the recent spam updates did not target link spam.

### The most direct confirmation available

On **2026-09-07 — one week before this analysis** — John Mueller said publicly that programmatic
page sets can cause Google's systems to *"lose faith in your site providing good value to users
**based on the old pages**,"* and that fixing it *"tends to take time & significant effort."*

Three things in that sentence matter: the effect is **site-wide**, it is **persistent**, and it is
triggered by a **subset** of pages. That is precisely the shape of this site — ~100 templated
pages dragging down ~20 good ones.

---

## Findings ranked by urgency

### 🔴 P0 — Act today: production credentials are public

**CONFIRMED.** `github.com/advanceapractice/website` is a **public** repository whose git history
still contains **plaintext production credentials**:

| Credential | Grants | Committed | Still reachable |
|---|---|---|---|
| Hostinger FTP host, user, password | Write access to `public_html` | 2026-05-05 | **Yes** — branch `claude/fix-layout-issues-JVbx3` |
| WordPress admin user + password | Full site administrator | 2026-05-05 | **Yes** — same branch |

Publicly readable for roughly **four months**. A later commit deleted the files; git history
retains the blobs.

**This is also a live hypothesis for the traffic loss.** Compromised WP admin or FTP access is the
most common vector for SEO spam injection — cloaked links, doorway pages, Googlebot-only
redirects — which produces exactly this symptom and frequently a "Hacked content" manual action.
It is cheap to rule out and must be ruled out before money is spent on content.

**Actions, in order:** rotate Hostinger account + FTP/SFTP + WP admin passwords → audit WP users
for unknown admins → check Search Console *Security & Manual Actions* → scan for injected content
→ only then purge the branch and history. **Rotation is the remediation; branch deletion is only
hygiene.** A credential public for four months must be assumed compromised.

### 🔴 P1 — The scaled-content exposure

**CONFIRMED:** ~100 of ~120 indexed pages are programmatic state pages in two families —
`/credentialing-and-payer-enrollment-{state}/` and `/pmhnp-practice-requirements-{state}/`. The
site's own copy advertises **"All 51 state guides."**

**INFERRED (medium-high confidence):** this footprint is the primary locus of the decline.

The honest counter-evidence, which matters: the credentialing pages contain **real, dated,
state-specific payer research** — Nevada's Provider Type 14 specialty codes, Minnesota's MUCA/MHCP
structure, Alabama BCBS revalidation. A template does not produce those. This is **not** the worst
class of scaled content, and the confidence rating is deliberately held below "high" because of it.

The PMHNP set is the exposed half: single-fact pages ("is {state} full-practice?"), off-entity for
a billing company, and ranking **dead last** behind five nursing-vertical specialists on its own
hub term.

### 🔴 P2 — Duplicate URLs are splitting the money pages

**CONFIRMED — no inference required:**

- **Three** indexed URLs share the title "Mental Health Billing Services": `/mental-health-billing/`,
  `/mental-health-billing-services`, `/mental-health-billing-services/`
- **Two** resource hubs share one title: `/resources/` and `/practice-resources`
- **One article lives at two parent paths** — under `/mental-health-billing-services/…` and under
  `/insights-and-resources-stay-informed-1-2-3-5/…`
- Title instability on `/about/` and `/practice-operations/` indicates Google is rewriting titles

Roughly **54 URLs carry credentialing intent**. The site is competing against itself.

### 🔴 P3 — The resources hub is broken and Google indexed the failure

**CONFIRMED.** Searching the phrase *"the article feed was temporarily unavailable"* returns
`/resources/` as the **#1 result**. The hub loads articles client-side, the feed fails, and Google
indexed the error state. **Every article on the site is orphaned from its hub.**

This matters more than it looks: the site's genuine editorial work *ranks when Google can find it*.
The timely-filing article ranks **#1**. The 90834-vs-90837 article ranks mid-page. That content is
performing despite being unreachable from its own hub.

### 🟠 P4 — No authority floor, and an entity that never consolidated

**CONFIRMED.** The complete discoverable off-site footprint is **seven properties**: LinkedIn company,
LinkedIn founder, Facebook, Yelp, two *competitor-run* "Top 10 Portland billing companies" listicles,
and a 2023 logo-design contest brief. No podcasts. No bylines. No association listings. No partner
pages. Nothing independent vouches for the business.

Two specific problems fall out of this:

1. **The brand name collides with a clinical term of art.** "Advance a Practice" is one word-break
   from **"advanced practice"** — the universal term for NPs, PAs, CNSs, CRNAs. Search returns
   `advancedpractice.com` and unrelated "Advanced Practice" entities intermixed. Compounding it, the
   founder's LinkedIn vanity URL is `linkedin.com/in/advanceapractice` — the *person* addressed by
   the *company* string, which prevents Google resolving Ryan Berg as a distinct Person entity.
   **There is likely no consolidated entity and no Knowledge Panel.**
2. **The credentials are uncorroborated.** CPB and CMOM are asserted on the About page and nowhere
   independently verifiable.

**No toxic link pattern exists. Do not disavow anything.** The problem is absence, not abuse.

### 🟠 P5 — A junk page and a missing money page

- **CONFIRMED:** `/pdx-decal-draft/` is live and indexed, with **"DRAFT" in the title**, described in
  search as selling **vinyl stickers**, on a healthcare billing domain.
- **INFERRED (medium):** the packages-and-pricing page is referenced by name across multiple indexed
  pages but **never surfaced once** in ~30 queries including four aimed directly at pricing. If
  confirmed, the index profile is inverted — ~100 informational pages in, the primary transactional
  page out.

---

## The diagnostic pattern that rules things in and out

This table is the most decision-relevant evidence gathered. Head terms were run and presence recorded:

| Query | Present? | Who ranks instead |
|---|---|---|
| mental health billing services for private practice | **ABSENT** | Mentalyc, MedCare MSO, TheraThink, Medisys |
| behavioral health credentialing services company | **ABSENT** | SimiTree, CureMD, Credex |
| revenue cycle management behavioral health outsourced | **ABSENT** | VerifyTX, Qualifacts, ICANotes |
| PMHNP scope of practice by state 2026 | Present — **last** | nurse.org ×3, then others, then AAP |
| 90834 vs 90837 psychotherapy code | Present — mid-page | TherapyNotes, CMS, TheraThink |
| timely filing limits three types | **Present — #1** | AAP ranks first |
| medical billing credentialing Portland Oregon | Present — ~#6 | Medwave ×2, Practolytics |

**Read it this way:** national commercial terms are gone, three for three. The local page still
ranks. Genuine editorial still ranks, one at #1. The programmatic hub ranks last.

**A site-wide manual action would have flattened everything.** It didn't. This is the signature of a
**quality/relevance demotion concentrated on commercial and scaled pages** — which is a materially
better position to be in, because it is recoverable without a reconsideration request.

---

## The strategy in five sentences

1. **Rotate the credentials and rule out a compromise** before spending a dollar on content.
2. **Consolidate** — collapse duplicate URLs, fix the resources hub, remove the junk page. Highest
   certainty, lowest risk, fastest payoff.
3. **Keep 8–12 deep state pages and consolidate the rest** — the binding constraint is not what can
   be written but **what can be re-verified quarterly**. A stale regulatory page is a trust liability.
4. **Build the authority floor** — founder entity, corroborated credentials, case studies, earned
   media — because without it the next recalibration does the same thing again.
5. **Stop competing on what a code means; start owning what a specific payer actually does.** The
   first is commoditized and AI-summarized. The second requires experience the competition lacks.

---

## Realistic expectations — stated bluntly

Recovery from a core-update demotion is slow, partial, and not guaranteed. The published evidence:

| Source | Finding |
|---|---|
| Lily Ray, HCU-affected cohort | **129 of 130** of the hardest-hit sites only declined further |
| Glenn Gabe, ~400 sites tracked | **~22%** recovered 20% or more |
| HouseFresh (the famous full recovery) | Took **2 years, 1 month** |

**Plan for 6–18 months and a ceiling of 30–60% partial recovery. Refuse any 90-day guarantee,
from anyone.** Only two causes recover fast and near-fully — a **manual action** (3–21 day review)
and a **technical regression** (days to weeks). That is exactly why the free 60-second Manual
Actions check and the credential/compromise check are step 1: they are the only paths to a quick
win, and they cost nothing to rule out.

### The one intervention most correlated with recovery

> **Prune 40–60% of thin content *before* publishing anything new.**
> Sites that pruned first recovered at roughly **3× the rate** of sites that only added content.

This is why Phase 2 (consolidation) precedes Phase 4 (content offensive), and why the instinct to
"just publish more" is the single most expensive mistake available here. There are ~100 templated
pages. Roughly 40–50 of them should stop existing as separate URLs.

---

## What this plan does not claim

It does not promise recovery in 30 days. The consolidation work in Phase 1–2 can move within weeks
because it repairs mechanical defects — duplicate URLs, a broken hub, an indexed draft page. The
authority work is what makes the *next* core update behave differently, and that is the real
objective.

**The links are not the goal. The floor is.**

---

## Document map

| File | Contents |
|---|---|
| `00-EXECUTIVE-SUMMARY.md` | This document — diagnosis and strategy |
| `01-phase-0-security.md` | Credential rotation and compromise ruling-out |
| `02-phase-1-triage.md` | 0–30 days: measurement truth, consolidation, technical fixes |
| `03-phase-2-consolidation.md` | 30–90 days: the programmatic prune, decided page by page |
| `04-phase-3-authority.md` | Trust assets, entity consolidation, earned media |
| `05-phase-4-content.md` | The content offensive: winnable layers and full IA |
| `06-diagnostic-playbook.md` | Exact GSC/GA4 sequence to confirm cause |
| `07-measurement.md` | KPIs, reporting cadence, decision gates |
| `evidence/` | The four underlying research reports, unedited |
