# Security Requirements Matrix (v0.1)

| # | Requirement | Control | Evidence | Owner |
|---|-------------|---------|----------|-------|
| SR-01 | All traffic over HTTPS | Render “force HTTPS” + HSTS | curl -I https:// | DevOps |
| SR-02 | Rate-limit signup (5/min/IP) | Laravel throttle | PHPUnit 429 test | Backend |
| SR-03 | Prevent XSS | CSP header + escaping | ZAP scan = 0 High | Security |
| SR-04 | Secrets never in repo | GitHub Secrets, .env | Repo search | All |
| SR-05 | Security Headers enforced | Laravel middleware (HSTS, CSP, X-Frame-Options, etc.) | curl -I https:// staging URL | Security |
| SR-06 | Secure environment defaults | APP_DEBUG=false, secure APP_URL | Check .env.example | DevOps |

