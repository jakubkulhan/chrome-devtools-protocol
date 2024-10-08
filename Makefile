PHPUNIT_FLAGS=

all: clean download-protocol generate

regenerate:
	rm -rf gen-src/*
	make generate

generate:
	php generate.php

download-protocol:
	php download.php > protocol.json
	md5sum protocol.json

fix-protocol:
	md5sum protocol.json > protocol.json.md5

check-protocol:
	md5sum -c protocol.json.md5

clean:
	grep -lir '@generated' gen-src | xargs rm

docker-image:
	./.circleci/build-docker-image.sh

test: lint phpstan phpunit

lint:
	./vendor/bin/parallel-lint gen-src src test

phpunit:
	./vendor/bin/phpunit $(PHPUNIT_FLAGS)

phpstan:
	./vendor/bin/phpstan analyse --level=5 --configuration=phpstan.neon --memory-limit=1g gen-src src test
