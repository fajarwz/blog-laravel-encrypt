# Store Sensitive Data Safely With Encryption in Laravel
This is an implementation of Encryption in Laravel. A blog about this can be found here: [Store Sensitive Data Safely With Encryption in Laravel | Fajarwz](https://fajarwz.com/blog/store-sensitive-data-safely-with-encryption-in-laravel/).

## Installation

### Composer Packages 
```
composer install
```

## Configuration

### Create `.env` file from `.env.example`
Create `.env` from `.env.example` and customize it based on your environment.
```
cp .env.example .env
```

### Generate Laravel App Key
```
php artisan key:generate
```

### Migrate the Database Migration
```
php artisan migrate --seed
```

## Search For An Encrypted Value
Run the following script in the tinker (`php artisan tinker`):
```php
User::all()->first(fn ($user) => $user->id_card_number === '8274819283712381')
```
