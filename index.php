<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" href="style/style.css">
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
