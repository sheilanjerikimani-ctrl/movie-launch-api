# Movix Night — API

The Laravel backend for the Movix Night movie-launch website.
Frontend repo: https://github.com/sheilanjerikimani-ctrl/movie-launch

## Live Demo
- **API:** https://movie-launch-api-production.up.railway.app/api/films
- **Website:** https://movie-launch-one.vercel.app

## Stack
- Laravel (PHP)
- SQLite

## Endpoints
- GET /api/films — list all films
- GET /api/films/{slug} — single film detail
- POST /api/subscribe — save a newsletter/contact submission

## Setup / Run locally
composer install
php artisan migrate --seed
php artisan serve
(runs on http://127.0.0.1:8000)

## Trade-offs
Built under time pressure. SQLite used instead of MySQL for fast setup.
