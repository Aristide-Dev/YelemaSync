Y   Y  EEEEE  LL    EEEEE  M   M   A      SSSSS  Y   Y  NN  N  CCCCC
 Y Y   E      LL    E      MM MM  A A     S       Y Y   N N N  C    
  Y    EEEE   LL    EEEE   M M M AAAAA    SSSSS    Y    N  NN  C    
  Y    E      LL    E      M   M A   A        S    Y    N   N  C    
  Y    EEEEE  LLLLL EEEEE  M   M A   A    SSSSS    Y    N   N  CCCCC


# Exemple de script PHP pour synchroniser des bases de données MySQL

Ce script PHP permet de synchroniser les données entre une base de données locale et une base de données externe MySQL.

## Installation

Vous pouvez installer ce package à l'aide de Composer ou en clonant le dépôt depuis GitHub.

### Via Composer

```bash
composer require africadev/yelemasync
```

### Via GitHub

```bash
git clone https://github.com/africadev/yelemasync.git
```
###### Installez les dépendances avec Composer

```bash
composer install
```



## Utilisation

```php
<?php

require('./vendor/autoload.php');

use AfricaDev\YelemaSync\YelemaSync;

$synchronizer = new YelemaSync(
    'localhost', // Hôte de la base de données locale
    'db_local', // Nom de la base de données locale
    'root', // Utilisateur de la base de données locale
    '', // Mot de passe de la base de données locale
    
    'localhost', // Hôte de la base de données externe
    'db_distante', // Nom de la base de données externe
    'root', // Utilisateur de la base de données externe
    '' // Mot de passe de la base de données externe
);

// Synchroniser les données de la base de données externe vers la base de données locale
$synchronizer->syncToExternal();

// Synchroniser les données de la base de données locale vers la base de données externe
$synchronizer->syncToLocal();
```


# Remarque

- Assurez-vous que les paramètres de connexion à vos bases de données sont corrects et que les tables que vous souhaitez synchroniser existent dans les deux bases de données.

- N'oubliez pas de gérer les erreurs et exceptions qui pourraient survenir lors de l'exécution de ces opérations de synchronisation. Vous pouvez utiliser des blocs try-catch pour cela.

### Informations complémentaires
- Version : 0.1.1
- Créateur : Aristide-Dev
- Version de PHP requise : >=7.4
