# Result publishing website in Laravel

Developed by [Md. Almas Ali][1]



## Demo
URL : `result-publisher-bd.herokuapp.com`

## Home

URL : `website.com/`
![Image](https://raw.githubusercontent.com/Almas-Ali/Result-Publisher/master/screenshots/home.png)

## Full result list

URL : `website.com/all-results`
![Image](https://raw.githubusercontent.com/Almas-Ali/Result-Publisher/master/screenshots/list.png)

## individual result

URL : `website.com/`
![Image](https://raw.githubusercontent.com/Almas-Ali/Result-Publisher/master/screenshots/result.png)

## Print layout

![Image](https://raw.githubusercontent.com/Almas-Ali/Result-Publisher/master/screenshots/print.png)

## After print

![Image](https://raw.githubusercontent.com/Almas-Ali/Result-Publisher/master/screenshots/pdf.png)


## Installtion

Use composer to install it.
<br>
First clone this repository. <br>

```bash
# cloneing command
git clone git@github.com:Almas-Ali/Result-Publisher.git result

# change directory to project
cd result

# install all requirements
composer install 

# setup database and update it on .env file
# windows
copy .env.example .env

#linux
cp .env.example .env

# migrate database
php artisan migrate

# seed demo data
php artisan db:seed

# run server
php artisan serve
```

Now, visit in your localhost: `127.0.0.1:8000`
<br><br>

Thats it. Now you have your own version of this website project. <br>

Give a star and follow me to support. ❤️

[1]: <https://github.com/Almas-Ali> "Md. Almas Ali"
