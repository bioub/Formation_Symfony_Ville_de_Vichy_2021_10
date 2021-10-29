# Exercices

## Router

Créer un contrôleur `UserController`

Le contrôleur doit contenir 5 routes et les fichiers twig correspondants (afficher un titre) :

| Méthode PHP | Path                 | Titre                                          |
| ----------- | -------------------- | ---------------------------------------------- |
| `index`     | `/users`             | Liste des users                                |
| `create`    | `/users/create`      | Ajouter un user                                |
| `show`      | `/users/{id}`        | Détails d'un user (dont l'id est en param)     |
| `update`    | `/users/{id}/update` | Mettre à jour un user (dont l'id est en param) |
| `delete`    | `/users/{id}/delete` | Supprimer un user (dont l'id est en param)     |

## TP

### Router

Créer un contrôleur `TweetController`

Le contrôleur doit contenir 2 routes et les fichiers twig correspondants (afficher un titre) :

| Méthode PHP | Path                 | Titre                                          |
| ----------- | -------------------- | ---------------------------------------------- |
| `index`     | `/users`             | Liste des tweets                               |
| `create`    | `/users/create`      | Ajouter un tweet                               |

### Entity

Créer une entité Tweet avec les colonnes (en plus de id) :

| propriété   | Type Mapping    | 
| ----------- | ----------------|
| `text`      | `text`          |
| `postedAt`  | `datetime`      |

Générer la table avec la commande adéquat.

Générer les getters/setters si besoin.

### Fixtures

Modifier le fichier `DevFixtures` pour y ajouter 3 tweets d'exemple.

Insérer les fixtures en base avec la commande adéquat.

### Controller

Editer la méthode `index` de `TweetController` pour récupérer l'ensemble des tweets et les
afficher dans le template.