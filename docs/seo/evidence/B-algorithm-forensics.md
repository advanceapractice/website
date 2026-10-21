# B — Algorithm Forensics: Why a Site Like advanceapractice.com Lost Major Organic Traffic (2025–2026)

**Prepared:** 2026-09-14
**Subject site profile (as briefed, not verified by crawl):** advanceapractice.com — behavioral-health billing, credentialing & payer enrollment, practice operations. US B2B services. Portland, OR base, nationwide service. Founder-led (Ryan Berg, CPB/CMOM). Structure: homepage; service pages `/mental-health-billing/`, `/medical/`, `/practice-operations/`; `/about/`, `/contact/`; `/resources/` hub; `/portland/` local page; **programmatic state-level pages** e.g. `/credentialing-and-payer-enrollment-nevada/`, `/credentialing-and-payer-enrollment-pennsylvania/` (PA titled "…by County", implying county-level templating).

---

## Method, scope, and honesty notes

**Hard constraint honored.** advanceapractice.com was **not** fetched, cached, mirrored, or proxied. Nothing in this report is an observation of the live site. Every site-specific statement is a *hypothesis conditioned on the briefed profile* and is labeled as such.

**Tooling limits encountered.** In this environment the egress proxy blocked direct page fetches from: `developers.google.com`, `support.google.com`, `status.search.google.com`, `services.google.com`, `searchengineland.com`, `seroundtable.com`, `searchenginejournal.com`, `ahrefs.com`, `moz.com`, `pewresearch.org`. Research was therefore conducted via web search, which returns indexed summaries plus source URLs. **Consequence:** primary-source wording from Google's own docs is reported at one remove. Where exact policy wording matters I have flagged it. Links below point at the canonical sources so the owner can verify wording directly.

**Confidence legend used throughout:**

| Tag | Meaning |
|---|---|
| **[A — Documented]** | Stated by Google directly, or by a first-party dataset from a named, methodologically transparent researcher. Treat as fact. |
| **[B — Well-corroborated]** | Reported consistently across multiple independent industry outlets; no primary Google confirmation of the causal claim. Treat as probably true. |
| **[C — Single-source / thin]** | One source, or a vendor with an incentive. Treat as a lead, not a finding. |
| **[D — SEO folklore]** | Widely repeated in the SEO community with no verifiable evidence. Explicitly *not* a basis for action. |

---

## 0. Executive summary — the ranked causal hypothesis

For a site with **this exact shape** — small first-party B2B services site, thin editorial footprint, YMYL-adjacent subject matter, and a **templated state/county page set** — the probability mass concentrates hard. Ranked:

1. **Site-level quality demotion driven by the programmatic state/county page set, expressed through one or more core updates (Dec 2025 / Mar 2026 / May 2026).** This is the single most likely primary cause. The March 2026 core update was specifically characterized across independent analyses as hitting "sites relying on keyword-swapped templates" **[B]**, and on **7 September 2026** Google's John Mueller said in public that programmatic page sets can cause Google's systems to "lose faith in your site providing good value to users" — a **site-wide** effect that persists on the basis of the *old* pages **[A]**. The `[service] + [state]` / `…by County` naming pattern is a textbook match for both the **doorway abuse** and **scaled content abuse** sections of Google's spam policies.
2. **Structural CTR loss to AI Overviews / AI Mode on the informational half of the query mix.** Real, large, and measurable — but it is a *clicks* loss, not a *rankings* loss, and it has a distinct GSC fingerprint. Commercial-intent AIO coverage grew 71% over a six-month window in Semrush's 600k-keyword study **[A]**; Pew measured click rate falling from 15% → 8% when an AI summary is present **[A]**.
3. **Measurement artifacts masquerading as a decline.** Two separate, Google-confirmed events in the window can make a *flat* site look catastrophic in GSC: the **`&num=100` removal (~10–14 Sept 2025)**, which cut reported impressions for ~88% of properties **[A/B]**, and the **GSC impressions logging error running 13 May 2025 → 27 April 2026**, whose *fix* dropped reported impressions 30–40% overnight for some properties **[A]**. **Neither affected clicks.** Any diagnosis that does not first separate these is worthless.
4. **Technical / indexing regression.** Elevated "Crawled – currently not indexed" reports across the industry from April 2026 onward **[B]**; Google says nothing unusual is happening **[A]**. For a small site, a single bad `robots.txt`, canonical, or `noindex` deploy is still the cheapest thing to rule out and must be checked first.
5. **Manual action.** Lowest prior probability, but binary and instantly checkable. If present, everything above is moot.
6. **Seasonality.** Real and non-trivial in this niche (CPT code year turnover on 1 January; credentialing/enrollment cycles), but it explains *shape*, not *level*. It cannot explain a major YoY decline on its own.

**The one thing that would change this ranking:** if GSC shows *clicks* holding while *impressions* fell, this is #3 (measurement artifact), not #1. Check that before anything else.

---

## 1. Google algorithm update timeline, January 2025 → September 2026

### 1.1 Confirmed updates table

All entries below were announced by Google on its Search Status Dashboard / Search Central. Dates are rollout start → rollout complete.

| # | Update | Start | Complete | Duration | Scope / what Google said it targeted | Confidence |
|---|---|---|---|---|---|---|
| 1 | **March 2025 core update** | 2025-03-13 | 2025-03-27 | 14 days | Broad core. Google framed it as "a regular update designed to better surface relevant, satisfying content for searchers from all types of sites." Global, all languages. | **[A]** |
| 2 | **June 2025 core update** | 2025-06-30 | 2025-07-17 | ~16–17 days | Broad core. Global. | **[A]** |
| 3 | **August 2025 spam update** | 2025-08-26 | 2025-09-21/22 | ~26–27 days | Spam. Global, all languages. Community analysis attributes emphasis to scaled/thin content, expired-domain abuse, and site reputation abuse; Google did not enumerate targets. | **[A]** dates / **[B]** targets |
| 4 | **December 2025 core update** | 2025-12-11 | 2025-12-29 | 18 days | Broad core. Widely characterized as a quality/expertise/trust recalibration extending E-E-A-T pressure beyond classic YMYL. Named losers included large publishers; thin-affiliate cohorts reported severe losses. | **[A]** dates / **[B]** characterization |
| 5 | **February 2026 Discover core update** | 2026-02-05 | 2026-02-26 | 21 days | **Discover only — not web Search.** First Discover-specific core update Google has ever announced. English-language US users initially. Goals: more locally relevant content, less sensationalism/clickbait, more in-depth original content from sites with demonstrated topical expertise. | **[A]** |
| 6 | **March 2026 spam update** | 2026-03-24 | 2026-03-25 | <20 hours (reported ~19.5h — fastest confirmed spam rollout on record) | Spam. Global. No new policy announced. | **[A]** dates / **[B]** "fastest ever" |
| 7 | **March 2026 core update** | 2026-03-27 | 2026-04-08 | ~12 days | Broad core. Global. Independent analyses converge on: aggregators, thin affiliate content, **keyword-swapped template sites**, and unreviewed AI output taking the steepest declines; proprietary data / first-hand case studies / expert commentary gaining. Notable: even established YMYL health authorities (Cleveland Clinic, MedlinePlus, WebMD, Mayo, Johns Hopkins, NHS UK) posted visibility losses — brand alone stopped acting as a ranking floor. | **[A]** dates / **[B]** winners-losers |
| 8 | **May 2026 core update** | 2026-05-21 | 2026-06-02 | ~12 days | Broad core. Global. Described as **reinforcing rather than reversing** March's direction; reported as the most volatile update of 2026. | **[A]** dates / **[B]** characterization |
| 9 | **June 2026 spam update** | 2026-06-24 | 2026-06-26 | ~2 days | Spam. Global, all languages. No blog post, no policy change. Google confirmed it was **not** specifically a link-spam or site-reputation-abuse action. | **[A]** |
| 10 | **August 2026 spam update** | 2026-08-18 | 2026-08-21 | 2 days 16 hours | Spam. Third confirmed spam update of 2026. Google confirmed again it did **not** specifically target link spam or site reputation abuse; framed as continued refinement of automated systems against existing policies. SE Ranking reported 16.71% of prior top-10 URLs falling beyond position 100. | **[A]** dates & Google statement / **[C]** SE Ranking figure |

