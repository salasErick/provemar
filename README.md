### Requirements
Install the newest version
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [Node](https://nodejs.org/en/)
- [NPM](https://www.npmjs.com/)
- [PostgreSQL](https://www.postgresql.org/)

PHP extension for PostgreSQL (use the appropriate package manager for your distribution)
```
sudo dnf install php-pgsql
```

### Installation
> Make sure to follow the requirements.
1. Clone the repository
```
git clone git@github.com:salasErick/provemar.git
```
2. Change into the project root directory
```
cd provemar
```
3. Copy .env.example file to .env file
```
cp .env.example .env
```
4. Create database `provemar`
5. Go to `.env` and set your database credentials **if needed** (`DB_USERNAME=root`, `DB_PASSWORD=`).

6. Install PHP dependencies
```
composer install
```
7. Install front-end dependencies
```
npm install && npm run build
```
8. Run migrations
```
php artisan migrate
```
9. Run server
```
php artisan serve
```
10. Go to `localhost:8000` in your browser.