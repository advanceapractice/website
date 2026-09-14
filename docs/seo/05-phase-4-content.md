# Phase 4 — The content offensive
**Timeline: days 30–365, gated on Phase 2 pruning being underway.**

---

## 4.1 The strategic sentence

> **Stop competing on what a code means. Start owning what a specific payer actually does.**

The first is commoditized and AI-summarized. The second requires experience the competition
does not have.

## 4.2 Where the traffic actually went, and which layer is winnable

The market splits into three layers, and they have almost nothing in common:

| Layer | Winnable? | Why |
|---|---|---|
| **L1 head commercial** ("mental health billing services") | **No — do not chase** | Domain-authority wall plus paid competition. Defend the pages; don't chase the term. Head terms were never won by a site this size, so they **cannot explain a major decline.** |
| **L1 segment & geo long tail** ("PMHNP billing services", "behavioral health billing Oregon") | **Yes** | Mills are thin here; specificity wins |
| **L2 commercial investigation** (pricing, "platform vs. own contracts") | **Yes — highest priority** | Every incumbent is conflicted. Headway cannot credibly publish what Headway costs you. Buyers are near-transaction. |
| **L3 generic** (CPT codes, denial codes, timely filing) | **No — deprioritize** | 8–10 near-identical "2026"-stamped mill pages per term, plus AI Overview compression. **Cluster infrastructure, not a traffic strategy.** |
| **L3 operationally specific** (EAP by carrier, ERA/EFT by payer, state Medicaid) | **Yes — highest volume opportunity** | Mills can write a code definition from a CPT book. They cannot write what Magellan actually requires on an EAP form. |

**Diagnosis:** the loss is concentrated in **L3 generic**, squeezed simultaneously by mill volume
and by AI Overviews. **That traffic is structurally impaired and will not come back.** Chasing it
is chasing a shrinking pool.

### On AI Overviews — what is and is not known

Best available evidence: Pew (behavior-observed, click rate 15%→8%), Ahrefs (position-1 CTR −58%
by Dec 2025), Seer (−61% on AIO queries, 53 brands / 5.47M queries). Semrush measured
commercial-intent AIO coverage growing 71%.

> **There is no credible vertical-specific dataset for healthcare-services B2B. Anyone quoting a
> precise number for this niche is fabricating it.**

AI Overview loss is a **clicks** loss, not a **rankings** loss, and it has a clean fingerprint —
see `06-diagnostic-playbook.md` Step 5.

## 4.3 The competitors that actually matter

| Competitor | Why they matter |
|---|---|
| **TheraThink** | **The model to beat.** Ranks for money terms *and* code-level terms from one domain, with a maintained payer-change tracker. |
| **Behave Health** | Programmatic code library at clean root slugs (`/90837`, `/90791`). |
| **Bomi Health** (`billwithbomi.com`) | 🚨 **Most urgent.** Has taken Oregon Medicaid down to **CCO level — CareOregon and Health Share — in the client's own home market.** A Portland firm losing Portland-relevant Medicaid queries to a programmatic out-of-state challenger is a concrete, correctable loss, and it compounds monthly. |

## 4.4 Tier 1 targets — attack first

Difficulty ratings are **stated judgments from SERP composition**, not tool-sourced. **No search
volumes or KD scores appear anywhere in this plan** — none were available, and inventing them was
the main fabrication risk in this research.

| # | Query | Intent | Difficulty | Why it's open |
|---|---|---|---|---|
| 1 | what percentage do mental health billing companies charge | Investigation | Moderate | 9 results, **all vendor-owned and self-interested**. No independent authority exists. |
| 2 | mental health billing services cost | Investigation | Moderate | Same conflicted set; no neutral reference |
| 3 | Headway vs Alma vs Grow Therapy payout rates | Investigation | Moderate | Contested by *small* sites; Headway comparing itself to Alma is self-conflicted |
| 4 | is Headway worth it vs your own contracts | Investigation | Moderate | practiceharbor.com "The Honest Math" ranks — **proves the angle works** |
| 5 | billing service or platform (therapist) | Investigation | Low–Mod | No dedicated authoritative page exists |
| 6 | **EAP billing 99404 vs HJ modifier by carrier** | Info (operational) | **Low** | Top results are EHR help-desk docs. **No carrier-by-carrier resource exists anywhere.** |
| 7 | how to bill EAP sessions therapist | Info | **Low** | Fragmented help docs, no owner |
| 8 | **ERA/EFT enrollment by payer** | Info (operational) | **Low** | Results are payer PDFs. **No specialist owns this.** |
| 9 | behavioral health credentialing timeline by payer 2026 | Info → comm. | Moderate | Incumbents are **generic-medical, not BH-specific, and unmaintained** |
| 10 | **PMHNP billing services** | High-intent commercial | Moderate | **Thin field, no entrenched authority** — rare for a money term, and highest revenue per client |
| 11 | 90833 / 90836 / 90838 add-on billing | Info | Moderate | Mills present but shallow; high revenue stakes make depth defensible |
| 12 | Medicare enrollment for LMFT and LMHC (PECOS) | Info → comm. | Moderate | Post-2024 eligibility = live, growing demand |
| 13 | behavioral health billing services Oregon | Commercial (geo) | Low–Mod | Occupied by **templated geo pages with near-zero E-E-A-T**. A local operator should beat them. |
| 14 | add a therapist to an existing group contract | Info → comm. | Low–Mod | Thin field, **high commercial intent** — group practices are the best clients |
| 15 | no-show / late-cancel fees insurance rules | Info | Low–Mod | All incumbents shallow on the **contractual and Medicare/Medicaid restriction** side — the actual hard question |

