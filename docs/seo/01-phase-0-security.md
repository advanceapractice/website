# Phase 0 — Security: rotate, then rule out compromise
**Timeline: today. Blocks everything else.**

Nothing in Phases 1–4 is worth starting until this is closed, for two reasons: the site is
currently takeover-able by anyone who reads a public git history, and a compromise is one of
only two causes that would explain a traffic collapse *and* recover quickly once fixed.

---

## 0.1 Rotate credentials — today

**CONFIRMED:** `github.com/advanceapractice/website` is **public**. Its history contains literal,
plaintext production credentials committed on **2026-05-05** and still reachable from branch
`claude/fix-layout-issues-JVbx3`:

| Credential | Where | Grants |
|---|---|---|
| Hostinger FTP host IP, username, password | `.github/workflows/deploy-menu-fix.yml` | Write access to `public_html` |
| WordPress admin username + password | `.github/workflows/inject-via-wp-admin.yml` | Full site administrator |

Commit `767fdd1` deleted the *files*. Git retains the *blobs*. These have been publicly readable
for roughly **four months**.

### Do this in order

1. **Rotate the Hostinger account password.**
2. **Rotate the FTP/SFTP password** (and prefer SFTP — the deleted workflow used
   `set ftp:ssl-allow false`, i.e. plaintext FTP).
3. **Rotate the WordPress administrator password.** Enable 2FA.
4. **Rotate anything that reused either password anywhere else.**

> **Rotation is the remediation. Deleting the branch is not.** A credential that has been public
> for four months must be assumed compromised, and GitHub can still serve unreachable blobs by
> SHA. Rotate first, purge second.

## 0.2 Audit for compromise

- **WordPress → Users.** Look for administrator accounts nobody recognizes. Check registration
  dates against 2026-05-05 onward.
- **WordPress → Plugins.** Look for plugins nobody installed, especially in `mu-plugins/`, which
  load automatically and do not appear in the normal plugin list. *(Note: `aap-menu-fix.php` in
  `mu-plugins/` is legitimate — it was deployed intentionally. Verify its contents match the repo
  copy and nothing was appended.)*
- **File timestamps.** Anything in `wp-content/` modified on a date with no corresponding
  deployment.
- **`wp-config.php` and `.htaccess`** — the two most common injection targets.
- **Scan.** Wordfence or Sucuri, full scan including core-file integrity check.

## 0.3 Rule out a hacked-content penalty — 60 seconds, free

**Search Console → Manual actions.** Then **Search Console → Security issues.**

| Result | Meaning |
|---|---|
| **Empty** | Manual action eliminated. **Permanently — do not revisit it.** Proceed to Phase 1. |
| **"Hacked content"** or a security notice | You have found the cause. Clean, then request review. **Recovery is 3–21 days and near-full** — by far the best outcome available. |
| **"Thin content with little or no added value"** or **"Pure spam"** | Points at the programmatic pages. If it names the `/credentialing-and-payer-enrollment-*` pattern, that is conclusive — go straight to Phase 2 and file for reconsideration after the prune. |

A manual action has a distinctive shape: **a near-vertical cliff on a single day that matches no
published update window.** Algorithmic demotions decline over a rollout window instead.

## 0.4 Check for cloaked spam

If a compromise is suspected but the scan is clean, check what Googlebot sees versus what a
browser sees — injected SEO spam is routinely served only to crawlers:

- **Search Console → URL Inspection → Test Live URL → View Tested Page → HTML.** Compare against
  view-source in a browser. Injected links usually appear in the crawler version only.
- `site:advanceapractice.com` combined with obvious spam terms.
- Search Console → Links → top linking sites, for sudden inbound spam.

## 0.5 Then, and only then, purge the repository

Once credentials are rotated:

1. Delete branch `claude/fix-layout-issues-JVbx3`.
2. Purge the blobs from history (`git filter-repo` or GitHub Support).
3. Consider making the repository **private** — it serves no public purpose and currently
   publishes the company's infrastructure details.
4. Going forward, use **GitHub Actions Secrets**, never literal values in workflow YAML.

---

## Exit criteria

- [ ] Hostinger, FTP/SFTP, and WP admin passwords rotated; 2FA on WP admin
- [ ] WordPress users, plugins, and `mu-plugins` audited
- [ ] Full malware scan clean
- [ ] Search Console **Manual actions** and **Security issues** both checked and recorded
- [ ] Branch deleted and history purged
- [ ] Repository visibility decision made
