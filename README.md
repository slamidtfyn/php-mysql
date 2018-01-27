# php-mysql for docker compose

Template for php and mysql setup with docker-compose

## test services
1. clone repository
2. start services with "docker-compose up -d" command
3. open http://localhost:8000 to see output
4. change echo statement in last line of  app/index.php and reload page to see change
5. stop services with "docker-compose down"

## tweak services
1. add/remove scripts in db/init to create tables and data
2. edit environment variables in /db/database.env to preferred settings
3. edit app/config.php to match database settings
