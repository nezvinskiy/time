# make dockphp...

dockphp-artisan-migrate-up:
	docker exec devapp_php_1 php artisan migrate

dockphp-artisan-migrate-down:
	docker exec devapp_php_1 php artisan migrate:rollback --step=1

dockphp-artisan-make-migration:
	docker exec devapp_php_1 php artisan make:migration add_time_tracking_to_tasks_table --table=tasks
