# Chateau

Petit site PHP (structure MVC légère) — frontend et pages statiques servies depuis `public/`.

## Présentation

Ce dépôt contient le code source d'un petit site PHP organisé ainsi :

- `app/` : contrôleurs et vues
- `core/` : code central (router, configuration, fonctions)
- `models/` : logique d'accès aux données
- `public/` : point d'entrée (`index.php`) et assets (CSS, JS, images)

## Prérequis

- Windows / macOS / Linux
- PHP 7.4+ installé (ou XAMPP/WAMP qui fournit PHP & Apache)
- (Optionnel) Serveur MySQL si le projet utilise une base de données

## Installation pas à pas (locale)

1. Copier le dossier `chateau` dans le dossier de votre serveur local :

	- Avec XAMPP : `C:\xampp\htdocs\chateau`
	- Avec WAMP : `C:\wamp64\www\chateau`

2. Démarrer Apache et (si besoin) MySQL depuis le panneau XAMPP/WAMP.

3. Si vous préférez le serveur PHP intégré (rapide pour tests) :

```powershell
cd C:\path\to\chateau
php -S localhost:8000 -t public
```

Puis ouvrez `http://localhost:8000`.

4. Configuration de la base de données (si utilisée) :

- Ouvrez le fichier `core/config.php` (ou `app/config.php` si présent) et renseignez les paramètres DB (hôte, nom, utilisateur, mot de passe).
- Importez le fichier SQL s'il existe (ex. via phpMyAdmin).

## Lancer le projet

- Avec XAMPP/WAMP : `http://localhost/chateau/public`
- Avec serveur PHP intégré : `http://localhost:8000`

## Sécurité & bonnes pratiques

- Ne commitez jamais de clés secrètes (API keys, mots de passe). Utilisez un fichier `.env` non suivi ou des variables d'environnement.
- Ajoutez un fichier `.gitignore` pour exclure :

```
# système
.DS_Store
Thumbs.db

# IDE
.vscode/

# dépendances / build
node_modules/
vendor/

# fichiers secrets
.env
cle*api*

# OneDrive / temporaires
~$*
*.tmp
```

- Pour gros fichiers (>50 Mo) utilisez Git LFS.

## Dépannage

- Page blanche / erreurs PHP : activer l'affichage des erreurs (dans `php.ini` ou ajouter `ini_set('display_errors', 1); error_reporting(E_ALL);` temporairement).
- 404 sur toutes les routes : vérifier `public/.htaccess` et la configuration du router.

## Déployer

- Pour déployer sur un hébergement partagé, placez le contenu de `public/` dans le dossier public de l'hébergement et ajustez les chemins et la configuration.

## Contact

Si vous avez besoin d'aide pour lancer le projet localement, envoyez un message avec votre OS et la méthode souhaitée (XAMPP/WAMP ou serveur PHP intégré).

