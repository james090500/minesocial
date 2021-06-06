# MineSocial
This is the website for the Globall-Soccer.com

## Installation
These commands must be run each update or with a fresh installation due to stuff.
```
php artisan down --render="errors::503" --retry=10
git pull
sudo chown -R www-data:www-data *
sudo chmod g+w . -R
composer install
npm ci
php artisan view:clear
php artisan config:clear
php artisan storage:link
php artisan queue:restart
npm run prod
php artisan up
```

For new installations, you must enter a crontab entry
```
* * * * * php /home/MineSocial/artisan queue:work --sleep=3 --tries=3 --max-time=601 --timeout=600 --stop-when-empty
```

## Built With
*  [Laravel](https://laravel.com/) - The web framework used

*  [Intervention](http://image.intervention.io/) - Used for Image manipulation

*  [Halfmoon](https://www.gethalfmoon.com/) - CSS/JS Styling

*  [Font Awesome](https://fontawesome.com/) - Icons

* And some other frameworks for small tweaks

## Authors
*  **James Harrison** - *Initial work* - [james090500](https://github.com/james090500)