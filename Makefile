all: clean download-protocol generate

generate:
	php generate.php

download-protocol:
	trap "rm -f 'protocol_browser.json' 'protocol_js.json'" EXIT; \
	curl -s "https://chromium.googlesource.com/chromium/src/+/master/third_party/WebKit/Source/core/inspector/browser_protocol.json?format=TEXT" | base64 -D > "protocol_browser.json"; \
	md5sum protocol_browser.json; \
	curl -s "https://chromium.googlesource.com/v8/v8/+/master/src/inspector/js_protocol.json?format=TEXT" | base64 -D > "protocol_js.json"; \
	md5sum protocol_js.json; \
	php -r '$$p1 = json_decode(file_get_contents("protocol_browser.json")); $$p2 = json_decode(file_get_contents("protocol_js.json")); $$p1->domains = array_merge($$p1->domains, $$p2->domains); echo json_encode($$p1, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), "\n";' > protocol.json; \
	md5sum protocol.json > protocol.json.md5

check-protocol:
	md5sum -c protocol.json.md5

clean:
	grep -lir '@generated' gen-src | xargs rm

docker-image:
	docker build --pull -t jakubkulhan/chrome:build .
	version=$$(docker run -it --rm --name chrome jakubkulhan/chrome:build --version | cut -d' ' -f3) && \
		docker tag jakubkulhan/chrome:build jakubkulhan/chrome:$$version && \
		docker push jakubkulhan/chrome:$$version
	docker tag jakubkulhan/chrome:build jakubkulhan/chrome:latest && \
		docker push jakubkulhan/chrome:latest
	docker rmi jakubkulhan/chrome:build

test: lint phpstan phpunit

lint:
	./vendor/bin/parallel-lint gen-src src test

phpunit:
	./vendor/bin/phpunit

phpstan:
	./vendor/bin/phpstan analyse --level=6 --memory-limit=1g gen-src src test
