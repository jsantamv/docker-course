# Dockerfile para PHP
FROM php:latest

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Exponer el puerto 80 para la aplicación web
EXPOSE 80

# Copiar archivos al contenedor
COPY . /var/www/html

# Configuración para ejecutar Apache
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
