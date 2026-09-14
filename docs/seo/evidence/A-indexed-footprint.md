# advanceapractice.com — Indexed Footprint Reconstruction & Structural Diagnosis

**Analyst:** Agent A (Indexed Footprint)
**Date:** 2026-09-14
**Method:** WebSearch-only reconstruction. ~30 distinct queries.
**Hard constraint honored:** No direct fetch of advanceapractice.com by any means. No mirror, proxy, cache, or text-extraction service was used against the domain.

---

## 0. Method & Evidence-Quality Notice (read this first)

Everything below is derived from **search-engine result listings** (URL + title) and from **snippet/summary text returned by the WebSearch tool**.

Two different evidence grades are used throughout, and they are not interchangeable:

- **[CONFIRMED-URL]** — The URL appeared as an actual result link in a SERP listing, with a title. This is the strongest grade available to me. I am confident the URL exists and is indexed.
- **[CONFIRMED-TITLE]** — The title string as returned in the result listing. Note: titles in SERPs may be Google-rewritten and are not guaranteed to equal the `<title>` tag.
- **[SNIPPET-DERIVED]** — Body text attributed to a page by the search tool's summarizer. **The summarizer paraphrases.** I therefore do NOT treat any snippet sentence as a verbatim quote of on-page copy. Where I rely on snippet wording for the templating argument, I say so explicitly and discount accordingly.
- **[INFERENCE]** — My reasoning. Not verified.

**I did not have access to:** Google Search Console, analytics, the live HTML, the XML sitemap, robots.txt, the real `site:` index count, backlink data, or actual ranking/traffic history. Any claim requiring those is marked unverifiable in §9.

---

## 1. Confirmed URL Inventory

Every row below is a **[CONFIRMED-URL]** — it appeared as a real SERP result during this investigation.

### 1.1 Core site & service pages

| # | URL | Title (as shown in SERP) | Snippet / summary substance | Page type | Verdict |
|---|---|---|---|---|---|
| 1 | `https://advanceapractice.com/` | Behavioral Health Billing, Credentialing & Practice Operations \| AdvanceAPractice | Behavioral health billing, credentialing, revenue cycle for psychiatry, PMHNP, therapy. Portland-based, serves nationwide. Mentions "Command Suite". | Homepage | Substantive |
| 2 | `https://advanceapractice.com/about/` | **Two titles observed:** (a) "About AdvanceAPractice \| Founder-Led Healthcare Operations Partner" (b) "About AdvanceAPractice \| Ryan Berg, Healthcare Operator" | Ryan Berg, 16+ yrs; CPB and CMOM; grew a BH group $2M→$6M; 30+ person team; recovered $1.5M+ aged AR. | About / E-E-A-T | Substantive |
| 3 | `https://advanceapractice.com/contact/` | Contact AdvanceAPractice \| Billing, Credentialing & Workflow Review | Contact / consult booking. | Conversion | Thin (expected) |
| 4 | `https://advanceapractice.com/mental-health-billing/` | **Mental Health Billing Services \| AdvanceAPractice** | BH billing, claim flow, denial drag, telehealth/auth workflows. | Money page | Substantive but **duplicated** |
| 5 | `https://advanceapractice.com/mental-health-billing-services` *(no trailing slash)* | **Mental Health Billing Services \| AdvanceAPractice** | Near-identical positioning to #4. | Money page | **Duplicate of #4/#6** |
| 6 | `https://advanceapractice.com/mental-health-billing-services/` *(trailing slash)* | **Mental Health Billing Services \| AdvanceAPractice** | Therapists, counselors, psychologists, psychiatrists, PMHNPs, MFTs, MHCs, LCSWs. | Money page | **Duplicate URL variant** |
| 7 | `https://advanceapractice.com/medical-billing/` | Medical Billing Services for Outpatient Practices \| AdvanceAPractice | Claim flow, A/R discipline, denial follow-up, payment posting, reimbursement workflow cleanup. | Money page | Substantive |
| 8 | `https://advanceapractice.com/medical/` | Physician Credentialing & Payer Enrollment Services | Org contracting, rendering-provider credentialing/linking, portals, EFT/ERA, directory verification, status tracking. Pricing: $6,000 package. | Money page | Substantive |
| 9 | `https://advanceapractice.com/revenue-cycle-management/` | Revenue Cycle Management & Reimbursement Workflow Improvement \| AdvanceAPractice | "Visibility, discipline, operational accountability across the revenue process." | Money page | Substantive, overlapping |
| 10 | `https://advanceapractice.com/practice-operations/` | **Two titles observed:** (a) "Practice Operations Support & Workflow Design \| AdvanceAPractice" (b) "Behavioral Health Practice Operations" | Front desk, providers, billing, credentialing, leadership; task ownership; EHR workarounds. | Money page | Substantive |
| 11 | `https://advanceapractice.com/workflow-friction-audit/` | Workflow Friction Audit \| Billing & Operations Review | Operational/RCM review offer. | Offer / conversion | Unclear — low SERP presence |
| 12 | `https://advanceapractice.com/resources/` | Healthcare Operations & Billing Resources \| AdvanceAPractice | **Indexed body text includes a JS failure state — see §4.** | Hub | **THIN / BROKEN** |
| 13 | `https://advanceapractice.com/practice-resources` *(no trailing slash)* | **Healthcare Operations & Billing Resources \| AdvanceAPractice** | Same positioning as #12. | Hub | **Duplicate of #12** |
| 14 | `https://advanceapractice.com/portland/` | Portland Medical Billing & Credentialing \| AdvanceAPractice | Portland-based billing/credentialing/practice ops for Oregon psychiatrists, PMHNPs, psychologists, physicians. | Local landing | Substantive |
| 15 | `https://advanceapractice.com/pdx-decal-draft/` | **PDX Decal - DRAFT** - AdvanceAPractice \| Portland Medical and Mental Health Billing Experts | Search summary describes it as **"selling vinyl stickers."** | **Junk / draft** | **THIN — should not be indexed** |

