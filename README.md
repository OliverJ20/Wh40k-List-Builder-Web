

# Prerequisites

1. `node installed` - If node is not installed please download from here https://nodejs.org/en/download/
2. `PHP installed` - If docker is not installed please follow the instructions here https://www.php.net/manual/en/install.php
3. `Composer installed` - If composer is not installed please follow the instructions here https://getcomposer.org/doc/00-intro.md

# Setup

At this stage I have not be able to seemlessly intergate both projects into one repo, I understand this can be done through
submodules which will be attempted in the near future.

At the moment the two projects required are

1. `https://github.com/OliverJ20/Wh40k-List-Builder-Web` - The php backend component
2. `https://github.com/OliverJ20/wh40k-web-client-vue` - The Vue frontend component

# Running Project

1. Upon downloading the project the first step in the root of the project is to run `composer install` this
should install all packages used.

2. Next is to run `php artisan migrate` and `php artisan db:seed` or `php artisan migrate:refresh --seed` this will migrate all the files to the database and 
populate all the tables with the current set of test data.

3. Next you should run `php artisan serve` this will start the php server that will be used to access the database. It is important to note
that `API_BASE_URL` const within the frontend Vue.js project matches the url spun up by the php server, 
which should typically be `http://localhost:8000`. If it is not `localhost:8000` and has become something else, make sure to update the `config.js` file
 within the vue web client project as the api url at current has been set to `localhost:8000`.

# Notes

I am unsure if the login will work, it is connected to Okta and I login with the account I have for them, hopefully signing into your okta account
should also work however at this time yet to be fully tested. 

The login at this stage is only temporary as I played with implementing a login functionality and authentication.

###### Yet to be tested if laravel comes with the sql database when pulled
Assuming it does and there are no issues,  the setup works, to access the database that is populated the following env fields
will need to be updated

1. `DB_DATABASE`: wh40k
2. `DB_USERNAME`: wh40k
3. `DB_PASSWORD`: wh40k
