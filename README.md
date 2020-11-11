# wordpress

WORDPRESS
Instalar apache2 

sudo apt update
sudo apt install apache2

Dar permisos a Apache
sudo ufw allow in "Apache"

Iniciar apache hacer que se inicie el servicio al enceder la maquina

Sudo systemctl service apache2 start
Sudo systemctl enable pache2

Usuario Mysql 
Usuario: wordpress
Constraseña: wordpress
Base: wordpress

CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
CREATE USER 'wordpress'@'%' IDENTIFIED WITH mysql_native_password BY 'wordpress';
GRANT ALL ON wordpress.* TO 'wordpress'@'%';
FLUSH PRIVILEGES;

Instalar Php
Sudo apt install php
sudo apt install php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip


Reiniciamos apache
sudo systemctl restart apache2

Configuar apache para wordpress
sudo nano /etc/apache2/sites-available/wordpress.conf
<VirtualHost *:80>
    ServerName your_domain
    ServerAlias www.your_domain
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/your_domain
    ErrorLog /error.log
    CustomLog /access.log combined
    <Directory /var/www/wordpress/>
	AllowOverride All
    </Directory>

</VirtualHost>

sudo a2ensite wordpress
sudo a2dissite 000-default
sudo apache2ctl configtest 
sudo systemctl restart apache2

Clonar repositorio 
Sudo mkdir /var/www/wordpress
git clone https://github.com/aliciarroyave/wordpress

Dar permisos a la carpeta de escritura
sudo chown -R www-data:www-data /var/www/wordpress
sudo find /var/www/wordpress/ -type d -exec chmod 750 {} \;
sudo find /var/www/wordpress/ -type f -exec chmod 640 {} \;

Archivo de configuracion si no se usa el usuario sugerido de las base de datos

Sudo nano /var/www/wordpress/wp-config.php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

