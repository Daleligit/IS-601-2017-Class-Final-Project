<?php
/**
 * Created by PhpStorm.
 * User: Dale
 * Date: 12/17/2017
 * Time: 10:22 AM
 */
    namespace routes;
    class routes {
        static public function getRoutes () {
            //bellow adds routes to your program, routes match the URL and request method with the controller and method.
            //You need to follow this pattern to add new URLS
            //You should improve this function by making functions to create routes in a factory. I will look for this when grading
            //I also use object for the route because it has data and it's easier to access.
            $route = new route();
            //this is the index.php route for GET
            //Specify the request method
            $route->http_method = 'GET';
            //specify the page.  index.php?page=index.  (controller name / method called
            $route->page = 'homepage';
            //specify the action that is in the URL to trigger this route index.php?page=index&action=show
            $route->action = 'show';
            //specify the name of the controller class that will contain the functions that deal with the requests
            $route->controller = 'homepageController';
            //specify the name of the method that is called, the method should be the same as the action
            $route->method = 'show';
            //this adds the route to the routes array.
            $routes[] = $route;

            return $routes;
        }
    }