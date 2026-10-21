# Phase 2 — Consolidation: the programmatic prune
**Timeline: days 30–90. The single intervention most correlated with recovery.**

---

## 2.1 Why this comes before publishing anything new

**CONFIRMED:** sites that pruned thin content *before* adding new content recovered at roughly
**3× the rate** of sites that only added. Pruning 40–60% of thin content is the strongest
documented correlate of core-update recovery.

**CONFIRMED (2026-09-07, John Mueller):** programmatic page sets can cause Google's systems to
*"lose faith in your site providing good value to users **based on the old pages**,"* and fixing it
*"tends to take time & significant effort."*

The effect is **site-wide**, **persistent**, and triggered by a **subset** of pages. Roughly 100
templated pages are suppressing the ~20 good ones. Adding a 21st good page changes nothing while
the 100 remain.

## 2.2 What the policies actually say

Two of Google's spam policies apply. Neither mentions AI, and neither sets a page-count threshold —
**the test is purpose and value per page.**

- **Scaled content abuse** — generating many pages primarily to manipulate rankings rather than
  help users.
- **Doorway abuse** — Google's own listed example is *"multiple domain names or pages targeted at
  specific regions or cities that funnel users to one page."*

That example describes a state-page set whose pages differ only by place name and all funnel to
one contact form.

> **The operative distinction:** a geo page is legitimate when **the information on it changes
> because the place changed.** It is a doorway when **only the place name changed.**

## 2.3 Disposition: what to keep, what to consolidate

| Page class | Verdict | Rationale |
|---|---|---|
| `/portland/` — HQ local page | 🟢 **Keep & strengthen** | Backed by a real location. GBP-linked. Still ranks ~#6. Load it with real Oregon CCO/payer specifics. |
| `/oregon-behavioral-health-payers-billing/` | 🟢 **Keep — this is the model** | Names Providence, Moda, PacificSource, OHP; explains OHP-vs-CCO. Information changes because the place changed. **Rebuild the rest of the geo program around this page's pattern.** |
| ~8–12 deep state pages (PA, NV, CA, TX, NY, FL, OH, MI, WA, CO) | 🟡 **Keep, rebuild to depth** | Only where there is genuine operating knowledge. Each independently researched and maintained. |
| Remaining ~38–42 thin state pages | 🔴 **Consolidate** | Cannot be differentiated without real knowledge. Highest doorway exposure, lowest value. |
| ~50 `/pmhnp-practice-requirements-*` pages | 🔴 **Consolidate into the hub** | Single-fact pages, off-entity for a billing company, ranking **dead last** behind five nursing-vertical specialists. **The highest-leverage prune available.** |
| County or city pages outside Oregon | 🔴 **Do not build** | No presence, no differentiation, no local-pack eligibility. Pure liability. |

### The constraint that settles "how many"

> **The binding constraint is not what can be written. It is what can be re-verified quarterly.**

Regulatory facts expire. A stale state page on a YMYL-adjacent topic is a **trust liability, worse
than no page at all**. For a founder-led firm the realistic number is **8–12 state pages, not 50.**

## 2.4 How to execute the prune

**Consolidate; do not mass-delete.** Redirect thin state pages into a well-built hub — a nationwide
credentialing guide with a state-comparison table — so topical relevance is retained and
concentrated rather than discarded.

1. **Build the destination first.** `/credentialing/` pillar with a state-comparison table, live
   before any redirect fires.
2. **Stage it.** Redirect in batches of 10–15, two weeks apart. **Never 40 pages in one deploy.**
3. **Keep the ~10 deep pages live throughout** — they are the control group. If they hold while the
   consolidated set recovers, the thesis is confirmed.
4. **301, don't 404** — except for genuine junk like `/pdx-decal-draft/`, which should be 410.
5. **For the PMHNP set:** fold each state's single fact into a sortable table on
   `/pmhnp-scope-of-practice-by-state/`, then 301 all ~50 children to the hub. One strong page
   beats fifty weak ones — and this consolidation alone removes ~42% of the site's URL count.
6. **Track each batch.** Record redirect date, source URLs, destination, and pre-redirect clicks.

## 2.5 Rebuilding the survivors

A defensible state page is built from ingredients that are genuinely place-dependent:

1. **Medicaid program architecture** — carve-out vs. carve-in, county vs. statewide, MCOs by name
2. **Provider-type and specialty taxonomy** — actual codes and eligibility rules
3. **Licensure and supervision rules** — who bills independently, who bills under supervision
4. **Named commercial payer landscape** — the regional dominants
5. **Dated regulatory changes** — the "this changed on this date" facts that carry urgency
6. **Panel status intelligence** — who is open, who is closed, who requires documented network need
7. **Realistic timelines** — with first-party observed data

**Worked examples found in about twenty minutes of research — which proves the differentiation is
available and competitors are not doing it:**

- **Pennsylvania** — behavioral health is a **mandatory carve-out**; providers must contract with
  **county-specific BH-MCOs** under HealthChoices. **PROMISe** enrollment assigns a 13-digit
  provider ID and is *separate* from MCO credentialing — a two-step process that trips up
  out-of-state providers. *(The existing page title says "by County" — the instinct is already
  right; it needs depth, not deletion.)*
- **Nevada** — behavioral health runs under **Provider Type 14**, specialties **300 (QMHP),
  301 (QMHA), 302 (QBA)**. Effective **2026-02-09**, only clinical interns may enroll as QMHP under
  specialty 300. QMHA/QBA applicants must submit a **CPR certification card**.
- **Oregon** — enroll with **OHA**, then credential **separately with each CCO**. **PacificSource
  exited the Lane County CCO market; members moved to Trillium on 2026-02-01.** CareOregon is
  *reported* to be largely closed to new routine outpatient BH contracts absent documented network
  need — **verify directly before publishing.**

**Two hard rules:** every regulatory claim carries a **"verified as of" date** and links the
**primary state source**. This is simultaneously the E-E-A-T play and the maintenance discipline.

## 2.6 The moat

> The firm has *done* these enrollments. Publishing **observed timelines from real submissions** —
> "median 47 days across 23 Pennsylvania submissions in 2025–26" — is information that cannot be
> researched, scraped, or generated by a competitor.

That is first-hand Experience in the precise sense the E-E-A-T framework means it, and it is the
most reliable route into AI Overview citations, which demonstrably favor **unique specific numbers**.

---

## Exit criteria

- [ ] `/credentialing/` pillar live with state-comparison table
- [ ] ~50 PMHNP state pages consolidated into the hub; 301s in place
- [ ] ~38–42 thin credentialing state pages consolidated in staged batches
- [ ] 8–12 surviving state pages rebuilt to depth, each with "verified as of" dates and primary sources
- [ ] A quarterly re-verification calendar exists and has an owner
- [ ] Control-group measurement recorded for every batch
