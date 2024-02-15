all: composer yarn doctrine

composer:
	composer install --no-interaction

yarn:
	yarn install
	yarn encore dev

doctrine:
	$(PHP_EXEC) bin/console d:d:c --if-not-exists
	$(PHP_EXEC) bin/console d:m:m --no-interaction