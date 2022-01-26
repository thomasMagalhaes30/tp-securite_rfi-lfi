# TP - Sécurité LFI, RFI et Template Injection
**Auteur :** DESBOUYS Maxence, MAGALHAES Thomas, THEUWS Gabriel et VALENTIN Guillaume
**Année :** 2021 -2022

**Date de rendu :** 2 février 2022
**Adresse mail du compte rendu :** thomas.magalhaes@etu.uca.fr
**Le rendu :** un document .txt ou .pdf répondant aux questions

# Disclaimer
Tous les éléments que vous verrez dans ce TP ont été patchés dans les versions les plus récentes. De plus, vous êtes seul responsable de l’usage que vous pourriez faire de ces techniques sur des sites tiers, elles vous sont présentées ici à des fins éducatives.

# Le tp
### Mise en place :

 - Récupérer le dépôt
 - Vérifiez que vous avez php sur votre machine *(php est déjà présent à l'iut)*
 - Vérifiez que vous avez Node.js sur votre machine *(Node.js est déjà présent à l'iut)*
 - Lancer la commande qui suit afin de démarrer un serveur php
   ``` php --php-ini php.ini -S localhost:3054 ```
  - Utilisez votre navigateur préféré et allez sur l’url ci-dessous.
  [http://localhost:3054/](http://localhost:8000/)

### Les astuces
Astuce regarder : Null Byte Injection
Démarrer 
   
### Exercice n°1 LFI
Cliquez sur "Exo 1 LFI"
**Votre mission : ~~(si si vous l'acceptez)~~**
Trouvez le moyen d'afficher dans la page le contenu du fichier "cible.txt" .
Ce dernier est situé au même niveau dans l'arborescence que la page.
Notez l'url saisie dans votre compte rendu.

### Exercice n°2 LFI
Cliquez sur "Exo 2 LFI"
**Votre mission :**
Trouvez le moyen d'afficher dans la page le contenu du fichier "cible.txt" .
Ce dernier est situé au même niveau dans l'arborescence que la page. 
Notez l'url saisie dans votre compte rendu.

### Exercice n°3 LFI
Cliquez sur "Exo 2 LFI"
**Votre mission :**
Trouvez le moyen d'afficher dans la page le contenu du fichier "cibleHaute.secu" .
Ce dernier est situé à un niveau plus haut dans l'arborescence. 
Notez l'url saisie dans votre compte rendu.
Dans le même temps,  trouver un moyen de récupérer tous les utilisateurs de la machine.
Notez l'url saisie dans votre compte rendu ainsi que le résultat.

---

### Exercice n°1 RFI
Cliquez sur "Exo 1 RFI"
**Votre mission :**
Trouvez le moyen d'afficher le contenu d'un autre site dans votre page.
Notez l'url saisie dans votre compte rendu.

### Exercice n°2 RFI
Cliquez sur "Exo 2 RFI"
**Votre mission :**
Trouvez le moyen d'afficher le contenu d'un autre site dans votre page.
Notez l'url saisie dans votre compte rendu.

### Exercice n°3 RFI
Il est temps pour vous d'utiliser votre site pour attaqué.
Cliquez sur "Exo 2 RFI"
**Votre mission :**
Trouvez le moyen d'afficher vos noms sur le site d'un de vos camarades



