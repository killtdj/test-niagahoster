FROM php:7.4-fpm

COPY composer.lock composer.json /var/www/

WORKDIR /var/www


# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libzip-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    nano \
    unzip \
    git \
    curl

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# add laravel user
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# copy project
COPY . /var/www
COPY --chown=www:www . /var/www
RUN chown -R www-data:www-data /var/www

USER www
EXPOSE 9000
CMD [ "php-fpm" ]
