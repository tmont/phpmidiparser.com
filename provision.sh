#!/bin/bash

export DEBIAN_FRONTEND=noninteractive
apt-get update
apt-get install -y php5 php5-fpm nginx mysql-server

sed -i 's/^bind-address/#bind-address/' /etc/mysql/my.cnf
restart mysql

cp /vagrant/provision/phpmidiparser.com.conf /etc/nginx/sites-enabled
/etc/init.d/nginx reload
