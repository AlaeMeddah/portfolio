# Portfolio

Personal portfolio of **Alae Meddah**, built with PHP, HTML, CSS and vanilla JavaScript.
The whole site imitates the **VS Code** editor: dark and light themes, an "Explorer" sidebar, a status bar, and titles written like code (`class`, `function`, `const`, `let`).

**Live site:** [https://portfolio-w6s7.onrender.com/](https://portfolio-w6s7.onrender.com/)

> The site is hosted on Render's free plan, so the first visit after a period of inactivity can take a few seconds while the server wakes up.

---

## Table of contents

1. [Features](#features)
2. [Tech stack](#tech-stack)
3. [Project structure](#project-structure)
4. [How it works](#how-it-works)
5. [Run it locally](#run-it-locally)
6. [Contact form and environment variables](#contact-form-and-environment-variables)
7. [Deployment](#deployment)
8. [Customization](#customization)
9. [Credits](#credits)
10. [Author](#author)

---

## Features

- **VS Code look and feel**
  - Dark theme (VS Code Dark+) by default, light theme (VS Code Light+) on demand.
  - Titles are generated in CSS with `::before` and `::after`: `h1` is `class … {`, `h2` is a `// comment`, `h3` is `function … () {`, `h4` is `const … = [`, and a `label` followed by a paragraph reads like `let name = "text";`.
  - Indentation guides on the left of each block, like in the editor.
- **Explorer sidebar** that links to each section (`profil.php`, `project.php`, `contact.php`). The active file is highlighted with `:has()` and `:target`, with no JavaScript. On screens narrower than 700 px it becomes a sticky tab bar at the top.
- **Status bar** at the bottom (fixed): name, email, phone, CV, GitHub and LinkedIn.
- **Dark / light switch**: a fixed button at the top right (sun icon + "light mode", moon icon + "dark mode"). The choice is saved in the browser and applied before the page is drawn, so there is no flash.
- **Project cards** that open into a detailed description (context, features, skills, demo GIF) and close again on click or with the keyboard (Enter or Space). Each card ends with a link to its source code on GitHub.
- **Contact form** that sends an e-mail straight to the owner's inbox, with server-side validation and a honeypot against bots.
- **Responsive** layout and keyboard-accessible controls (focus styles, `aria-label`, alternative text on images, logical heading order).

## Tech stack

| Layer | Technology |
|---|---|
| Pages | PHP 8.3 (`include` to assemble the sections) |
| Style | CSS3: custom properties (variables), `:has()`, `::before` / `::after`, media queries |
| Behavior | Vanilla JavaScript (`async` / `await`, `fetch`, `try` / `catch` / `finally`) |
| E-mail | [Resend](https://resend.com) HTTPS API, called from PHP with cURL |
| Font | [JetBrains Mono](https://www.jetbrains.com/lp/mono/) through Google Fonts |
| Server | Apache (official `php:8.3-apache` Docker image) |
| Hosting | [Render](https://render.com), deployed from this GitHub repository |

## Project structure

```
portfolio/
├── Dockerfile                 # php:8.3-apache image, copies the site into /var/www/html
├── index.php                  # entry point: page skeleton, explorer, status bar, theme button
├── action/
│   └── send_mail.php          # contact form endpoint (validation + Resend API), returns JSON
├── img/                       # profile photo, project demo GIFs, GitHub and LinkedIn logos
├── script/
│   └── script.js              # project cards, contact form (fetch), dark / light theme
├── section/
│   ├── profil.php             # "About me" section
│   ├── project.php            # list of project cards (short version)
│   ├── project_description.php# detailed version of each project card
│   └── contact.php            # contact form
└── style/
    └── style.css              # theme variables, layout, components, responsive rules
```

Paths in the HTML (`img/...`, `style/style.css`, `action/send_mail.php`) are relative to the site root, because every page is served through `index.php`. The `include` paths in PHP (`section/...`) are relative to the folder where `index.php` runs.

## How it works

### Page assembly
`index.php` outputs the sidebar and the status bar, and includes the three sections inside `<main>`. `project.php` also includes `project_description.php` inside a hidden `<div id="project-details">`.

### Project cards (`script.js`)
- Every project has a short card (`id="minishell"`) and a detailed card (`id="minishell_full"`).
- Clicking a short card closes any open description, moves the matching `_full` card right after it, hides the short card, and scrolls to the top of the new card. Clicking the open card puts it back.
- The cards get `tabindex="0"` and `role="button"` so they work with the keyboard. Clicks and key presses on a link inside a card are ignored by the toggle, so the source code links work normally.

### Contact form
1. `script.js` intercepts the submit event and sends the form with `fetch` as `FormData`.
2. `action/send_mail.php` accepts `POST` only, cleans the fields, and checks them: mandatory fields, e-mail format, age between 3 and 99, phone with 10 digits, message of 5000 characters at most.
3. A hidden `website` field acts as a **honeypot**: real visitors never fill it, bots do, and their message is silently dropped.
4. The message is sent through the **Resend** API with cURL. The visitor's address is set as `reply_to`, so replying in the mailbox answers the visitor directly.
5. The endpoint always answers in JSON (`{"success": true}` or `{"error": "..."}`) and the page shows the result under the form.

### Dark / light theme
- Every color is a CSS variable defined in `style.css`. The dark values are in `:root`, the light ones in `:root[data-theme="light"]`.
- A short inline script in `<head>` reads the saved choice from `localStorage` and sets `data-theme` before the first paint.
- The button toggles `data-theme` and saves the choice. The icon and the text of the button are switched by CSS, depending on the theme.
- If `localStorage` is blocked, the site simply stays in dark mode.

## Run it locally

### With PHP

Requires PHP 8 with the cURL extension.

```bash
php -S localhost:8000
```

Then open <http://localhost:8000>.

### With Docker

```bash
docker build -t portfolio .
docker run --rm -p 8080:80 \
    -e RESEND_API_KEY="re_xxxxxxxx" \
    -e MAIL_TO="you@example.com" \
    portfolio
```

Then open <http://localhost:8080>.

Without the two environment variables the site still works, but the contact form answers `Mail server is not configured.`

## Contact form and environment variables

The secrets are **never** stored in the repository. They are read with `getenv()` in `action/send_mail.php`:

| Variable | Required | Description |
|---|---|---|
| `RESEND_API_KEY` | yes | API key created in the Resend dashboard |
| `MAIL_TO` | yes | Address that receives the messages |
| `MAIL_FROM` | no | Sender, for example `Portfolio <contact@your-domain.com>`. Default: `Portfolio <onboarding@resend.dev>` |

Note: without a verified domain on Resend, only the `onboarding@resend.dev` sender is allowed, and messages can only be delivered to the e-mail address of the Resend account. To use another sender, verify a domain in Resend first.

## Deployment

The portfolio is deployed on **Render** as a Docker web service:

- **URL:** <https://portfolio-w6s7.onrender.com/>
- Render builds the image from the `Dockerfile` at the root of this repository.
- Every `git push` to the main branch triggers an automatic new deployment.
- `RESEND_API_KEY`, `MAIL_TO` (and optionally `MAIL_FROM`) are set in the service's **Environment** settings on Render.

To deploy your own copy: create a **Web Service** on Render from your GitHub repository, choose the **Docker** runtime, add the environment variables above, and deploy.

## Customization

- **Colors:** edit the variables at the top of `style/style.css` (`:root` for dark, `:root[data-theme="light"]` for light). No other rule contains a hard-coded theme color.
- **Add a project:**
  1. In `section/project.php`, add a short `<article class="project-card" id="my-project">`.
  2. In `section/project_description.php`, add the detailed `<article class="project-card" id="my-project_full">`. The id must be the short id followed by `_full`.
  3. Put the demo GIF in `img/` and reference it as `img/my-project.gif`.
- **Add a section:** create a file in `section/`, include it in `index.php`, and add a link in the Explorer list.
- **Text of the profile:** edit `section/profil.php`.

## Credits

- Font: **JetBrains Mono**, licensed under the [SIL Open Font License 1.1](https://github.com/JetBrains/JetBrainsMono/blob/master/OFL.txt).
- Logos of **GitHub** and **LinkedIn** are trademarks of their owners. They are used only as links to the author's own profiles.
- Theme colors are inspired by the VS Code Dark+ and Light+ themes. This project is not affiliated with Microsoft.
- Sun and moon icons: [Feather Icons](https://feathericons.com/) (MIT license).

## Author

**Alae Meddah**

- GitHub: [AlaeMeddah](https://github.com/AlaeMeddah)
- LinkedIn: [alae-meddah](https://www.linkedin.com/in/alae-meddah)
