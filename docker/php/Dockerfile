FROM php:8.0.10-fpm

COPY ./php.ini /usr/local/etc/php/

RUN apt-get update \
  && apt-get install -y \
  git \
  zip \
  unzip \
  vim

# Laravel：requested PHP extensions
RUN docker-php-ext-install pdo_mysql

# Composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/html/atbounds