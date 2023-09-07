## Jona Project

This is a private coding project made by Jona Thiel.

### Setup

---

##### Add Server Name to /etc/hosts
```bash
$ echo '127.0.0.1 jona.local' | sudo tee -a /etc/hosts >/dev/null 
```

##### Build containers
```bash
$ ./container.sh build
```

##### Install JavaScript Dependences
```bash
$ npm install
```

##### Copy .env.dev to .env
```bash
$ cp .env.dev .env
```

### Useful commands

---

##### Run containers

```bash
$ ./container.sh up
```

##### Stop containers

```bash
$ ./container.sh down
```

##### Go into container console

```bash
$ ./container.sh
```

##### Build Dev JS & SCSS

```bash
$ npm run dev
```

##### Run Dev JS & SCSS Watcher

```bash
$ npm run watch
```

##### 

### Symfony Docker

---

This project works with [Symfony Docker](https://github.com/dunglas/symfony-docker) as the Docker Environment.
Read more in the [Docs](https://github.com/dunglas/symfony-docker/tree/main/docs)

##### License

Symfony Docker is available under the MIT License.

##### Credits

Created by [Kévin Dunglas](https://dunglas.fr), co-maintained by [Maxime Helias](https://twitter.com/maxhelias) and sponsored by [Les-Tilleuls.coop](https://les-tilleuls.coop).
