FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    zip \
    unzip \
    libicu-dev \
    libonig-dev \
    nodejs \
    npm

RUN docker-php-ext-install \
    intl \
    zip \
    pdo \
    pdo_mysql \
    mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN cp .env.example .env

# install backend
RUN composer install --no-dev --optimize-autoloader

# build frontend
RUN npm install
RUN npm run build

RUN php artisan optimize:clear

CMD php -S 0.0.0.0:$PORT -t public