**No confirmed core or spam update has been announced between 2026-08-21 and 2026-09-14 (report date).** **[A]**

### 1.2 Non-ranking events in the window that materially affect *diagnosis*

| Date | Event | Why it matters here | Confidence |
|---|---|---|---|
| 2025-09-10 → 2025-09-14 | **Google disabled the `&num=100` SERP parameter.** | Reported impressions fell for the large majority of properties (one 319-property analysis: 87.7% lost impressions; 77.6% lost unique ranking terms) and **average position appeared to improve** because low-ranking scraped impressions stopped being logged. Rank trackers lost cheap visibility beyond page 1. **Clicks were not affected.** | **[A]** event / **[B]** magnitude |
| 2025-09-11 | **Search Quality Rater Guidelines update.** | YMYL taxonomy revised — the old "YMYL Society" category became **"YMYL Government, Civics & Society"**; additional examples added; AI Overview evaluation examples added, with purely AI-generated content lacking human review and unique value rated **Lowest**. Health and financial topics remain squarely YMYL. | **[A]** |
| 2025-05-13 → 2026-04-27 | **GSC impressions logging error (Google-confirmed).** Google disclosed it on its Data Anomalies page on **2026-04-03**. | Impressions were **over-reported** for ~50 weeks. **Clicks were never affected.** Because impressions were inflated while clicks were correct, **CTR was artificially suppressed and average position was distorted** for that whole period. When the fix landed (~27 April 2026), some properties saw impressions fall 30–40% overnight with no underlying change. | **[A]** |
| 2026-06-03 | **Search Console "Generative AI performance reports" launched.** | Dedicated views of **impressions** in AI Overviews, AI Mode, and Discover generative features. Rolling out to a subset of properties. Critically, the gen-AI view reports impressions but **does not break out queries, clicks, CTR, or average position** — so it tells you that you were *seen* in AI surfaces, not what it cost or earned you. AI-surface data is also folded into the overall Performance report. | **[A]** |
| 2026-04 onward | **Elevated "Crawled – currently not indexed" reports industry-wide.** | Multiple properties reported large-scale deindexing beginning late April 2026 and continuing. John Mueller publicly characterized the movement as ordinary and said he saw nothing exceptional. Hardest-hit content types reported: mass generic e-commerce product pages, at-scale affiliate content, and unreviewed AI corporate blog output. | **[B]** phenomenon / **[A]** Mueller's response |
| 2026-08-30 | **Site reputation abuse manual actions stop affecting the European Economic Area.** | Google adjusted enforcement after European Commission pressure. **Irrelevant to a US-only site** — included only so it is not mistaken for a global policy retreat. | **[A]** |
| 2026-09-07 | **Mueller on programmatic SEO and site-level trust.** | On Bluesky: *"Programmatic SEO like this often leads to a site that's either spam, borderline spam, or low quality. It's easy to spin something up with many pages, it's hard to provide real value to users. Our systems have possibly lost faith in your site providing good value to users based on the old pages."* He added that resolving it "tends to take time & significant effort to show the value." | **[A]** |

### 1.3 What is *confirmed* vs what the SEO community merely *believes*

**Confirmed (Google said it):** every row in §1.1; the `&num=100` removal; the GSC logging error and its window; the Sept 2025 QRG revision; the gen-AI performance reports; the EEA carve-out; the Mueller quotes.

**Corroborated but not Google-confirmed [B]:** the per-update "winners and losers" characterizations. Google never says what a core update targets beyond generic language. Everything you read about "the March 2026 update hit templated pages" is **third-party visibility-index inference**, not Google testimony. It is *useful* — multiple independent trackers agreeing is real signal — but it is not policy.

**Explicitly NOT confirmed — treat as folklore [D]:**
- **"November 2025 helpful content refresh" / "December 2025 helpful content update."** These appear in low-quality SEO blogs and are **wrong**. Google folded the helpful content system into its core ranking systems with the **March 2024** core update and **retired the standalone Helpful Content Update label**. There has been no standalone helpful-content update since. Helpful-content re-ratings now surface *inside* broad core updates. If a consultant cites a "November 2025 HCU," discount their whole analysis.
- **"Google runs constant unannounced micro-updates that explain your drop."** Partly true (Google has always shipped continuous changes) but used as an unfalsifiable excuse. It is not a diagnosis.
- **Specific numeric thresholds for programmatic pages** — "≥60% unique content per page," "3+ unique data points per page," "cap city pages at 15–20." These circulate widely and are **invented**. Google publishes no threshold. They are reasonable *heuristics*; they are not rules, and citing them as rules is a tell for a weak analysis. **[D]**

---

## 2. Scaled content abuse, doorway abuse, and programmatic location pages

### 2.1 What the policies actually say

Google's spam policies live at [Spam policies for Google web search](https://developers.google.com/search/docs/essentials/spam-policies). Two sections bear directly on a state/county page set.

