.PHONY: vendor
vendor:
	docker-compose run php composer install

.PHONY: dump-autoload
dump-autoload:
	docker-compose run php composer dumpautoload

.PHONY: unit
unit:
	docker-compose run php vendor/bin/phpunit \
		--log-junit ./build/unit-results.xml \
        --coverage-clover ./build/coverage.xml \
        --coverage-html ./build/coverage-report \
        --coverage-text

.PHONY: coverage
coverage:
	bin/parse-coverage.sh $${CODE_COVERAGE_THRESHOLD:-0}

.PHONY: ecs
ecs:
	docker-compose run php vendor/bin/ecs check src
