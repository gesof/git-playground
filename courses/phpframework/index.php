<?php
require_once 'codingbootcademy/config.php';
require_once 'codingbootcademy/Router.php';
require_once 'codingbootcademy/cms/services/DBService.php';
require_once 'codingbootcademy/cms/controllers/AbstractController.php';
require_once 'codingbootcademy/cms/controllers/Main.php';
//php -S localhost:8000 -t courses/phpframework/

// proceseaza cererea, extrage "path"
// compara ruta cu tabela de rutare
// instantiaza un obiect cu numele clasei si metoda dorita
// include un template

use codingbootcademy\Router;

$router  = new Router();
$matched = $router->match();

/**
 * database
 */
global $config;
$database = new DBService($config);

if($matched) {
    $class = $matched[0];
    $method = $matched[1];
    $params = $matched[2];
    $obj = new $class($database);
    echo $obj->$method($params);
}else {
    echo "Invalid request";
}

//echo ('<br />' . $_SERVER['REQUEST_URI']);
/*

Array
(
    [DOCUMENT_ROOT] => /Users/alexjorj/yp/git-playground/courses/phpframework
[REMOTE_ADDR] => ::1
    [REMOTE_PORT] => 54005
    [SERVER_SOFTWARE] => PHP 7.2.34 Development Server
[SERVER_PROTOCOL] => HTTP/1.1
    [SERVER_NAME] => localhost
[SERVER_PORT] => 8000
    [REQUEST_URI] => /index.php/mypage?test-1
    [REQUEST_METHOD] => GET
[SCRIPT_NAME] => /index.php
[SCRIPT_FILENAME] => /Users/alexjorj/yp/git-playground/courses/phpframework/index.php
[PATH_INFO] => /mypage
[PHP_SELF] => /index.php/mypage
[QUERY_STRING] => test-1
    [HTTP_HOST] => localhost:8000
    [HTTP_CONNECTION] => keep-alive
[HTTP_SEC_CH_UA] => "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"
[HTTP_SEC_CH_UA_MOBILE] => ?0
    [HTTP_DNT] => 1
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_USER_AGENT] => Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,* /*;q=0.8,application/signed-exchange;v=b3;q=0.9
    [HTTP_SEC_FETCH_SITE] => none
    [HTTP_SEC_FETCH_MODE] => navigate
    [HTTP_SEC_FETCH_USER] => ?1
    [HTTP_SEC_FETCH_DEST] => document
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
    [HTTP_ACCEPT_LANGUAGE] => ro,en-US;q=0.9,en;q=0.8,it;q=0.7
    [HTTP_COOKIE] => _ga=GA1.1.305993173.1614094049; Phpstorm-a57fc48d=7c55fde8-7329-4062-9c58-e91812854408; PHPSESSID=f246a05i2d3bgkbe6ei9864c4q
    [REQUEST_TIME_FLOAT] => 1619010711.4165
    [REQUEST_TIME] => 1619010711
)*/
