# Sample-pusher-php-server

## Clone

```shell
$ git clone https://github.com/hashimotoryoh/Sample-pusher-php-server.git
$ cd ./Sample-pusher-php-server
```

## Composer Install

```shell
$ composer install
```

## Pusher Configuration

```shell
$ mv ./pusher_config.php.default ./pusher_config.php
$ vi ./pusher_config.php
```

Edit `./pusher_config.php` to:

```php
define('PUSHER_APP_ID',  'YOUR_APP_ID');
define('PUSHER_KEY',     'YOUR_KEY');
define('PUSHER_SECRET',  'YOUR_SECRET');
define('PUSHER_CLUSTER', 'YOUR_CLUSTER');
```

## Run

```
http://foo-bar.com/trigger.php?message=Nice%20ALL%20IN!
```

![2017-08-08 11 56 47](https://user-images.githubusercontent.com/12749002/29054614-1c05626c-7c32-11e7-80da-02813944f049.png)
