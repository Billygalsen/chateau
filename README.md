# Chateau

Petit site PHP (structure MVC légère).

## Installation (locale)

1. Placer le dossier `chateau` dans `C:\xampp\htdocs\` (ou dossier équivalent).
2. Démarrer Apache (XAMPP/WAMP) ou lancer le serveur PHP intégré :

```bash
php -S localhost:8000 -t public
```

3. Ouvrir `http://localhost/chateau/public` ou `http://localhost:8000`.

## Contenu
- `app/` : contrôleurs et vues
- `core/` : noyau (router, DB, fonctions)
- `models/` : modèles
- `public/` : point d'entrée + assets

## Notes
- Ne pas committer de clés API ni de gros fichiers (utiliser `.gitignore` / Git LFS).
- Si un fichier `README.md` est ajouté à la racine, cela n'affecte pas le site en production ou en local : il s'agit d'un fichier documentaire. Évitez toutefois d'ajouter des fichiers dans `public/` qui pourraient être servis.

Contact: votre-email@example.com
