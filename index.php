<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
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
            <?php include 'profil.php'; ?>
            <?php include 'project.php'; ?>
            <?php include 'contact.php'; ?>
        </main>
        <footer>
            <div>
                <ul>
                    <li><a href="https://drive.google.com/file/d/13HjWXQl49yVHvf6nlnnoD735AmguyCcP/view?usp=sharing">cv</a></li>
                    <li><a href="https://github.com/AlaeMeddah">git</a></li>
                    <li><a href="https://www.linkedin.com/in/alae-meddah">linkedin</a></li>
                </ul>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
