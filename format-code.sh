#!/usr/bin/env bash

./vendor/bin/phpcbf app/
./vendor/bin/phpcbf tests/
./vendor/bin/phpcbf config/
./vendor/bin/phpcbf routes/
./vendor/bin/phpcbf resources/
./vendor/bin/phpcbf database/

./vendor/bin/php-cs-fixer --show-progress=dots fix app/
./vendor/bin/php-cs-fixer --show-progress=dots fix tests/
./vendor/bin/php-cs-fixer --show-progress=dots fix config/
./vendor/bin/php-cs-fixer --show-progress=dots fix routes/
./vendor/bin/php-cs-fixer --show-progress=dots fix resources/
./vendor/bin/php-cs-fixer --show-progress=dots fix database/


