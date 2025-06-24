FROM php:8.1.0-apache

# Çalışma dizinini ayarlayın
WORKDIR /var/www/html

# Apache'de rewrite modülünü etkinleştirin
RUN a2enmod rewrite

# Gerekli bağımlılıkları yükleyin
RUN apt-get update -y && apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    vim 

# Composer'ı kopyalayın
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Gerekli PHP uzantılarını yükleyin ve yapılandırın
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gettext intl pdo_mysql gd

# Apache yapılandırma dosyasını ekleyin
COPY apache-config/000-default.conf /etc/apache2/sites-available/000-default.conf

# Temizleme işlemi
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
