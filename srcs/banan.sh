#!/bin/bash

service nginx start
service mysql start
service php7.3-fpm start

echo "CREATE DATABASE wp;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wp.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "update mysql.user set plugin='mysql_native_password' where user='root';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password

while true;
do
    sleep 99999;
done
