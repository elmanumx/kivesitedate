<?php
$config = array(

    // Title
    'title' => '',
    'site_name' => 'Kiev Dating Agency',

    // Meta
    'meta_description' => '',
    'meta_keywords' => '',

    // Page
    'page_url' => '',
    'page_main' => 'main/index',

    // GET string from URL
    'get_url' => '',

    // DB
    'db_type' => 'pdo',
    'db_hostname' => 'localhost',
    'db_port' => 3306,
    'db_username' => 'root',
    'db_password' => '',
    // 'db_username' => 'kievdat1_root',
    // 'db_password' => 'kievdat1_kievdatingagency_root',
    'db_database' => 'kievdat1_kievdatingagency',

    // Mail
    'mail_host' => 'smtp.gmail.com',
    'mail_port' => '465', // tls - 587, ssl - 465
    'mail_login' => 'datingagencykiev@gmail.com',
    'mail_password' => 'milliondollars',
    'mail_sender' => 'KDA Suport',
    'mail_unsub_link' => 'http://kievdatingagency.com/service',
    'mail_admin' => 'Datingagencykiev@gmail.com', // Dovga.vita@gmail.com / nikitaleo777333@gmail.com / Datingagencykiev@gmail.com

    // Tag for session and cookie
    'session_tag' => 'agency',

    // Custom style, script
    'custom_css' => [],
    'custom_js' => [],

    // Global vars
    'page_for_pay' => 'https://www.paypal.me/kievdating',
    'top_girls' => ['main' => ['44', '45', '43', '38', '50', '48', '47', '51'],
        'page' => ['43', '44', '45', '38']],
);