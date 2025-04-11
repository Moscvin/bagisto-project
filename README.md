

Accesează containerul tău Laravel:

bash
Copy
Edit
docker-compose exec laravel.test bash
Apoi rulează:

bash
Copy
Edit
php artisan migrate
Dacă Bagisto are și seedere speciale pentru canale, rulează și:

bash
Copy
Edit
php artisan db:seed 2. (Opțional) Reinstalează Bagisto dacă e prima dată
Dacă e prima dată când rulezi proiectul sau ai o bază de date goală:

bash
Copy
Edit
php artisan bagisto:install
Asta va crea automat:

admin user