**Mini projet : Gestionnaire de tâches (CRUD)**

**Énoncé :**
Vous devez créer un gestionnaire de tâches qui permettra aux utilisateurs de créer, afficher, mettre à jour et supprimer des tâches. Chaque tâche aura un titre et une description.Vous devez utiliser le modèle MVC pour structurer votre application. Vous pouvez utiliser Bootstrap pour le design.

**Étapes à suivre :**

1. Créez une structure de dossiers pour votre projet avec le dossier et les fichiers suivants:


- GestionnaireTaches/
  - index.php
  - models/
    - Task.php
    - Database.php
    - TaskManager.php
  - controllers/
    - TaskController.php
    - store.php
    - update.php
  - views/
    - task/
      - alert.php
      - show.php
      - create.php
      - edit.php
      - base.php
  - vendor
  - public/
    - css/
      - main.css
    - js/
      - app.js
  


1. Les messages de `succès` et `d'erreur` devront être affichés dans la vue correspondante en utilisant la variable de session PHP `$_SESSION`.

2. Dans le fichier `Task.php` (situé dans le dossier `models/`), définissez la classe `Task` qui représentera une tâche. La classe `Task` devra avoir les propriétés suivantes : `id`, `title` et `description`. Vous pouvez ajouter des méthodes si nécessaire.

3. Dans le fichier `TaskController.php` (situé dans le dossier `controllers/`), définissez la classe `TaskController` qui gérera les opérations CRUD sur les tâches. Ajoutez les méthodes suivantes :
   - `index()` : Affiche la liste des tâches.
   - `create()` : Affiche le formulaire de création d'une nouvelle tâche.
   - `store()` : Traite les données du formulaire de création et crée une nouvelle tâche.
   - `edit($id)` : Affiche le formulaire d'édition d'une tâche existante.
   - `update($id)` : Traite les données du formulaire d'édition et met à jour une tâche existante.
   - `delete($id)` : Supprime une tâche.

4. Dans le dossier `views/task/`, créez les fichiers `index.php`, `create.php` et `edit.php` qui seront responsables de l'affichage des vues correspondantes.

5. Dans le fichier `index.php` (dans le dossier `views/task/`), affichez la liste des tâches en utilisant les données fournies par le contrôleur `TaskController`. Ajoutez des liens pour créer, éditer et supprimer des tâches.

6. Dans le fichier `create.php` (dans le dossier `views/task/`), créez un formulaire permettant de saisir les informations d'une nouvelle tâche. Ce formulaire devra être soumis à la méthode `store()` du contrôleur `TaskController`.

7. Dans le fichier `edit.php` (dans le dossier `views/task/`), créez un formulaire pré-rempli avec les informations d'une tâche existante. Ce formulaire devra être soumis à la méthode `update()` du contrôleur `TaskController`.

8. Implémentez les méthodes du contrôleur `TaskController` en utilisant les données fournies par les vues et les modèles. Vous pouvez stocker temporairement les tâches dans une variable de classe pour simuler une base de données.

9. Dans le fichier `taskManager` (dans le dossier `models/`), définissez la classe `TaskManager` qui gérera les opérations CRUD sur les tâches. 

10. Testez votre application en accédant à `index.php` depuis votre navigateur. Assurez-vous que vous pouvez afficher, créer, éditer et supprimer des tâches.

Pour la structure de la base de données de votre projet de gestionnaire de tâches, vous pouvez utiliser une table unique pour stocker les tâches. Voici une proposition de structure de table :

base de données : `gestionnaire_taches`
Table : `tasks`
- `id` (int, clé primaire, auto-incrémentée)
- `title` (varchar)
- `description` (text)
- `createdAt`(datetime par défaut current_timestamp)

Cette table contiendra les informations sur chaque tâche, avec les colonnes suivantes :
- **id** : Identifiant unique de la tâche.
- **title** : Titre de la tâche.
- **description** : Description détaillée de la tâche.