### 1.2 Regional editorial

| # | URL | Title | Snippet substance | Page type | Verdict |
|---|---|---|---|---|---|
| 16 | `https://advanceapractice.com/oregon-behavioral-health-payers-billing/` | Billing Oregon's Behavioral Health Payers: Providence, Moda, PacificSource & OHP \| AdvanceAPractice | Genuinely specific: per-payer manuals, credentialing pathways, BH auth processes; OHP delivered via regional CCOs; state OHP enrollment ≠ in-network with the member's CCO. | Editorial / regional | **Substantive — best content on the site** |

### 1.3 Blog / article content

| # | URL | Title | Snippet substance | Page type | Verdict |
|---|---|---|---|---|---|
| 17 | `https://advanceapractice.com/90834-vs-90837-psychotherapy-codes/` | 90834 vs 90837: Choosing the Right Psychotherapy Code (and the Add-On Codes) \| AdvanceAPractice | Specific, opinionated: 53-min threshold, payer-review risk, "right response to scrutiny is strong documentation, not reflexive down-coding." | Article (top-level path) | **Substantive** |
| 18 | `https://advanceapractice.com/mental-health-billing-services/timely-filing-how-does-it-work-and-what-are-the-3-types-of-limits/` | Understand Timely Filing Requirements of Insurance Claims | Initial / corrected-claim / appeal limits. | Article (nested under service page) | Substantive, **duplicated** |
| 19 | `https://advanceapractice.com/insights-and-resources-stay-informed-1-2-3-5/timely-filing-how-does-it-work-and-what-are-the-3-types-of-limits/` | Timely Filing - How Does It Work, And What Are The 3 Types Of Limits? | **Same article as #18.** | Article (legacy collection path) | **CONFIRMED DUPLICATE of #18** |

> **#18 vs #19 is the single cleanest piece of hard evidence on this site.** The identical article slug is indexed under two different parent paths, with two different titles. The legacy parent, `/insights-and-resources-stay-informed-1-2-3-5/`, is an auto-generated collection slug with a numeric-suffix tail — the signature of a CMS collection that was duplicated repeatedly.

### 1.4 Programmatic set A — `/credentialing-and-payer-enrollment-{state}/`

| # | URL | Title |
|---|---|---|
| 20 | `/credentialing-and-payer-enrollment-nevada/` | Nevada Behavioral Health Credentialing & Payer Enrollment |
| 21 | `/credentialing-and-payer-enrollment-pennsylvania/` | Pennsylvania Behavioral Health Credentialing by County |
| 22 | `/credentialing-and-payer-enrollment-minnesota/` | Minnesota Credentialing and Payer Enrollment: MUCA + MHCP |
| 23 | `/credentialing-and-payer-enrollment-utah/` | Utah Behavioral Health Credentialing & Medicaid PMHPs |
| 24 | `/credentialing-and-payer-enrollment-alabama/` | Alabama Behavioral Health Credentialing: BCBS and Medicaid |
| 25 | `/credentialing-and-payer-enrollment-vermont/` | Vermont Behavioral Health Credentialing and Medicaid Enrollment |

