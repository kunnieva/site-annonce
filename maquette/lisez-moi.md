## la partie back
créer les tables sql
users 
colonne 
id
name                varchar
email               varchar
password            varchar
status              varchar
level               int
telephone           varchar
affichernumero      varchar

annonces
colonne
id                  
titre               varchar
user_id             INT
description         text
photo               varchar
prix                decimal10,2
localisation        varchar
codepostal          varchar

afaire
message
colonne
id

## cration avec laravel des tables sql
php artisan make:model Annonce -mcr

cette commande va creer les fichies
database/migrations/create_annonces_table.php

## completer le code php pour rajouter les colonnes manquantes
php artisan migrate:refresh