# Workstream D — Off-Site Authority, Local SEO Reality Check, E-E-A-T & Link Acquisition

**Client:** advanceapractice.com (AdvanceAPractice Management)
**Founder/entity:** Ryan Berg — CPB (Certified Professional Biller), CMOM (Certified Medical Office Manager), 16+ yrs
**Positioning:** Founder-led behavioral-health billing, credentialing, payer enrollment, practice operations. HQ Portland, OR. Sells nationwide.
**Date of analysis:** 2026-09-14
**Analyst scope:** Off-site authority, local/geo strategy, trust assets, link acquisition.

---

## 0. Method, scope, and verification limits — READ FIRST

This section exists so nothing below gets over-read.

**What I could do:** WebSearch (unrestricted).

**What I could NOT do — and this materially bounds the confidence of Section 1:**

| Constraint | Effect on findings |
|---|---|
| `advanceapractice.com` is blocked by the org egress proxy (confirmed: gateway returned 403 to CONNECT for `advanceapractice.com:443`). Routing around it was forbidden and was not attempted. | No on-site verification. Everything about the client's own pages below is inferred from search-result titles/snippets, not from reading the pages. |
| **WebFetch is blocked gateway-wide in this environment.** Every single fetch attempted returned `EGRESS_BLOCKED` — including `developers.google.com`, `support.google.com`, `guidelines.raterhub.com`, `yelp.com`, `wikipedia.org`, `aapc.com`, `pa.gov`, `medicaid.nv.gov`, `michigan.gov`, `backlinko.com`, and all five listicle domains. | **I could not open a single page.** So I could not verify: link `rel` attributes (follow vs nofollow vs sponsored), actual review counts, actual star ratings, listing claim status, rank positions in listicles, or whether a named page actually links to the client. |
| No access to Ahrefs / Semrush / Majestic / GSC / GA4. | **There is no backlink count, no Domain Rating, no referring-domain number anywhere in this report.** Any such figure would be fabricated. Section 1 is a *discovery-based* footprint assessment, not a backlink audit. |

**Consequence:** Section 1 findings are stated as **"a search-visible mention exists"** — never as **"a backlink exists."** A mention is not a link. A link is not necessarily followed. Confirming the difference requires a backlink tool or opening the page, and I could do neither.

**Labeling convention used throughout:**
- 🟢 **VERIFIED** — I saw this in search results with a live URL.
- 🟡 **PARTIAL** — surfaced in a search snippet, but the underlying page could not be opened to confirm details.
- 🔵 **RECOMMENDATION** — my professional judgment. Not a finding.
- 🔴 **COULD NOT CONFIRM** — I looked and found nothing. This is *absence of evidence in search*, which for obscure directories is weak evidence of absence.

---

## 1. Off-Site Authority & Citation Footprint

### 1.1 What actually exists — the verified inventory

I ran brand-name, founder-name, bare-domain, and directory-specific queries. **The complete set of distinct non-client domains that surfaced a genuine AdvanceAPractice/Ryan Berg mention is small enough to list exhaustively.** That fact *is* the finding.

| # | Property | URL | Type | Status | Notes |
|---|---|---|---|---|---|
| 1 | LinkedIn — company page | `linkedin.com/company/advanceapractice` | Owned social | 🟢 VERIFIED exists | Could not open; follower count, post cadence, completeness unknown. |
| 2 | LinkedIn — founder profile | `linkedin.com/in/advanceapractice` | Owned social | 🟢 VERIFIED exists | Note the vanity slug is the *company* name, not `ryan-berg-*`. See §1.4 — this weakens Person-entity separation. |
| 3 | Facebook — business page | `facebook.com/p/AdvanceApractice-Management-100094167818307/` | Owned social | 🟢 VERIFIED exists | Numeric-suffix URL = unclaimed vanity URL. Low-effort signal. |
| 4 | Yelp — business listing | `yelp.com/biz/advance-a-practice-portland` | Directory | 🟢 VERIFIED exists | 🔴 Review count and rating **could not be confirmed** (Yelp blocked). Snippet showed NAP + phone (971) 888-2880 + website. |
| 5 | MediBillMD — "Top 10 Best Medical Billing Companies In Portland, OR – 2025" | `medibillmd.com/blog/medical-billing-companies-in-portland/` | Competitor listicle | 🟡 PARTIAL | Snippet confirms client is described (founded 2023, mental-health-only, EHR integration). **Rank position and link attribute unverified.** |
| 6 | Nexus IO — "Best Medical Billing Companies in Portland, OR 2026" | `thenexusio.com/blog/medical-billing-companies-in-portland/` | Competitor listicle | 🟡 PARTIAL | Page exists and is topically matched. The "#7 area-wide" claim appears to originate from **the client's own /about/ page**, not from an independently verified reading of the Nexus IO page. Treat the rank as a client self-claim. |
| 7 | DesignCrowd — logo design contest | `designcrowd.com/logo-design/contest/4063149` | Incidental | 🟢 VERIFIED exists | A 2023-era logo contest brief. Zero authority value; it is a procurement artifact, not a citation. |

**That is the entire discoverable footprint.** Seven properties, of which **three are owned social profiles**, **one is a self-serve directory listing**, **two are competitor-run listicles**, and **one is an accidental artifact of buying a logo.**

### 1.2 What I looked for and did NOT find

These are 🔴 COULD NOT CONFIRM. Each was searched explicitly.

| Category | Searched for | Result |
|---|---|---|
| Structured B2B directories | Clutch, UpCity, Expertise.com, Crunchbase, ZoomInfo, Apollo, Manta, Thumbtack, Bark, Chamber of Commerce | No profile surfaced for any. |
| BBB | BBB Portland medical billing category | Category pages surfaced; **no AdvanceAPractice profile surfaced**. |
| Industry association membership | HBMA member/biller directory, AAPC chapter listing, PAHCOM chapter listing | No listing surfaced. |
| Earned media / podcasts | "Ryan Berg" + podcast/interview/guest across therapist-practice podcast ecosystem | **No podcast appearance found.** Searches returned the podcast ecosystem itself, not him in it. |
| Guest posts / bylines | "Ryan Berg" + guest post/byline/contributor, 2025–2026 | **No third-party byline found.** |
| EHR vendor partner pages | SimplePractice, TherapyNotes, Alma, Headway, TheraNest partner/integration directories | **Not found — and separately, I could not confirm that public partner directories of the kind assumed in the brief even exist for SimplePractice or TherapyNotes.** See §4.2. |
| State association vendor lists | Oregon Psychological Assn, Oregon Counseling Assn | Associations verified to exist; **no AdvanceAPractice listing found**. |
| G2 / Capterra / Software Advice | RCM service reviews | No profile surfaced. |

### 1.3 Assessment: how thin is it?

**Verdict: extremely thin — functionally pre-authority.**

Calibration: for a 2023-founded, founder-led, single-operator-brand services firm, a *healthy* three-year footprint typically includes a claimed and reviewed Google Business Profile, an association membership listing or two, three to six earned podcast/webinar/byline appearances, a handful of client or partner pages, and inclusion in two or three genuinely editorial roundups. **This footprint contains none of the earned categories.** Everything present is either self-published (LinkedIn, Facebook), self-serve (Yelp), or published *by competitors* (the listicles).

