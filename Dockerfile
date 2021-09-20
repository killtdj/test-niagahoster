FROM php:7.4-fpm-alpine

COPY composer.lock composer.json /var/www/html/niagahoster/

WORKDIR /var/www/html/niagahoster/niagahoster

RUN apk update && apk add --no-cache \
    build-base shadow curl \
    php7 \
    php7-fpm \
    php7-common \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqli \
    php7-mcrypt \
    php7-mbstring \
    php7-xml \
    php7-openssl \
    php7-json \
    php7-phar \
    php7-zip \
    php7-gd \
    php7-dom \
    php7-session \
    php7-zlib \
    php-gettext \ 
    gettext \
    nano bash supervisor 

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory permissions
COPY . /var/www/html/niagahoster

RUN chown -R www-data:www-data /var/www/html/niagahoster


# Expose port 9000 and start php-fpm server
EXPOSE 9008
CMD ["php-fpm"]
