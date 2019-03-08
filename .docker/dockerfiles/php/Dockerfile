FROM php:7.2-fpm

RUN apt-get update

RUN apt-get install -y \
        zlib1g-dev \
        libicu-dev \
        git-core \
        libxrender1 \
        libfontconfig1 \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev

RUN docker-php-ext-configure gd --with-gd \
        --with-jpeg-dir=/usr/include/ \
        --with-png-dir=/usr/include/ \
        --with-freetype-dir=/usr/include/

ADD ./conf/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

RUN docker-php-ext-install pdo pdo_mysql zip gd intl

ENV TZ Europe/Paris
RUN cp /usr/share/zoneinfo/Europe/Paris /etc/localtime

WORKDIR /var/www

RUN usermod -u 1000 www-data

USER www-data
