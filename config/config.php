<?php
// On indique à PHP quelle timezone on utilise
date_default_timezone_set('Europe/Paris');

// On masque les erreurs (en production)
//ini_set('display_errors', false);

const PAGE_HOME = 'home';
const PAGE_CONTACT = 'contact';

const PAGE_PACK = 'pack';
//const PAGE_ADMIN = 'admin';
//const PAGE_ADMIN_ARTICLES = 'administration-des-articles';      // (slug)
//const PAGE_ADMIN_USERS = 'administration-des-utilisateurs';
//const PAGE_SIGNUP = 'signup';
//const PAGE_LOGIN = 'login';
//const EMAIL_ADMIN = 'admin@monsite.fr';
//const PAGE_ACCOUNT = 'account';
//const PAGE_LOGOUT = 'logout';
//const PAGE_ARTICLE = 'article';
//
//const PAGE_EXAMPLE_PDF = 'example-pdf';

//const PAGE_ARTICLE_PDF = 'article-pdf';

//
//define('ENV', ($_SERVER['HTTP_HOST'] === 'localhost') ? 'development' : 'production');
//
//
//if (ENV !== 'development') {
//    ini_set('display_errors', false);
//}
//
//const DIR_DATABASE = 'database';
//const DIR_UPLOADS = 'uploads';
//
//
//const DB_HOST = 'localhost';
//const DB_NAME = 'blog';
//const DB_USER = 'root';
//const DB_PWD = 'root';

const ROUTING = [
    PAGE_PACK => '\App\Controller\DefaultController::pack',
    PAGE_HOME => '\App\Controller\DefaultController::home',
    PAGE_CONTACT => '\App\Controller\DefaultController::contact',
//    PAGE_ADMIN_ARTICLES => '\App\Controller\AdminController::adminArticles',
//    PAGE_ADMIN_USERS => '\App\Controller\AdminController::adminUsers',
//    PAGE_SIGNUP => '\App\Controller\UserController::register',
//    PAGE_LOGIN => '\App\Controller\UserController::login',
//    PAGE_ACCOUNT => '\App\Controller\UserController::account',
//    PAGE_LOGOUT => '\App\Controller\UserController::logout',
//    PAGE_ARTICLE => '\App\Controller\BlogController::article',
//    PAGE_EXAMPLE_PDF => '\App\Controller\DefaultController::examplePdf',
//    PAGE_ARTICLE_PDF => '\App\Controller\BlogController::getArticleAsPdf',
];