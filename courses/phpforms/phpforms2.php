<?php
//php -S localhost:8000 -t courses/phpforms/
$firstLastName = '';
if('POST' == $_SERVER['REQUEST_METHOD']) {
    $firstLastName = $_POST['firstlastname'];
}
include "phpforms2.html";

