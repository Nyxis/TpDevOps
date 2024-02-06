vendor:
	composer install --prefer-dist --no-progress --no-suggest

test:
	./vendor/bin/phpunit tests
