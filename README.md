# Prepa DFS - DevOps & Cloud Computing

Ce projet est le support du cours de DevOps / Cloud Computing.
Il est utilisé comme base aux travaux dirigés du cours.

## Installation

Prérequis :

  - Php > 8.1
  - Composer (https://getcomposer.org/download/)

```shell
git clone git@github.com:Nyxis/TpDevOps.git
cd TpDevOps
make
```

## Test

```shell
make test
```

## TP

### Ex0 :
Faites un fork du projet.

### Ex1 :
Dans votre fork, modifiez le build phpunit pour qu'à chaque build qui réussi, github vous envoie un email qui contient en objet "Build Success".
Si le build fail, envoyer "Build Fail".

### Ex2 :
Créez une page public/index.php qui affiche "Hello World" et livrez là dans votre projet.

### Ex 3 :
Créez un compte Platform.sh

### Ex 4 :
Modifiez l'action Github pour permettre de déployer la version testée si le build est en succès, envoyer un email sinon.


