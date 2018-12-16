# FAQ-Final_Project

To run the FAQ project:

1. git clone https://github.com/aam257/FAQ-Final-Project.git
2. CD into FAQ-Final-Project and run: composer install
3. cp .env.example to .env
4. run: php artisan key:generate

5. In .env file cp following three lines to setup algolia app id and search keys:

SCOUT_QUEUE
ALGOLIA_APP_ID=X3NOGW7Y3S
ALGOLIA_SECRET=5d04bd62942979531790c87f3cac1a0f

6. setup database with sqlite or other https://laravel.com/docs/5.6/database
7. Run: php artisan migrate
8. Run phpunit tests unsing command: phpunit
9. Run:  php artisan migrate:refresh --seed

10. Setup in .env file: APP_URL=http://localhost:8000
11. Setup run cofiguration on local host using port 8000 and run 
12. Run command: php artisan dusk
