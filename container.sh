#!/bin/bash

[ $# -eq 0 ] && {
	docker exec -it jona-php-1 sh
	exit 0
}

[ $1 = 'up' ] && {
	docker compose up -d --wait
	exit 0
}

[ $1 = 'down' ] && {
	docker compose down --remove-orphans
	exit 0
}

[ $1 = 'build' ] && {
	docker compose up -d --pull missing --build
	exit 0
}

docker exec -it jona-php-1 $@
