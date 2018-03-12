# exercice MVC  et création de CRUD
##  basé sur le dossier exe_32 et la bdd exe_32

### Principe:

#### Création d'une interface d'administration de 'arti'
Avec son contrôleur, ses modèles et ses vues

! Pour le moment cette administration est publique

#### Affichez sur la page d'accueil 
tous les résumés d'articles ('exe_32.arti') avec leur 'titre', un 'texte' de 150 caractères avec 'lire la suite' ayant un lien envoyant vers '?article=idarti', suivit de la date de publication 'publie', le tout classé par 'publie' DESC

Aucune jointure n'est nécessaire !
#### Affichez le détail d'un article
après le clic, affichez une page avec le titre, la date de publication de l'article et le texte complet avec retour automatique à la ligne. 
N'oubliez pas de faire le lien "Retour à l'accueil"

Aucune jointure n'est nécessaire !

### structure

exe_32_simplified/index.php (CF)
exe_32_simplified/mysqliconfig.php 

exe_32_simplified/c/ - contrôleur, liens entre les modèles et les vues

exe_32_simplified/m/ - modèle, requêtes, gestion des données, connexion à la db etc...


exe_32_simplified/v/ - vue - partie frontend du site (html, css, js)
