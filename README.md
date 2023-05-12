# PurrfectAdopt

The following steps will guide you through the installation process of PurrfectAdopt for running in a development environment locally on your machine:
1. Clone the latest version of PurrfectAdopt from the repository
2. Run `composer install` to install the required PHP dependencies
3. Copy the `.env.example` file to `.env` and edit the database credentials according to your database server
4. Run `php artisan key:generate` to generate a new application key
5. Run `php artisan migrate` to create the database tables. You can also add the `--seed` flag to seed the database with some dummy data
6. Run `php artisan serve` to start the development server
7. Open another terminal and run `npm install` to install the required node modules
8. Run `npm run dev` to compile the assets for development
9. Open your browser and go to `http://localhost:8000` to view the application
