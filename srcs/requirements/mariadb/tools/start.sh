if [ ! -f "/var/lib/mysql/ibdata1" ]; then
	mysql_install_db
	service mysql start
fi
service mysql start

sed -i s/'127.0.0.1'/'0.0.0.0'/g /etc/mysql/mariadb.conf.d/50-server.cnf

mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${ROOT_PASS}';"
mysql -uroot -p${ROOT_PASS} -e "FLUSH PRIVILEGES;"

mysql -uroot -p${ROOT_PASS} -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME};"

mysql -uroot -p${ROOT_PASS} -e "CREATE USER IF NOT EXISTS '${DB_USER}'@'localhost' identified by '${DB_PASS}';"
mysql -uroot -p${ROOT_PASS} -e "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASS}'"
mysql -uroot -p${ROOT_PASS} -e "FLUSH PRIVILEGES;"

mysql -uroot -p${ROOT_PASS} -e "CREATE USER IF NOT EXISTS '${DB_USER}'@'%' identified by '${DB_PASS}';"
mysql -uroot -p${ROOT_PASS} -e "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASS}'"
mysql -uroot -p${ROOT_PASS} -e "FLUSH PRIVILEGES;"

mysql -uroot -p${ROOT_PASS} ${DB_NAME} < /wp.sql

mysqladmin -uroot -p${ROOT_PASS} shutdown
