# OryvantAI dashboard setup

The existing public website is preserved. Services remain static, as requested.

The dashboard manages Insights articles and detail pages, contact enquiries and private notes, public page SEO, website logo, contact and footer details, optional social profiles, privacy text, users and roles, passwords and activity history.

## Quick start on your Windows computer

1. Extract the project into a new folder. Keep a copy of your current project and database before replacing an existing installation. If you are updating the existing project, keep your existing `.env` file and application key.
2. Start your local MySQL service, for example through the control panel you already use.
3. Open a terminal inside the extracted `cybersecurity` folder and run:

```bat
E:\php\php.exe artisan oryvant:install
```

The installer asks for:

| Setting | Default |
| --- | --- |
| MySQL host | 127.0.0.1 |
| MySQL port | 3306 |
| Database name | oryvantai_cms |
| MySQL username | root |
| MySQL password | Enter your actual local password, or press Enter if your local account has none |
| Administrator email | bilal@oryvantai.tech |

The database is created if it does not exist. Migrations add the CMS tables without resetting other data. The seed imports the six approved existing Insights articles, using the import time as their initial publication time. Running the seed again preserves edited content. No service records or sample customer enquiries are seeded.

If `.env` does not exist, the installer creates it from `.env.example` and generates an application key. The installer writes your MySQL settings locally. It does not ship a shared database password or a shared administrator password.

The installer also creates the public image storage link. On Windows, if creating the link is denied, enable Developer Mode or run the terminal with the required local permissions, then run:

```bat
E:\php\php.exe artisan storage:link
```

4. Save the login details displayed by the installer privately. It displays a unique temporary password only in your terminal.
5. Start Laravel:

```bat
E:\php\php.exe artisan serve
```

Open the website at http://localhost:8000 and the dashboard at http://localhost:8000/admin/login.

Use the administrator email you entered and the temporary password from your terminal. You must choose your own password at the first login. There is no public registration page.

The production CSS and JavaScript are included, so you do not need to run Vite to use this delivery. For future frontend development:

```bat
E:\npm.cmd ci
E:\npm.cmd run dev
```

For a new production asset build:

```bat
E:\npm.cmd run build
```

## User roles

| Role | Access |
| --- | --- |
| Administrator | All dashboard areas, users, settings and activity history |
| Content Editor | Insights, previews, publishing and page SEO |
| Enquiry Manager | Contact inbox, enquiry status and private notes |

Each role can change its own password and sign out. New users and users whose passwords are reset must set their own password at the next login. Deactivating an account or changing its access invalidates its existing sessions on the next request. An administrator cannot delete, deactivate or demote their own account, and the last active administrator is protected.

Existing accounts from the earlier project are inactive after the new migration until an administrator explicitly enables them. The old example account is not seeded.

## Administrator recovery

From the project terminal, create an administrator if none was created during setup:

```bat
E:\php\php.exe artisan oryvant:admin bilal@oryvantai.tech
```

To reset an existing administrator account:

```bat
E:\php\php.exe artisan oryvant:admin bilal@oryvantai.tech --reset
```

Use the actual administrator email if different. The reset command displays a new unique temporary password and invalidates existing sessions. It does not silently promote an existing non administrator account. Keep console access restricted to trusted server operators.

## Managing the website

### Insights

Create a draft, add the title, slug, introduction, content and optional image. Use an empty line between paragraphs. Content is plain text and escaped when rendered. HTML and scripts are not executed.

Use Private preview to review unpublished content while signed in with content permission. Select Published and save to make an article public. A future publication date schedules public visibility. Blank publication dates use the current time when publishing. The website timezone defaults to Asia/Karachi and can be configured with `APP_TIMEZONE`.

Article cards, detail pages and sitemap entries use database records. Drafts and future articles are excluded from public listings and routes. Avoid changing published slugs unless you also arrange redirects for the old URLs.

### Contact enquiries

The public form stores validated submissions in MySQL before showing a receipt message. It does not claim to send email. No email notification delivery is configured or required.

