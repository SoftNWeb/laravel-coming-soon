## Description
A straightforward Coming Soon package for Laravel with Countdown timer and Email capture. 

Just Install the package, configure .env and you are ready to go!

![coming-soon-screenshot](https://softnweb.com/wp-content/uploads/2018/08/laravel-coming-soon.png "coming soon screenshot")




## Installation
composer require softnweb/laravel-coming-soon



## After Installation run this command to publish file
php artisan vendor:publish



## If you want to display the Email form
Then run php artisan migrate



## .env values
You will have to add the following to your .env and set values accordingly

- **OFFLINE_ENABLE=** {true/false} _(Enable Coming Soon page)_
- **OFFLINE_SHOW_EMAIL_FORM=** {true/false} _(Display the Email form)_
- **OFFLINE_SEND_EMAIL_TO=** {info@softnweb.in}
- **OFFLINE_YEAR=** {2018} _(Countdown year)_
- **OFFLINE_MONTH=** {12} _(Countdown month)_
- **OFFLINE_DAY=** {1} _(Countdown day)_
- **OFFLINE_HOURS=** {1} _(Countdown hours)_
- **OFFLINE_MINUTES=** {60} _(Countdown minutes)_
- **OFFLINE_SECONDS=** {60} _(Countdown seconds)_
- **OFFLINE_FACEBOOK=** {http://facebook.com/softnweb}
- **OFFLINE_INSTAGRAM=** {#}
- **OFFLINE_GITHUB=** {#}
- **OFFLINE_MAIL=** {info@softnweb.in}
