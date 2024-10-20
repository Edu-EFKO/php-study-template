Калькулятор расчёта стоимости доставки
===============================================

## Окружение

Требования к окружению:

* WSL / Linux
* docker 1.10.0+
* Make

### Переменные окружения

```dotenv
# Порт веб-сервера
APP_WEB_PORT=8077
```

## Установка с использованием docker compose

1. Скопировать **.env.dist** в **.env** и актуализировать все параметры
1. Выполнить скрипт установки проекта
> В среде Windows скрипт запускать при помощи Git bash
```sh
docker compose -p clean-php down --remove-orphans && \
docker build --target=fpm \
	--build-arg USER=1000 \
	--build-arg GROUP=1000 \
	-t localhost/clean-php-php-fpm:latest -f ./docker/Dockerfile . && \
docker build --target=nginx \
	-t localhost/clean-php-nginx:latest -f ./docker/Dockerfile . && \
docker compose -p clean-php up -d
```

### Служебное

- запуск контейнеров
    ```sh
    docker compose -p clean-php up -d
    ```
- остановка контейнеров
    ```sh
    docker compose -p clean-php down --remove-orphans
    ```
- перезапустить контейнеры
    ```sh
    docker compose -p clean-php down --remove-orphans && docker compose -p clean-php up -d
    ```
- логи контейнеров
    ```sh
    docker compose -p clean-php logs -f
    ```
- статус контейнеров
    ```sh
    docker compose -p clean-php ps
    ```

## Установка с использованием утилиты Make

1. Скопировать **.env.dist** в **.env** и актуализировать все параметры
1. `make install` - установить проект

### Служебное

- `make install` - установка проекта
- `make up` - запуск контейнеров
- `make down` - остановка контейнеров
- `make restart` - перезапустить контейнеры
- `make logs` - логи контейнеров
- `make ps` - статус контейнеров