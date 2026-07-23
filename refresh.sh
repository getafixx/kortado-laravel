#!/usr/bin/env bash
./vendor/bin/sail artisan migrate:fresh
./vendor/bin/sail artisan db:seed
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan config:clear
./vendor/bin/sail artisan optimize:clear
./vendor/bin/sail artisan route:clear
./vendor/bin/sail artisan view:clear