### 1.5 Programmatic set B — `/pmhnp-practice-requirements-{state}/` + hub

| # | URL | Title |
|---|---|---|
| 26 | `/pmhnp-scope-of-practice-by-state/` | PMHNP Scope of Practice by State \| AAP  **(HUB)** |
| 27 | `/pmhnp-practice-requirements-utah/` | Utah PMHNP Practice Requirements \| AAP |
| 28 | `/pmhnp-practice-requirements-michigan/` | PMHNP Practice Requirements in Michigan \| AAP |
| 29 | `/pmhnp-practice-requirements-rhode-island/` | Rhode Island PMHNP Practice Requirements |
| 30 | `/pmhnp-practice-requirements-nevada/` | Nevada PMHNP Practice Requirements |

**Total [CONFIRMED-URL] count: 30.**

---

## 2. Programmatic Page Inventory & Templating Assessment

### 2.1 How large is the programmatic footprint?

**[CONFIRMED — site's own copy, via snippet]** The search tool, summarizing advanceapractice.com pages, twice surfaced the site's own claim of **"All 51 state guides"** covering *"every state's Medicaid path, plan roster and credentialing rules."* 51 = 50 states + DC.

**[CONFIRMED — site's own copy, via snippet]** The Nevada credentialing page carries a line to the effect of *"Credentialing and payer enrollment is what we do, in Nevada and in the other 49 states."* — i.e. a sentence whose only variable is the state name.

**[CONFIRMED — via snippet]** State pages I could NOT surface as direct URLs are nonetheless referenced by *internal link descriptions* that appeared in indexed page text, each a one-line teaser: Idaho ("behavioral health is carved out statewide to one contractor, and it changed hands in 2024"), Wyoming ("one fee-for-service program… a 60-day commercial clock"), North Dakota ("out-of-state enrollment rules are a real constraint on a telehealth build"), New York ("regional plans, HARP, and a pharmacy carve-out"), Florida ("Florida Blue routes behavioral health to Lucet too"), Ohio ("one state application credentials you for all seven Medicaid plans… 90-day clock on commercial"), Georgia ("one centralized application for every Medicaid plan"), Tennessee ("back pay during credentialing… only if you're joining a contracted group"), Mississippi ("will credential you temporarily in five business days if you ask in writing"), West Virginia, Massachusetts, New Hampshire.

**[INFERENCE — high confidence]** The `/credentialing-and-payer-enrollment-{state}/` set is essentially complete at **~51 pages**.

**[INFERENCE — high confidence]** The `/pmhnp-practice-requirements-{state}/` set is also near-complete at **~50 pages**. The hub `/pmhnp-scope-of-practice-by-state/` was surfaced by queries naming Oregon, Washington, Colorado, Arizona, New Mexico, Kansas, Nebraska, Oklahoma, Missouri, Wisconsin, North Carolina, Virginia, Tennessee, New Jersey, Delaware, Wyoming, Alaska, Hawaii and Maine — i.e. the hub's body contains per-state entries across the whole country.

**Estimated programmatic total: ~100–101 pages** (51 + ~50), against **~19 non-programmatic pages**.
**That is roughly 84% of the indexed site.**

### 2.2 Templating evidence — the PMHNP set

This is the strongest templating signal I obtained. Two different state pages, surfaced in the **same** SERP summary:

> **Utah:** "Utah is classified as a **full practice state**, and generally collaboration is not required for ongoing practice in a full practice authority state, though **Utah** may require an initial transition-to-practice period."
>
> **Rhode Island:** "Rhode Island is classified as a **full practice authority state**, and generally collaboration is not required for ongoing practice in a full practice authority state, though **Rhode Island** may require an initial transition-to-practice period."

**Caveat, stated plainly:** these came through the WebSearch summarizer, which paraphrases. I cannot certify them as verbatim on-page strings.

**However** — and this is why the evidence still carries weight — a paraphrasing summarizer producing two sentences with *identical clause order, identical subordinate clause ("though X may require an initial transition-to-practice period"), and identical hedge ("generally collaboration is not required")*, differing only in the state token, is far more likely reflecting genuinely templated source text than inventing parallel structure. The Michigan variant fits the same frame with the "reduced" branch swapped in: *"Michigan is classified as a reduced practice state, and Michigan typically requires a physician relationship for elements of practice including prescribing."*

**[INFERENCE — high confidence]** The PMHNP set is generated from a template with roughly three branches (full / reduced / restricted) plus a state-name variable. The underlying fact per page — the AANP practice-authority category — is **a single data point**, freely available from AANP's own map, and already covered by higher-authority nursing publishers.

### 2.3 Templating evidence — the credentialing set

Weaker but consistent. Titles do vary meaningfully, which is a point *in the site's favor*:

- "Nevada Behavioral Health Credentialing & **Payer Enrollment**"
- "Pennsylvania Behavioral Health Credentialing **by County**"
- "Minnesota Credentialing and Payer Enrollment: **MUCA + MHCP**"
- "Utah Behavioral Health Credentialing & **Medicaid PMHPs**"
- "Alabama Behavioral Health Credentialing: **BCBS and Medicaid**"
- "Vermont Behavioral Health Credentialing and **Medicaid Enrollment**"

Each title carries a state-specific hook. Likewise the body snippets show **real, dated, state-specific research**: Nevada's "Provider Flex" application flow and BHRT phase-out (1 Jan 2026, closed to enrollment 1 Jul 2026); Minnesota's Evernorth pause (1 Jun 2026, signalled reopen after 1 Sep); Pennsylvania's April 2026 BH manual and the IBX/Highmark licensing split; Alabama's CMS revalidation directive (22 Apr 2026); Utah's Optum Salt Lake County path.

**[ASSESSMENT]** The credentialing set is **materially better than boilerplate**. It is not auto-spun. But it carries an identical commercial boilerplate block on every page — the pricing ladder ($600/payer New Provider Credentialing; $500/payer Existing Payer Relationship Transition, payers 1–5; $2,500 transition; $3,000 first-provider; $4,000 new commercial contracts; $6,000 practice launch) and the "in {State} and in the other 49 states" line. So the *shell* is templated even where the *filling* is not.

### 2.4 County pages — probed, NOT found

The Pennsylvania title ("...by County") prompted a dedicated probe. **No separate county-level URLs surfaced.** County detail appears to live *inside* state pages (Philadelphia five-county IBX territory and Highmark west/northeast on the PA page; Salt Lake County Optum on the Utah page). **[INFERENCE — medium confidence]** There is no county-level programmatic tier. Good news.

### 2.5 City pages — probed, NOT found beyond Portland

Probed seattle, salem, eugene, bend, vancouver, boise, denver, phoenix. **Only `/portland/` exists.** There is no city-level programmatic tier. **[INFERENCE — medium-high confidence]**

---

## 3. Keyword Cannibalization

**[CONFIRMED — hard evidence]** Three URL variants are indexed under the **identical title string** "Mental Health Billing Services | AdvanceAPractice":
- `/mental-health-billing/`
- `/mental-health-billing-services` (no trailing slash)
- `/mental-health-billing-services/` (trailing slash)

The trailing-slash pair is a canonicalization failure. The `/mental-health-billing/` vs `/mental-health-billing-services/` pair is two genuinely distinct pages built for the same query.

**[CONFIRMED]** `/resources/` and `/practice-resources` are indexed under the **identical title** "Healthcare Operations & Billing Resources | AdvanceAPractice". Two hubs, one job.

**[CONFIRMED — title instability]** Two pages returned **different titles across different queries** — `/about/` and `/practice-operations/`. This is characteristic of Google **rewriting** a title it does not trust or finds misaligned with page content, and is a soft quality signal worth noting.

### Cannibalization clusters

| Cluster | Competing URLs | Shared intent |
|---|---|---|
| **Mental health billing** | `/mental-health-billing/`, `/mental-health-billing-services`, `/mental-health-billing-services/`, plus `/` homepage | "mental health billing services" — **4-way split** |
| **General billing** | `/medical-billing/`, `/revenue-cycle-management/`, `/mental-health-billing*` | "billing services / RCM for practices" — **3-way** |
| **Credentialing** | `/medical/` (national), `/portland/` (local), ~51 state pages, `/` homepage | "credentialing and payer enrollment" — **~54-way** |
| **Resources hub** | `/resources/`, `/practice-resources` | "billing/credentialing resources" — **2-way** |
| **Operations** | `/practice-operations/`, `/workflow-friction-audit/`, `/revenue-cycle-management/` | "practice operations / workflow audit" — **3-way** |
| **PMHNP** | `/pmhnp-scope-of-practice-by-state/` hub + ~50 state pages | "PMHNP scope of practice" — hub vs children |

The credentialing cluster is the severe one. `/medical/` is the national commercial page, but it must compete against ~51 state pages that each also carry the full pricing ladder and a buy path. **[INFERENCE — high confidence]** Google has no clean signal for which page to rank for the unqualified head term "credentialing and payer enrollment services."

---

## 4. Thin Content — and one outright broken page

### 4.1 `/resources/` is serving a JavaScript failure state to the index — [CONFIRMED]

The `/resources/` SERP result surfaced the string **"the article feed was temporarily unavailable"**, and a dedicated follow-up query for that exact phrase returned `/resources/` as the **#1 result**, with the search tool reporting that the phrase *"appears in the code on the AdvanceAPractice resources page… an error message displayed when their article feed fails to load."*

This is confirmed twice, independently. Implications:

1. The resources hub loads its article list **client-side**. When the feed fails, the page renders a fallback message.
2. Google has **indexed the fallback**, which means at crawl time the hub contained **no article links** — only an error string.
3. Therefore **every article on the site is orphaned from its hub.** The only internal paths into editorial content are whatever links exist elsewhere.
4. The hub itself is, to Google, a near-empty page carrying an error message. And it exists **twice** (`/resources/` and `/practice-resources`).

**[INFERENCE — high confidence]** This alone would suppress discovery, crawl frequency, and internal PageRank flow to all blog content.

### 4.2 Thin / junk pages

| Page | Assessment |
|---|---|
| `/pdx-decal-draft/` | **Worst offender.** A page with "DRAFT" in the live title, selling vinyl stickers, on a healthcare billing domain. Off-topic, unfinished, publicly indexed. |
| `/resources/` | Broken, effectively empty. |
| `/practice-resources` | Duplicate of a broken page. |
| `/contact/` | Thin, but appropriately so. |
| `/workflow-friction-audit/` | Surfaced only once across ~30 queries. Very low index prominence. |
| PMHNP state pages (~50) | **Thin by construction.** One data point (AANP category) per page, templated framing, in a vertical where nurse.org and others already own the query. |

### 4.3 Substantive pages

Genuinely good: `/oregon-behavioral-health-payers-billing/`, `/90834-vs-90837-psychotherapy-codes/`, the timely-filing article, `/about/`, `/portland/`, and — with the caveat in §2.3 — the credentialing state pages, which contain real dated payer research.

---

## 5. Index Bloat

| Bucket | Est. count | Basis | Genuine unique value? |
|---|---|---|---|
| Credentialing state pages | ~51 | Site's own "All 51 state guides" claim | **Partial** — real research, templated shell |
| PMHNP state pages | ~50 | Hub enumerates all states | **Low** — one data point each |
| Core service pages | 8 | Confirmed | Yes, but internally duplicated |
| Duplicate URL variants | ≥4 | Confirmed (3× MHB, 2× resources, 2× timely-filing) | **No — pure bloat** |
| Local | 1 (`/portland/`) | Confirmed | Yes |
| Editorial articles | 2 unique (3 URLs) | Confirmed | Yes |
| Junk/draft | ≥1 (`/pdx-decal-draft/`) | Confirmed | **No** |
| Utility (contact, audit) | 2 | Confirmed | Conversion only |

**Estimated indexed total: ~120 URLs.**
**Pages carrying genuine differentiated value: ~12–15.**
**Ratio: roughly 1 valuable page for every 8–10 indexed.**

**Critical asymmetry — [CONFIRMED by absence]:** across ~30 queries, including four aimed squarely at pricing, **the "packages and pricing" page never once appeared as a SERP result**, despite being referenced by name in the body text of multiple indexed pages. The site's primary transactional page appears to be absent from the index, while ~100 informational programmatic pages are present.

---

## 6. E-E-A-T Assessment (YMYL-adjacent)

### Present — [CONFIRMED via SERP snippets]
- **Named, credentialed founder.** Ryan Berg, **CPB** (Certified Professional Biller) and **CMOM** (Certified Medical Office Manager). Real certifications, named in indexed copy.
- **Quantified operator experience.** 16+ years; led a BH group $2M→$6M; built a 30+ person team; recovered $1.5M+ in aged AR; multi-state consolidation.
- **Radical pricing transparency.** Published prices ($500/$600 per payer; $2,500/$3,000/$4,000/$6,000 packages) — genuinely rare in this vertical and a real trust asset.
- **Third-party corroboration.** Yelp listing; LinkedIn; named in "Portland's top medical billing & RCM firms" (MediBillMD 2025, Nexus IO 2026 — reported at #7 area-wide, 4.3/5, 95% clean-claim ratio, per the Nexus IO listing).
- **Real-world specificity** in the state pages — dated payer policy changes that only an operator would track.

### Missing or weak
- **No case-study pages found.** A dedicated probe for case studies returned nothing. Outcome claims live only as prose on `/about/`; there is no evidenced, per-client page.
- **No author bylines on the programmatic pages.** None of the ~100 state pages showed author attribution in SERPs.
- **No visible review/last-updated governance** on YMYL-adjacent compliance content. The state pages assert dated regulatory facts (revalidation sweeps, enrollment closures, manual versions). Without a visible reviewed-on date and reviewer, this is exactly the content class Google's quality raters are told to scrutinize.
- **Scope overreach.** ~50 pages telling PMHNPs what their **licensure scope of practice** is. That is nursing-regulatory advice from a billing vendor. No nursing credential is asserted anywhere.
- **Young entity.** Founded 2023 — roughly three years of domain history against entrenched competitors.

**[ASSESSMENT]** Founder-level E-E-A-T is **above average** for the vertical. But it is concentrated on `/about/` and does not propagate to the ~100 programmatic pages that constitute 84% of the site. Those pages are, from a rater's view, unsigned, undated regulatory claims.

---

## 7. AI Overviews / Zero-Click — HONEST LIMITATION

**I could not verify AI Overview presence, and I will not claim otherwise.**

My WebSearch tool returns a list of links plus *its own* synthesized summary. That summary is generated by my tooling. **It is not Google's AI Overview** and must not be read as evidence of one. Confirming AIO presence requires observing a live Google SERP, which I cannot do.

What I **can** confirm is the **query shape** of the site's informational footprint, and it is unfavorable:

- PMHNP state pages answer a **single-fact question** ("is {state} full/reduced/restricted practice?"). Single-fact questions are the highest-risk category for AI-Overview absorption.
- Credentialing state pages answer **procedural questions** ("how do I enroll with {state} Medicaid?") — also high-absorption-risk.
- The commercial pages ("who should I hire to do my billing?") are **low** absorption risk.

**[INFERENCE — medium confidence]** If AI Overviews are firing on these informational queries, the ~100 programmatic pages would lose click-through **even where rankings held**. This would produce the classic decoupling: impressions flat or up, clicks collapsing. **This hypothesis is testable in Search Console and should be the first thing checked** — compare impressions vs clicks for the `/pmhnp-*` and `/credentialing-and-payer-enrollment-*` path groups.

### Competitive SERP observations — [CONFIRMED]

I ran head terms and recorded whether the domain appeared:

| Query | advanceapractice.com present? | Who ranks |
|---|---|---|
| "mental health billing services for private practice" | **ABSENT** | Mentalyc, MedCare MSO, TheraThink, Medisys, Resilience Billing |
| "behavioral health credentialing services company" | **ABSENT** | SimiTree, CureMD, Credex, Credentialing.com |
| "revenue cycle management behavioral health practices outsourced" | **ABSENT** | VerifyTX, ADSC, Qualifacts, ICANotes, CureMD |
| "PMHNP scope of practice by state 2026" | **Present — LAST position** | nurse.org (×3), nursepractitioneronline, psychnpfellowship, pmhnphiring, *then* AAP |
| "90834 vs 90837 which psychotherapy code to use" | **Present — mid-page** | TherapyNotes, OmniMD, CMS, CarePaths, TheraThink, *then* AAP |
| "timely filing limits insurance claims three types" | **Present — #1** | AAP ranks first |
| "medical billing and credentialing Portland Oregon" | **Present — ~#6** | Medwave (×2), Practolytics, 247MBS, Credex, *then* AAP |

**This is the most diagnostically valuable table in the report.** The pattern is sharp and consistent:

- **National commercial head terms → total absence.** Three for three.
- **Local Portland term → still ranking.**
- **Genuine editorial articles → ranking, one at #1.**
- **Programmatic PMHNP hub → ranking dead last** behind five nursing-vertical specialists.

**[INFERENCE — high confidence]** The commercial money pages have lost national visibility, while the small body of genuine editorial work and the local page retain theirs. That is **not** the signature of a site-wide manual action (which would flatten everything). It is the signature of a **quality/relevance demotion concentrated on commercial and scaled pages**.

---

## 8. Ranked Causes of the Traffic Decline

### 1. Scaled content abuse / core-update demotion on the ~100-page programmatic footprint — **CONFIDENCE: MEDIUM-HIGH**

*Evidence:* ~100 of ~120 indexed pages (84%) are auto-patterned state pages across two slug families. Site's own copy advertises "All 51 state guides." PMHNP snippets show near-identical clause structure with only the state token swapped. Identical commercial boilerplate (the full pricing ladder, the "in {State} and in the other 49 states" line) repeats across every state page.

*Counter-evidence, stated honestly:* the credentialing pages contain real, dated, state-specific payer research that a template could not generate. Titles vary meaningfully. This is **not** the worst class of scaled content, and I down-rate confidence from High to Medium-High because of it.

*Why it still ranks first:* Google's scaled-content-abuse policy turns on **whether pages were generated at scale primarily to rank**, not on whether each is individually worthless. Two ~50-page state sets published as a block, sharing a template shell and a commercial boilerplate block, sit squarely in the pattern the March 2024 core update and subsequent updates were built to demote. The PMHNP set is the more exposed half — it is off-entity, single-fact, and outranked by five specialist publishers.

---

### 2. Duplicate-URL and canonicalization failure across the money pages — **CONFIDENCE: HIGH**

*Evidence (all confirmed, no inference needed):* three indexed URL variants sharing one title for mental health billing; two indexed URLs sharing one title for the resources hub; one article confirmed live at two different parent paths. Title instability on `/about/` and `/practice-operations/` indicates Google is rewriting titles.

*Effect:* ranking signals for the site's single most important commercial term are split at least three ways. This is a direct, mechanical cause of lost rankings on exactly the terms where §7 shows total absence.

---

### 3. `/resources/` hub broken — client-side feed failing, error state indexed — **CONFIDENCE: HIGH (that it is broken) / MEDIUM (as a share of the decline)**

*Evidence:* confirmed twice independently; the exact fallback phrase returns `/resources/` as the #1 result.

*Effect:* the entire editorial library is orphaned from its hub. No internal PageRank reaches articles; crawl discovery of new posts is impaired; the hub is itself a thin indexed error page, duplicated.

*Why this matters more than it looks:* §7 shows the site's editorial content **ranks well when it exists** (timely-filing at #1). The site is suppressing its own best-performing content type.

---

### 4. Keyword cannibalization across the commercial cluster — **CONFIDENCE: HIGH**

*Evidence:* the §3 cluster table. ~54 URLs carrying credentialing intent; 4 carrying mental-health-billing intent.

*Effect:* compounds #2. Even after fixing duplicate URLs, `/medical/` must still out-compete 51 state pages that each carry the same pricing ladder and buy path.

---

### 5. Topical dilution into nursing-licensure content — **CONFIDENCE: MEDIUM-HIGH**

*Evidence:* ~50 pages (≈42% of the site) on PMHNP **scope of practice** — a nursing-regulatory topic, not a billing topic. Confirmed: the hub ranks **last** behind nurse.org ×3 and three other nursing specialists.

*Effect:* the site-level topic model is diluted away from "behavioral health billing and credentialing" — the entity it actually has authority for — toward a vertical where it has none and cannot win. Losing against five specialists on ~50 pages is a site-wide quality drag, not just 50 underperforming pages.

---

### 6. E-E-A-T not propagated to the pages that need it — **CONFIDENCE: MEDIUM**

*Evidence:* strong credentials (CPB, CMOM) and quantified experience confirmed on `/about/`. But no case studies found, no author bylines on state pages, no visible reviewed-on dates on dated regulatory claims, and no nursing credential backing ~50 pages of licensure guidance.

*Effect:* for YMYL-adjacent compliance content, unsigned and undated regulatory assertions are a rater-visible weakness across 84% of the site.

---

### 7. Index bloat and hygiene failures — **CONFIDENCE: MEDIUM**

*Evidence:* `/pdx-decal-draft/` — a live-indexed DRAFT page selling vinyl stickers on a healthcare billing domain. Legacy collection slug `/insights-and-resources-stay-informed-1-2-3-5/` still indexed. Ratio of ~1 valuable page per 8–10 indexed.

*Effect:* crawl budget waste and a clear signal of weak publishing governance.

---

### 8. Primary transactional page appears unindexed — **CONFIDENCE: MEDIUM**

*Evidence:* the "packages and pricing" page is referenced by name in multiple indexed pages' body text but **never surfaced as a SERP result across ~30 queries**, including four aimed directly at pricing.

*Effect:* if confirmed, the site's highest-commercial-intent page is invisible while ~100 informational pages are indexed — an inverted index profile. **Verify in Search Console before acting.**

*Caveat:* absence from my sample is not proof of deindexation.

---

### 9. AI Overviews absorbing informational clicks — **CONFIDENCE: LOW (unverifiable with my tooling)**

*Evidence:* none direct. Reasoning is purely from query shape (§7). Flagged as the **first thing to check in GSC** via impressions-vs-clicks on the two programmatic path groups.

---

### 10. Young domain / authority deficit — **CONFIDENCE: MEDIUM**

*Evidence:* founded 2023 (third-party reporting). Competitors on absent head terms are established RCM publishers.

*Effect:* a thin authority base is exactly what makes a site fragile to core updates — there is no accumulated trust to absorb a quality reassessment. Publishing ~100 templated pages on a ~3-year-old domain is the highest-risk version of that strategy.

---

## 9. What I Could Not Verify, and Why

| Item | Why not |
|---|---|
| **Actual traffic decline magnitude, timing, shape** | No GSC or analytics access. I have not verified that a decline occurred — only that national head-term visibility is absent today. |
| **Whether a manual action exists** | Only visible in Search Console. The §7 pattern (selective loss, local + editorial retained) argues **against** a site-wide manual action, but that is inference. |
| **True indexed page count** | The `site:` operator via this tool returns a handful of results, not a count. My ~120 estimate is built from confirmed URLs + the site's own "51 state guides" claim. |
| **AI Overview presence on any query** | Requires a live Google SERP. My tool's summaries are my own tooling's output, not Google's AIO. **Explicitly not claimed.** |
| **Verbatim on-page copy** | Domain fetch is blocked by policy and I did not route around it. All body text is summarizer-paraphrased and graded [SNIPPET-DERIVED] throughout. |
| **~45 credentialing + ~46 PMHNP state URLs** | Not individually surfaced. Existence inferred from the site's "51 state guides" claim, the hub's state coverage, and internal link teasers for 12 named states. **Slugs I list for unconfirmed states are pattern predictions, not confirmed URLs.** |
| **Whether `/pricing`-type page exists at all** | Referenced in body text; never surfaced. Cannot distinguish "unindexed" from "exists under a slug I failed to guess." |
| **robots.txt, sitemap, canonical tags, hreflang, schema, Core Web Vitals, rendering behavior** | All require fetching the domain. Blocked. |
| **Backlink profile, anchor-text distribution, toxic links** | No backlink tool available. |
| **Publish/update dates for any page** | Not exposed in SERP listings I received. Cannot date the programmatic rollout — which is the single most useful missing fact, since correlating rollout date against core-update dates would move cause #1 from Medium-High to High or knock it down. |
| **Google spam-policy and core-update primary documentation** | `developers.google.com`, `searchengineland.com`, and `seroundtable.com` all returned `EGRESS_BLOCKED` from the proxy. Policy characterizations here rest on my own training knowledge, not on fetched sources. |

### WebFetch availability note
WebFetch was tested on three non-target domains — `developers.google.com`, `searchengineland.com`, `www.seroundtable.com` — and **all three returned `EGRESS_BLOCKED`**. The block is not specific to advanceapractice.com; outbound fetching appears broadly disabled in this environment. **All findings in this report come from WebSearch alone.**

---

## 10. Recommended Verification Order

1. **GSC → Pages report.** Get the true indexed count and the Excluded reasons (duplicate-without-canonical, crawled-not-indexed, alternate-with-canonical).
2. **GSC → Performance, split by path prefix.** Compare `/credentialing-and-payer-enrollment-*` and `/pmhnp-*` against `/mental-health-billing*` and `/medical*`. Impressions-flat-but-clicks-down = AI Overview absorption. Impressions-down = ranking demotion. **This one chart separates cause #1 from cause #9.**
3. **Date the programmatic rollout** and overlay Google core-update dates.
4. **Fix the duplicates immediately** — highest certainty, lowest risk, fastest payoff: consolidate the three mental-health-billing URLs to one, the two resources hubs to one, and 301 the legacy `/insights-and-resources-stay-informed-1-2-3-5/` article path.
5. **Delete or noindex `/pdx-decal-draft/`.** Zero downside.
6. **Server-render the `/resources/` feed.** The site's editorial content ranks well when Google can find it.
7. **Decide on the PMHNP set.** It is off-entity, ranks last against specialists, and is 42% of the site. Consolidating ~50 pages into the single hub is the highest-leverage scaled-content remedy available.
