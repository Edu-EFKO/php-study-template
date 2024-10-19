include .env

install:
	@$(MAKE) -s down
	@$(MAKE) -s docker-build
	@$(MAKE) -s up

up:
	@docker compose -p clean-php up -d

down:
	@docker compose -p clean-php down --remove-orphans

ps:
	@docker compose -p clean-php ps

restart: down up

logs:
	@docker compose -p clean-php logs -f

docker-build: \
	docker-build-php-fpm \
	docker-build-nginx

docker-build-php-fpm:
	@docker build --target=fpm \
	--build-arg USER=1000 \
	--build-arg GROUP=1000 \
	-t localhost/clean-php-php-fpm:latest -f ./docker/Dockerfile .

docker-build-nginx:
	@docker build --target=nginx \
	-t localhost/clean-php-nginx:latest -f ./docker/Dockerfile .