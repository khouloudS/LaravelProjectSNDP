## _SNDP_ Laravel Project 

Development of a web application for AGIL service station customers.

**To create a project from this repository:**

```
git clone --depth=1 --branch=master github.com/khouloudS/LaravelProjectSNDP.git <projectName>
cd !$
rm -rf .git
composer run-script post-root-package-install
composer install
composer run-script post-create-project-cmd
```

## Usage

Install [Docker](https://www.docker.com/) on your system.

* [Install instructions](https://docs.docker.com/installation/mac/) for Mac OS X
* [Install instructions](https://docs.docker.com/installation/ubuntulinux/) for Ubuntu Linux
* [Install instructions](https://docs.docker.com/installation/) for other platforms

Install [Docker Compose](http://docs.docker.com/compose/) on your system.

To start the containers

```bash
docker-compose build # only the first time
docker-compose up
```

If you are running the application for the first time you should
run the migrations and the default gulp task (to compile the assets)

```bash
docker exec -i -t <projectName>_web_1 composer install    # install php dependencies
docker exec -i -t <projectName>_web_1 bower install --allow-root # install front-end dependencies
docker exec -i -t <projectName>_web_1 php artisan migrate # run migrations
docker exec -i -t <projectName>_web_1 gulp                # run laravel's elixir
```

> PS: "<projectName>" is name of the directory the project is within. Docker-compose uses this convention.

Latter, you ran keep the elixir watcher running with

```bash
docker exec -i -t <projectName>_web_1 gulp watch
```

Finally, you can access the containers interactively with

```bash
docker exec -i -t <projectName>_web_1 bash # to access the web server container
docker exec -i -t <projectName>_web_1 php artisan tinker # to access Laravel's REPL
mysql --host 127.0.0.1 -u root   # to access the database
```


