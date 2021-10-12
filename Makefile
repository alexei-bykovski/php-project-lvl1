install:
	composer install
brain-games:
	php ./bin/brain-games
brain-even:
	docker-compose run --rm php bash -c "php ./bin/brain-even"
brain-calc:
	docker-compose run --rm php bash -c "php ./bin/brain-calc"
brain-gcd:
	docker-compose run --rm php bash -c "php ./bin/brain-gcd"
brain-progression:
	docker-compose run --rm php bash -c "php ./bin/brain-progression"
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin