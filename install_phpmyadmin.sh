sudo rm -rf /usr/share/phpmyadmin

sudo wget https://files.phpmyadmin.net/phpMyAdmin/4.3.0/phpMyAdmin-4.3.0-english.zip --no-check-certificate

unzip phpMyAdmin-4.3.0-english.zip

sudo mv phpMyAdmin-4.3.0-english /usr/share/phpmyadmin

sudo mkdir /usr/share/phpmyadmin/tmp

sudo chown www-data /usr/share/phpmyadmin/tmp

