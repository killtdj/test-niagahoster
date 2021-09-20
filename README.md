
![Logo](https://brojuven.com/wp-content/uploads/2019/01/niagahoster-logo.png)

# Online Exam Niagahoster Fullstack Developer

Demo Webiste [NiagahosterExam!](https://niagahoster.danuwijaya.live/)
Published with :
1.  PHP 7.4
2.  Nginx
3.  Lets Encrypt SSL
4.  Mysql Database

## Prerequisites
- Laravel 8
- PHP 7.4
- Mysql 5.6
- Apache / Nginx Webserver

## Installation
### Manual Installation
1. Clone this Repository to your local webserver
```sh
git clone git@github.com:killtdj/test-niagahoster.git  # via SSH
git clone https://github.com/killtdj/test-niagahoster.git  # via HTTPS
```
2. Install Required Dependencies using Composer. If you didn't have composer, you can download and install it first.
```sh
composer install
```

3. Copy `.env.example` to `.env`
4. Modify `.env` file

```js
DB_CONNECTION=mysql
DB_HOST=localhost //your mysql host
DB_PORT=3307 //your mysql port
DB_DATABASE=niagahoster_db //your database name
DB_USERNAME=root //your database username
DB_PASSWORD=root //your database password
```

4. Clear config and cache after edit .env
```sh
php artisan config:cache
```

5. Migrate to database using PHP Artisan. The migration files is in path `database/migrations`. 
```sh
php artisan migrate
```

6. Seed to Database using PHP Artisan.
```sh
php artisan db:seed
```

7. After all done, run your Laravel app with your local server address e.g `localhost/test-niagahoster/public`.

### Docker Installation (**TBA - On Progress**)
1. Make sure you have installed Docker. If you run in linux OS you also must install docker-compose. All setup you can search via docker official webpage, or any articles.

2. Clone this Repository to your local webserver
```sh
git clone git@github.com:killtdj/test-niagahoster.git  # via SSH
git clone https://github.com/killtdj/test-niagahoster.git  # via HTTPS
```
3. Install Required Dependencies using Composer. If you didn't have composer, you can download and install it first.
```sh
composer install
```

4. Copy `.env.example` to `.env`
5. Modify `.env` file. This configuration must be same with your dcoker configuration. You can find the configuration on `docker-compose.yml` on a database section.

```js
DB_CONNECTION=mysql
DB_HOST=localhost //your mysql host
DB_PORT=3307 //your mysql port
DB_DATABASE=niagahoster_db //your database name
DB_USERNAME=root //your database username
DB_PASSWORD=root //your database password
```

6. Run docker build using terminal / command prompt.
```sh
docker-composer build
```

7. Run docker-composer up
```sh
docker-composer up -d
```

8. You can check your docker images
```sh
docker images
```

9. Make sure if your container is all up. 
```sh
docker ps
```

10. If you missing a container, you can check all via `docker ps -a`. Check the logs using `docker logs -f <container-name>`