> **Do not open with CPT-code and denial-code content.** It is the most instinctive move and the
> most saturated slice of the market.

## 4.5 Information architecture

A four-quadrant hub-and-spoke with an explicit commercial bridge:

```
   MONEY PAGES                    AUDIENCE PAGES
 (what we do — convert)        (who we serve — qualify)
          \                          /
           +----  BRIDGE PAGES  ----+
              (diagnose → route)
                      |
               RESOURCE PILLARS  (5 hubs)
                      |
                 CLUSTER PAGES
                      |
             TOOLS & DATA ASSETS
```

**Three linking rules:**
1. **Clusters never CTA to the homepage.** Each links *up* to its pillar and *across* to exactly
   one bridge page. Bridge pages carry the commercial handoff.
2. **Every service page is supported by ≥5 cluster pages** linking to it with varied descriptive
   anchors. This is how a small site manufactures topical authority that authority alone can't buy.
3. **Tools and data assets sit outside the cluster tree**, linked from every relevant page. They
   should be the most-internally-linked URLs on the site.

### Money pages
`/behavioral-health-billing-services/` · `/mental-health-billing-services/` ·
`/credentialing-services/` · `/payer-enrollment-services/` · `/revenue-cycle-management/` ·
`/ar-recovery/` · `/practice-operations-consulting/` · **`/pricing/`**

### Audience pages
`/for/therapy-practices/` · `/for/psychiatry-practices/` · **`/for/pmhnp/`** ·
`/for/group-practices/` · `/for/outpatient-medical-practices/` · `/for/new-practices/`

### Bridge pages — the conversion layer
`/guides/what-billing-services-cost/` · `/guides/billing-service-vs-platform/` ·
`/guides/in-house-vs-outsourced-billing/` · `/guides/is-your-practice-losing-money/` ·
`/guides/when-to-hire-a-biller/`

### Resource pillars
`/credentialing/` · `/medicaid/` · `/denials/` · `/coding/` · `/practice-money/`

## 4.6 The assets that earn links and AI citations

Ranked by leverage:

1. **Behavioral Health Credentialing Timeline Tracker** *(flagship)* — payer × state × license,
   observed-vs-published timelines, **"last verified" date per row**, changelog. **Nobody in
   behavioral health has this**; the generic-medical versions prove the demand.
2. **Original data report — "What behavioral health claims actually get denied for"** — from the
   firm's own book, anonymized and aggregated. **The highest-leverage asset available and the only
   one no competitor can replicate.** The niche currently repeats one secondhand statistic; a
   primary source becomes *the* cited source. Publish annually.
3. **EAP Carrier Matrix** — code, modifier, auth, form, member-ID quirk, per carrier.
4. **ERA/EFT Enrollment Tracker** — route, portal, turnaround, per payer.
5. **"Platform vs. own contracts" calculator** — session volume × rate differential × billing cost
   → annual delta. Converts directly into the credentialing service.
6. **Appeal letter template pack** — the existing market content is consumer-facing; the
   provider-facing gap is open.
7. **Parity / NQTL appeal guide** — low traffic, high authority. **This is the asset that earns
   `.org` and state-association links.**

### Engineering for AI Overview citation

Observed selection patterns worth building to:
- **Direct-answer-first** — lead paragraph resolves the query outright
- **Specific numbers with attribution** — concrete figures get lifted verbatim; vague prose does not
- **Tables** — repeatedly the source of synthesized comparisons
- **Explicit dating** — "last verified" and year-stamping correlate strongly with inclusion
- **Unique facts** — the most-quoted lines were available from only one source

**This routes straight back to asset #2: first-party data is the most reliable path to AI citation.**

## 4.7 Sequencing

| Phase | Focus | Why this order |
|---|---|---|
| **0–30 days** | Trust layer sitewide; `/pricing/`; `/guides/billing-service-vs-platform/`; `/for/pmhnp/` | Trust lifts everything else. Bridge pages convert **existing** traffic immediately — revenue before rankings. |
| **30–90 days** | EAP cluster + carrier matrix; ERA/EFT tracker; credentialing timeline tracker v1; `/medicaid/oregon/` + CCO page | The four clearest openings, plus **home-market defense against Bomi** |
| **90–180 days** | Credentialing pillar build-out; PMHNP coding cluster; BH-specific denial angles | Topical authority to support the money pages |
| **180–365 days** | First original data report; calculator; selective state expansion | Link and citation acquisition once there is a body of work to link into |

---

## Exit criteria

- [ ] `/pricing/` and the five bridge pages live
- [ ] `/for/pmhnp/` live — the thinnest-contested money term
- [ ] EAP carrier matrix and ERA/EFT tracker published
- [ ] Credentialing timeline tracker v1 live with per-row verification dates
- [ ] Oregon Medicaid + CCO page live (Bomi defense)
- [ ] Original denial-data report scoped with a publication date
