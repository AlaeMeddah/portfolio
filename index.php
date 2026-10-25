<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <script>
            try {
                var savedTheme = localStorage.getItem("theme");
                if (savedTheme === "light" || savedTheme === "dark") {
                    document.documentElement.dataset.theme = savedTheme;
                }
            } 
            catch (error) {
            }
        </script>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <button type="button" id="theme_toggle" aria-label="Switch to light mode">
            <span class="to-light">
                <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                <span class="theme-label">light mode</span>
            </span>
            <span class="to-dark">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                <span class="theme-label">dark mode</span>
            </span>
        </button>
        <aside id="explorer" aria-label="Explorer">
            <div class="explorer-title">Explorer</div>
            <nav id="nav">
                <details open>
                    <summary>portfolio</summary>
                    <ul>
                        <li><a href="#profil">profil.php</a></li>
                        <li><a href="#project">project.php</a></li>
                        <li><a href="#contact">contact.php</a></li>
                    </ul>
                </details>
            </nav>
        </aside>
        <main>
            <?php include 'section/profil.php'; ?>
            <?php include 'section/project.php'; ?>
            <?php include 'section/contact.php'; ?>
        </main>
        <footer>
            <div>
                <ul>
                    <li><span>Alae Meddah</span></li>
                    <li><a href="mailto:meddah.alae@gmail.com">meddah.alae@gmail.com</a></li>
                    <li><a href="tel:+33757875953">+33 7 57 87 59 53</a></li>
                </ul>
                <ul>
                    <li><a href="https://drive.google.com/file/d/13HjWXQl49yVHvf6nlnnoD735AmguyCcP/view?usp=sharing" target="_blank" rel="noopener noreferrer">cv</a></li>
                    <li><a href="https://github.com/AlaeMeddah" target="_blank" rel="noopener noreferrer"><img src="img/GitHub_Invertocat_Black.png" alt="github logo">github</a></li>
                    <li><a href="https://www.linkedin.com/in/alae-meddah" target="_blank" rel="noopener noreferrer"><img src="img/InBug-Black.png" alt="linkedin logo">linkedin</a></li>
                </ul>
            </div>
        </footer>
        <script src="script/script.js"></script>
    </body>
</html>
