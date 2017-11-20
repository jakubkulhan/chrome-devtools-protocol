FROM debian:stretch

RUN set -ex \
	&& apt-get update \
	&& apt-get install -y --no-install-recommends --no-install-suggests \
		ca-certificates \
		curl \
		gnupg1 \
	&& curl -s https://dl.google.com/linux/linux_signing_key.pub | apt-key add - \
	&& echo "deb http://dl.google.com/linux/chrome/deb/ stable main" | tee /etc/apt/sources.list.d/google-chrome.list \
	&& apt-get update \
	&& apt-get install -y --no-install-recommends --no-install-suggests \
		google-chrome-stable \
	&& apt-get remove -y \
		curl \
		gnupg1 \
	&& apt-get autoremove -y \
	&& apt-get clean \
	&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
	&& useradd -m -s /bin/bash -u 1000 chrome

USER chrome:chrome

WORKDIR /home/chrome

ENTRYPOINT ["/usr/bin/google-chrome"]
