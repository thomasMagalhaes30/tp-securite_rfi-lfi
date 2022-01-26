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
 - Lancer la commande qui suit à la racine de ce projet afin de démarrer un serveur php
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
Cet exercice ce fait avec un autre binôme/collègue. Si vous n'en n'avez pas ou qu'il n'est pas à cet exercice, nous mettrons en place propre serveur.

#### Mise en place pour le serveur :
1. Trouvez l'adresse IPv4 de votre machine (pour l'avoir en mémoire)
2. Créer un fichier index.php qui possède un titre h1 et une inclusion de fichier sans vérification de l’entrée. Vous pouvez faire comme [l'index.php de l'exercice 1](/exo_rfi/index.php).
3. Lancer votre serveur PHP en précisant l'IPv4 de votre machine au lieu de localhost. Ansi, votre serveur est mis à la disposition de tout l'IUT.

#### Protocole à suivre pour le client :
1. Avec votre navigateur préféré, obtenir la page d'accueil du binôme/collègue avec lequel vous travaillez.
2. Puisque vous connaissez sa faille, autant l'exploiter ~~(la faille du serveur)~~ en injectant de l'HTML ou du PHP de votre choix. Si vous n'avez vraiment pas d'idée, prenez ce [index.html](https://github.com/LINCnil/Guide-RGPD-du-developpeur/blob/main/index.html).
```pour obtenir le lien brut, cliquez sur le bouton 'raw'```
