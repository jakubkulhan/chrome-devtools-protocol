#!/bin/bash

set -ex

docker build --pull --no-cache -t jakubkulhan/chrome:build .

version=$(docker run -it --rm --name chrome jakubkulhan/chrome:build --version)
version=$(echo "$version" | cut -d' ' -f3)
version=${version//[[:blank:]]/}

if docker pull jakubkulhan/chrome:$version &> /dev/null; then
	echo jakubkulhan/chrome:$version already built
else
	docker tag jakubkulhan/chrome:build jakubkulhan/chrome:$version
	docker push jakubkulhan/chrome:$version
	docker tag jakubkulhan/chrome:$version jakubkulhan/chrome:latest
	docker push jakubkulhan/chrome:latest
fi

docker rmi jakubkulhan/chrome:build
