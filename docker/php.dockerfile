FROM php:7.4.30-fpm-alpine3.15 AS stage0

LABEL maintainer='daniel'

ARG user
ARG uid

RUN apk update && apk add --no-cache \
    libpng-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    curl

RUN apk add git vim busybox-extras procps net-tools iputils 

RUN apk add --update nodejs npm

RUN rm -rf /var/cache/apk/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd mysqli zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

EXPOSE 9000
CMD ["php-fpm"]