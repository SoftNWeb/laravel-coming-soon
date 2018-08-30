<?php

return [
    'snw_enable_email_form' => env('OFFLINE_SHOW_EMAIL_FORM', false),
    'snw_send_email_to' => env('OFFLINE_SEND_EMAIL_TO','info@softnweb.in'),
    'snw_test_mode' => env('OFFLINE_ENABLE', true),
    'snw_year'=> env('OFFLINE_YEAR', '2018'),
    'snw_month'=> env('OFFLINE_MONTH', '8'),
    'snw_day' => env('OFFLINE_DAY' , '29'),
    'snw_hours' => env('OFFLINE_HOURS', '1'),
    'snw_minutes' => env('OFFLINE_MINUTES','1'),
    'snw_seconds' => env ('OFFLINE_SECONDS','0'),

    'snw_facebook' => env ('OFFLINE_FACEBOOK','https://www.facebook.com/softnweb'),
    'snw_twitter' => env ('OFFLINE_TWITTER','https://twitter.com/'),
    'snw_instagram' => env ('OFFLINE_INSTAGRAM','https://www.instagram.com'),
    'snw_github' => env ('OFFLINE_GITHUB','https://github.com/'),
    'snw_mail' => env ('OFFLINE_MAIL','info@mail.com')
];