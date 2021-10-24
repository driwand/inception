if [ ! -f "/var/lib/mysql/ibdata1" ]; then
	mysql_install_db
fi


service mysql start

sed -i s/'127.0.0.1'/'0.0.0.0'/g /etc/mysql/mariadb.conf.d/50-server.cnf

mysql -uroot -e "CREATE DATABASE ${DB_NAME};"
mysql -uroot -e "CREATE USER '${DB_NAME}'@'%' identified by '${DB_PASS}';"
mysql -uroot -e "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_NAME}'@'%' IDENTIFIED BY '${DB_PASS}'"
mysql -uroot -e "FLUSH PRIVILEGES;"

service mysql stop

mysqld_safe