The sharpest way to state it: **the firm has an internet presence but not an internet reputation.** Nothing independent vouches for it. Google's quality framework treats reputation from *independent* sources as the core of Trust — the Quality Rater Guidelines direct raters to research reputation using sources outside the site's own control ([QRG, Sept 2025 edition](https://guidelines.raterhub.com/searchqualityevaluatorguidelines.pdf); overview via [Google's public summary](https://services.google.com/fh/files/misc/hsw-sqrg.pdf)). There is presently almost nothing for that research to find.

A second, under-appreciated problem: **there is no independently verifiable evidence of the founder's credentials anywhere off-site.** CPB and CMOM are asserted on the client's own About page and echoed in snippets. I found no AAPC-side or PMI-side corroboration. For a YMYL-adjacent financial-operations vendor, an uncorroborated credential claim is a weaker asset than an corroborated one. (See §3.3 for the fix.)

### 1.4 The entity-disambiguation problem — an under-diagnosed structural issue

This is arguably the most important finding in Section 1, and it is not a link problem.

**The brand name collides head-on with a standard clinical term of art.** Searching the bare domain returned, intermixed with the client:

- `advancedpractice.com` — a completely unrelated platform for Advanced Practice Providers, powered by LocumTenens.com 🟢
- `linkedin.com/company/advanced-practice-management-llc` — a different company 🟢
- Multiple "Advanced Practice Provider" educational results 🟢

"Advance a Practice" / "AdvanceAPractice" is one character and one word-break away from **"advanced practice"** — the universal healthcare term for NPs, PAs, CNSs and CRNAs (APP / APRN). In the exact vertical the client sells into, "advanced practice" is a *clinical role category*, not a brand.

**Why this matters mechanically:** Google builds entity understanding from co-occurrence of a name with corroborating attributes across independent sources. When the name is ambiguous *and* the corroborating sources are near-zero, the entity never consolidates. There is likely **no Knowledge Panel and no stable entity node** for this business. Everything in §3.4 (schema + `sameAs`) is aimed squarely at this problem, and it is probably the highest-leverage non-content work available.

Compounding it: the founder's LinkedIn vanity URL is `linkedin.com/in/advanceapractice` — i.e. the *person* is addressed by the *company* string. That actively prevents Google from resolving "Ryan Berg" as a distinct Person entity linked to the Organization. 🔵 **Recommend requesting a `linkedin.com/in/ryan-berg-...` vanity URL** and treating the Person and Organization as two separately-anchored entities.

### 1.5 Toxic / spammy link pattern assessment

**Verdict: no evidence of a manipulative link scheme. But the profile is structurally low-quality in a way that is worth naming.**

What I can say with confidence:
- 🟢 **No PBN signature.** I found no clusters of low-quality blog domains carrying the brand — the classic fingerprint of a bought-link campaign. If such a campaign existed at scale, brand-name search would typically surface at least fragments of it. It did not.
- 🟢 **No evidence of paid link-building.** Nothing indicates money-for-links.
- 🟡 **The real issue is the opposite of toxicity: it's emptiness.** There is almost no link graph at all.

**The one pattern that deserves a flag — the "competitor listicle" cluster.** Search repeatedly surfaced near-identical "Top 10 Medical Billing Companies in Portland" pages across **MediBillMD, Nexus IO, Practolytics, Credex Healthcare, and Transcure** — every one of which is itself an RCM/billing vendor. This is a recognized content play: a billing company publishes a city roundup, ranks for a competitor's local intent, lists real firms for credibility, and positions itself as the alternative.

Honest characterization, with the uncertainty stated:
- These are **not toxic links** — they are not part of a scheme the client participated in, and the client almost certainly did not solicit them.
- They are **not valuable links either.** They are commercially-motivated, templated, editorially thin, and frequently `nofollow` or unlinked entirely. **I could not verify the link attribute on any of them** (all five domains are egress-blocked), so I will not assert they pass equity, and the client should not assume they do.
- **No disavow action is warranted.** Disavow is for manual-action defense and unambiguous scheme participation. Neither applies. 🔵 **Recommend: do nothing about these. Do not disavow. Do not pursue more of them.**

**One genuine hygiene concern.** A Yelp snippet described the listing's services as including *"medical billing, social media marketing, web design, business consulting."* 🟡 If accurate, that is a **category-coherence problem**: a behavioral-health billing specialist advertising web design and social media marketing reads as a generalist, muddies the service entity, and undercuts the specialist positioning that is the firm's entire differentiator. 🔵 **Recommend auditing and tightening every directory category to the billing/credentialing/RCM core.** This is free and takes an hour.

### 1.6 Core-update fragility — the central strategic risk

The brief asks directly whether programmatic pages ranking on near-zero authority are fragile. **They are, and this is very likely the mechanism behind the traffic loss.**

The reasoning, stated as a chain:

1. **The site ranks on programmatic state pages.** 🟢 Verified: the Pennsylvania page (`/credentialing-and-payer-enrollment-pennsylvania/`) surfaced organically in a competitive PA-Medicaid-enrollment query alongside pa.gov and established vendors. So these pages *do* rank — or did.
2. **The site has almost no independent authority** (§1.1–1.3).
3. **Ranking without authority means ranking on content-relevance signals alone.** The page matched the query well; nothing else was carrying it.
4. **Content-relevance signals are precisely what core updates recalibrate.** Google's own core-update guidance is explicit that core updates are not penalties targeting specific sites — they are broad reassessments of how content is evaluated, in which "some pages that were previously under-rewarded may do better" and others get displaced by content the systems now judge more deserving ([Google Search Central, core updates guidance](https://developers.google.com/search/blog/2019/08/core-updates); coverage: [Search Engine Land](https://searchengineland.com/google-advice-on-improving-your-sites-ranking-for-future-core-ranking-update-320184), [Search Engine Roundtable](https://www.seroundtable.com/google-help-advice-core-algorithm-updates-27984.html)).
5. **Therefore the ranking had no floor.** A site with authority absorbs a relevance recalibration — the authority holds position while content is re-judged. A site without authority has nothing to absorb it with. The drop is not gradual; it is a step function.

**This is the whole thesis of the engagement.** The programmatic pages were not "penalized." They were *unsupported*, and a routine recalibration removed the only thing holding them up. Rebuilding the pages without building authority underneath them reproduces the same fragility — the next core update will do the same thing again.

A secondary exposure, addressed fully in Section 2: a large set of same-shaped state pages on a site with no local presence in those states is close to the fact pattern Google's **scaled content abuse** and **doorway** policies describe. I have no evidence of an enforcement action, and I am not claiming one. But the risk surface is real and should be reduced on its own merits.

---

## 2. Local SEO Reality Check for a Nationwide Service Business

### 2.1 The strategic tension, stated plainly

The firm has **one real location (Portland) and a nationwide addressable market.** These pull in opposite directions, and most of the site's geo strategy appears to be an attempt to resolve the tension with page templates. That does not work, for a specific and knowable reason.

**Google's local pack and Google's organic web index are two different systems with two different eligibility models.** Conflating them is the root error.

| | Local pack / Maps | Organic web results |
|---|---|---|
| Eligibility | Requires a verified Google Business Profile | Any indexed page |
| Ranking basis | **Relevance, distance, prominence** ([GBP Help](https://support.google.com/business/answer/7091?hl=en)) | Content relevance, quality signals, links, E-E-A-T |
| Geographic reach | Bounded by *distance from the searcher* | Unbounded |
| Can a Portland business rank in Ohio? | **No.** Distance is a hard constraint. | **Yes** — if the content deserves it |

The decisive fact: **"distance" is not a tunable signal.** No amount of content, schema, or optimization moves a Portland-based business into a Columbus local pack. A GBP delivers local-pack visibility *around Portland* and nowhere else. This is the ceiling, and it is structural.

**Therefore the honest framing: this is not a local SEO business. It is a national B2B organic-search business that also happens to have a legitimate Portland local footprint.** Those are two separate programs with separate KPIs, and they should stop being run as one.

### 2.2 The GBP question — worth doing, but size the prize correctly

🟢 Google's eligibility rule is that a business **must make in-person contact with customers during its stated hours** to qualify for a Business Profile ([Business eligibility and ownership guidelines](https://support.google.com/business/answer/13763036?hl=en)). Service-area businesses without a storefront may hide the address and define service areas ([managing service areas](https://support.google.com/business/answer/9157481?hl=en)). Virtual offices, P.O. boxes, and purely online businesses **do not qualify**, and Google actively detects address clustering.

🔵 **Recommendation:**
- **If** the firm genuinely meets clients in person in the Portland metro — claim, verify, and fully populate the GBP. It is worth real effort: reviews on it are a Trust asset that feeds far beyond the map pack.
- **Do not** attempt to create GBP listings in other states. Without in-person contact at a real address this is a policy violation, it is detectable, and the downside (suspension, plus a trust problem that bleeds into everything else) vastly outweighs a local pack the firm cannot serve anyway.
- **Size the prize honestly.** The Portland behavioral-health-billing local pack is a small pool. Treat GBP as a **trust and entity-corroboration asset first** (verified NAP, real reviews, a `sameAs` anchor) and a lead source second. That reframing is what makes it worth doing.

### 2.3 What Google actually says about templated geo pages

Two policies apply, both from [Google's spam policies](https://developers.google.com/search/docs/essentials/spam-policies):

**Scaled content abuse** — generating many pages primarily to manipulate rankings rather than help users. Note what the policy does *not* say: it does not say "AI-generated," and it does not set a page-count threshold. The test is **purpose and value per page**.

**Doorway abuse** — pages created to rank for specific, similar queries that lead users to intermediate pages less useful than the destination. Google's own listed example is **"multiple domain names or pages targeted at specific regions or cities that funnel users to one page."**

That example is an uncomfortably precise description of a state-page set whose pages differ only by place name and all funnel to the same contact form.

**The operative distinction — and it is the single most useful sentence in this report:**

> A geo page is legitimate when **the information on it changes because the place changed.** It is a doorway when **only the place name changed.**

This is testable, cheap, and non-negotiable. Take any state page, swap "Nevada" for "Pennsylvania" throughout, and read it. If it is still accurate, the page is a doorway and should not exist. If it is now *wrong* — because Nevada uses Provider Type 14 specialty codes and Pennsylvania uses county BH-MCO carve-outs — the page has a right to exist.

*(Note on third-party guidance: several 2026-dated SEO blogs assert specific thresholds like "60–70% unique content" and describe a "2026 helpful content classifier." 🟡 **These are commentary, not Google doctrine.** Google publishes no such percentage. I include them only to note they circulate; do not build policy on them.)*

### 2.4 Are location pages worth keeping? — a decision framework

**Answer: some yes, most no.** Volume is the liability; depth is the asset. Below is the disposition I recommend.

| Page type | Example | Verdict | Rationale |
|---|---|---|---|
| **HQ local page** | `/portland/` | 🟢 **KEEP & STRENGTHEN** | Backed by a real location. Legitimate, defensible, GBP-linked. Should carry real Oregon payer/CCO specifics. |
| **Payer-specific regional page** | `/oregon-behavioral-health-payers-billing/` 🟢 (verified to exist) | 🟢 **KEEP — THIS IS THE MODEL** | Named real payers (Providence, Moda, PacificSource, OHP). Information changes because the place changed. **This is the template the rest of the geo program should be rebuilt around.** |
| **Deep state pages where real rules differ** | PA, NV, CA, TX, NY, FL, OH, MI, WA, CO | 🟡 **KEEP ~8–12, REBUILD TO DEPTH** | Only where the firm has genuine operating knowledge. Each must be independently researched and maintained. |
| **Thin state pages (the long tail)** | The remaining ~38–42 states | 🔴 **CONSOLIDATE OR REMOVE** | Cannot be differentiated without real knowledge. Highest doorway exposure, lowest value. |
| **County/city pages outside Oregon** | any | 🔴 **DO NOT BUILD** | No presence, no differentiation, no local-pack eligibility. Pure liability. |

🔵 **On execution:** consolidate rather than mass-delete. Redirect thin state pages into a single well-built hub (e.g. a nationwide credentialing guide with a state-comparison table), so the topical relevance is retained and consolidated instead of discarded. **Do not delete 40 pages in one deployment** — stage it, and keep the ~10 deep pages live throughout so there is a stable control group to read the effect against.

**Explicit caveat:** I could not read any of these pages. If the state pages are *already* deeply differentiated, the correct action is to strengthen and interlink them rather than prune. The disposition above assumes template-shaped pages, which is what "programmatic" implies and what the traffic pattern suggests — but **an on-site content audit must confirm this before anything is removed.**

### 2.5 What defensible geo content actually looks like — worked examples

This is the constructive core of Section 2. Below is real, verifiable, state-specific substance I found *by searching for it in twenty minutes*. It demonstrates that genuinely differentiated geo content in this niche is not only possible — it is abundant, and competitors are largely not doing it.

**Pennsylvania** 🟢 — the state page already exists, and PA genuinely differs:
- Behavioral health is a **mandatory carve-out**: physical-health MCOs do not cover BH claims. Providers must contract with **county-specific BH-MCOs** under HealthChoices ([PA DHS, Behavioral HealthChoices for Providers](https://www.pa.gov/agencies/dhs/resources/medicaid/bhc/bhc-providers)).
- **PROMISe** enrollment assigns a 13-digit provider ID and is *separate* from MCO credentialing — a genuine two-step process that trips up out-of-state providers.
- 🟡 Vendor sources cite a ~60–105 day total timeline (30–45 days state + 30–60 days MCO). *Cite as a vendor-reported estimate, not as fact.*
- **Why this is defensible:** "county-administered BH-MCO carve-out" is not a fact that survives find-and-replace to another state. The existing page title ("Pennsylvania Behavioral Health Credentialing **by County**") suggests the right instinct is already there — it needs depth, not redirection.

**Nevada** 🟢 — the state page exists, and NV differs sharply:
- Behavioral health runs under **Provider Type 14** with specialty codes **300 (QMHP), 301 (QMHA), 302 (QBA)** ([NV Medicaid enrollment materials](https://www.medicaid.nv.gov/Downloads/provider/NV_Provider_Enrollment_Information_Booklet.pdf)).
- 🟢 **Effective 2026-02-09, only clinical interns may enroll as QMHP under PT 14 specialty 300** (LMSW, MFT-I, CPC-I) — [web announcement 3834](https://medicaid.nv.gov/Downloads/provider/web_announcement_3834_20260209.pdf).
- QMHA/QBA applicants must submit a **CPR certification card** for Initial Competency Training; **PRSS certification** is required for QMHAs billing peer support (per SB 69, 2021 session).
- **Why this is defensible:** a specialty-code table, a dated regulatory change, and a CPR-card requirement are *unfakeable* specifics. No competitor template contains them.

**Oregon** 🟢 — the home-state advantage, currently under-exploited:
- Two-step structure: enroll with **OHA**, then contract/credential **separately with each CCO** — OHA explicitly directs providers to the CCO for that step.
- **MHACBO**-certified practitioners (QMHP, QMHA, CADC, CGAC) require the agency to hold a **COA with OHA** to enroll.
- 🟢 **PacificSource exited the Lane County CCO market; members transitioned to Trillium Community Health Plan on 2026-02-01.**
- 🟡 **CareOregon reported (as of Oct 2025) to be largely not accepting new routine outpatient BH contracts absent documented network need.** *Verify directly with CareOregon before publishing — this is exactly the kind of claim that must be right.*
- **Why this is defensible:** a closed panel and a live CCO transition are *operationally urgent* facts. A practice owner in Eugene needs this in February 2026 and cannot get it from a template. **This is the single best content asset available to the firm and it is sitting unused in its own back yard.**

**Michigan** 🟡 — illustrative of the depth available:
- Limited-licensed BH providers must work under supervision of a fully-licensed Medicaid-enrolled provider of the same profession; they cannot be directly reimbursed (payment routes to the billing provider).
- 🟡 Proposed policy indicates enrollment by **2026-10-01** to avoid disenrollment, and that for dates of service on/after **2026-08-01** services should no longer be reported under the supervising provider's NPI ([MDHHS proposed policy 2554-BH-P](https://www.michigan.gov/mdhhs/-/media/Project/Websites/mdhhs/Assistance-Programs/Medicaid-BPHASA/Public-Comment/2026/2554-BH-P.pdf)). **This surfaced as a *proposed* policy — confirm final adoption before publishing.**

**The transferable pattern.** A defensible state page is built from these ingredients, all of which are place-dependent:

1. **Medicaid program architecture** — carve-out vs carve-in, county vs statewide, MCO list by name
2. **Provider-type and specialty taxonomy** — actual codes and their eligibility rules
3. **Licensure and supervision rules** — who can bill independently, who bills under supervision, and how that is reported
4. **Named commercial payer landscape** — the regional dominants (in OR: Providence, Moda, PacificSource)
5. **Dated regulatory changes** — the "this changed on this date" facts that carry real urgency
6. **Panel status intelligence** — who is open, who is closed, who requires documented network need
7. **Realistic timelines** — with the firm's own observed data where it has it

🔵 **Two hard operating rules:**
- **Maintenance is the real constraint, not creation.** Item 7 above decays fastest and item 5 has hard expiry dates. A stale state page is worse than no state page — it is a Trust liability on a YMYL-adjacent topic. **Do not build more state pages than the firm can commit to re-verifying quarterly.** For a founder-led firm that number is realistically 8–12, not 50. This constraint alone settles the "how many" question.
- **Date-stamp and source everything.** Every regulatory claim should carry a "verified as of" date and link the primary state source. This is simultaneously the E-E-A-T play (§3) and the maintenance discipline.

🔵 **The unfair advantage nobody is using:** the firm has done these enrollments. **Publishing observed timelines from real submissions — "median 47 days across 23 PA submissions in 2025–26" — is information that literally cannot be researched, scraped, or LLM-generated by a competitor.** It is first-hand Experience in the precise sense the E-E-A-T framework means it. That, not page count, is the moat.

---

## 3. Trust / E-E-A-T Asset Plan

### 3.1 What the guidelines actually say — and one correction worth making

**E-E-A-T is not a ranking factor.** No E-E-A-T score exists in the ranking system. It is the framework **human quality raters** use to evaluate results, and those ratings are used to evaluate *changes to the systems*, not to rank individual pages. This distinction matters because it changes the goal: the aim is not to "add E-E-A-T signals" but to **actually be the more trustworthy result and make that legible.** Cargo-culting the artifacts without the substance does not work and is increasingly detected.

What the sources establish:

- **Trust is the center of the framework.** Experience, Expertise and Authoritativeness are supporting evidence; **Trust is the member that matters most**, and a page that is untrustworthy has low E-E-A-T regardless of how expert it appears ([Search Quality Rater Guidelines, Sept 2025](https://guidelines.raterhub.com/searchqualityevaluatorguidelines.pdf); [Google's public overview](https://services.google.com/fh/files/misc/hsw-sqrg.pdf)).

- **This firm is YMYL-adjacent, and that raises the bar.** YMYL covers topics that can affect health, financial stability, or safety. Raters apply **very high Page Quality standards** to YMYL topics. Behavioral-health billing and payer enrollment sit squarely in the adjacency: wrong guidance produces denied claims, delayed revenue, compliance exposure, and — for a small practice — genuine financial harm. 🔵 **Assume the high bar applies. Do not argue the edge case.**

- **Raters research reputation using *independent* sources**, not the site's own claims. This is the direct bridge to Section 1: the trust assets in §3.2 make the claim, and the citations in §4 make it *corroborable*. **Neither works alone.** On-site assets without off-site corroboration are assertions; off-site mentions without on-site substance have nothing to point at.

- **Raters check "Website Information" — who is responsible for the site.** Missing or evasive About/Contact information on a YMYL site is a recognized quality problem.

- **Google's own content guidance is built around "Who, How, and Why"** — who created the content, how it was produced, and why it exists — and explicitly recommends self-identifying authorship where a reader would reasonably expect it ([Creating helpful, reliable, people-first content](https://developers.google.com/search/docs/fundamentals/creating-helpful-content)).

### 3.2 The trust asset build — prioritized

Ordered by **(impact × credibility gain) ÷ effort**, not by convention.

| # | Asset | What "done" means | Why it matters | Priority |
|---|---|---|---|---|
| 1 | **Founder entity page** (`/ryan-berg/` or `/about/ryan-berg/`) | A real Person page — not a paragraph on About. Full bio, 16-yr career narrative with named roles and dates, credential block, photo, `sameAs` links out to LinkedIn + credential verification, list of every article/talk authored. `ProfilePage` + `Person` schema. | Directly answers "Who." Creates the Person entity that currently does not resolve (§1.4). **The single highest-leverage on-site asset.** | **P0** |
| 2 | **Verifiable credential display** | CPB and CMOM shown with **issuing body named and linked** — CPB → [AAPC](https://www.aapc.com/certifications/cpb); **CMOM → [Practice Management Institute](https://www.pmimd.com/certify/certified-medical-office-manager-certification.asp)**. Include credential/member ID where policy allows and link any public verification tool. | Converts an assertion into a checkable fact. ⚠️ **Accuracy note: CMOM is issued by PMI. PAHCOM's credential is CMM, not CMOM.** 🟢 Verified — attributing CMOM to PAHCOM would be a factual error that undermines the exact credibility it is meant to build. | **P0** |
| 3 | **Rebuilt About page** | Founding story and date, why the firm exists, who it serves and who it does *not*, how work is actually performed, real photos, business entity name, Portland address, phone, named team. | Answers Who/How/Why in one place. Raters look here first. | **P0** |
| 4 | **Author bylines site-wide** | Every substantive page bylined to a Person page, with "Published" and **"Last verified"** dates. | Ties every regulatory claim to an accountable named expert. The "last verified" date is what makes a §2.5 state page credible. | **P0** |
| 5 | **Security / HIPAA / BAA statement** | Dedicated page: BAA offered and signed as standard; how PHI is transmitted and stored; subcontractor handling; breach-notification posture; named privacy contact. | 🟢 A medical billing company **is** a HIPAA business associate; covered entities are required under 45 CFR §§164.502(e) and 164.504(e) to obtain satisfactory assurances ([HHS](https://www.hhs.gov/hipaa/for-professionals/covered-entities/sample-business-associate-agreement-provisions/index.html)). This is a **procurement gate** — every serious prospect asks. Rare among small competitors; disproportionate trust win. | **P0** |
| 6 | **Case studies with real numbers** | 3–5 studies: situation, intervention, measured outcome, timeframe. Specialty/size/state named even where the client is anonymized. | First-hand Experience — the "E" competitors cannot fabricate. ⚠️ **Every number must be real and defensible.** Anonymize rather than invent. An unverifiable metric is worse than none. | **P1** |
| 7 | **Named client testimonials** | Full name, credentials, practice name, location, photo. Written consent on file. | Anonymous testimonials carry ~zero rater weight. Named ones are independently checkable. Even 3–5 named beats 20 anonymous. | **P1** |
| 8 | **Organization + Person + Service schema** | See §3.4. | Machine-readable entity disambiguation. | **P1** |
| 9 | **`sameAs` entity linking** | See §3.4. | The only mechanism that ties the scattered profiles into one entity. | **P1** |
| 10 | **Pricing transparency** | Real model and real ranges — % of collections, per-claim, flat monthly, credentialing per-application. Even a floor ("engagements typically start at $X/mo") beats "contact us." | Reduces the single largest B2B trust friction. Also captures high-intent "how much does X cost" queries competitors avoid. | **P1** |
| 11 | **Methodology / "How we work" page** | Onboarding sequence, tools, reporting cadence, SLAs, escalation, offboarding and data-return terms. | Answers "How." Offboarding terms especially — it signals a firm unafraid of clients leaving. | **P2** |
| 12 | **Editorial / accuracy policy** | How regulatory content is researched, sourced, reviewed, re-verified; correction process. | Makes the §2.5 maintenance discipline visible as a quality signal. | **P2** |

### 3.3 Corroboration — the step that is usually skipped

Everything in §3.2 is a **claim made by the firm about the firm.** Raters are directed to *independent* sources. So each P0 asset needs an off-site counterpart:

| On-site claim | Off-site corroboration to build |
|---|---|
| "Ryan Berg, CPB" | AAPC member/chapter presence; AAPC Knowledge Center contribution (§4) |
| "Ryan Berg, CMOM" | PMI-side presence or verifiable credential record |
| "16+ years in healthcare RCM" | LinkedIn profile with full, consistent employment history — **dates and employers must match the site exactly** |
| "Founder-led behavioral health billing firm" | HBMA biller directory listing; podcast appearances; bylined articles |
| "Portland-based" | Verified GBP; consistent NAP across all listings |

⚠️ **NAP and biography consistency is a precondition, not a nicety.** Conflicting dates, titles, or addresses across LinkedIn / Yelp / GBP / site actively *damage* entity confidence. 🔵 **Audit and reconcile all of it before adding anything new.**

### 3.4 Schema implementation

Two objectives: **disambiguate the entity** (§1.4) and **make credentials machine-readable.**

`Organization` — on the homepage, using `@id` as a stable canonical entity node:

```json
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "@id": "https://advanceapractice.com/#organization",
  "name": "AdvanceAPractice Management",
  "alternateName": "AdvanceAPractice",
  "url": "https://advanceapractice.com/",
  "logo": "https://advanceapractice.com/logo.png",
  "telephone": "+1-971-888-2880",
  "foundingDate": "2023",
  "founder": { "@id": "https://advanceapractice.com/#ryanberg" },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Portland",
    "addressRegion": "OR",
    "addressCountry": "US"
  },
  "areaServed": { "@type": "Country", "name": "United States" },
  "knowsAbout": [
    "Behavioral health medical billing",
    "Provider credentialing",
    "Payer enrollment",
    "Revenue cycle management"
  ],
  "sameAs": [
    "https://www.linkedin.com/company/advanceapractice",
    "https://www.facebook.com/p/AdvanceApractice-Management-100094167818307/",
    "https://www.yelp.com/biz/advance-a-practice-portland"
  ]
}
```

`Person` — on the founder entity page, with credentials as `hasCredential`:

```json
{
  "@context": "https://schema.org",
  "@type": "Person",
  "@id": "https://advanceapractice.com/#ryanberg",
  "name": "Ryan Berg",
  "jobTitle": "Founder",
  "worksFor": { "@id": "https://advanceapractice.com/#organization" },
  "knowsAbout": [
    "Behavioral health billing",
    "Medicaid provider enrollment",
    "Payer contracting"
  ],
  "hasCredential": [
    {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "certification",
      "name": "Certified Professional Biller (CPB)",
      "recognizedBy": { "@type": "Organization", "name": "AAPC", "url": "https://www.aapc.com/" }
    },
    {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "certification",
      "name": "Certified Medical Office Manager (CMOM)",
      "recognizedBy": { "@type": "Organization", "name": "Practice Management Institute", "url": "https://www.pmimd.com/" }
    }
  ],
  "sameAs": ["https://www.linkedin.com/in/advanceapractice/"]
}
```

🔵 **Implementation rules:**
- **Every `sameAs` target must be live, accurate, and controlled by the firm.** A dead or wrong `sameAs` is worse than an omitted one. **Expand this array as §4 citations land** — that is the mechanism by which off-site work compounds into entity strength.
- **Use `@id` consistently** so Organization, Person, Service and Article nodes reference one graph rather than repeating disconnected blobs.
- **Add `Service` schema** per service page, each with `provider` → `#organization`.
- **Add `Article` + `author` → `#ryanberg`** on every state/regulatory page. This is what converts the §2.5 pages from anonymous templates into bylined expert content.
- ⚠️ **Schema describes reality; it does not create it.** Marking up credentials that are not displayed, or an address that is not real, is a trust problem, not a shortcut. Ship §3.2 first, then mark it up.

---

## 4. Link & Citation Acquisition Plan

### 4.1 Compliance guardrails — binding on everything below

Per [Google's link spam policy](https://developers.google.com/search/docs/essentials/spam-policies):

- **No buying links that pass ranking credit.** Google is explicit that buying and selling links is a normal part of the web economy for advertising and sponsorship **and is not a policy violation — provided the links are qualified with `rel="nofollow"` or `rel="sponsored"`.**
- ⚠️ **This directly governs several items below.** Association advertising, sponsorships, and conference listings are frequently *paid*. They are **legitimate marketing and legitimate citations** — but the link must carry `rel="sponsored"`. 🔵 **Where the firm pays, it should proactively ask the publisher to mark the link sponsored.** Pursue these for referral traffic, brand, and entity corroboration — **never for PageRank.** A nofollowed link from a real association still corroborates the entity for a human rater and still sends real prospects.
- **No PBNs, link exchanges, paid guest posts, niche edits, or automated outreach at scale.** None appear below.
- **No fabricated listings.** Every item below is either 🟢 verified to exist or explicitly flagged 🔴 unverified.

### 4.2 Correction to a premise in the brief

The brief assumes EHR vendor partner directories (SimplePractice, TherapyNotes, Alma, Headway, TheraNest) are available listing targets. 🔴 **I could not confirm that public, listable partner/integration directories exist for SimplePractice or TherapyNotes.** What I *did* verify: both platforms support third-party billers via role-based access (billers log in to submit claims, post ERAs, manage denials without clinical-note access) 🟡, SimplePractice operates the **Monarch** directory — which lists *therapists*, not vendors 🟢, and Alma/Headway are **credentialing-and-billing platforms in their own right** — i.e. partially **competitors**, not partners 🟢.

🔵 **Revised approach:** treat these as **content-and-relationship** targets (integration expertise, vendor blogs, community presence), not as directory-listing targets. Items 8–10 below are rewritten accordingly. Verify each directly before investing outreach time.

### 4.3 The opportunity list

**Tier 1 — Foundational citations (weeks 1–4, do these first)**

| # | Opportunity | What it is | Why plausible for this firm | The ask |
|---|---|---|---|---|
| 1 | **Google Business Profile** 🟢 | Verified Portland listing | Real HQ; eligibility hinges on in-person contact (§2.2) | Claim, verify, fully populate, add to `sameAs`. Then request reviews from Portland-area clients. |
| 2 | **HBMA "Find a Biller" directory** 🟢 [hbma.org/find-a-biller.php](https://www.hbma.org/find-a-biller.php) | The trade association for RCM companies; searchable biller directory by name, location, specialty, CHBME status | **The single most on-target citation available.** Purpose-built for exactly this firm type. Dues scale by FTE count — viable for a small firm. | Join as an RCM Company member; complete directory profile with behavioral-health specialty. ⚠️ Note HBMA states marketing via the *membership* directory is prohibited — the find-a-biller tool is the client-facing listing. |
| 3 | **AAPC membership + Portland chapter** 🟢 [AAPC local chapters](https://www.aapc.com/localchapters/) · [AAPC Portland Chapter](https://www.facebook.com/portlandaapc/) | 500+ local chapters; members attend for low-cost CEUs and networking | He holds the CPB — membership is native, not a stretch | Join; attend Portland chapter; **offer to present on behavioral-health credentialing for CEU credit.** ⚠️ AAPC states vendor platforms may not be used during meetings — **present as an expert, do not pitch.** |
| 4 | **AAPC Knowledge Center** 🟢 [aapc.com/blog](https://www.aapc.com/blog/) | AAPC's editorial hub for coding/billing professionals | Behavioral-health billing is under-covered relative to its claim volume; he has the credential and the specialty | Pitch a bylined piece — e.g. "Why Behavioral Health Credentialing Fails Differently Than Medical." |
| 5 | **PMI (Practice Management Institute)** 🟢 [pmimd.com](https://www.pmimd.com/) | CMOM issuing body; CE provider since 1983 | He holds the CMOM | Seek credential verification presence; explore CE/webinar contribution. |
| 6 | **BBB (Portland)** 🟡 | Standard local trust directory | Legitimate Portland business; 🔴 no existing profile found | Create and verify the profile. Modest SEO value, real B2B trust value. |
| 7 | **Directory hygiene pass** 🔵 | Yelp, Facebook, LinkedIn, any aggregator listings | 🟡 Yelp snippet suggests categories include web design / social media marketing (§1.5) | Reconcile NAP exactly; strip non-core categories; align descriptions to the billing/credentialing core. Free, one hour. |

**Tier 2 — EHR / platform ecosystem (weeks 3–10)** — *revised per §4.2*

| # | Opportunity | What it is | Why plausible | The ask |
|---|---|---|---|---|
| 8 | **SimplePractice / TherapyNotes billing-partner programs** 🔴 unverified | Existence of a public partner directory not confirmed | Firm demonstrably works inside these systems | **Verify first.** Contact partnerships directly; ask whether a referral or partner program exists. Do not assume. |
| 9 | **TheraNest / Ensora Health** 🟡 [ensorahealth.com](https://ensorahealth.com/) | Publishes practice-operations content (e.g. billing-under-supervision guidance) | Content-topic overlap is exact | Pitch a contributed piece on credentialing or supervision billing. |
| 10 | **TherapyAppointment — guest contributor** 🟢 [Become a Guest Contributor](https://www.therapyappointment.com/blog/become-a-guest-contributor) | **Explicit, published, open contributor program** for therapists entering/managing practice; ~800 words | 🟢 Verified open door, audience is precisely the buyer | Submit a practical piece — e.g. "What to Verify Before You Sign Your First Payer Contract." |
| 11 | **Alma / Headway / Grow Therapy content** 🟢 | Credentialing-and-billing platforms serving the same buyer | ⚠️ Partial competitors — frame as complement (their model suits solos; his suits groups outgrowing them) | Pitch commentary on when a practice outgrows platform-based credentialing. Expect a lower hit rate. |
| 12 | **Heard** 🟢 [joinheard.com](https://www.joinheard.com/) | Accounting/bookkeeping for therapists; active content operation | **Ideal adjacency — same buyer, zero service overlap.** Strongest partnership logic on this list. | Propose co-authored content or a joint webinar on practice financial operations. |

**Tier 3 — Podcasts & audio (weeks 4–16)** — 🟢 all verified to exist; 🔴 none has been approached

| # | Opportunity | URL | Why plausible | The ask |
|---|---|---|---|---|
| 13 | **Selling the Couch** | [sellingthecouch.com](https://sellingthecouch.com/) | Large, long-running private-practice audience | Pitch: "The revenue you're losing to credentialing gaps you can't see." |
| 14 | **Abundant Practice Podcast** | [abundancepracticebuilding.com](https://www.abundancepracticebuilding.com/) | Practice-building focused; Q&A format | Pitch as the insurance/billing answer-guy segment. |
| 15 | **The Modern Therapist's Survival Guide** | [therapyreimagined.com](https://therapyreimagined.com/) | Business-of-therapy topics | Pitch: what changes operationally when you go from solo to group. |
| 16 | **Practice of the Practice** | [practiceofthepractice.com](https://www.practiceofthepractice.com/) | Large practice-building network + blog | Pitch group-practice RCM. Blog contribution possible alongside audio. |
| 17 | **The Practice of Therapy** | [practiceoftherapy.com](https://practiceoftherapy.com/) | Private-practice resources and podcast | Pitch behavioral-health A/R discipline. |
| 18 | **Private Practice Elevation** | [privatepracticeelevation.com](https://privatepracticeelevation.com/) | Practice growth/marketing; runs guest interviews | Pitch the operations counterpart to marketing growth. |
| 19 | **The Business Savvy Therapist** | [Apple Podcasts](https://podcasts.apple.com/ky/podcast/the-business-savvy-therapist-marketing-hiring-systems/id1681659688) | Marketing, hiring, systems for scaling practices | Pitch: systems that must exist before you hire clinician #5. |
| 20 | **Starting a Counseling Practice Success Stories** | [Apple Podcasts](https://podcasts.apple.com/us/podcast/starting-a-counseling-practice-success-stories/id1398391639) | New-practice audience | Pitch: credentialing timelines and how to not run out of runway. |

🔵 **Podcast execution note:** a founder with a specific, quantified, first-hand story ($2M→$6M, $1.5M in aged A/R recovered) is genuinely bookable — **but only with a specific pitch.** Do not pitch "billing expert available." Pitch one episode-shaped idea per show, tailored. Realistic conversion on 8 targeted pitches: 2–4 bookings. **Each booking yields a bio link, a `sameAs` target, and — most valuably — a citable Experience artifact for §3.**

**Tier 4 — Associations (weeks 6–20)** — ⚠️ §4.1 sponsored-link rule applies to every paid item here

| # | Opportunity | What it is | Why plausible | The ask |
|---|---|---|---|---|
| 21 | **APA state/provincial association index** 🟢 [apa.org/about/apa/organizations/associations](https://www.apa.org/about/apa/organizations/associations) | Canonical list of every state psychological association | **Use this as the systematic prospecting spine**, not a target itself | Work the list; prioritize states where a deep page exists (§2.4). |
| 22 | **Georgia Psychological Association — vendor directory** 🟡 [gapsychology.org](https://www.gapsychology.org/) | Snippet indicates a vendor directory exists | Verified-ish example of the affiliate-vendor pattern | Verify, then apply as an affiliate/vendor member. |
| 23 | **Pennsylvania Psychological Association** 🟢 [papsy.org](https://www.papsy.org/) | Practice-resource programming | **PA page already exists and ranks** — association work compounds with it | Offer a CE webinar on PA BH-MCO credentialing. Genuinely useful; PA's county carve-out confuses everyone. |
| 24 | **Oregon Psychological Association** 🟢 [opa.org](https://opa.org/) | Home-state association; newsletter committee handles advertising | Home-state credibility; strongest relationship odds | Member/affiliate status; offer a member-benefit workshop. |
| 25 | **Oregon Counseling Association** 🟡 [or-counseling.org/Advertising-Policy](https://or-counseling.org/Advertising-Policy) | Paid advertising available | ⚠️ **Policy states ORCA does not accept ads for private businesses outside the counseling profession** — a billing vendor may be ineligible | **Ask before assuming.** Better angle: contribute a free educational resource rather than buying an ad. |
| 26 | **NASW state chapters** 🟢 [socialworkers.org](https://www.socialworkers.org/) | LCSWs are a large share of BH billing volume | Under-served by billing vendors relative to volume | Chapter-level CE or newsletter contribution. |
| 27 | **PAHCOM** 🟢 [pahcom.com](https://pahcom.com/) | Association for solo/small-group practice managers; chapter network | Audience *is* the buyer persona | Membership; chapter presentation. ⚠️ PAHCOM's credential is **CMM**, not CMOM (§3.2). |
| 28 | **National Council for Mental Wellbeing** 🟢 [thenationalcouncil.org](https://www.thenationalcouncil.org/) | Largest BH provider-organization body | Aspirational but on-target for a maturing firm | Longer-term: conference participation, member-org content. |

**Tier 5 — Expert sourcing & owned authority (ongoing from week 1)**

| # | Opportunity | What it is | Why plausible | The ask |
|---|---|---|---|---|
| 29 | **HARO (relaunched) + Featured** 🟢 [featured.com](https://featured.com/) | ⚠️ **Status correction:** Connectively (HARO's successor) **shut down 2024-12-09**; **Featured.com acquired HARO from Cision in April 2025 and relaunched it** free for sources ([Octiv Digital](https://www.octivdigital.com/ideas-and-advice/connectively-formerly-haro-to-shut-down-on-december-9-2024/); [Search Engine Roundtable](https://www.seroundtable.com/haro-connectively-platform-closing-38388.html); [Backlinko](https://backlinko.com/haro-alternatives)) | A credentialed specialist answering niche queries beats generalists | Monitor healthcare/small-business queries; answer with specifics only. Low hit rate, real payoff. |
| 30 | **Qwoted** 🟢 [qwoted.com](https://www.qwoted.com/) | Journalist-source platform with free tier | Healthcare-finance queries recur | Build an expert profile; respond selectively. |
| 31 | **Help a B2B Writer** 🟢 [helpab2bwriter.com](https://helpab2bwriter.com/) | B2B-specific source requests | Closest fit to his B2B niche | Subscribe; respond to healthcare/RCM queries. |
| 32 | **LinkedIn newsletter** 🔵 | Owned, recurring, on the platform where the buyer is | ⚠️ **Precondition: fix the personal vanity URL first (§1.4).** Publish from the **Person**, not the company. | Biweekly, one hard-earned operational insight per issue. **Feed it from §2.5 state research — one state per issue.** Builds the Person entity, creates repurposable article assets, and generates the citable body of work that makes items 4/10/13–20 land. |

### 4.4 Sequencing and realistic expectations

🔵 **Order matters, and one dependency dominates:**

> **Do Section 3 before Section 4.** Every pitch in §4.3 sends an editor, producer or association director to the website. If they land on a site with no founder entity page, no verifiable credentials, and no case studies, **the pitch fails and the relationship is spent.** The trust assets are not a parallel workstream — they are the *precondition* for outreach converting.

| Phase | Weeks | Focus | Items |
|---|---|---|---|
| **0 — Foundation** | 1–4 | P0 trust assets (§3.2 #1–5) + directory hygiene | 1, 2, 6, 7 |
| **1 — Credibility base** | 3–8 | Association memberships; LinkedIn newsletter launch | 3, 5, 24, 27, 32 |
| **2 — Earned media** | 4–16 | Podcast pitches (batch of 8, tailored); contributor programs | 10, 13–20, 29–31 |
| **3 — Editorial authority** | 8–20 | Bylines; association CE; partner content | 4, 9, 11, 12, 21–23, 25, 26 |
| **4 — Scale** | 20+ | Conference/industry presence | 28 |

**Expectations, stated honestly:**
- Tier 1 is near-certain and mostly free. Do it regardless.
- Tier 3 realistically converts at ~25–50% *with a specific pitch and a credible site*; near 0% without either.
- **This is a 6–12 month program.** Authority accrues slowly and is the reason the next core update behaves differently than the last one. Nothing here recovers traffic in 30 days, and anything that claims to would violate §4.1.
- **The compounding loop is the point:** trust assets make pitches land → placements create `sameAs` targets and citable Experience → entity consolidates → state pages gain a floor they currently do not have. **The links are not the goal. The floor is.**

---

## 5. Bottom Line

1. **The external authority footprint is effectively empty** — seven discoverable properties, three of them self-published, two published by competitors, one an accidental logo-contest artifact. No podcasts, no bylines, no association listings, no partner pages. 🟢
2. **No toxic link pattern exists.** The problem is absence, not abuse. **Do not disavow anything.** 🟢
3. **The traffic loss is best explained by fragility, not penalty.** Programmatic state pages ranked on content relevance alone, with no authority floor beneath them. A core update recalibrated relevance and there was nothing left holding them up. Rebuilding pages without building authority reproduces the same failure. 🔵
4. **The brand name collides with "advanced practice"** — a universal clinical term — and the founder's LinkedIn is addressed by the company string. The entity has almost certainly never consolidated. Fixing this is high-leverage and cheap. 🟢
5. **This is not a local SEO business.** GBP caps out around Portland by construction, because distance is not tunable. Claim and populate it as a *trust* asset; stop expecting geographic reach from it. 🟢
6. **Keep roughly 8–12 deep state pages, consolidate the rest.** The binding constraint is not what can be written but **what can be re-verified quarterly.** A stale regulatory page is a Trust liability. 🔵
7. **Genuinely differentiated geo content is abundant and competitors are not doing it** — PA's county BH-MCO carve-out, NV's Provider Type 14 specialty codes and the 2026-02-09 QMHP restriction, Oregon's CCO transitions and closed panels. The existing `/oregon-behavioral-health-payers-billing/` page is already the right model. 🟢
8. **The moat is first-hand operational data** — observed enrollment timelines from real submissions. Unscrapeable, un-generatable, and the literal definition of Experience. 🔵
9. **Sequence trust assets before outreach.** Every pitch sends someone to the site; an unconvincing site burns the relationship permanently. 🔵

---

## Appendix A — Source Index

**Google documentation & guidelines**
- [Spam Policies for Google Web Search](https://developers.google.com/search/docs/essentials/spam-policies) — scaled content abuse, doorway abuse, link spam
- [Creating helpful, reliable, people-first content](https://developers.google.com/search/docs/fundamentals/creating-helpful-content) — Who/How/Why, self-assessment
- [What site owners should know about core updates](https://developers.google.com/search/blog/2019/08/core-updates)
- [Search Quality Rater Guidelines (Sept 2025)](https://guidelines.raterhub.com/searchqualityevaluatorguidelines.pdf) · [Google's public overview](https://services.google.com/fh/files/misc/hsw-sqrg.pdf)
- [Business eligibility and ownership guidelines](https://support.google.com/business/answer/13763036?hl=en) · [Manage service areas](https://support.google.com/business/answer/9157481?hl=en) · [Improve local ranking](https://support.google.com/business/answer/7091?hl=en)
- [Organization structured data](https://developers.google.com/search/docs/appearance/structured-data/organization)

⚠️ All Google URLs above were **identified via search results but could not be opened** (`developers.google.com`, `support.google.com`, `guidelines.raterhub.com` all egress-blocked). Policy language is reproduced from search snippets and corroborating secondary coverage; **verify verbatim wording against the live docs before quoting externally.**

**Client-related properties (verified to exist via search)**
- [LinkedIn company](https://www.linkedin.com/company/advanceapractice) · [LinkedIn founder](https://www.linkedin.com/in/advanceapractice/) · [Facebook](https://www.facebook.com/p/AdvanceApractice-Management-100094167818307/) · [Yelp](https://www.yelp.com/biz/advance-a-practice-portland) · [DesignCrowd contest](https://www.designcrowd.com/logo-design/contest/4063149)
- Listicles: [MediBillMD](https://medibillmd.com/blog/medical-billing-companies-in-portland/) · [Nexus IO](https://thenexusio.com/blog/medical-billing-companies-in-portland/) — both egress-blocked; rank and link attributes unverified

**State regulatory sources (for §2.5)**
- [PA DHS — Behavioral HealthChoices for Providers](https://www.pa.gov/agencies/dhs/resources/medicaid/bhc/bhc-providers)
- [NV Medicaid — Provider Enrollment Information Booklet](https://www.medicaid.nv.gov/Downloads/provider/NV_Provider_Enrollment_Information_Booklet.pdf) · [Web announcement 3834 (2026-02-09)](https://medicaid.nv.gov/Downloads/provider/web_announcement_3834_20260209.pdf) · [PT14-82 QMHA enrollment checklist](https://www.medicaid.nv.gov/Downloads/provider/NV_EnrollmentChecklist_PT14-82_QMHA_Flex.pdf)
- [MI MDHHS — proposed policy 2554-BH-P](https://www.michigan.gov/mdhhs/-/media/Project/Websites/mdhhs/Assistance-Programs/Medicaid-BPHASA/Public-Comment/2026/2554-BH-P.pdf) (⚠️ *proposed*; confirm adoption)
- [CareOregon provider support](https://www.careoregon.org/providers/support) · [Trillium behavioral health](https://www.trilliumohp.com/providers/resources/TBH.html)

**Associations, credentials, directories**
- [HBMA find-a-biller](https://www.hbma.org/find-a-biller.php) · [HBMA join](https://www.hbma.org/content/membership/join-hbma)
- [AAPC CPB](https://www.aapc.com/certifications/cpb) · [AAPC local chapters](https://www.aapc.com/localchapters/) · [AAPC Portland Chapter](https://www.facebook.com/portlandaapc/)
- [PMI — CMOM certification](https://www.pmimd.com/certify/certified-medical-office-manager-certification.asp) (⚠️ CMOM is PMI's, **not** PAHCOM's) · [PAHCOM](https://pahcom.com/)
- [APA state association index](https://www.apa.org/about/apa/organizations/associations) · [OPA](https://opa.org/) · [ORCA advertising policy](https://or-counseling.org/Advertising-Policy) · [PPA](https://www.papsy.org/) · [GPA](https://www.gapsychology.org/)
- [HHS — Business Associate Contracts](https://www.hhs.gov/hipaa/for-professionals/covered-entities/sample-business-associate-agreement-provisions/index.html)

**Expert sourcing & outreach**
- [TherapyAppointment guest contributor](https://www.therapyappointment.com/blog/become-a-guest-contributor) · [Featured.com](https://featured.com/) · [Qwoted](https://www.qwoted.com/) · [Help a B2B Writer](https://helpab2bwriter.com/)
- HARO status: [Octiv Digital](https://www.octivdigital.com/ideas-and-advice/connectively-formerly-haro-to-shut-down-on-december-9-2024/) · [Search Engine Roundtable](https://www.seroundtable.com/haro-connectively-platform-closing-38388.html) · [Backlinko](https://backlinko.com/haro-alternatives)

---

## Appendix B — What Remains Unverified

Listed so no one downstream mistakes a gap for a finding.

| Item | Why unverified | How to close it |
|---|---|---|
| Actual backlink profile (count, referring domains, DR, anchor text) | No SEO tool access | Ahrefs / Semrush / Majestic export |
| Whether any listicle link is followed | All five domains egress-blocked | Open pages; inspect `rel` |
| Yelp review count, rating, claim status | Yelp egress-blocked | Open the listing |
| Whether a GBP exists today | Cannot query Maps | Search Maps; check GBP dashboard |
| Actual content depth of `/portland/` and state pages | Client domain blocked by design | On-site content audit (Workstream A/B) |
| Whether "4.3/5 rating" and "95% clean claim ratio" are real | ⚠️ These appear **only in third-party listicle snippets**, which typically reproduce vendor-supplied copy. **Not verified review aggregates. Do not republish as review data.** | Confirm origin with client |
| "#7 area-wide" Nexus IO rank | Traced to the client's own /about/ page, not an independent reading | Open the Nexus IO page |
| CPB / CMOM credential currency | No public verification performed | Client provides credential IDs; verify with AAPC and PMI |
| Existence of SimplePractice/TherapyNotes partner programs | Not confirmed to exist | Contact partnerships teams directly |
| Whether MI policy 2554-BH-P was adopted | Surfaced as *proposed* | Check MDHHS final bulletins |
| CareOregon panel-closure status | 🟡 Reported Oct 2025; may have changed | Confirm with CareOregon before publishing |
