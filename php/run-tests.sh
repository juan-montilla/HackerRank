#!/bin/sh
PHP7_4=$(which php7.4)
echo "Using php 7.4!";
$PHP7_4 ./vendor/bin/phpunit --verbose "$@"
