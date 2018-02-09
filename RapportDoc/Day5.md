# Tâches réalisées
Le site est accessible depuis le web, sécurisé en HTTPS.
Le serveur web est configuré avec un serveur proxy.
Depuis le serveur web nous avons mis en place le site web pour qu'il fonctionne sur le port 80 et ensuite le serveur proxy s'occupe de faire la redirection sur le port 443.
Le Base de Donnée est fonctionelle et accessible via le serveur web. Elle n'est pas connectée sur internet pour se proteger. C'est donc le serveur web lui même qui fait la connexion en interne vers la DB.
# Problèmes rencontrés (énnoncé du problème + solution)
L'inscription et la connexion ne sont pas disponible. Nous n'avons pas réussi à mettre en place la connexion avec la base de donnée directement du php dans le temps impartie. La solution pour résoudre ce problème est de mettre en place la connexion, certain fichier ont deja été créer afin d'y parvenir.  
# Motivations des technologies/infrastructures utilisées
Serveur web :

NGINX : Nous avons utlisés NGINX parce que nous connaissaons bien ce service, il est plus récent et plus performant. Nginx a gagné en popularité depuis sa sortie en raison de son utilisation de ressources légères et de sa capacité à évoluer facilement sur un minimum de matériel. Nginx excelle à fournir rapidement du contenu statique et est conçu pour transmettre les demandes dynamiques à d'autres logiciels mieux adaptés à ces fins.
Nginx est souvent sélectionné par les administrateurs pour son efficacité et sa réactivité en charge. Advocates se félicite de l'accent mis par Nginx sur le serveur Web de base et les fonctions de proxy

Serveur PHP :

PHP-FM : Un des avantages réels de php_fpm est au niveau de la sécurité. De plus on peut avoir plusieurs version PHP sur le même serveur. Il constitue ainsi une alternative au serveur PHP avec des options pour les sites subissant de fortes charges2.
Serveur MYSQL :

Maria DB :
Le système de gestion de bases de données open source sort en version 10. Il offre des performances optimisées ainsi que des fonctionnalités supplémentaires, notamment développées avec et pour Google, SkySQL et Fusion-IO.

Les performances de MariaDB 10 sont nettement améliorées par rapport aux versions précédentes et à MySQL. À l'origine de ces améliorations, des fonctions de réplication multi-maîtres parallèle ainsi que le groupement de commits, qui permet d'optimiser les performances en contexte transactionnel.

Langague utilisé :

Nous avons utlisés du HTML,CSS,PHP. Plus particulierement du PHP pour pouvoir se connecter à une base de donnée. Notre choix à vite été fait suite à plusieurs fonctionnalités nécéssaires : Login, inscription,deconnexion.
# Remarques éventuelles
Nous aurions pu mieux organiser notre temps pour avoir un site + abouti et + fonctionnel.
Nous aurions du commencer à developper la partie serveur et base de donnée plus tôt et en local plutot que d'attendre un serveur fonctionnel qui est arrivé tardivement par rapport à nos espérance.
Nous sommes quand même satisfait du travail effectué.
# Sources (Important !)
Le code source du site web et du serveur web sont sur github.
