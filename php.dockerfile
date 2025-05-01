FROM php:8.3-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    gnupg \
    ca-certificates \
    lsb-release \
    software-properties-common

RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && \
    apt-get install -y nodejs && \
    npm -v && node -v

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    fileinfo \
    zip \
    gd \
    mbstring \
    xml

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer config --global process-timeout 900

RUN composer global require laravel/installer

ENV PATH="/root/.config/composer/vendor/bin:${PATH}"

CMD ["php-fpm"]