Administrators and Enquiry Managers can review submissions, set New, In Progress or Closed status, add internal notes and permanently delete an enquiry with its notes. Editors cannot access the inbox.

### Website settings

Manage the shared public logo, brand name, footer description, approved email and website, optional phone and address, contact name and role, social profile links, privacy notice and notice version.

Optional address, phone and social profiles stay hidden until you enter approved information. No addresses, phone numbers or social accounts have been invented. Social icons use locally hosted Font Awesome assets.

Changing the shared brand name does not rewrite editorial text embedded in static page content. Static Services, Solutions, Industries and homepage body content remain in their existing Blade files.

### SEO

Manage metadata for Home, Solutions, Services, Industries, Insights and Contact through Page SEO. Article SEO is managed in its own editor. Empty optional fields fall back to the existing page title and description.

The output includes canonical, robots, Open Graph and social sharing tags. The sitemap at `/sitemap.xml` includes indexable pages and published, indexable articles. Admin pages, private previews and drafts are excluded. The static `public/robots.txt` references the approved `oryvantai.tech` domain; update that reference if the production domain changes.

### Privacy and retention

Update the public privacy notice to reflect your actual hosting and processing arrangements before launch. Each enquiry records the notice version acknowledged and the acknowledgement time. This is not marketing consent.

The default enquiry retention review period is 180 days. The inbox flags older records for manual review. No automatic deletion is scheduled. Delete records when no longer required and apply the same retention policy to backups. Activity history stores actors, actions, record identifiers and timestamps, without copying message bodies or passwords. Review activity record retention separately as part of server administration.

## Deployment essentials

PHP 8.4.1 or later (required by the existing locked dependencies), MySQL 8 or a compatible MariaDB release, and the usual Laravel PHP extensions are required. Enable PDO MySQL, Fileinfo, Mbstring, OpenSSL, DOM and GD for the shipped image validation and tests.

The delivery contains PHP dependencies and compiled assets. If dependencies need to be installed or refreshed, run `composer install` using your configured PHP executable. Laravel Boost is included only as a development dependency because the project instructions require it. No dashboard framework or additional authentication runtime package was added.

Before public deployment:

1. Point the web server document root at `public`, not at the project root.
2. Set `APP_ENV=production`, `APP_DEBUG=false`, your HTTPS `APP_URL` and `SESSION_SECURE_COOKIE=true` in `.env`. Keep the application key private and stable.
3. Use a dedicated database account with appropriate application permissions. Do not use a local root account as the production website account. Initial database creation and migrations may require separate deployment credentials.
4. Keep `.env`, database backups, logs and private storage inaccessible from the web. Grant the web process only the necessary filesystem access.
5. Make sure `storage` and `bootstrap/cache` are writable, the storage link exists and HTTPS works. Configure trusted proxies only for your actual hosting infrastructure.
6. After environment configuration, run:

```bat
E:\php\php.exe artisan optimize:clear
E:\php\php.exe artisan migrate --force
E:\php\php.exe artisan config:cache
E:\php\php.exe artisan route:cache
E:\php\php.exe artisan view:cache
```

Keep MySQL backups and server security updates under your hosting operations. This delivery does not claim certification, universal compliance, email delivery, multi factor authentication or a completed production deployment.

## Verification performed

The full 21 test suite passed with SQLite. The 19 CMS feature tests also passed through Laravel's MySQL driver against MariaDB 10.11. A separate clean installer test verified database creation, migration, approved content seeding, environment and application key generation, storage linking and initial administrator creation.

Browser checks covered dashboard widths 1536, 1440, 1280, 1024, 768, 430, 390 and 360 pixels, plus public pages at desktop, tablet and mobile widths. Real login, private draft creation, deletion confirmation, mobile navigation and contact submission passed. No page overflow, JavaScript errors or admin Content Security Policy errors were found after fixes. Oracle MySQL 8 was not available for a separate server run.

To run the automated tests locally:

```bat
E:\php\php.exe artisan test
```

Tests default to an isolated SQLite memory database through `phpunit.xml`. Do not point test runs at a production database.
