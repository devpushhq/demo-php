# PHP Hello World

## Run
- Install PHP 8.1+.
- Start server: `php -S 0.0.0.0:8000 -t public`
- Open: `http://localhost:8000`

## Deploy (container base)
- Copy contents into your PHP runner image working dir.
- Entrypoint: `php -S 0.0.0.0:8000 -t public`

