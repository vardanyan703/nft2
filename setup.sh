#!/bin/bash
# echo -n "Composer install?: "
# read -r comp
#
#echo -n "NPM install?: "
#read np

# if ( comp='y'); then
#   composer install
# fi
#
#if [[ $np -eq "y" ]] || [[ $np -eq "yes" ]]; then
#    npm install
#
#
#    npm run build
#fi

#
composer install
npm install
npm run dev
chmod -R 777 storage/
rm public/storage
php artisan storage:link
php artisan migrate:fresh --seed
php artisan orchid:admin admin admin@admin.com password
php artisan optimize:clear
