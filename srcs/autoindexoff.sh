#!/bin/bash

sed -i "s|autoindex on;|autoindex off;|" "default"
service nginx restart
#if grep -q "autoindex on" /etc/nginx/sites-available
#then sed -i 's/autoindex on/autoindex off/' /etc/nginx/sites-available
#service nginx restart
#elif grep -q "autoindex off" /etc/nginx/sites-available
#then sed -i 's/autoindex off/autoindex on/' /etc/nginx/sites-available
#service nginx restart
#fi
