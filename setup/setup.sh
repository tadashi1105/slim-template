sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install libapache2-mod-php7.1 -y
sudo a2dismod php7.0
sudo a2enmod php7.1
sudo apt-get install php7.1-dom php7.1-mbstring php7.1-zip php7.1-mysql -y
sudo apt-get install vim -y

sudo cp /projects/itace/setup/001-itace.conf /etc/apache2/sites-available
sudo a2dissite 000-default.conf
sudo a2ensite 001-itace.conf

# Logs
chmod 777 /projects/itace/logs

# Composer
cd /projects/itace && composer install

# MySQL
# sudo service mysql start
# mysql -u root -p < /projects/itace/setup/db.sql
