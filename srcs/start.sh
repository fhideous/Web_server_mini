#!/usr/bin/env bash

# Config Access
echo "config access"
chown -R www-data:www-data	/var/www/*
chmod -R 755			/var/www/*

# mySQL database
echo "mysql"
service mysql start
mysql -u root -e "CREATE DATABASE wordpress_school_21"
mysql -u root -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin'"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress_school_21.* TO 'admin'@'localhost'"
mysql -u root -e "FLUSH PRIVILEGES"


# PHPMyAdmin
echo "phpmyadmin"
mkdir /var/www/html/phpmyadmin
wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-english.tar.gz
tar xvf phpMyAdmin-latest-english.tar.gz --strip-components 1 -C /var/www/html/phpmyadmin/
mv /var/www/config.inc.php /var/www/html/phpmyadmin/
rm -f phpMyAdmin-latest-english.tar.gz
service php7.3-fpm start

# SSL
echo "ssl"
openssl req -newkey rsa:4096 -x509 -sha256 -days 3650 -nodes -out /etc/nginx/certificate.crt \
-keyout /etc/nginx/private.key -subj "/C=RU/ST=Moscow/L=Sav /O=21School/OU=fhideous/CN=*.localhost/emailAddress=unknown"

# Wordpress
echo "wordpress"
mkdir /var/www/html/wordpress
wget http://wordpress.org/latest.tar.gz
tar xvf latest.tar.gz -C /var/www/html/
rm -f latest.tar.gz
mv /var/www/wp-config.php /var/www/html/wordpress/

# Nginx
echo "nginx"
mv var/www/nginx.conf /etc/nginx/sites-available/default
service nginx start
sleep inf