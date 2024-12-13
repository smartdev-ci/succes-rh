# succes-rh
```markdown
# Laravel Breeze Project

Ce projet est une application web construite avec [Laravel](https://laravel.com/) et utilise [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#breeze) comme kit de démarrage pour la gestion de l'authentification et des fonctionnalités de base.

## Prérequis

Avant de commencer, assurez-vous d'avoir les outils suivants installés sur votre machine :

- **PHP** (>= 8.1)
- **Composer** (gestionnaire de dépendances PHP)
- **Node.js** (>= 16) et **npm** (ou **yarn**)
- **MySQL** ou une autre base de données compatible
- **Git** pour cloner ce dépôt

## Installation

1. **Clonez le dépôt** :

   ```bash
   git clone https://github.com/smartdev-ci/succes-rh.git
   cd nom-du-projet
   ```

2. **Installez les dépendances PHP** :

   ```bash
   composer install
   ```

3. **Installez les dépendances JavaScript** :

   ```bash
   npm install
   ```

4. **Copiez le fichier `.env.example` pour créer un fichier `.env`** :

   ```bash
   cp .env.example .env
   ```

5. **Configurez vos variables d'environnement dans le fichier `.env`** :

   - Définissez les informations de votre base de données :
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nom_de_la_base
     DB_USERNAME=utilisateur
     DB_PASSWORD=motdepasse
     ```

6. **Générez la clé de l'application** :

   ```bash
   php artisan key:generate
   ```

7. **Exécutez les migrations pour créer les tables dans la base de données** :

   ```bash
   php artisan migrate
   ```

8. **Compilez les assets front-end** :

   ```bash
   npm run dev
   ```

9. **Démarrez le serveur local** :

   ```bash
   php artisan serve
   ```

10. Accédez à l'application via [http://localhost:8000](http://localhost:8000).

## Fonctionnalités

- Authentification utilisateur (inscription, connexion, réinitialisation de mot de passe)
- Configuration minimale prête à l'emploi
- Front-end simple avec Tailwind CSS

## Structure du Projet

- **`routes/web.php`** : Contient les routes de l'application.
- **`resources/views`** : Contient les vues (HTML + Blade templates).
- **`app/Models`** : Contient les modèles (User, etc.).
- **`app/Http/Controllers`** : Contient les contrôleurs.

## Déploiement

Pour déployer l'application, suivez les étapes ci-dessous :

1. **Configurez votre environnement de production** (par ex., hébergement sur Laravel Forge, AWS, etc.).
2. **Configurez votre fichier `.env` pour correspondre à votre environnement de production**.
3. **Compilez les assets en mode production** :

   ```bash
   npm run build
   ```

4. **Exécutez les migrations en production** :

   ```bash
   php artisan migrate --force
   ```

5. **Déployez les fichiers du projet sur le serveur**.

## Contribuer

Si vous souhaitez contribuer à ce projet :

1. Forkez ce dépôt.
2. Créez une branche : `git checkout -b ma-nouvelle-fonctionnalite`.
3. Effectuez vos modifications et validez-les : `git commit -m 'Ajout d'une nouvelle fonctionnalité'`.
4. Poussez vos modifications : `git push origin ma-nouvelle-fonctionnalite`.
5. Soumettez une pull request.

## Licence

Ce projet est sous licence [MIT](LICENSE).

## Auteurs

- **Aistide Adouko** - [GitHub Profile](https://github.com/votre-utilisateur)

Pour toute question, contactez-moi via [email@example.com](mailto:email@example.com).
```

Remplacez les sections pertinentes par des informations spécifiques à votre projet.
