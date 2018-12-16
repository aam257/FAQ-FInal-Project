# FAQ-Final_Project

To run the FAQ project:

1. git clone https://github.com/aam257/FAQ-Final-Project.git
2. CD into FAQ-Final-Project and run: composer install
3. cp .env.example to .env
4. run: php artisan key:generate

5. In .env file copy lines 5a, 5b and 5c to setup algolia app id and search key:

5a. SCOUT_QUEUE
5b. ALGOLIA_APP_ID=X3NOGW7Y3S
5c. ALGOLIA_SECRET=5d04bd62942979531790c87f3cac1a0f

6. setup database with sqlite or other https://laravel.com/docs/5.6/database
7. Run: php artisan migrate
8. Run phpunit tests unsing command: phpunit
9. Run:  php artisan migrate:refresh --seed
10. Setup in .env file: APP_URL=http://localhost:8000
11. Setup run cofiguration on local host using port 8000 and run the web
12. Run command: php artisan dusk

----------------------------------------------------------------------------------------
Epic: Add a feature to view all questions sorted by question id and also a search bar to search questions containing typed search query. Both features should be accessible from all pages.

User Story 1. As a user I want to search questions using a phrase so that I can see questions containing that phrase.

User Story 2. As a user I want to view a question by clicking view button from search results.

User Story 3. As a user I want to view all questions arranged by question id so that I can understan order of questions asked.

User Story 4. As a user I want to view 16 questions on each page of all questions page to view them together.

User Story 5. As a user I want to view question on all questions page by clicking a view button.
----------------------------------------------------------------------------------------
Laravel Dusk Tests can be run using command: php artisan dusk 
Laravel Dusk tests contain basic browsing tests and search function usability tests.
