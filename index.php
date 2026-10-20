<!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <button id="navButton">...</button>
            <nav id="nav" name="nav">
                <a href="#profil">profil</a>
                <a href="#project">projects</a>
                <a href="#contact">contact</a>
            </nav>
        </header>
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
    </body>
</html>
