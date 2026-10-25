<article class="project-card" id="minishell_full">
    <div>
        <h3>Minishell - Projet C (École 42)</h3>
        <h4>Contexte et objectif</h4>
        <ul>
            <li>
                <label for="minishell-contexte">Contexte</label>
                <p id="minishell-contexte">Le projet <em>Minishell</em> (« as beautiful as a shell ») consiste à recréer en langage C un shell simple, inspiré de <code>bash</code>.</p>
            </li>
            <li>
                <label for="minishell-objectif">Objectif</label>
                <p id="minishell-objectif">Comprendre le fonctionnement des processus et des descripteurs de fichiers, et construire une interface en ligne de commande fonctionnelle.</p>
            </li>
        </ul>
        <h4>Fonctionnalités principales</h4>
        <ul>
            <li>
                <label for="minishell-prompt">Prompt et historique</label>
                <p id="minishell-prompt">Le shell affiche un prompt pour chaque nouvelle commande et garde l'historique des commandes grâce à <code>readline</code>.</p>
            </li>
            <li>
                <label for="minishell-parsing">Parsing rigoureux</label>
                <p id="minishell-parsing">Analyse de la ligne de commande avec gestion des guillemets simples (<code>'</code>) et doubles (<code>"</code>), expansion des variables d'environnement (<code>$VAR</code>) et du code de sortie (<code>$?</code>).</p>
            </li>
            <li>
                <label for="minishell-execution">Exécution des commandes</label>
                <p id="minishell-execution">Les commandes sont retrouvées grâce à la variable <code>PATH</code> ou à un chemin relatif ou absolu, puis exécutées dans un processus enfant créé avec <code>fork</code> et lancé avec <code>execve</code>.</p>
            </li>
            <li>
                <label for="minishell-redirections">Redirections et pipes</label>
                <p id="minishell-redirections">Prise en charge des redirections <code>&lt;</code>, <code>&gt;</code>, <code>&gt;&gt;</code> et du heredoc <code>&lt;&lt;</code>, ainsi que des pipes <code>|</code> pour chaîner plusieurs commandes.</p>
            </li>
            <li>
                <label for="minishell-builtins">Commandes intégrées</label>
                <p id="minishell-builtins">Les built-ins <code>echo -n</code>, <code>cd</code>, <code>pwd</code>, <code>export</code>, <code>unset</code>, <code>env</code> et <code>exit</code> sont codés directement dans le shell.</p>
            </li>
            <li>
                <label for="minishell-signaux">Gestion des signaux</label>
                <p id="minishell-signaux">En mode interactif, <code>Ctrl-C</code> affiche un nouveau prompt, <code>Ctrl-D</code> quitte le shell et <code>Ctrl-\</code> est ignoré.</p>
            </li>
        </ul>
        <h4>Compétences et technologies</h4>
        <ul>
            <li>
                <label for="minishell-processus">Processus</label>
                <p id="minishell-processus">Création de processus avec <code>fork</code>, exécution de programmes avec <code>execve</code> et récupération de leur code de sortie.</p>
            </li>
            <li>
                <label for="minishell-fd">Descripteurs de fichiers</label>
                <p id="minishell-fd">Gestion des entrées et sorties avec les descripteurs de fichiers pour relier les commandes entre elles par des pipes et des redirections.</p>
            </li>
            <li>
                <label for="minishell-environnement">Environnement et signaux</label>
                <p id="minishell-environnement">Manipulation des variables d'environnement, gestion des signaux et des entrées de l'utilisateur dans une interface interactive.</p>
            </li>
            <li>
                <label for="minishell-compilation">Compilation et utilisation</label>
                <p id="minishell-compilation">Projet écrit en C et compilé avec un <code>Makefile</code> : <code>make</code> puis <code>./minishell</code> pour lancer le shell.</p>
            </li>
        </ul>
    </div>
    <img src="minishell.gif" alt="demo de minishell">
</article>
<article class="project-card" id="portfolio_full">
    <div>
        <h3>Portfolio - Projet Web (Epitech)</h3>
        <h4>Contexte et objectif</h4>
        <ul>
            <li>
                <label for="portfolio-contexte">Contexte</label>
                <p id="portfolio-contexte">Le projet <em>Portfolio</em> consiste à créer un site vitrine en ligne qui présente mes projets, mes compétences et ma progression au fil de l'année, pour préparer ma recherche d'opportunités.</p>
            </li>
            <li>
                <label for="portfolio-objectif">Objectif</label>
                <p id="portfolio-objectif">Réaliser un portfolio personnalisé, à mon image : son thème imite l'éditeur VS Code Dark+ et les titres s'écrivent comme du code (<code>class</code>, <code>function</code>, <code>const</code>, <code>let</code>) pour refléter le métier de développeur.</p>
            </li>
        </ul>
        <h4>Fonctionnalités principales</h4>
        <ul>
            <li>
                <label for="portfolio-navigation">Navigation claire</label>
                <p id="portfolio-navigation">Un menu en forme d'explorateur de fichiers permet d'atteindre chaque section, avec le fichier actif mis en évidence pour savoir à tout moment où l'on se trouve, et une barre d'état en bas de page reprend les liens principaux.</p>
            </li>
            <li>
                <label for="portfolio-profil">Profil</label>
                <p id="portfolio-profil">Une section de présentation avec ma photo et un texte qui explique mon parcours et ce que je recherche.</p>
            </li>
            <li>
                <label for="portfolio-projets">Projets réalisés</label>
                <p id="portfolio-projets">Chaque projet est présenté dans une carte qui s'ouvre sur sa description détaillée : le contexte et l'objectif, les fonctionnalités, les compétences et technologies utilisées, avec une démonstration en GIF.</p>
            </li>
            <li>
                <label for="portfolio-contact">Contact</label>
                <p id="portfolio-contact">Un formulaire de contact avec champs obligatoires, qui envoie directement un e-mail à ma boîte de réception grâce à l'API <code>Resend</code> appelée en PHP.</p>
            </li>
            <li>
                <label for="portfolio-publication">Publication automatisée</label>
                <p id="portfolio-publication">Le site est hébergé en ligne sur <code>Render</code> et chaque modification poussée sur mon dépôt <code>GitHub</code> est redéployée automatiquement, sans étape manuelle.</p>
            </li>
        </ul>
        <h4>Compétences et technologies</h4>
        <ul>
            <li>
                <label for="portfolio-front">Front-end esthétique</label>
                <p id="portfolio-front">Thème défini avec des variables CSS, police <code>JetBrains Mono</code>, titres générés avec les pseudo-éléments <code>::before</code> et <code>::after</code> et guides d'indentation comme dans VS Code.</p>
            </li>
            <li>
                <label for="portfolio-ux">Ergonomie et responsive</label>
                <p id="portfolio-ux">Mise en page adaptée à tous les écrans : sous 700 px, l'explorateur devient une barre de navigation collée en haut de la page.</p>
            </li>
            <li>
                <label for="portfolio-accessibilite">Accessibilité</label>
                <p id="portfolio-accessibilite">Texte alternatif sur les images et hiérarchie de titres (<code>h1</code> à <code>h4</code>) qui suit la structure du contenu.</p>
            </li>
            <li>
                <label for="portfolio-php">Structure en PHP</label>
                <p id="portfolio-php">La page <code>index.php</code> assemble les sections profil, projets et contact avec des inclusions PHP, ce qui garde chaque partie du site dans son propre fichier.</p>
            </li>
        </ul>
    </div>
</article>
<article class="project-card" id="job-board_full">
    <div>
        <h3>Job Board - Projet Web Full-Stack (Epitech)</h3>
        <h4>Contexte et objectif</h4>
        <ul>
            <li>
                <label for="jobboard-contexte">Contexte</label>
                <p id="jobboard-contexte">Les offres d'emploi et de stage sont dispersées sur de nombreuses plateformes, avec des annonces similaires ou en double qui rendent la recherche longue. Le projet <em>Job Board</em> répond à ce problème en regroupant les annonces au même endroit.</p>
            </li>
            <li>
                <label for="jobboard-objectif">Objectif</label>
                <p id="jobboard-objectif">Construire une solution complète : une base de données SQL qui stocke les annonces, une API <code>Django</code> (back end) et un front end en JavaScript avec <code>React</code> qui affiche le job board, ainsi qu'une page d'administration.</p>
            </li>
        </ul>
        <h4>Fonctionnalités principales</h4>
        <ul>
            <li>
                <label for="jobboard-bdd">Base de données</label>
                <p id="jobboard-bdd">Une base <code>SQLite</code> avec une table pour les annonces, une pour les entreprises, une pour les personnes (candidats) et une pour les candidatures.</p>
            </li>
            <li>
                <label for="jobboard-annonces">Job board</label>
                <p id="jobboard-annonces">Chaque annonce affiche un titre, une description courte et les boutons « Show detail » et « Apply ». Le détail complet s'affiche sans recharger la page et sans popup, et une barre de recherche avec pagination aide à trouver les offres.</p>
            </li>
            <li>
                <label for="jobboard-candidature">Candidature</label>
                <p id="jobboard-candidature">Le bouton « Apply » ouvre un formulaire (nom, e-mail, téléphone, ville, situation) avec un message pour l'entreprise, et chaque candidature est enregistrée dans la base. Un utilisateur connecté n'a pas à saisir à nouveau ses informations, et un visiteur peut postuler sans compte puis en créer un.</p>
            </li>
            <li>
                <label for="jobboard-authentification">Authentification</label>
                <p id="jobboard-authentification">Une page de connexion et une page d'inscription pour les candidats et les entreprises, avec création, modification et suppression du compte.</p>
            </li>
            <li>
                <label for="jobboard-entreprise">Espace entreprise</label>
                <p id="jobboard-entreprise">Une entreprise connectée peut créer, modifier et supprimer ses annonces, et consulter les candidats de chacune avec leurs informations et leur message.</p>
            </li>
            <li>
                <label for="jobboard-administration">Administration</label>
                <p id="jobboard-administration">Une page accessible uniquement aux administrateurs permet de lister, rechercher, créer, modifier et supprimer les enregistrements de chaque table.</p>
            </li>
        </ul>
        <h4>Compétences et technologies</h4>
        <ul>
            <li>
                <label for="jobboard-api">API et opérations CRUD</label>
                <p id="jobboard-api">Toutes les données dynamiques du front end passent par l'API, qui expose les opérations CRUD (Create, Read, Update, Delete) avec les verbes HTTP <code>GET</code>, <code>POST</code>, <code>PUT</code>, <code>PATCH</code> et <code>DELETE</code>.</p>
            </li>
            <li>
                <label for="jobboard-react">Application React</label>
                <p id="jobboard-react">Interface découpée en composants <code>JSX</code> avec <code>React Router</code> pour naviguer sans recharger, et des hooks <code>useState</code> et <code>useEffect</code> pour gérer l'état et les chargements.</p>
            </li>
            <li>
                <label for="jobboard-fetch">Requêtes asynchrones</label>
                <p id="jobboard-fetch">Appels <code>fetch</code> avec <code>try/catch/finally</code> et lecture sécurisée des réponses JSON pour afficher les messages d'erreur du serveur.</p>
            </li>
            <li>
                <label for="jobboard-securite">Authentification et droits d'accès</label>
                <p id="jobboard-securite">Authentification par token avec l'en-tête <code>Authorization</code> : l'API renvoie une erreur 403 aux utilisateurs non autorisés, et la page d'administration est réservée aux administrateurs.</p>
            </li>
        </ul>
    </div>
</article>
<article class="project-card" id="irc-chat_full">
    <div>
        <h3>IRC-Style Chat Server - Projet C++ (Personnel)</h3>
        <h4>Contexte et objectif</h4>
        <ul>
            <li>
                <label for="irc-contexte">Contexte</label>
                <p id="irc-contexte">Projet personnel inspiré d'<em>IRC</em> : un serveur de chat multi-clients écrit en C++ avec des sockets TCP, auquel plusieurs utilisateurs peuvent se connecter en même temps, y compris depuis des machines différentes du réseau.</p>
            </li>
            <li>
                <label for="irc-objectif">Objectif</label>
                <p id="irc-objectif">Comprendre comment fonctionne la communication réseau et comment un serveur gère plusieurs utilisateurs simultanément, sans créer un thread par client.</p>
            </li>
        </ul>
        <h4>Fonctionnalités principales</h4>
        <ul>
            <li>
                <label for="irc-connexions">Connexions multiples</label>
                <p id="irc-connexions">Le serveur écoute sur le port donné en argument et accepte plusieurs clients à la fois, en détectant les nouvelles connexions comme les déconnexions.</p>
            </li>
            <li>
                <label for="irc-pseudo">Pseudos uniques</label>
                <p id="irc-pseudo">Chaque utilisateur choisit un pseudo avec la commande <code>/NICK</code> avant de pouvoir écrire. Un pseudo déjà pris est refusé et l'arrivée de chaque utilisateur est annoncée aux autres.</p>
            </li>
            <li>
                <label for="irc-diffusion">Diffusion des messages</label>
                <p id="irc-diffusion">Un message envoyé par un utilisateur est diffusé en temps réel à tous les autres, précédé de son pseudo, et le départ d'un utilisateur est annoncé.</p>
            </li>
            <li>
                <label for="irc-commandes">Commandes</label>
                <p id="irc-commandes"><code>/WHISPER</code> envoie un message privé à un utilisateur, <code>/LIST</code> affiche les utilisateurs connectés, et toute commande inconnue renvoie un message d'erreur explicite.</p>
            </li>
        </ul>
        <h4>Compétences et technologies</h4>
        <ul>
            <li>
                <label for="irc-sockets">Sockets TCP</label>
                <p id="irc-sockets">Création du serveur avec <code>socket</code>, <code>setsockopt</code>, <code>bind</code>, <code>listen</code> et <code>accept</code>, et validation du port passé en argument.</p>
            </li>
            <li>
                <label for="irc-poll">Architecture événementielle</label>
                <p id="irc-poll">Sockets non bloquantes avec <code>fcntl</code> et boucle d'événements avec <code>poll</code> : un seul thread surveille toutes les connexions et réagit à chaque événement (nouveau client, message reçu, déconnexion).</p>
            </li>
            <li>
                <label for="irc-buffer">Gestion des messages réseau</label>
                <p id="irc-buffer">Les données reçues peuvent arriver coupées ou regroupées : chaque client a son propre tampon, et un message n'est traité qu'une fois la ligne complète reçue.</p>
            </li>
            <li>
                <label for="irc-cpp">Programmation en C++</label>
                <p id="irc-cpp">Classes <code>Server</code>, <code>Client</code> et <code>Chatroom</code>, conteneurs <code>std::map</code> et <code>std::vector</code> pour les clients et les descripteurs surveillés, et gestion des erreurs avec des exceptions.</p>
            </li>
            <li>
                <label for="irc-tests">Tests</label>
                <p id="irc-tests">Serveur testé avec des clients simples comme <code>nc</code> (Netcat) et <code>telnet</code>, en ouvrant plusieurs connexions en parallèle.</p>
            </li>
        </ul>
    </div>
</article>
<article class="project-card" id="philosophers_full">
    <div>
        <h3>Philosophers - Projet C (École 42)</h3>
        <h4>Contexte et objectif</h4>
        <ul>
            <li>
                <label for="philosophers-contexte">Contexte</label>
                <p id="philosophers-contexte">Le projet <em>Philosophers</em> (« I've never thought philosophy would be so deadly ») met en scène des philosophes assis autour d'une table ronde, qui mangent, dorment ou pensent. Il y a une fourchette entre chaque philosophe et il en faut deux pour manger. La simulation s'arrête quand un philosophe meurt de faim.</p>
            </li>
            <li>
                <label for="philosophers-objectif">Objectif</label>
                <p id="philosophers-objectif">Découvrir les bases des threads et des mutex : faire en sorte qu'aucun philosophe ne meure de faim, sans que deux d'entre eux utilisent la même fourchette en même temps.</p>
            </li>
        </ul>
        <h4>Fonctionnalités principales</h4>
        <ul>
            <li>
                <label for="philosophers-parametres">Paramètres de la simulation</label>
                <p id="philosophers-parametres">Le programme prend le nombre de philosophes, <code>time_to_die</code>, <code>time_to_eat</code>, <code>time_to_sleep</code> et un nombre de repas facultatif. Le nombre et le format des arguments sont vérifiés avant de lancer la simulation.</p>
            </li>
            <li>
                <label for="philosophers-cycle">Cycle des philosophes</label>
                <p id="philosophers-cycle">Chaque philosophe est un thread numéroté de 1 à N, qui enchaîne manger, dormir et penser. La simulation s'arrête à la mort d'un philosophe, ou quand tous ont mangé le nombre de repas demandé.</p>
            </li>
            <li>
                <label for="philosophers-fourchettes">Fourchettes protégées</label>
                <p id="philosophers-fourchettes">Chaque fourchette est protégée par un mutex, ce qui empêche deux philosophes de la prendre en même temps.</p>
            </li>
            <li>
                <label for="philosophers-affichage">Affichage horodaté</label>
                <p id="philosophers-affichage">Chaque changement d'état est affiché avec son horodatage en millisecondes, et un mutex évite que les messages de plusieurs philosophes se mélangent.</p>
            </li>
            <li>
                <label for="philosophers-moniteur">Thread moniteur</label>
                <p id="philosophers-moniteur">Un thread dédié vérifie en continu qu'aucun philosophe n'a dépassé <code>time_to_die</code> depuis son dernier repas, puis arrête la simulation et affiche la mort.</p>
            </li>
            <li>
                <label for="philosophers-seul">Cas d'un seul philosophe</label>
                <p id="philosophers-seul">Avec une seule fourchette, le philosophe ne peut pas manger et finit par mourir au bout de <code>time_to_die</code>.</p>
            </li>
        </ul>
        <h4>Compétences et technologies</h4>
        <ul>
            <li>
                <label for="philosophers-threads">Threads</label>
                <p id="philosophers-threads">Création et attente des threads avec <code>pthread_create</code> et <code>pthread_join</code> : un thread par philosophe, plus le moniteur.</p>
            </li>
            <li>
                <label for="philosophers-mutex">Mutex et data races</label>
                <p id="philosophers-mutex">Un mutex par fourchette et un mutex partagé qui protège l'affichage et les données communes (fin de simulation, dernier repas), pour éviter les data races. Le projet est compilé avec <code>-fsanitize=thread</code> pour les détecter.</p>
            </li>
            <li>
                <label for="philosophers-deadlock">Prévention des deadlocks</label>
                <p id="philosophers-deadlock">Chaque philosophe prend d'abord la fourchette de plus petit numéro, puis l'autre : cet ordre fixe empêche tous les philosophes de se bloquer en attendant la fourchette de leur voisin.</p>
            </li>
            <li>
                <label for="philosophers-temps">Gestion du temps</label>
                <p id="philosophers-temps">Mesure du temps en millisecondes avec <code>gettimeofday</code> et attentes découpées en petits pas de <code>usleep</code> pour rester précis.</p>
            </li>
            <li>
                <label for="philosophers-memoire">Gestion de la mémoire</label>
                <p id="philosophers-memoire">Mutex détruits et mémoire libérée à la fin de la simulation.</p>
            </li>
        </ul>
    </div>
    <img src="philosophers.gif" alt="demo de philosophers">
</article>
<article class="project-card" id="so-long_full">
    <div>
        <h3>So_long - Projet C (École 42)</h3>
        <h4>Création d'un jeu 2D avec MiniLibX</h4>
        <ul>
            <li>
                <label for="so-long-presentation-du-projet">Présentation du projet</label>
                <p id="so-long-presentation-du-projet">Le projet <em>So_long</em> est une introduction au développement de jeux 2D en langage C. Il combine la rigueur algorithmique, la manipulation de fichiers de configuration de cartes et l'utilisation d'une bibliothèque graphique pour gérer une fenêtre, des textures, des sprites et des événements clavier.</p>
            </li>
        </ul>
        <h4>Règles du jeu</h4>
        <ul>
            <li>
                <label for="so-long-objectif-principal">Objectif principal</label>
                <p id="so-long-objectif-principal">Le joueur contrôle un personnage et doit collecter tous les éléments de collection (collectibles) présents sur la carte avant de s'échapper par la sortie avec un minimum de déplacements.</p>
            </li>
            <li>
                <label for="so-long-contraintes-de-deplacement">Contraintes de déplacement</label>
                <p id="so-long-contraintes-de-deplacement">Le joueur peut se déplacer dans quatre directions (haut, bas, gauche, droite) à l'aide des touches W, A, S, D.</p>
            </li>
            <li>
                <label for="so-long-obstacles">Obstacles</label>
                <p id="so-long-obstacles">Il est strictement impossible de traverser les murs, qui délimitent et entourent obligatoirement l'ensemble de la carte.</p>
            </li>
            <li>
                <label for="so-long-compteur-de-pas">Compteur de pas</label>
                <p id="so-long-compteur-de-pas">À chaque mouvement effectué, le nombre total de déplacements est affiché et mis à jour en temps réel dans le terminal.</p>
            </li>
        </ul>
        <h4>Fonctionnalités principales</h4>
        <ul>
            <li>
                <label for="so-long-parsing-de-cartes-ber">Parsing de cartes (.ber)</label>
                <p id="so-long-parsing-de-cartes-ber">Analyse, lecture et validation rigoureuse des fichiers de niveaux définissant l'environnement à l'aide de caractères spécifiques : murs (<code>1</code>), espaces vides (<code>0</code>), collectibles (<code>C</code>), position de départ (<code>P</code>) et sortie (<code>E</code>).</p>
                <pre class="map" aria-label="Exemple de carte .ber"><code>1111111111111
10010000000<span class="map-c">C</span>1
1000011111001
1<span class="map-p">P</span>0011<span class="map-e">E</span>000001
1111111111111</code></pre>
            </li>
            <li>
                <label for="so-long-validation-de-la-carte-flood-fill">Validation de la carte (flood fill)</label>
                <p id="so-long-validation-de-la-carte-flood-fill">La validité de la carte est vérifiée à l'aide d'un algorithme de <em>flood fill</em> lancé depuis la position de départ du joueur : si tous les collectibles et la sortie ne sont pas atteignables, la carte est rejetée avec un message d'erreur explicite.</p>
            </li>
            <li>
                <label for="so-long-moteur-graphique-textures">Moteur graphique & Textures</label>
                <p id="so-long-moteur-graphique-textures">Affichage d'une grille 2D texturée à l'aide de la MiniLibX, garantissant une gestion fluide de la fenêtre.</p>
            </li>
            <li>
                <label for="so-long-gestion-des-evenements">Gestion des événements</label>
                <p id="so-long-gestion-des-evenements">Capture instantanée des entrées clavier pour le mouvement ou la fermeture propre du jeu via la touche ESC ou le clic sur la croix rouge.</p>
            </li>
        </ul>
        <h4>Implémentation technique & Notions clés</h4>
        <ul>
            <li>
                <label for="so-long-gestion-de-la-memoire">Gestion de la mémoire</label>
                <p id="so-long-gestion-de-la-memoire">Absence totale de fuites mémoire (leaks) et traitement sécurisé des erreurs de configuration de cartes avec l'affichage d'un message explicite.</p>
            </li>
            <li>
                <label for="so-long-version-bonus">Version Bonus</label>
                <p id="so-long-version-bonus">Implémentation d'animations de sprites, de pièges (<code>T</code>) causant la défaite en cas de contact, et affichage direct du compteur de pas à l'écran.</p>
            </li>
        </ul>
    </div>
    <img src="so_long.gif" alt="demo de so-long">
</article>