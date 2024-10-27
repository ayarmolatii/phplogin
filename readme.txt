sudo apt-get install php libapache2-mod-php
sudo a2enmod php
sudo chown www-data:www-data /var/www/html/login1.php
sudo chmod 644 /var/www/html/login1.php
sudo systemctl restart apache2

