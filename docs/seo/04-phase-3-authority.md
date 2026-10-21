# Phase 3 — Authority: build the floor
**Timeline: weeks 1–24, running parallel to Phases 1–2. This is what prevents a repeat.**

---

## 3.1 The thesis

**CONFIRMED:** the complete discoverable off-site footprint is **seven properties** — LinkedIn
company, LinkedIn founder, Facebook, Yelp, two *competitor-run* "Top 10 Portland" listicles, and a
2023 logo-design contest brief. No podcasts. No bylines. No association listings. No partner pages.

Everything present is **self-published, self-serve, or published by competitors.**

> **The firm has an internet presence but not an internet reputation.**

The causal chain that explains the traffic loss:

1. The site ranked on programmatic state pages — **verified**: the Pennsylvania page surfaced
   against `pa.gov` in a competitive query.
2. The site has **almost no independent authority**.
3. Ranking without authority means ranking on **content-relevance signals alone**.
4. **Core updates recalibrate exactly those signals.**
5. **Therefore the ranking had no floor.** A site with authority absorbs a relevance
   recalibration. A site without one drops as a step function.

**Rebuilding the pages without building authority underneath them reproduces the same failure.**

**No toxic link pattern exists. Do not disavow anything.** Google confirmed the June and August
2026 spam updates targeted neither link spam nor site reputation abuse. Disavow work would be
wasted effort.

## 3.2 Fix the entity problem first — cheap and high-leverage

**CONFIRMED:** the brand name collides with a clinical term of art. "Advance a Practice" is one
word-break from **"advanced practice"** — the universal term for NPs, PAs, CNSs and CRNAs. Search
returns `advancedpractice.com` and unrelated "Advanced Practice" entities intermixed.

Compounding it: the founder's LinkedIn vanity URL is **`linkedin.com/in/advanceapractice`** — the
*person* addressed by the *company* string. This actively prevents Google resolving Ryan Berg as a
distinct Person entity linked to the Organization.

**There is likely no consolidated entity and no Knowledge Panel.**

Fixes:

- [ ] Request a personal LinkedIn vanity URL: `linkedin.com/in/ryan-berg-...`
- [ ] Build a dedicated **`/about/ryan-berg/`** Person entity page — not a bio paragraph on the
      About page, a page of its own
- [ ] Implement **`Person`** schema on it and **`Organization`** schema sitewide, with
      `sameAs` linking every owned profile
- [ ] Add `author` markup to every article, pointing at the Person page
- [ ] Ensure the brand string appears consistently as one token — pick **"AdvanceAPractice"** or
      **"Advance a Practice"** and use it identically everywhere, including every directory

## 3.3 Corroborate the credentials

**CONFIRMED:** CPB and CMOM are asserted on the About page and are **not independently verifiable
anywhere off-site.** For a YMYL-adjacent financial-operations vendor, an uncorroborated credential
is a weaker asset than a corroborated one.

> **Correction worth getting right: CMOM is issued by Practice Management Institute (PMI), not
> PAHCOM.** PAHCOM's credential is CMM. Attributing it wrong in a credential display would
> undermine the exact credibility it is meant to build.

- [ ] Get listed in the **AAPC** member directory (CPB) and link it
- [ ] Get PMI-side corroboration for CMOM and link it
- [ ] Display credential numbers and issuing bodies, with outbound links to the verifying org

## 3.4 Trust assets — the precondition for everything in 3.5

| Asset | Why |
|---|---|
| **`/about/ryan-berg/`** Person page | Entity anchor. 16+ years, CPB, CMOM, grew a BH group $2M→$6M, 30+ person team, recovered $1.5M+ aged A/R — these are strong and currently under-exposed |
| **Case studies with real numbers** | Anonymized is fine; specific is mandatory |
| **Named testimonials** | Role + practice type minimum |
| **HIPAA / BAA / security statement** | Table stakes for handling PHI-adjacent work |
| **Pricing transparency** | Also the single best commercial-investigation keyword play — see Phase 4 |
| **`Person` + `Organization` + `Service` schema** | Machine-readable entity |

### Directory hygiene — one hour, free

**Yelp reportedly lists services including "social media marketing, web design, business
consulting."** If accurate, that is a category-coherence problem: a behavioral-health billing
specialist advertising web design reads as a generalist and undercuts the specialist positioning
that is the entire differentiator. **Tighten every directory category to the billing /
credentialing / RCM core.**

**Two data-integrity warnings.** A "4.3/5 rating" and a "95% clean claim ratio" circulate in
competitor listicle snippets. These are **not verified review aggregates** — most likely
vendor-supplied copy. **Do not republish them as third-party validation.** Likewise, the
"#7 in Portland" claim traces back to the company's own About page, not to an independent reading
of the source. Republishing a self-claim as an external ranking is a credibility risk that a
prospect can check in thirty seconds.

**On the "MediBillMD Recognized Partner" badge:** MediBillMD is a **competing billing company**
that publishes a "Top 10 Best Medical Billing Companies in Portland" listicle. Inclusion in a
competitor's roundup post is not a partnership. Presenting it as a recognition badge is a
credibility risk — **remove it or restate it accurately.**

## 3.5 Earned authority — sequenced after 3.4

> **Do §3.4 before §3.5.** Every pitch sends an editor, producer, or association director to the
> website. If they land on a site with no founder entity page, no verifiable credentials, and no
> case studies, **the pitch fails and the relationship is spent.** Trust assets are not a parallel
> workstream — they are the *precondition*.

| Phase | Weeks | Focus |
|---|---|---|
| **0 — Foundation** | 1–4 | Trust assets + directory hygiene + GBP claim |
| **1 — Credibility base** | 3–8 | Association memberships (AAPC, PMI, HBMA); LinkedIn newsletter launch |
| **2 — Earned media** | 4–16 | Podcast pitches — batch of 8, individually tailored, to therapist practice-building shows |
| **3 — Editorial authority** | 8–20 | Bylines; state association CE sessions; partner content |
| **4 — Scale** | 20+ | Conference and industry presence |

**Realistic conversion:** free listings and memberships are near-certain. Podcast and byline pitches
convert at **~25–50% with a specific pitch and a credible site — near 0% without either.**

**Corrections to common assumptions:** HARO/Connectively shut down 2024-12-09; Featured.com
reacquired and relaunched HARO in April 2025. Public partner directories could **not** be confirmed
to exist for SimplePractice or TherapyNotes — verify before building a plan around them. Alma and
Headway are **partial competitors**, not partners.

## 3.6 Google Business Profile — size the prize correctly

Claim it, populate it, gather reviews. But understand the ceiling: **GBP caps out around Portland
by construction, because proximity is not a tunable input.** This is not a local-SEO business.

Treat GBP as a **trust and entity asset**, not a growth channel. The good news from the data:
local-intent queries still return a Local Pack ~93% of the time with AI Overviews only ~15% — so
**`/portland/` is the least AI-exposed page on the site** and is worth strengthening.

---

## Exit criteria

- [ ] Person entity page live; LinkedIn vanity URL changed; schema implemented sitewide
- [ ] Credentials corroborated and linked to issuing bodies
- [ ] Case studies, testimonials, HIPAA statement, pricing page live
- [ ] Directory categories tightened; unverifiable claims and the partner badge removed or restated
- [ ] GBP claimed and populated
- [ ] Association memberships active; 8 podcast pitches sent
