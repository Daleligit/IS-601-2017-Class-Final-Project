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

            //This is an examole of the post for tasks to list tasks.  See the action matches the method name.
            //you need to add routes for create, edit, and delete
            //GET METHOD index.php?page=tasks&action=all
            $route = new route();
            $route->http_method = 'GET';
            $route->action = 'all';
            $route->page = 'tasks';
            $route->controller = 'tasksController';
            $route->method = 'all';
            $routes[] = $route;

            //This is an examole of the post for tasks to show a task
            //GET METHOD index.php?page=tasks&action=show
            $route = new route();
            $route->http_method = 'GET';
            $route->action = 'show';
            $route->page = 'tasks';
            $route->controller = 'tasksController';
            $route->method = 'show';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'edit';
            $route->page = 'tasks';
            $route->controller = 'tasksController';
            $route->method = 'edit';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'GET';
            $route->action = 'edit';
            $route->page = 'tasks';
            $route->controller = 'tasksController';
            $route->method = 'edit';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'delete';
            $route->page = 'tasks';
            $route->controller = 'tasksController';
            $route->method = 'delete';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'save';
            $route->page = 'tasks';
            $route->controller = 'tasksController';
            $route->method = 'save';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'create';
            $route->page = 'tasks';
            $route->controller = 'tasksController';
            $route->method = 'create';
            $routes[] = $route;

            //this is the route for the reg form
            $route = new route();
            $route->http_method = 'GET';
            $route->action = 'register';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'register';
            $routes[] = $route;

            //this handles the reg post to create the user
            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'register';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'store';
            $routes[] = $route;

            //GET METHOD index.php?page=accounts&action=show
            $route = new route();
            $route->http_method = 'GET';
            $route->action = 'show';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'show';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'delete';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'delete';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'save';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'save';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'GET';
            $route->action = 'edit';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'edit';
            $routes[] = $route;

            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'edit';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'edit';
            $routes[] = $route;

            //This goes in the login form action method
            //GET METHOD index.php?page=accounts&action=login
            $route = new route();
            $route->http_method = 'POST';
            $route->action = 'login';
            $route->page = 'accounts';
            $route->controller = 'accountsController';
            $route->method = 'login';
            $routes[] = $route;

            return $routes;
        }
    }