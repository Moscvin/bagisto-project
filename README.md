# 📦 bagisto project setup

## 🔧 cerințe

-   docker
-   docker compose

## 🚀 pași de instalare

1. **clonează proiectul:**

git clone https://github.com/<utilizator>/<repo>.git
cd <repo>
pornește serviciile cu docker compose:

docker-compose up -d --build
accesează containerul laravel:

docker-compose exec laravel.test bash
instalează dependențele php (composer):

composer install
execută migrarea bazei de date:

php artisan migrate
(opțional) rulează seederele:

php artisan db:seed
(recomandat dacă e prima instalare) instalează bagisto complet:

php artisan bagisto:install
această comandă va crea automat:

utilizator admin

tabelul channels

categorii, produse, etc.

🔗 acces
website: http://localhost:8000

admin: http://localhost:8000/admin

🐳 servicii docker
laravel.test: aplicația bagisto

mysql: baza de date mysql

redis: cache server

mailpit: server local pentru testarea emailurilor (accesibil pe http://localhost:8025)

📂 structura
.env: configurația aplicației

dockerfile: imaginea laravel cu apache și php 8.2

docker-compose.yml: orchestrarea serviciilor

📮 mailpit (testare e-mailuri)
web ui: http://localhost:8025

port smtp: 1025
