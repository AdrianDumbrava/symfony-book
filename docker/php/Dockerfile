# Base image compatible with ARM
FROM php:8.2-fpm-alpine

# Install autoconf and other build dependencies
RUN apk add --update --no-cache \
    autoconf build-base \
    zlib-dev g++ git icu-dev musl-dev libzip-dev linux-headers \
    nodejs npm

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin \
    --filename=composer

RUN docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Install Yarn
RUN npm install -g yarn

WORKDIR /var/www/app