**Scaled content abuse.** Introduced in the [March 2024 core update + new spam policies announcement](https://developers.google.com/search/blog/2024/03/core-update-spam-policies), with enforcement from May 2024. Google's definition **[A]**:

> Scaled content abuse is when many pages are generated **for the primary purpose of manipulating search rankings and not helping users**. This abusive practice is typically focused on creating large amounts of unoriginal content that provides little to no value to users, **no matter how it's created**.

Three load-bearing points, each of which matters for this site:

1. **The test is *primary purpose*, not page count and not production method.** Google went out of its way to say the policy "applies whether automation or humans are involved." Hand-writing 50 state pages does not exempt them. **[A]**
2. **"Unoriginal" is the operative failure mode** — not "AI-written." A human-written page that restates what is already on the web, or what is already on your other 49 state pages, is in scope. **[A]**
3. Named example patterns include **near-duplicate pages with swapped keywords** and **hundreds/thousands of pages from one template with minimal unique content**. **[B]** on the exact enumeration, since I could not fetch the doc verbatim; the substance is consistent across every secondary source.

**Doorway abuse.** Separate policy, older, and arguably the *more* dangerous one for this site. Google's examples explicitly include **[A/B]**:

> Having multiple domain names or pages **targeted at specific regions or cities that funnel users to one page** … generating pages to funnel visitors into the actual usable or relevant portion of a site.

That is a precise description of the failure mode where 50 state pages all push to the same `/contact/` and the same service explanation. The state page is the doorway; the conversion path is the destination.

**One more 2025–2026 policy change worth knowing [B]:** Google's spam policy documentation has been revised to define spam as techniques used to deceive users or manipulate Search systems "such as attempting to manipulate Search systems into ranking content highly **or attempting to manipulate generative AI responses in Google Search**." Danny Sullivan also framed a documentation pass as clarifying that Google polices **spam *practices*, not spam *content***. The practical read: the policy surface now explicitly extends to AI answer manipulation, and "we didn't use AI" is not a defense.

### 2.2 Google's own senior-staff position on location pages

This is not ambiguous and it is not new. John Mueller told an SEO not to build 1,300 city landing pages on a `[keyword] + [city]` pattern, saying **that would be a doorway page and against Google's guidelines** **[A]**. The distinction he drew was between "15 pages for local towns with unique content" and "1,300 pages with very similar content where just the town/city name changes." **[A]**

And as of **7 September 2026** — one week before this report — Mueller extended it from "those pages won't rank" to **"our systems have possibly lost faith in your site"**: a **site-level** trust consequence from a **subset** of low-value programmatic pages, one that persists **based on the old pages** even after changes are made. **[A]** Search Engine Journal's write-up correctly notes the hedges: Mueller said "possibly," was answering about one specific site, and did not say how many pages trigger it, which systems are involved, how long the effect lasts, or what "showing value" requires. **[A]** Do not over-read it. But for a site whose page count is dominated by a templated state/county set, this is the most on-point public statement Google has made in the entire research window.

### 2.3 What separates a location page that survives from one that gets demoted

There is **no published Google threshold**. What follows is a synthesis of Google's stated primary-purpose test plus observed survivor/casualty patterns. Confidence on the *framework* is **[B]**; confidence on any specific number is **[D]** — do not treat numbers as rules.

**Survives — the page could only have been written about this place:**
- Contains **jurisdiction-specific facts that change the reader's actions**: for this site, that means the actual Medicaid program name and portal for that state, that state's payer-enrollment forms and revalidation cadence, actual processing timelines, state-specific behavioral-health licensure and supervision-billing rules, telehealth parity statute, the specific MCOs operating there.
- Has **first-party evidence**: "we enrolled N behavioral-health practices in this state; here is the median days-to-approval we observed; here is where applications actually stall."
- Has a **distinct reason to exist** — a different question answered, not the same question with a different noun.
- Is **reachable and linked as a real part of the site** — in navigation, cross-linked to siblings, with inbound internal links from genuinely related content. Orphaned, sitemap-only pages read as a doorway set.
- **Converts on its own terms** rather than existing to shunt the user to a generic contact form.

**Gets demoted or deindexed:**
- **Template identity**: same H1 skeleton, same paragraph order, same body copy with `{State}` substituted. The "…by County" title pattern on the Pennsylvania page is a warning sign, because a **county-level** expansion of a state template multiplies the near-duplicate surface by ~1–2 orders of magnitude while adding, in almost all such implementations, **zero** county-specific fact.
- **No local operational reality**: nationwide service delivered from Portland means there is no office, no staff, no local case, no local anything in that state — so unless the *regulatory* content carries the page, there is nothing to carry it.
- **Boilerplate padding**: a paragraph of state trivia (population, capital, "the Keystone State") bolted onto generic service copy. This is the single most recognizable scaled-content tell.
- **Funnel-only design**: every page terminating at the same CTA and the same explanation of the same service.
- **Thin + orphaned + only-in-sitemap**: the combination that reliably produces "Crawled – currently not indexed."

**The blunt version:** for a **behavioral-health credentialing** business, a state page is defensible because **payer enrollment genuinely is state-specific** — the domain has real per-jurisdiction substance to write about. That is a better starting position than most location-page programs have. A **county** page is much harder to defend, because credentialing rules are almost never county-scoped in a way that changes what a practice must do. If the PA page is county-templated and other states are heading the same way, that is the highest-risk asset on the site.

---

## 3. Site reputation, E-E-A-T, and YMYL for a small founder-led B2B healthcare-services firm

### 3.1 Clear up a terminology trap first

**"Site reputation abuse" almost certainly does not apply here** and should be removed from the hypothesis set. Google's [site reputation abuse policy](https://developers.google.com/search/blog/2024/11/site-reputation-abuse) targets **third-party pages published on a host site with little or no first-party oversight, exploiting the host's ranking signals** — the "parasite SEO" pattern (coupon sections on news domains, sponsored-post subfolders). A single-owner site publishing its own service and location pages is not in scope. Google separately confirmed that neither the June 2026 nor the August 2026 spam update specifically targeted site reputation abuse **[A]**, and enforcement is manual-action-led plus, since roughly the August 2025 spam update, algorithmic **[B]**.

The relevant construct for this site is **site-level quality / trust**, which is a different and much less formalized thing — and which is precisely what Mueller was describing on 2026-09-07.

### 3.2 YMYL status

Behavioral-health **billing, credentialing, and practice operations** is **YMYL-adjacent on two axes simultaneously**: it is *financial* (a practice's revenue cycle and cash flow) and it touches *health* (provider enrollment determines patient access to care). The Sept 2025 QRG revision did not remove Finance or Health & Safety from YMYL — it refined the Society bucket into "Government, Civics & Society" **[A]**. So the elevated E-E-A-T bar applies.

Worse, the **December 2025 and March 2026 core updates extended heightened E-E-A-T expectations beyond classic YMYL into essentially every competitive vertical** **[B]**, and March 2026 demonstrated that **brand recognition alone no longer floors rankings** — even Mayo Clinic, Cleveland Clinic and MedlinePlus lost visibility **[B]**. A small site cannot rely on being "the specialist" as an implicit trust claim; the trust has to be visible on the page.

### 3.3 The signals that actually matter for this profile

Google's own self-assessment frame is the **"Who, How, and Why"** test in [Creating helpful, reliable, people-first content](https://developers.google.com/search/docs/fundamentals/creating-helpful-content) **[A]**. Applied to a founder-led firm, in rough order of leverage:

**Highest leverage — "Who" (identity and credential, made machine- and human-legible):**
1. **Named, bylined authorship on every substantive page**, leading to a real author page. Google explicitly asks whether it is "self-evident who authored your content," whether pages "carry a byline where one might be expected," and whether bylines "lead to further information about the author." **[A]** For a one-person firm this is the cheapest large win available: an anonymous services site is leaving its single strongest differentiator unstated.
2. **Credentials stated, spelled out, and verifiable.** "CPB" and "CMOM" mean nothing to a rater or a model as bare acronyms. Expand them (Certified Professional Biller — AAPC; Certified Medical Office Manager — PMI), link to the issuing bodies, and state the years held. Independent verifiability is the point.
3. **Corroborating off-site entity presence**: AAPC/PMI member profiles, LinkedIn, conference/webinar appearances, guest articles in trade press (MGMA, HFMA, state behavioral-health associations), podcast appearances. Google is not reading your About page in isolation; it is reconciling it against the web's other statements about the same entity.
4. **Business identity transparency**: real physical address, real phone, legal entity name, and — because this is healthcare-adjacent — **explicit statements about HIPAA posture, BAA availability, and data handling.** For a billing/credentialing vendor those are trust signals with genuine commercial meaning, not compliance boilerplate.

**High leverage — "How" (demonstrated Experience, the E that March 2026 rewarded):**
5. **First-hand, first-person operational detail.** The 2026 pattern across independent analyses: content demonstrating genuine first-hand experience — specific details, original outcomes, verifiable credentials — outranked comprehensive-but-impersonal pages **[B]**. Zyppy's 50-site study separately found first-person pronoun usage among the strongest positive on-page correlates **[B/C]**.
6. **Proprietary data.** This is the highest-value unexploited asset a billing/credentialing firm owns. Median days-to-approval by payer and state; first-pass claim acceptance rates by CPT family in behavioral health; top ten denial reasons observed and the fix for each; revalidation failure modes. **No competitor can copy it and no AI Overview can synthesize it from other sources.** This simultaneously solves the E-E-A-T problem, the scaled-content problem (it makes state pages genuinely differentiated), and the AI-citation problem (§4).
7. **Explicit methodology and maintenance dating.** "Last reviewed [date] against [payer manual version]" is worth more in a regulatory niche than a generic "Updated" stamp.

**Moderate leverage — "Why" and page experience:**
8. **Reason for existing beyond ranking.** Every page should answer a question a real prospect asks. Pages that exist to hold a keyword are the ones core updates remove.
9. **Ad density / intrusive interstitials** — Zyppy found winners averaged 6.32 ads/page vs losers 14.01 **[B]**, and one August 2025 spam-update analysis found sites above a 25% ads-to-content ratio more likely to decline **[C]**. For a B2B services site this is probably a non-issue, but aggressive chat pop-ups and gated interstitials sit in the same UX bucket.
10. **Reviews and third-party validation.** Named client testimonials with attributable practice names (with permission), verifiable case outcomes, professional-body listings.

**Local (`/portland/`) specifics [B]:** Whitespark's 2026 Local Search Ranking Factors work puts **Google Business Profile signals at ~32% of Local Pack weight, with 8 of the top 10 Local Pack factors coming directly from the GBP**, and identifies **primary GBP category** as the single most important relevance signal. Review **recency and owner response rate** are reported to now outweigh raw review volume, and "open at time of search" is reported as a top-five Local Pack factor. Note also that Google adjusts service-area-business coverage based on engagement signals, and **widening the declared service radius does not widen actual reach**. If `/portland/` traffic specifically fell, the cause is far more likely to be GBP-side than page-side.

---

## 4. AI Overviews and AI Mode: what the click loss actually is

### 4.1 Deployment context

- AI Mode launched in the US in **May 2025**, reached 180+ countries in English by **21 August 2025** **[B]**.
- Reported adoption: ~75M DAU / ~100M MAU by end of November 2025; Google claimed **1 billion monthly users at I/O on 19 May 2026** **[C]** — vendor-reported, definitionally loose ("users of AI Mode" vs "users who saw an AI surface"), treat with suspicion.
- AI Overviews appear on roughly **48–50% of US queries** as of early 2026 **[C]** — figure is consistent across multiple trackers but each uses a different keyword universe.
- **January 2026: Google restricted AI Overviews on certain health queries** after accuracy review, returning visibility to standard organic results for those topics **[C]** — single-sourced; if true, it slightly *helps* clinically-adjacent content but is unlikely to touch billing/credentialing queries.

### 4.2 The CTR evidence, ranked by methodological quality

| Source | Method | Finding | Confidence |
|---|---|---|---|
| [Pew Research Center](https://www.pewresearch.org/) | Passive browsing-behavior panel of real users — **the only non-SEO-industry, behavior-observed dataset** | When an AI summary is present, **8%** of users click a traditional search result; without one, **15%**. ≈**47% relative decline**. | **[A]** — strongest evidence available |
| [Ahrefs](https://ahrefs.com/) | Large-scale position-1 CTR comparison, AIO-present vs absent | **34.5%** lower position-1 CTR (April 2025) worsening to **58%** (December 2025) | **[A/B]** — first-party dataset, correlational |
| [Seer Interactive](https://www.seerinteractive.com/insights/aio-impact-on-google-ctr-2026-update) | 53 brands, 5.47M queries, 2.43B impressions, Jan 2025 → Feb 2026 | Organic CTR on AIO-present queries fell **1.76% → 0.61% (−61%)**. Not-cited organic CTR **4.17% → 2.15% (−48%)**. Then a **rebound**: AIO-query CTR bottomed at 1.3% in Dec 2025 and recovered to 2.4% by Feb 2026. | **[A/B]** — transparent method, agency-side sample |
| [Semrush](https://www.semrush.com/blog/ai-overviews-commercial-search-study/) | 600k+ keywords / 10 industries over 6 months; separate 10M-keyword 2025 tracking | **Commercial-intent SERPs with an AIO grew 71%**; commercial AIO share rose ~**8.15% → 18.57%**. Transactional AIO share **fell 5%**. AIO citation overlap with organic rankings rose **32.3% → 54.5%**. | **[A]** |
| [Whitespark](https://whitespark.ca/blog/case-study-the-prevalence-of-ai-overviews-in-local-search/) | 540 manual queries, 3 US cities, 6 industries, Q1 2025 | AIOs on **68% of local searches overall**, but **local-intent** queries showed a Local Pack **93%** of the time and an AIO only **~15%**. AIOs dominate **hybrid-intent**. | **[A]** |
| Various | Cited-vs-uncited comparisons | Being **cited inside** the AIO produces materially better CTR than being uncited on the same SERP — reported as **+35%** in one study, **+120% clicks per impression** in another. | **[C]** — directionally consistent, magnitudes unreliable |

### 4.3 What this means for *this* site specifically — and where the honest gaps are

**Be blunt: there is no credible published dataset for "healthcare-services B2B" as a vertical.** Claims about "82% of B2B technology queries trigger AI Overviews" or "definitional B2B queries down to 31% organic click rate" come from vendor blogs with no disclosed methodology **[C/D]**. Anyone quoting a precise AIO-impact number for *behavioral-health billing and credentialing* is fabricating it. What can be said responsibly:

This site's query mix splits into three buckets with **very different** AI exposure:

1. **Informational / operational how-to** — "how to credential with [state] Medicaid," "CAQH attestation requirements," "CPT 90837 documentation requirements," "behavioral health credentialing timeline." **Highest AI exposure.** These are exactly the fact-retrieval questions AI Overviews and AI Mode answer completely. Expect large CTR loss here even at unchanged rankings. **[B]** — inference from Pew/Ahrefs/Seer applied to query type, not a measurement of this site.
2. **Commercial investigation** — "behavioral health billing companies," "mental health credentialing service," "outsourced RCM for therapy practices." **Rising and material exposure** — this is precisely the bucket Semrush measured growing 71% **[A]**. But these queries have real buyer intent, longer consideration cycles, and a summary rarely closes them. Loss is real but partial.
3. **Local** — "medical billing Portland," "[service] near me." **Lowest AI exposure.** Local-intent queries still return a Local Pack ~93% of the time with an AIO only ~15% **[A]**. If `/portland/` fell, blame GBP or a core update, not AI Overviews.

**The structural point that matters more than any number:** AIO citation overlap with organic rankings rose from 32.3% to 54.5% **[A]**. Ranking well and being cited are **converging**. That means the AI-era play is not a separate "GEO" discipline — it is the same play: be the source that has the specific, original, citable fact. Which is, again, the proprietary-data recommendation from §3.

**What AI Overviews cannot explain:** a drop in **impressions** or a drop in **average position**. AIO loss is a *clicks-per-impression* phenomenon. If impressions and position fell too, AI Overviews are not your primary cause. This is the fork the entire diagnosis turns on.

---

## 5. Diagnostic playbook — the exact sequence

Run these **in order**. Each step is designed to *eliminate* a cause cheaply before spending effort on the expensive ones. Do not skip to step 6 because it is the interesting one.

### Step 0 — Establish a valid measurement baseline (do this FIRST; nothing else is valid without it)

Two Google-confirmed reporting events sit inside the analysis window and will fabricate a decline that never happened.

- **`&num=100` removal, ~10–14 Sept 2025.** Reported impressions fell for ~88% of properties; average position "improved." **Clicks unaffected.** **[A/B]**
- **GSC impressions logging error, 13 May 2025 → 27 April 2026** (disclosed 3 April 2026). Impressions were **inflated** the whole time; the fix caused 30–40% overnight impression drops on some properties. **Clicks never affected. CTR was artificially suppressed and average position distorted for ~50 weeks.** **[A]**
- Plus 2026 anomalies at 2026-02-28/03-01 (missing bulk-export data, unrecoverable), 2026-05-21 (Discover), 2026-08-13 and 2026-08-13→17 (Discover + Generative AI reports). **[A]**

**Action:** open [Data anomalies in Search Console](https://support.google.com/webmasters/answer/6211453) and mark every one of these dates on your timeline before looking at a single chart.

**Operating rule for the entire rest of this playbook:**

> **Use CLICKS as the primary metric. Treat impressions, CTR, and average position from 13 May 2025 → 27 April 2026 as unreliable.**

**Smoking gun for "this was never a real decline":** clicks are flat or gently trending while impressions show a cliff at ~12 Sept 2025 and/or ~27 April 2026. If you see that, stop. You have a reporting artifact, not a traffic problem.

### Step 1 — Manual action check (60 seconds, binary)

GSC → **Manual actions**. Also GSC → **Security issues**.

- **Smoking gun:** any entry at all. Most plausible for this site: *"Thin content with little or no added value"* or *"Pure spam"*, and it would name either the whole site or a URL pattern — a match on `/credentialing-and-payer-enrollment-*` would be conclusive.
- **If clean:** manual action is eliminated. Permanently. Do not revisit it.
- A manual action has a characteristic traffic shape: a **near-vertical cliff on a single day that does not correspond to any confirmed update date**. Algorithmic demotions land *over the days of a rollout window*.

### Step 2 — Indexing and technical regression

GSC → **Pages** (Page indexing) → compare current vs. the pre-decline period. Then **Crawl stats** (Settings → Crawl stats). Then **Sitemaps**. Then fetch `robots.txt` history from your own repo/CDN logs.

Look for, in this order:
- **Indexed page count** falling. Where did the pages go? Click into each exclusion reason.
- `Crawled – currently not indexed` **rising** — the signature that Google fetched the pages and *chose* not to index them. Industry-wide reports of this rose from April 2026; Google says nothing unusual is happening **[B]/[A]**.
- `Discovered – currently not indexed` — Google won't even spend crawl on them.
- `Duplicate without user-selected canonical` / `Alternate page with proper canonical tag` — **the classic state-page template outcome**: Google collapsed your 50 state pages into one because it judged them the same page.
- `Excluded by 'noindex' tag`, `Blocked by robots.txt`, `Soft 404` — deploy accidents.
- Crawl stats: response-code distribution, average response time, host-status errors.

**Smoking guns:**
- *Technical regression:* indexed count drops on a **specific deploy date** with a matching spike in `Blocked by robots.txt` / `Excluded by noindex` / 5xx. **Fix and it comes back in days-to-weeks.**
- *Quality-driven deindexing:* the **programmatic URL pattern specifically** migrates into `Crawled – currently not indexed` or `Duplicate without user-selected canonical` while `/about/`, `/contact/`, `/mental-health-billing/` stay indexed. **This is not a technical bug. This is Google's quality judgment on the template.** That routes you to §6.2, not to a technical fix.

### Step 3 — Segment the decline. Where, exactly, did the clicks go?

GSC → **Performance → Search results**. Use **Compare** mode, not Date range. Compare **the same calendar period year over year** (e.g. 1 Jun–31 Aug 2026 vs 1 Jun–31 Aug 2025) — YoY neutralizes seasonality, which a preceding-period comparison does not. Then repeat with period-over-period windows bracketing each confirmed update date from §1.1.

Then slice, exporting each:
1. **By Search type** — Web / Image / Video / News, and check **Discover** separately if present. *If the loss is Discover-only, your cause is the **February 2026 Discover core update**, it does not touch web Search, and the entire rest of this analysis changes.*
2. **By Pages** — group into: homepage / service pages / `/about/` + `/contact/` / `/resources/` / `/portland/` / **the `credentialing-and-payer-enrollment-*` set**. Chart each group's clicks separately.
3. **By Queries** — split **brand** (`advance a practice`, `ryan berg`, domain variants) vs **non-brand** using a regex filter. Brand loss means a demand/reputation problem; non-brand loss means a ranking or SERP-feature problem. They have nothing in common and get opposite treatments.
4. **By Device** and **By Country**, to catch artifacts (the `&num=100` effect was desktop-skewed).

**Smoking gun for the programmatic hypothesis:** the state/county page group loses 70–95% of its clicks while the homepage, service pages and `/about/` hold roughly steady or dip only with the overall market. **That is a page-class-specific demotion — the signature of a template being judged, not a site being judged.** If instead *everything* falls proportionally including brand queries, you are looking at a site-wide trust demotion (Mueller's "lost faith"), which is worse and slower.

### Step 4 — Date-align the drop against the confirmed update calendar

Overlay your daily clicks curve against §1.1. Set the GSC date granularity to daily and export to a spreadsheet.

**What each cause looks like:**

| Cause | Shape | Timing | Corroboration |
|---|---|---|---|
| **Core-update demotion** | Progressive decline over 5–20 days, then a **new stable lower plateau** | Onset lands **inside a published rollout window** (Dec 11–29 2025; Mar 27–Apr 8 2026; May 21–Jun 2 2026) | Third-party volatility trackers red on the same dates; competitors in the same SERPs moved in the opposite direction |
| **Spam-update demotion** | Faster and sharper than core; often a step function | Inside Aug 26–Sep 21 2025, Mar 24–25 2026, Jun 24–26 2026, Aug 18–21 2026 | Google stated the June and August 2026 updates did **not** target link spam or site reputation abuse — so if you dropped there, look at content-scale policies |
| **Manual action** | Vertical cliff, one day | Matches **no** update window | Manual actions report is non-empty (Step 1) |
| **Technical regression** | Cliff or fast decay | Matches **your own deploy date** | Page indexing exclusions spike; crawl stats show errors |
| **SERP-feature / AI CTR loss** | **Gradual erosion over months, no cliff at all** | No alignment with any single date | See Step 5 |
| **Measurement artifact** | Cliff in **impressions only**, clicks unmoved | ~12 Sept 2025 or ~27 Apr 2026 | Step 0 |
| **Seasonality** | Repeating annual shape | Same weeks every year | YoY comparison shows the same shape at the same level in prior years |

**Do not accept "it was a core update" without the date alignment.** Onset outside a rollout window means it was not that update, full stop.

### Step 5 — Separate CTR loss from ranking loss (the decisive test)

For each page group and query group from Step 3, compute — **using only post-2026-04-27 data, or clicks-only data before that** — the direction of three quantities:

| Impressions | Average position | Clicks | Diagnosis |
|---|---|---|---|
| Flat / up | Flat (±1) | **Down 30%+** | **SERP-feature / AI Overview CTR loss.** The "great decoupling." You still rank; fewer people click. **[B]** |
| **Down** | **Down (worse)** | Down | **Ranking demotion.** Core/spam update or quality reassessment. |
| **Down hard** | **"Improved"** | Flat | **Measurement artifact** (`&num=100` or the logging-error fix). Not a real event. |
| Flat | Flat | Down, with **brand queries also down** | **Demand-side.** Fewer people looking for you. Not an algorithm problem. |

Reinforce with: filter the Queries report to informational patterns (`what`, `how`, `why`, `does`, `requirements`, `cost`) and check whether **those** queries show position-stable/CTR-down while commercial queries (`service`, `company`, `outsourced`, `near me`) behave differently. Divergence by intent is strong evidence for the AI-surface explanation.

Finally, if your property has them: GSC → **Generative AI performance reports** (rolled out from 3 June 2026 to a subset of properties). These show **impressions in AI Overviews / AI Mode** but **not queries, clicks, CTR, or average position** **[A]**. Use them to confirm *exposure* in AI surfaces; they cannot quantify the click cost. Cross-check GA4 `google / organic` sessions against GSC clicks for the same window — persistent GSC-clicks-flat/GA4-sessions-down would point at a tagging or consent-mode problem instead.

### Step 6 — Corroborate externally, then confirm the mechanism

1. **Third-party visibility index** (Semrush/Sistrix/Similarweb) for the domain, to see whether the decline reads as market-wide or site-specific. If every competitor in behavioral-health billing fell on the same dates, you are looking at a vertical-level SERP change, not a site problem.
2. **Manually inspect the live SERPs** for your top 20 lost queries (from a clean browser, logged out). Record: is there an AI Overview? Is your page cited in it? What replaced you in the blue links — a competitor, a payer/government source, a directory, a forum? March 2026 demoted established publishers **in favor of the underlying authoritative sources they cited** **[B]**; in this niche that means CMS, state Medicaid agencies, CAQH, and payer manuals may simply have taken the informational queries.
3. **Template-similarity audit on your own state/county pages** (local files or your CMS — no fetching needed): compute pairwise text similarity across the set. If the mean similarity is high and the differing tokens are mostly the state/county name, you have documented the scaled-content exposure in a form you can act on and re-measure against.

### Step 7 — Rule seasonality in or out properly

Pull 3 years of GSC data if available (16 months is the GSC UI limit; use the Bulk Data Export / BigQuery if it is configured, and note the 2026-02-28→03-01 export gap). Then:
- Compare the **same weeks** across years. Healthcare billing/credentialing has genuine annual structure: the **CPT code year turns over on 1 January** (the 2026 set carried 288 new codes, 84 deletions, 46 revisions — 418 changes) **[A]**, driving a January coding-question spike; payer enrollment and revalidation cycles and Q4 planning create their own rhythm.
- Cross-check with **Google Trends** for head terms, which shows *market* demand independent of your rankings. **If Trends is flat and you are down, it is you.** If Trends fell too, part of the decline is demand.

**Smoking gun for seasonality:** the same trough at the same weeks in each prior year, at a comparable *level*. Seasonality explains **shape**. It never explains a **year-over-year level shift**.

---

## 6. Recovery — what is documented, what is folklore, and how long it really takes

### 6.1 Be blunt about core-update recovery up front

Google's own position, which Mueller has repeatedly pointed people to: content impacted by a broad core update **"might not recover — assuming improvements have been made — until the next broad core update is released."** **[A]** Danny Sullivan has said recovery is genuinely uncertain and that the actionable instruction is to "make sure that you're doing the right thing by your audience," with reward expected "in the long run." **[A]**

The empirical record is worse than that sounds:

- **Lily Ray** examined the **130 sites hit hardest** by the September 2023 HCU: **129 had only seen visibility decline since.** **[B]**
- **Glenn Gabe** tracked **~400 HCU-obliterated sites**: by August 2024, only **~22% had recovered 20% or more** of lost traffic. **[B]**
- **Cyrus Shepard (Zyppy)** reported roughly **20%** of the sites he monitors that declined significantly showed at least *some* recovery. **[B]**
- The single **most-cited full recovery is HouseFresh** — hit September 2023 (lost ~95% of Google traffic, 51k → ~1k monthly clicks), recovered around **11 October 2025** and overshot prior peak. That is **two years and one month.** **[B]** It is famous *because it is rare*.

**Therefore:** if this is a core-update/site-level quality demotion, plan for **6–18 months**, budget on the assumption that **partial** recovery (30–60% of lost traffic) is the realistic ceiling, and do not let anyone sell a 90-day guarantee. **[B]**

There is one genuinely useful mitigating fact: with the helpful content system folded into core since March 2024, there is **no separate "HCU classifier" to escape** — re-ratings surface in ordinary core updates, which now arrive roughly every 2–4 months (three core updates in 2025, two in the first half of 2026 plus a Discover core). So the *opportunity windows are more frequent* than in the 2023–2024 HCU era. **[A/B]**

### 6.2 By cause

**(a) Core-update / site-level quality demotion — slow, uncertain, highest effort**

*Documented correlates of recovery* **[B]** (correlational, from the HCU cohort studies — not proven causal):
- **Prune first, publish second.** Sites that pruned **40–60% of thin content before creating anything new** recovered at reported ~3× the rate of sites that only added pages. This is the strongest single pattern in the recovery literature. **[B/C]** on the multiple; **[B]** on the direction.
- **Add first-hand experience with evidence** — original testing, photos, data, named outcomes. Central to the HouseFresh case. **[B]**
- **Build visible author/entity expertise** — real author pages, verifiable credentials, bylines. **[B]**
- **Reduce ad density / intrusive UX** — Zyppy found this correlated with recovery *more consistently than content changes*. **[B]** Probably not the binding constraint on a B2B services site.

*Applied to the state/county page set — the decision, in order:*
1. **Triage each page against one question: could this page have been written about any other state?** If yes, it is not a location page, it is a template instance.
2. **Consolidate aggressively.** A genuinely strong `/credentialing-and-payer-enrollment/` hub plus a small number of deep, individually-researched state pages for the states where you actually have volume and evidence will outperform 50 templated pages. **301-redirect the removed URLs into the hub or the nearest surviving relative** — never into a mass redirect to the homepage, which Google treats as a soft 404.
3. **Kill the county layer** unless each county page carries a county-specific fact that changes a practice's actions. For credentialing, that will almost never be true.
4. **Removal mechanics** **[B]**: check backlinks first. Pages with real links → **consolidate + 301**. Pages with no links and no value → **410 Gone** (more definitive than 404; faster deindexing). Pages with direct-visitor or campaign value but no search value → **`noindex`**. Do not `noindex` reflexively: Google's guidance is that the choice should follow the URL's role on the site, and deindexing by itself does not improve rankings.
5. **Expect a lag.** Mueller, 2026-09-07: Google's systems may still judge the site on the *old* pages, and showing value again "tends to take time & significant effort." **[A]** SEJ correctly noted he did **not** say how long, how many pages trigger it, or that cleanup alone reverses it. **[A]** Plan for the effect to outlive the cleanup by at least one core-update cycle.

**(b) Algorithmic spam demotion — months, mechanism-bound**

There is no "re-score" button. The site must be **recrawled and re-evaluated by Google's automated systems over a period of months**; recovery arrives **in steps tied to update refreshes you cannot see in advance**, not on a smooth curve. **[B]** The commonly quoted figure is **3–6 months of sustained compliance** **[C]** — directionally sane, not authoritative. Note that Google explicitly stated the June 2026 and August 2026 spam updates did **not** target link spam or site reputation abuse **[A]**, so a drop in those windows points toward content-scale policies rather than links — meaning link disavow work would be wasted effort.

**(c) Manual action — fastest and most certain recovery of any cause**

Fix the violation genuinely (not cosmetically), then file a reconsideration request via GSC. Google says reviews "can take several days or weeks," longer for link-related cases **[A]**; practitioner reports cluster at **3–21 days** depending on violation type, with hacked-content cases fastest and pure-spam/link cases slowest **[B]**. After revocation, expect **2–4 weeks** of upward trend rather than an instant restoration **[B]**. **The critical asymmetry: this is the only cause with a defined, reviewable process and a near-certain outcome if you actually fix the problem.** That is why Step 1 of the diagnostic is free and non-negotiable.

**(d) Technical / indexing regression — days to weeks, near-certain**

Fix the blocking condition (robots.txt, noindex, canonical, 5xx, redirect chain), validate the fix in GSC's Page indexing report, request indexing for key URLs, resubmit sitemaps. Recovery typically tracks recrawl rate. **This is the one failure mode that comes back essentially fully**, which is exactly why it must be excluded before assuming anything algorithmic.

**(e) SERP-feature / AI Overview CTR loss — not "recoverable"; it is a new baseline to be re-attacked**

You cannot get the old CTR back. Two things are actually evidenced:
1. **Get cited inside the AI surface.** Citation overlap with organic rankings rose 32.3% → 54.5% **[A]** — ranking and being cited are converging, so conventional quality work is the mechanism, not a separate discipline. Cited results outperform uncited results on the same SERP **[C]** on magnitude, **[B]** on direction.
2. **Reweight toward query classes AI answers poorly.** Local-intent queries still return a Local Pack ~93% of the time with AIO ~15% **[A]**. Commercial-investigation and comparison queries retain more click value than definitional ones **[C]**. Content that summaries cannot replace — original research, pricing logic, benchmarks, implementation detail, tools and calculators, anything requiring a conversation with a human — holds click value. **[B]**

There is also a real, if fragile, **rebound signal**: Seer measured AIO-query CTR bottoming at 1.3% in December 2025 and recovering to 2.4% by February 2026 **[A/B]**. Two months is not a trend. Do not plan around it.

**(f) Seasonality — no action required**

Confirm and document it so it stops being re-litigated every quarter.

### 6.3 Folklore to refuse to pay for **[D]**

- **"Disavow files fix core updates."** No. Disavow addresses unnatural-links manual actions. Google confirmed the 2026 spam updates were not link-targeted.
- **"Republish with today's date to refresh."** Changing a date without changing substance is a negative-trust signal, not a ranking tactic.
- **"Hit a word-count target."** No threshold exists. Length is not quality.
- **"There's a helpful-content classifier to escape."** It was folded into core in **March 2024** and the standalone label retired.
- **"Add an author box and E-E-A-T is solved."** A byline with no verifiable person behind it is decoration. The corroborating off-site entity presence is the actual signal.
- **"≥60% unique content per page / 3+ data points / max 15 city pages."** Invented numbers. Useful as heuristics, dishonest as rules.
- **"Recovery in 30–90 days."** Contradicted by every cohort study in §6.1 for algorithmic causes. Only true for manual actions and technical regressions.
- **"GEO/AEO is a separate discipline requiring a separate budget."** The convergence data says otherwise.

---

## 7. Site-specific hypothesis matrix (conditioned on the briefed profile only)

| Hypothesis | Prior | Confirm it by | Kill it by |
|---|---|---|---|
| **Programmatic state/county template → site-level quality demotion via a core update** | **Highest** | State/county page group loses disproportionately (Step 3); onset inside Dec 2025 / Mar 2026 / May 2026 window (Step 4); state URLs migrating to `Crawled – currently not indexed` or `Duplicate without user-selected canonical` (Step 2); high pairwise template similarity (Step 6.3) | Loss is evenly distributed across all page types, or onset is outside every rollout window |
| **AI Overview / AI Mode CTR erosion on the informational query set** | **High (as a contributing cause)** | Impressions and position flat, clicks down 30%+, informational queries diverging from commercial ones (Step 5); AIO present on top lost queries (Step 6.2) | Impressions and average position fell alongside clicks |
| **Measurement artifact (`&num=100` and/or the GSC logging-error fix)** | **Moderate — must be excluded first** | Impression cliff at ~12 Sept 2025 or ~27 Apr 2026 with **clicks unmoved** (Step 0) | Clicks fell too |
| **Technical / indexing regression** | **Moderate — cheapest to exclude** | Indexed count drop aligned to a deploy; robots/noindex/canonical/5xx exclusions spike (Step 2) | Page indexing report is clean and stable |
| **Manual action** | **Low, but binary** | Any entry in the Manual actions report (Step 1) | Report is empty |
| **Local demotion on `/portland/` (GBP-side)** | **Low, and narrow** | Loss isolated to local queries and the `/portland/` page; Local Pack position changed while organic held | Loss is site-wide |
| **Site reputation abuse** | **Effectively zero** | Would require third-party-authored content hosted on the domain with no editorial oversight | N/A — policy does not apply to a first-party site |
| **Demand decline (market-side)** | **Low** | Brand queries down too; Google Trends for head terms down (Step 7) | Trends flat while you fell |

---

## 8. What to do in the first two weeks

1. **Step 0 + Step 1 today.** Mark the anomaly dates; check Manual actions and Security issues. Cost: 30 minutes. Either result is decision-changing.
2. **Export GSC Performance, 16 months, by page and by query.** Build the page-group and brand/non-brand splits. This single spreadsheet resolves most of the diagnosis.
3. **Export Page indexing.** Answer one question: are the state/county URLs still indexed, and under what status?
4. **Run the template-similarity audit** on your own source files.
5. **Only then choose a track.** Technical → fix and it returns. Manual → fix and file. Core/quality → commit to the consolidate-prune-then-deepen program in §6.2(a) and a 6–18 month horizon. CTR → accept the new baseline and rebuild around what summaries cannot replace.

**The highest-leverage asset this business owns and is almost certainly not publishing: its own operational data.** Median days-to-approval by payer and state, denial-reason distributions in behavioral health, first-pass acceptance rates, where enrollment applications actually stall. That single body of work simultaneously (a) makes state pages genuinely non-templated, (b) supplies the first-hand Experience that March 2026 rewarded, and (c) is the kind of specific, citable fact AI surfaces have to attribute. No competitor can copy it and no summary can synthesize it from elsewhere.

---

## 9. Sources

**Google primary (URLs cited; direct fetch blocked by the egress proxy in this environment — verify wording at source):**
- [Spam policies for Google web search](https://developers.google.com/search/docs/essentials/spam-policies)
- [What web creators should know about our March 2024 core update and new spam policies](https://developers.google.com/search/blog/2024/03/core-update-spam-policies)
- [Updating our site reputation abuse policy](https://developers.google.com/search/blog/2024/11/site-reputation-abuse)
- [Google's February 2026 Discover core update](https://developers.google.com/search/blog/2026/02/discover-core-update)
- [Introducing Search generative AI performance reports in Search Console](https://developers.google.com/search/blog/2026/06/gen-ai-performance-reports)
- [Google Search ranking updates](https://developers.google.com/search/updates/ranking)
- [Google Search spam updates](https://developers.google.com/search/docs/appearance/spam-updates)
- [Creating helpful, reliable, people-first content](https://developers.google.com/search/docs/fundamentals/creating-helpful-content)
- [Debugging drops in Google Search traffic](https://developers.google.com/search/docs/monitor-debug/debugging-search-traffic-drops)
- [Analyzing Google Search traffic drops (Search Central blog)](https://developers.google.com/search/blog/2021/07/search-traffic-drops)
- [Data anomalies in Search Console](https://support.google.com/webmasters/answer/6211453)
- [Manual actions report](https://support.google.com/webmasters/answer/9044175)
- [Reconsideration requests](https://support.google.com/webmasters/answer/35843)
- [Search Quality Rater Guidelines (PDF)](https://services.google.com/fh/files/misc/hsw-sqrg.pdf)

**Industry reporting — algorithm timeline:**
- [Google algorithm updates 2025 in review: 3 core updates and 1 spam update](https://searchengineland.com/google-algorithm-updates-2025-in-review-3-core-updates-and-1-spam-update-466450)
- [Google March 2025 core update rollout is now complete](https://searchengineland.com/google-march-2025-core-update-rollout-is-now-complete-453364)
- [Google June 2025 core update rolling out](https://www.seroundtable.com/google-june-2025-core-update-39681.html)
- [August 2025 spam update completes four-week rollout](https://ppc.land/august-2025-spam-update-completes-four-week-rollout/)
- [Google releases February 2026 Discover core update](https://searchengineland.com/google-releases-discover-core-update-february-2026-468308) · [rollout complete](https://searchengineland.com/google-february-2026-discover-core-update-is-now-complete-469450)
- [Google March 2026 core update rollout is now complete](https://searchengineland.com/google-march-2026-core-update-rollout-is-now-complete-473883)
- [Google May 2026 core update rolling out now](https://searchengineland.com/google-may-2026-core-update-rolling-out-now-478430)
- [Google releases June 2026 spam update](https://searchengineland.com/google-releases-june-2026-spam-update-481002)
- [Google August 2026 spam update is done rolling out](https://www.seroundtable.com/google-august-2026-spam-update-done-41906.html) · [SEJ coverage](https://www.searchenginejournal.com/google-begins-rolling-out-the-august-2026-spam-update/586301/)
- [Google algorithm updates: the complete history (Search Engine Land library)](https://searchengineland.com/library/platforms/google/google-algorithm-updates) · [SEJ history](https://www.searchenginejournal.com/google-algorithm-history/) · [Ahrefs update history](https://ahrefs.com/google-algorithm-updates)
- [Google won't respect manual actions for site reputation abuse in the EEA](https://searchengineland.com/google-wont-respect-manual-actions-for-site-reputation-abuse-in-european-economic-area-486055) · [Search Engine Roundtable](https://www.seroundtable.com/google-site-reputation-policy-eea-41968.html)

**Update impact analysis [B]:**
- [Amsive: December 2025 core update — winners, losers & analysis](https://www.amsive.com/insights/seo/googles-december-2025-core-update-winners-losers-analysis/)
- [Amsive: March 2026 core update — winners, losers & analysis](https://www.amsive.com/insights/seo/google-march-2026-core-update-winners-losers-analysis/)
- [Raptive: what we learned from the August 2025 spam update](https://raptive.com/blog/heres-what-we-learned-from-googles-august-2025-spam-update/)
- [Glenn Gabe: March 2024 core update and the helpful content system transition](https://www.gsqi.com/marketing-blog/google-march-2024-core-update-helpful-content-system/)

**Programmatic / location pages:**
- [Search Engine Roundtable: Google can lose faith in sites based on low-value programmatic SEO pages (2026-09-07)](https://www.seroundtable.com/google-lose-faith-42032.html)
- [SEJ: Google says old low-value pages may affect site recovery](https://www.searchenginejournal.com/google-says-old-low-value-pages-may-affect-site-recovery/588837/)
- [Search Engine Roundtable: Google warns against city landing pages; can be doorway pages](https://www.seroundtable.com/google-city-landing-pages-doorway-pages-28670.html)
- [SEJ: Deindexing reports keep coming, Google sees nothing unusual](https://www.searchenginejournal.com/deindexing-reports-keep-coming-google-sees-nothing-unusual/579847/)
- [Patrick Stox: scaled content abuse and programmatic SEO risk](https://patrickstox.com/programmatic-seo/risks/scaled-content-abuse/)

**AI Overviews / CTR:**
- [Pew Research Center — Google users are less likely to click links when an AI summary appears](https://www.pewresearch.org/short-reads/2025/07/22/google-users-are-less-likely-to-click-on-links-when-an-ai-summary-appears-in-the-results/)
- [Seer Interactive — AIO impact on Google CTR: 2026 update](https://www.seerinteractive.com/insights/aio-impact-on-google-ctr-2026-update)
- [Semrush — AI Overviews are expanding across commercial intent search](https://www.semrush.com/blog/ai-overviews-commercial-search-study/) · [We studied 200,000 AI Overviews](https://www.semrush.com/blog/ai-overviews-study/)
- [Whitespark — the prevalence of AI Overviews in local search](https://whitespark.ca/blog/case-study-the-prevalence-of-ai-overviews-in-local-search/) · [Whitespark 2026 Local Search Ranking Factors](https://whitespark.ca/local-search-ranking-factors/)
- [eMarketer — AI Overviews decrease CTRs by 34.5% per new study (Ahrefs)](https://www.emarketer.com/content/google-ai-overviews-decrease-ctrs-by-34-5-per-new-study)
- [SEJ — Google now reports AI search impressions: how to read them](https://www.searchenginejournal.com/google-reports-ai-search-impressions-how-to-read-them/582824/)
- [Search Engine Land — Google AI Mode traffic data comes to Search Console](https://searchengineland.com/google-ai-mode-traffic-data-search-console-457076)

**Measurement artifacts:**
- [Search Engine Land — 77% of sites lost keyword visibility after Google removed num=100](https://searchengineland.com/google-num100-impact-data-462231)
- [Search Engine Land — Google is fixing a Search Console bug that inflated impression counts](https://searchengineland.com/google-search-console-bug-inflated-impression-counts-473530)
- [Search Engine Roundtable — GSC logging error yielded inflated impressions since May 2025](https://www.seroundtable.com/gsc-logging-error-impressions-41140.html)

**Recovery evidence:**
- [Zyppy (Cyrus Shepard) — winning and losing big Google updates: 50-site case study](https://zyppy.com/seo/google-update-case-study/)
- [PPC Land — HouseFresh achieves notable traffic recovery after Google algorithm impacts](https://ppc.land/housefresh-achieves-notable-traffic-recovery-after-google-algorithm-impacts-2/)
- [SEJ — John Mueller on website recovery after core updates](https://www.searchenginejournal.com/googles-john-mueller-on-website-recovery-after-core-updates/515122/)
- [Search Engine Land — Recovery uncertain: Danny Sullivan on algorithm impacts](https://searchengineland.com/google-danny-sullivan-algorithm-update-recovery-uncertain-446317)
- [Search Engine Land — content pruning for AI search: when to remove, redirect, or consolidate](https://searchengineland.com/guide/content-pruning-for-ai-search)
- [Search Engine Land — Google manual actions FAQ](https://searchengineland.com/google-manual-actions-frequently-asked-questions-284289)

**Niche context:**
- [Medwave — 2026 CPT code updates](https://medwave.io/2026/01/new-2026-cpt-coding-updates/)
- [AMA — CPT coding resources](https://www.ama-assn.org/practice-management/cpt/cpt-coding-resources)
- [BrightLocal — Google's local algorithm and local ranking factors](https://www.brightlocal.com/learn/google-local-algorithm-and-ranking-factors/)
