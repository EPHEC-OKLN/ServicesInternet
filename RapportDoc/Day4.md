# Tâches réalisées
Mise en place du site web en ligne. Le site est accessible depuis l'adresse suivante : www.okln.ephec-ti.be .

Le serveur à été configuré pour fonctionner avec du PHP.
Nous sommes aussi occupé d'installer une base de donnée pour stocker les données.
# Problèmes rencontrés (énnoncé du problème + solution)
Nous avons eu un petit problème pour faire fonctionner les pages PHP sur le serveur mais ce n'etait qu'une simple erreur. Il fallait redemarrer le service pour appliquer les modifications.
# Motivations des technologies/infrastructures utilisées

__Serveur web :__
- NGINX : Nous avons utlisés NGINX parce que nous connaissaons bien ce service, il est plus récent et plus performant.
        Nginx a gagné en popularité depuis sa sortie en raison de son utilisation de ressources légères et de sa capacité à évoluer facilement sur un minimum de matériel. Nginx excelle à fournir rapidement du contenu statique et est conçu pour transmettre les demandes dynamiques à d'autres logiciels mieux adaptés à ces fins.

Nginx est souvent sélectionné par les administrateurs pour son efficacité et sa réactivité en charge. Advocates se félicite de l'accent mis par Nginx sur le serveur Web de base et les fonctions de proxy

__Serveur PHP :__ 
- PHP-FM : Un des avantages réels de php_fpm est au niveau de la sécurité. De plus on peut avoir plusieurs version PHP sur le même serveur. Il constitue ainsi une alternative au serveur PHP avec des options pour les sites subissant de fortes charges2.

__Serveur MYSQL :__
 - Maria DB :
    * Le système de gestion de bases de données open source sort en version 10. Il offre des performances optimisées ainsi que des fonctionnalités supplémentaires, notamment développées avec et pour Google, SkySQL et Fusion-IO.
    
    * Les performances de MariaDB 10 sont nettement améliorées par rapport aux versions précédentes et à MySQL. À l'origine de ces améliorations, des fonctions de réplication multi-maîtres parallèle ainsi que le groupement de commits, qui permet d'optimiser les performances en contexte transactionnel.

__Langague utilisé :__ 
  - Nous avons utlisés du HTML,CSS,PHP. Plus particulierement du PHP pour pouvoir se connecter à une base de donnée. Notre choix à vite été fait suite à plusieurs fonctionnalités nécéssaires : Login, inscription,deconnexion.
# Remarques éventuelles
La derniere étape est de lier le PHP avec la DB.
# Sources (Important !)
https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-in-ubuntu-16-04

http://www.open-source-guide.com/Actualites/Mariadb-10-les-nouveautes-et-avantages

https://www.digitalocean.com/community/tutorials/apache-vs-nginx-practical-considerations
