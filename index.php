<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/16/2017
 * Time: 9:49 PM
 */
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    include_once "autoload.php";
    include_once "database.php";
    include_once "time.php";
    $response = \core\http\processRequest::createResponse();
?>