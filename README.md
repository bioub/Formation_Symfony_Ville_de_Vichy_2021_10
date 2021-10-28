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
