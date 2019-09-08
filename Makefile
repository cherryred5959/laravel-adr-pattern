compose = cd laradock && docker-compose

.PHONY: start
start: erase build up

.PHONY: erase
erase:
	$(compose) stop nginx workspace
	$(compose) rm -v -f

.PHONY: build
build:
	$(compose) build nginx workspace

.PHONY: up
up:
	$(compose) up -d nginx workspace

.PHONY: bash
bash:
	$(compose) exec workspace bash

.PHONY: laradock
laradock:
	git submodule update
	cp laradock/env-example laradock/.env