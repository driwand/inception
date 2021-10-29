
if [ ! -f "/www/wp-config.php" ]; then
	cp /wp-config.php /www
	cp -r ~/wordpress/* /www
	cp -r ~/redis-cache /www/wp-content/plugins
	cp /www/wp-content/plugins/redis-cache/includes/object-cache.php /www/wp-content
fi

