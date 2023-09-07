## Jona Project

This is a private coding project made by Jona Thiel.

### Setup

#### Add Server Name to /etc/hosts
```bash
$ echo '127.0.0.1 jona.local' | sudo tee -a /etc/hosts >/dev/null 
```

#### Build containers
```bash
$ ./container.sh build
```

#### Copy .env.dev to .env
```bash
$ cp .env.dev .env
```

### Symfony Docker

This project works with [Symfony Docker](https://github.com/dunglas/symfony-docker) as the Docker Environment.

#### License

Symfony Docker is available under the MIT License.

#### Credits

Created by [Kévin Dunglas](https://dunglas.fr), co-maintained by [Maxime Helias](https://twitter.com/maxhelias) and sponsored by [Les-Tilleuls.coop](https://les-tilleuls.coop).
