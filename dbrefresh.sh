#!/usr/bin/env bash
./vendor/bin/sail artisan db:wipe
./vendor/bin/sail artisan migrate:refresh
./vendor/bin/sail artisan db:seed