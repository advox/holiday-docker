FROM php:7.2-fpm

RUN apt-get update

RUN apt-get install -y zlib1g-dev libpq-dev git libicu-dev libxml2-dev libpng-dev libxrender1 libfontconfig1\
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install zip xml \
    && docker-php-ext-install gd

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

# Set timezone
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/Warsaw /etc/localtime
RUN printf '[PHP]\ndate.timezone = "Europe/Warsaw"\n' > /usr/local/etc/php/conf.d/tzone.ini

WORKDIR /var/www/symfony