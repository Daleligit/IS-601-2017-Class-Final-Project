<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/7/2017
 * Time: 9:14 PM
 */
    namespace core\http;
    class request
    {
        //copied from my active record homework
        static public function getPage () {
            $page_request = 'homepage';
            if (isset($_REQUEST['page'])) {
                $page_request = $_REQUEST['page'];
            }
            return $page_request;
        }
        //copied from mvc github
        //this gets the request method to make it easier to use
        static public function getRequestMethod()
        {
            $request_method = $_SERVER['REQUEST_METHOD'];
            return $request_method;
        }
        //this gets the action out of the URL
        static public function getAction()
        {
        //this is a litte code to help the homepage handle post requests if needed
            if (self::getRequestMethod() == 'POST') {
                $action = 'create';
            } else {
                $action = 'show';
            }
            if (!empty($_GET['action'])) {
                $action = $_GET['action'];
            }
            return $action;
        }

    }