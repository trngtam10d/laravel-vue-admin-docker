install:
	@make up
	docker compose exec laravel.test composer install
	docker compose exec laravel.test php artisan key:generate
	docker compose exec laravel.test php artisan storage:link
	docker compose exec laravel.test chmod -R 777 storage bootstrap/cache
	@make fresh
up:
	docker compose up -d
build:
	docker compose build
remake:
	@make destroy
	@make install
stop:
	docker compose stop
down:
	docker compose down --remove-orphans
down-v:
	docker compose down --remove-orphans --volumes
restart:
	@make down
	@make up
destroy:
	docker compose down --rmi all --volumes --remove-orphans
ps:
	docker compose ps
app:
	docker compose exec laravel.test bash
migrate:
	docker compose exec laravel.test php artisan migrate
fresh:
	docker compose exec laravel.test php artisan migrate:fresh --seed
seed:
	docker compose exec laravel.test php artisan db:seed
dacapo:
	docker compose exec laravel.test php artisan dacapo
rollback-test:
	docker compose exec laravel.test php artisan migrate:fresh
	docker compose exec laravel.test php artisan migrate:refresh
tinker:
	docker compose exec laravel.test php artisan tinker
test:
	docker compose exec laravel.test php artisan test
optimize:
	docker compose exec laravel.test php artisan optimize
optimize-clear:
	docker compose exec laravel.test php artisan optimize:clear
cache:
	docker compose exec laravel.test composer dump-autoload -o
	@make optimize
	docker compose exec laravel.test php artisan event:cache
	docker compose exec laravel.test php artisan view:cache
cache-clear:
	docker compose exec laravel.test composer clear-cache
	@make optimize-clear
	docker compose exec laravel.test php artisan event:clear
db:
	docker compose exec mysql bash
sql:
	docker compose exec mysql bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
redis:
	docker compose exec redis redis-cli
ide-helper:
	docker compose exec laravel.test php artisan clear-compiled
	docker compose exec laravel.test php artisan ide-helper:generate
	docker compose exec laravel.test php artisan ide-helper:meta
	docker compose exec laravel.test php artisan ide-helper:models --nowrite
