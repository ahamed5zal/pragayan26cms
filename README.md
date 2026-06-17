# Pragyan26 CMS (PHP 8.x Updated Fork)

Pragyan26 CMS is a multi-user, modular Content Management System (CMS) designed to organize and facilitate collaborative content creation and administration. Originally developed by the [Delta Force](https://github.com/delta) team as Pragyan CMS, this version is a modernized fork updated for PHP 8.x compatibility and hardened security.

It features a strong custom framework with independent components like templates, modules, and widgets. This fork is maintained at [ahamed5zal/pragayan26cms](https://github.com/ahamed5zal/pragayan26cms).

## Core Features & Modules

Pragyan26 CMS comes pre-packaged with a wide array of tools to manage your website:

*   **Modules:** Article, Form, Quiz, Forum, Gallery, Book, News, Poll, and more.
*   **Widgets:** Image slider, Facebook plugins, page hits counter, news flash, server date/time, etc.
*   **Third-party Plugins:** PDF converter, Google Maps integration, Sphider search engine, and others.
*   **User Management:** Powerful tools to organize and manage granular permissions for users and groups.
*   **Hierarchical Structure:** A flexible system where every page is a node that can host sub-pages and specific modules.

## What's New in this Fork

If you've used the original Pragyan CMS, here is what has changed:

*   **Full PHP 8 Compatibility:** Refactored to eliminate deprecated functions and errors. Uses `mysqli` consistently and handles resources safely under PHP 8.x.
*   **Hardened Security:**
    *   **CSRF Protection:** Anti-CSRF tokens integrated into all critical forms (Login, Registration, Page Settings, Search).
    *   **Content Security Policy (CSP):** Default headers implemented to mitigate XSS and data injection attacks.
    *   **Clickjacking Prevention:** Modern headers to prevent the CMS from being framed on unauthorized domains.
    *   **XSS Sanitization:** Improved output escaping and input filtering across core modules.
*   **Improved Page Management:**
    *   **Archiving System:** You can now archive pages instead of just deleting them. Archived pages stay in the DB (with negative IDs), are hidden from search engines, and can be restored along with their child hierarchy at any time.
    *   **Numeric Reordering:** No more "Move Up/Down" clicking marathons. You can now set page order using direct numeric inputs.
*   **Database Modernization:** Now defaults to `utf8mb4` character set and `InnoDB` storage engine for better performance and support for modern character sets.
*   **Bug Fixes:** Resolved issues with homepage auto-deletion, revision control glitches, and content editing failures.

## Installation Procedure

### Prerequisites
*   **Web Server:** Apache (with `mod_rewrite` enabled for Pretty URLs) or Nginx.
*   **PHP:** Version 8.0 or higher.
*   **Extensions:** `mysqli`, `gd`, `curl` (for OpenID), and `mbstring`.
*   **Database:** MySQL 5.7+ or MariaDB 10.3+.

### Step-by-Step Setup
1.  **Extract Files:** Upload the repository content to your web root (e.g., `/var/www/html/pragyan`).
2.  **Permissions:** Ensure the following directories are writable by the web server user (`www-data`, `apache`, etc.):
    *   `cms/uploads/`
    *   `cms/templates/`
    *   `cms/widgets/`
    *   `cms/languages/`
    *   `cms/modules/`
    *   `cms/modules/search/settings/`
3.  **Run Installer:** Open your browser and navigate to `http://your-domain/pragyan`. You will be automatically redirected to the `/INSTALL` directory.
4.  **Database Config:** Enter your MySQL host, username, password, and a name for a new/existing database.
5.  **Admin Setup:** Create your super-admin account by providing a username, email, and strong password.
6.  **CMS Settings:** Choose your default template (e.g., Integriti) and decide whether to enable "Pretty URLs".
7.  **Finalize:** The installer will create the necessary tables and generate your `config.inc.php`. Once finished, the `/INSTALL` directory is automatically renamed for security.

## Usage & Core Concepts

Pragyan26 CMS uses a hierarchical page structure. Everything revolves around the **Action Bar** found at the top of the page when logged in.

*   **Pages:** Every page is a node. You can create sub-pages infinitely.
*   **Modules:** Each page is assigned a module (e.g., `article` for text, `form` for data collection, `quiz` for tests).
*   **Permissions:** Granular access control. You can set permissions per page for specific users or groups.
*   **Templates:** Change the entire look of the site or specific sections by switching templates in the Page Settings.

## Credits & Contributions

This project is an updated fork of the original [Pragyan CMS](https://github.com/delta/pragyan).

Special thanks to **[Logesh0098](https://github.com/Logesh0098)** for significant contributions to the PHP 8.x modernization, security hardening, and core refactoring of this repository, completed under the guidance and mentoring of **[Ahamed Faizal](https://github.com/ahamed5zal/)**.

---
*Maintained at [ahamed5zal/pragayan26cms](https://github.com/ahamed5zal/pragayan26cms).*
