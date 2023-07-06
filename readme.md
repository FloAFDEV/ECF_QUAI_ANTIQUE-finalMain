COMMENT COMMENCER CE PROJET

Je recommanderai de télécharger ce référentiel localement, puis de copier les fichiers et chemins docker (path docker, files docker-\*) dans votre projet symfony.

Pré-requis

Ce projet est réalisé sous OS X, Symfony 5.4.21 et PHP 8.2.1, composer require Composer version 2.5.4

Déploiement de votre application Symfony Quai Antique en local.

Pour déployer une application Symfony en local, vous avez besoin de suivre les étapes suivantes :

Assurez-vous d'avoir les prérequis suivants installés sur votre ordinateur :

Composer ou docker

Composer peut être installé sur n'importe quelle machine mac moderne, que ce soit un Macbook Pro, un Macbook Air, un iMac, un Mac Pro, ...

Étapes pour installer Composer

1 Télécharger le fichier compser.phar à cette adresse:

https://getcomposer.org/download/

ET

Installer http://docker-sync.io/

2 Ouvrez le terminal et déplacer ce fichier vers le chemin:
/usr/local/bin/composer en utlisant la commande ci-desous.

mv composer.phar /usr/local/bin/composer

3 Vérifier que Composer soit bien installé en utilisant la commande suivante sur le terminal: composer -V. Si un numéro de version apparaît, tout à fonctionner correctement. Dans le cas contraire refaite les étapes ou lisez la documentation.
cf.(https://getcomposer.org/doc/00-intro.md)

4.Téléchargez et installez Symfony en utilisant l'installateur Composer :

5.Configurez votre base de données en modifiant les paramètres dans le fichier .env :

Adresse de phpMyadmin sur votre navigateur DATABASE_URL=mysql ou http://127.0.0.1:8080/index.php?route=/database/structure&db=db_ecf_quai_antique

.Démarrez le serveur Web interne de Symfony en exécutant la commande suivante :
php bin/console server:run

.e-mail et mot de passe administrateur 'adminquaiantique@quaiant.fr' mdp: 'Quaiantique'

// Sous MacOS:

-         	docker volume create db_ecf_quai_antique

-         	1) Lancer le container Docker : docker-compose up -d (modifié)

-         2) Lancer le serveur PHP : symfony serve -d ou symfony server:start -d (modifié)ou symfony server:start -d

\*. 2Bis} install du composer:
composer install 2.5.4

php requirement 8.2.1

php bin.console doctrine:database:create

php bin/console make:migration

php bin/console d:m:m

\*. 3) Arreter le serveur PHP : symfony server:stop

-         	4) Stopper le container Docker :

    docker-compose down -v

-         5) Passer en https en local , dans le terminal :

symfony server:ca:install

Votre application Symfony est maintenant déployée et accessible à l'adresse:

http://localhost:8000.

6. Le lien du Trello: https://trello.com/b/SF5ceWq5/quai-antique

# 💫 About Me:

Jeune développeur tout juste reconverti, passionné de code et autres techno.

## 🌐 Socials:

[![Discord](https://img.shields.io/badge/Discord-%237289DA.svg?logo=discord&logoColor=white)](https://discord.gg/https://discord.gg/hz7C5qFA) [![Facebook](https://img.shields.io/badge/Facebook-%231877F2.svg?logo=Facebook&logoColor=white)](https://www.facebook.com/florent.perez.18/) [![LinkedIn](https://img.shields.io/badge/LinkedIn-%230077B5.svg?logo=linkedin&logoColor=white)](https://www.linkedin.com/in/florent-perez-559524242/)

# 💻 Tech Stack:

![Symfony](https://img.shields.io/badge/symfony-%23000000.svg?style=for-the-badge&logo=symfony&logoColor=white) ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E) ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![Trello](https://img.shields.io/badge/Trello-%23026AA7.svg?style=for-the-badge&logo=Trello&logoColor=white) ![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white) ![IOS](https://img.shields.io/badge/IOS-%2320232a.svg?style=for-the-badge&logo=apple&logoColor=white) ![ANDROID](https://img.shields.io/badge/android-%2320232a.svg?style=for-the-badge&logo=android&logoColor=%a4c639) ![Apache](https://img.shields.io/badge/apache-%23D42029.svg?style=for-the-badge&logo=apache&logoColor=white) ![Adobe Lightroom](https://img.shields.io/badge/Adobe%20Lightroom-31A8FF.svg?style=for-the-badge&logo=Adobe%20Lightroom&logoColor=white) ![ESLint](https://img.shields.io/badge/ESLint-4B3263?style=for-the-badge&logo=eslint&logoColor=white)

# 📊 GitHub Stats:

![](https://github-readme-stats.vercel.app/api?username=FloAFDEV&theme=dark&hide_border=false&include_all_commits=false&count_private=false)<br/>
![](https://github-readme-streak-stats.herokuapp.com/?user=FloAFDEV&theme=dark&hide_border=false)<br/>
![](https://github-readme-stats.vercel.app/api/top-langs/?username=FloAFDEV&theme=dark&hide_border=false&include_all_commits=false&count_private=false&layout=compact)

## 🏆 GitHub Trophies

![](https://github-profile-trophy.vercel.app/?username=FloAFDEV&theme=radical&no-frame=false&no-bg=true&margin-w=4)

---

[![](https://visitcount.itsvg.in/api?id=FloAFDEV&icon=0&color=0)](https://visitcount.itsvg.in)

<!-- Proudly created with GPRM ( https://gprm.itsvg.in ) -->

![logo](https://user-images.githubusercontent.com/103335500/226464740-aea77c7f-c2a2-4645-af78-f303dac76a8e.png)
